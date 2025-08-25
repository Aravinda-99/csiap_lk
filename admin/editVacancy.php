<?php
// Include database connection
require_once 'config/database.php';

$message = '';
$error = '';
$vacancy = null;
$adverts = [];

// Get vacancy ID from URL
$vacancyId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($vacancyId <= 0) {
    $error = 'Invalid vacancy ID';
} else {
    try {
        $pdo = getConnection();
        // Fetch vacancy
        $stmt = $pdo->prepare('SELECT * FROM vacancies WHERE id = ?');
        $stmt->execute([$vacancyId]);
        $vacancy = $stmt->fetch();
        if ($vacancy) {
            // Fetch adverts
            $a = $pdo->prepare('SELECT id, advert_path FROM vacancy_adverts WHERE vacancy_id = ? ORDER BY id ASC');
            $a->execute([$vacancyId]);
            $adverts = $a->fetchAll();
        } else {
            $error = 'Vacancy not found';
        }
    } catch (Throwable $e) {
        $error = 'Database error: ' . $e->getMessage();
    }
}

// Handle update submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $vacancy) {
    $description   = trim($_POST['description'] ?? '');
    $publishedDate = trim($_POST['published_date'] ?? '');
    $closingDate   = trim($_POST['closing_date'] ?? '');

    if ($description === '') {
        $error = 'Description is required';
    } elseif ($publishedDate === '' || $closingDate === '') {
        $error = 'Published date and closing date are required';
    } else {
        try {
            $pdo = getConnection();
            $pdo->beginTransaction();

            // Update vacancy core fields
            $up = $pdo->prepare('UPDATE vacancies SET description = ?, published_date = ?, closing_date = ? WHERE id = ?');
            $up->execute([$description, $publishedDate, $closingDate, $vacancyId]);

            // Handle deletions of existing adverts
            $deleteIds = isset($_POST['delete_advert_ids']) && is_array($_POST['delete_advert_ids'])
                ? array_map('intval', $_POST['delete_advert_ids'])
                : [];
            $paths = [];
            if (!empty($deleteIds)) {
                $in = implode(',', array_fill(0, count($deleteIds), '?'));
                $pathsStmt = $pdo->prepare("SELECT advert_path FROM vacancy_adverts WHERE vacancy_id = ? AND id IN ($in)");
                $pathsStmt->execute(array_merge([$vacancyId], $deleteIds));
                $paths = $pathsStmt->fetchAll();

                $delStmt = $pdo->prepare("DELETE FROM vacancy_adverts WHERE vacancy_id = ? AND id IN ($in)");
                $delStmt->execute(array_merge([$vacancyId], $deleteIds));
            }

            // Handle new uploads (images/PDFs)
            if (isset($_FILES['files']) && is_array($_FILES['files']['name'])) {
                $uploadDirFs = __DIR__ . '/../assets/uploads/vacancies/';
                if (!is_dir($uploadDirFs)) { @mkdir($uploadDirFs, 0755, true); }

                $names = $_FILES['files']['name'];
                $tmps  = $_FILES['files']['tmp_name'];
                $errs  = $_FILES['files']['error'];
                $sizes = $_FILES['files']['size'];

                for ($i = 0; $i < count($names); $i++) {
                    if (!isset($errs[$i]) || $errs[$i] !== UPLOAD_ERR_OK) { continue; }
                    $tmpPath = $tmps[$i];
                    $sizeBytes = (int)($sizes[$i] ?? 0);
                    if ($sizeBytes <= 0 || $sizeBytes > 16 * 1024 * 1024) { continue; }

                    $finfo = new finfo(FILEINFO_MIME_TYPE);
                    $mime = $finfo->file($tmpPath);
                    $allowed = [
                        'image/jpeg' => 'jpg',
                        'image/png'  => 'png',
                        'image/gif'  => 'gif',
                        'image/webp' => 'webp',
                        'application/pdf' => 'pdf'
                    ];
                    if (!isset($allowed[$mime])) { continue; }
                    $ext = $allowed[$mime];

                    $base = preg_replace('/[^a-zA-Z0-9_-]+/', '-', strtolower(substr($description, 0, 50)));
                    $base = trim($base, '-') ?: 'vacancy';
                    $filename = $base . '-' . date('YmdHis') . '-' . substr(sha1(uniqid('', true)), 0, 6) . '.' . $ext;
                    $destFs = $uploadDirFs . $filename;
                    if (!move_uploaded_file($tmpPath, $destFs)) { continue; }

                    $relPath = 'assets/uploads/vacancies/' . $filename;
                    $ins = $pdo->prepare('INSERT INTO vacancy_adverts (vacancy_id, advert_path) VALUES (?, ?)');
                    $ins->execute([$vacancyId, $relPath]);
                }
            }

            $pdo->commit();

            // After commit, best-effort delete removed files from disk
            if (!empty($paths)) {
                foreach ($paths as $p) {
                    $rel = $p['advert_path'] ?? '';
                    if ($rel === '') { continue; }
                    $try = [__DIR__ . '/../' . ltrim($rel, '/'), __DIR__ . '/' . ltrim($rel, '/')];
                    foreach ($try as $fs) { if (is_file($fs)) { @unlink($fs); break; } }
                }
            }

            $message = 'Vacancy updated successfully!';

            // Refresh data
            $stmt = $pdo->prepare('SELECT * FROM vacancies WHERE id = ?');
            $stmt->execute([$vacancyId]);
            $vacancy = $stmt->fetch();
            $a = $pdo->prepare('SELECT id, advert_path FROM vacancy_adverts WHERE vacancy_id = ? ORDER BY id ASC');
            $a->execute([$vacancyId]);
            $adverts = $a->fetchAll();
        } catch (Throwable $e) {
            if ($pdo && $pdo->inTransaction()) { $pdo->rollBack(); }
            $error = 'Update error: ' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vacancy - Admin Panel</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* CSS Variables for Theming and Layout */
        :root {
            --font-family: 'Poppins', sans-serif;
            --transition-speed: 0.3s;
            
            /* Light Theme Variables */
            --bg-primary-light: #f4f7fa;
            --bg-secondary-light: #ffffff;
            --text-primary-light: #333333;
            --text-secondary-light: #777777;
            --accent-primary-light: #4a90e2;
            --accent-primary-light-rgb: 74, 144, 226;
            --accent-secondary-light: #50e3c2;
            --border-color-light: #e0e0e0;
            --shadow-light: 0 4px 12px rgba(0, 0, 0, 0.08);
            --scrollbar-thumb-light: #cccccc;
            --scrollbar-thumb-hover-light: #aaaaaa;

            /* Dark Theme Variables */
            --bg-primary-dark: #121212;
            --bg-secondary-dark: #1e1e1e;
            --text-primary-dark: #e0e0e0;
            --text-secondary-dark: #a0a0a0;
            --accent-primary-dark: #58a6ff;
            --accent-primary-dark-rgb: 88, 166, 255;
            --accent-secondary-dark: #3ddc84;
            --border-color-dark: #333333;
            --shadow-dark: 0 4px 12px rgba(0, 0, 0, 0.2);
            --scrollbar-thumb-dark: #444444;
            --scrollbar-thumb-hover-dark: #666666;

            /* Initially set to light theme */
            --bg-primary: var(--bg-primary-light);
            --bg-secondary: var(--bg-secondary-light);
            --text-primary: var(--text-primary-light);
            --text-secondary: var(--text-secondary-light);
            --accent-primary: var(--accent-primary-light);
            --accent-primary-rgb: var(--accent-primary-light-rgb);
            --accent-secondary: var(--accent-secondary-light);
            --border-color: var(--border-color-light);
            --shadow: var(--shadow-light);
        }

        /* Dark Theme Class */
        .dark-theme {
            --bg-primary: var(--bg-primary-dark);
            --bg-secondary: var(--bg-secondary-dark);
            --text-primary: var(--text-primary-dark);
            --text-secondary: var(--text-secondary-dark);
            --accent-primary: var(--accent-primary-dark);
            --accent-primary-rgb: var(--accent-primary-dark-rgb);
            --accent-secondary: var(--accent-secondary-dark);
            --border-color: var(--border-color-dark);
            --shadow: var(--shadow-dark);
        }

        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
            display: flex;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            width: calc(100% - 280px);
            padding: 2rem;
            transition: margin-left var(--transition-speed) ease, width var(--transition-speed) ease;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }
        
        .header-left { display: flex; align-items: center; }
        
        .header-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .menu-toggle { display: none; font-size: 1.5rem; cursor: pointer; margin-right: 1.5rem; color: var(--text-primary); }

        .header-right { display: flex; align-items: center; gap: 1.5rem; }
        .theme-toggle { background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--text-primary); transition: color var(--transition-speed) ease; }
        .theme-toggle:hover { color: var(--accent-primary); }
        .user-profile { display: flex; align-items: center; gap: 0.8rem; }
        .user-profile img { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; }
        .user-info { display: flex; flex-direction: column; line-height: 1.2; text-align: right; }
        .user-name { font-weight: 600; font-size: 0.9rem; }
        .user-role { font-size: 0.8rem; color: var(--text-secondary); }

        /* Breadcrumb */
        .breadcrumb { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 2rem; font-size: 0.9rem; color: var(--text-secondary); }
        .breadcrumb a { color: var(--accent-primary); transition: color var(--transition-speed) ease; }
        .breadcrumb a:hover { color: var(--accent-secondary); }

        /* Form Container */
        .form-container { background-color: var(--bg-secondary); border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color); padding: 3rem; max-width: 1200px; width: 100%; }
        .form-header { margin-bottom: 2rem; text-align: center; }
        .form-title { font-size: 1.5rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem; }
        .form-subtitle { color: var(--text-secondary); font-size: 0.9rem; }
        .form-group { margin-bottom: 1.5rem; }
        label { display:block; margin-bottom:0.75rem; font-weight:600; color:var(--text-primary); }
        input, textarea { width:100%; padding:1rem 1.25rem; border:1px solid var(--border-color); border-radius:8px; background-color: var(--bg-primary); color:var(--text-primary); }
        textarea { min-height: 120px; resize: vertical; }
        .form-row { display:grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
        .files-grid { display:flex; flex-wrap:wrap; gap:12px; }
        .thumb { display:flex; flex-direction:column; align-items:center; gap:6px; border:1px solid var(--border-color); border-radius:8px; padding:8px; background-color: var(--bg-primary); }
        .thumb img { width:120px; height:90px; object-fit:cover; border-radius:6px; border:1px solid var(--border-color); }
        .file-badge { display:inline-flex; align-items:center; gap:6px; padding:6px 8px; border:1px solid var(--border-color); border-radius:6px; background-color: rgba(var(--accent-primary-rgb), 0.05); font-size:.85rem; }
        .form-buttons { display:flex; justify-content:flex-end; gap:1rem; margin-top:1rem; padding-top:1rem; border-top:1px solid var(--border-color); }
        .btn { padding:.9rem 1.3rem; border:none; border-radius:8px; font-weight:600; cursor:pointer; display:inline-flex; align-items:center; gap:.6rem; }
        .btn-primary { background:linear-gradient(135deg,#667eea 0%, #764ba2 100%); color:#fff; }
        .btn-secondary { background: var(--border-color); color: var(--text-primary); }

        /* Responsive */
        @media (max-width: 768px) {
            .main-content { margin-left: 0; width: 100%; padding: 1rem; }
            .menu-toggle { display:block; }
            .header { flex-wrap:wrap; gap:1rem; }
            .header-title { font-size:1.4rem; }
            .form-row { grid-template-columns: 1fr; gap:1rem; }
            .form-buttons { flex-direction:column; }
            .btn { width:100%; justify-content:center; }
        }
    </style>
</head>
<body>

    <!-- Sidebar Navigation -->
    <?php include __DIR__ . '/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-left">
                <i class="fas fa-bars menu-toggle" id="menu-toggle"></i>
                <h1 class="header-title">Edit Vacancy</h1>
            </div>
            <div class="header-right">
                <button class="theme-toggle" id="theme-toggle">
                    <i class="fas fa-moon"></i>
                </button>
                <div class="user-profile">
                    <img src="https://placehold.co/40x40/7857ff/ffffff?text=JD" alt="User" onerror="this.onerror=null;this.src='https://placehold.co/40x40/cccccc/ffffff?text=U';">
                    <div class="user-info">
                        <span class="user-name">John Doe</span>
                        <span class="user-role">Administrator</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
            <span class="breadcrumb-separator">/</span>
            <a href="allVacancies.php"><i class="fas fa-briefcase"></i> Vacancies</a>
            <span class="breadcrumb-separator">/</span>
            <span>Edit Vacancy</span>
        </div>

        <?php if ($error && !$vacancy): ?>
            <div class="form-container">
                <div class="message error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
                <div class="form-buttons">
                    <a href="allVacancies.php" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        <?php elseif ($vacancy): ?>
            <div class="form-container">
                <div class="form-header">
                    <h2 class="form-title">Edit Vacancy</h2>
                    <p class="form-subtitle">Update description, dates, and manage advert files</p>
                </div>

                <?php if ($message): ?>
                    <div class="message" style="background:#d4edda; color:#155724; border:1px solid #c3e6cb;">
                        <i class="fas fa-check-circle"></i>
                        <?php echo htmlspecialchars($message); ?>
                    </div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="message error">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="description">Description <span style="color:#dc3545;">*</span></label>
                        <textarea id="description" name="description" required><?php echo htmlspecialchars($vacancy['description'] ?? ''); ?></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="published_date">Published Date <span style="color:#dc3545;">*</span></label>
                            <input type="date" id="published_date" name="published_date" value="<?php echo htmlspecialchars(substr((string)($vacancy['published_date'] ?? ''),0,10)); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="closing_date">Closing Date <span style="color:#dc3545;">*</span></label>
                            <input type="date" id="closing_date" name="closing_date" value="<?php echo htmlspecialchars(substr((string)($vacancy['closing_date'] ?? ''),0,10)); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Current Adverts</label>
                        <?php if (empty($adverts)): ?>
                            <div style="color:#777;">No advert files uploaded</div>
                        <?php else: ?>
                            <div class="files-grid">
                                <?php foreach ($adverts as $ad): ?>
                                    <?php 
                                        $path = $ad['advert_path'];
                                        $lower = strtolower($path);
                                        $isPdf = substr($lower, -4) === '.pdf';
                                        $href = '../' . ltrim($path, '/');
                                    ?>
                                    <label class="thumb">
                                        <?php if ($isPdf): ?>
                                            <a href="<?php echo htmlspecialchars($href); ?>" target="_blank" class="file-badge"><i class="fas fa-file-pdf"></i> PDF</a>
                                        <?php else: ?>
                                            <img src="<?php echo htmlspecialchars($href); ?>" alt="Advert" onerror="this.src='https://placehold.co/120x90?text=No+Img';">
                                        <?php endif; ?>
                                        <input type="checkbox" name="delete_advert_ids[]" value="<?php echo (int)$ad['id']; ?>"> Remove
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="files">Add Adverts (images or PDF)</label>
                        <input type="file" id="files" name="files[]" accept="image/*,application/pdf" multiple>
                        <div style="color:#777; font-size:.9rem; margin-top:.25rem;">You can upload multiple images or PDFs. Max file size 16MB each.</div>
                    </div>

                    <div class="form-buttons">
                        <a href="allVacancies.php" class="btn btn-secondary">Back to List</a>
                        <button type="submit" class="btn btn-primary">Update Vacancy</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // --- THEME TOGGLER ---
            const themeToggle = document.getElementById('theme-toggle');
            const body = document.body;
            const themeIcon = themeToggle.querySelector('i');

            // Function to apply the saved theme on load
            const applyTheme = () => {
                const savedTheme = localStorage.getItem('theme') || 'light';
                if (savedTheme === 'dark') {
                    body.classList.add('dark-theme');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                } else {
                    body.classList.remove('dark-theme');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                }
            };

            // Event listener for the theme toggle button
            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-theme');
                if (body.classList.contains('dark-theme')) {
                    localStorage.setItem('theme', 'dark');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                } else {
                    localStorage.setItem('theme', 'light');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                }
            });

            // --- SIDEBAR TOGGLE (MOBILE) ---
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.querySelector('.sidebar');

            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });
            
            // Close sidebar if user clicks outside of it on mobile
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 && sidebar.classList.contains('open')) {
                    if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                        sidebar.classList.remove('open');
                    }
                }
            });

            // --- SUBMENU TOGGLE ---
            const submenuToggles = document.querySelectorAll('.has-submenu > .nav-link');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    const parent = toggle.parentElement;
                    parent.classList.toggle('active');
                });
            });

            // --- INITIALIZATION ---
            applyTheme(); // Apply theme on initial load
        });
    </script>
</body>
</html>
