<?php
// Include database connection
require_once 'config/database.php';

$message = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

            // Insert bidnotice
            $stmt = $pdo->prepare('INSERT INTO bidnotices (description, published_date, closing_date) VALUES (?, ?, ?)');
            $stmt->execute([$description, $publishedDate, $closingDate]);
            $bidId = (int)$pdo->lastInsertId();

            // Handle files (images and PDFs)
            if (isset($_FILES['files']) && is_array($_FILES['files']['name'])) {
                $uploadDirFs = __DIR__ . '/../assets/uploads/bidnotices/';
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
                    $base = trim($base, '-') ?: 'bidnotice';
                    $filename = $base . '-' . date('YmdHis') . '-' . substr(sha1(uniqid('', true)), 0, 6) . '.' . $ext;
                    $destFs = $uploadDirFs . $filename;
                    if (!move_uploaded_file($tmpPath, $destFs)) { continue; }

                    $relPath = 'assets/uploads/bidnotices/' . $filename;
                    $ins = $pdo->prepare('INSERT INTO bidnotice_images (bidnotice_id, image_path) VALUES (?, ?)');
                    $ins->execute([$bidId, $relPath]);
                }
            }

            $pdo->commit();
            $message = 'Bid notice added successfully!';

            // Clear form data
            $description = '';
            $publishedDate = '';
            $closingDate = '';
        } catch (Throwable $e) {
            if ($pdo && $pdo->inTransaction()) { $pdo->rollBack(); }
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bid Notice - Admin Panel</title>
    
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
            
            /* Light Theme */
            --bg-primary-light: #f4f7fa;
            --bg-secondary-light: #ffffff;
            --text-primary-light: #333333;
            --text-secondary-light: #777777;
            --accent-primary-light: #4a90e2;
            --accent-primary-light-rgb: 74, 144, 226;
            --accent-secondary-light: #50e3c2;
            --border-color-light: #e0e0e0;
            --shadow-light: 0 4px 12px rgba(0, 0, 0, 0.08);

            /* Dark Theme */
            --bg-primary-dark: #121212;
            --bg-secondary-dark: #1e1e1e;
            --text-primary-dark: #e0e0e0;
            --text-secondary-dark: #a0a0a0;
            --accent-primary-dark: #58a6ff;
            --accent-primary-dark-rgb: 88, 166, 255;
            --accent-secondary-dark: #3ddc84;
            --border-color-dark: #333333;
            --shadow-dark: 0 4px 12px rgba(0, 0, 0, 0.2);

            /* Initially light */
            --bg-primary: var(--bg-primary-light);
            --bg-secondary: var(--bg-secondary-light);
            --text-primary: var(--text-primary-light);
            --text-secondary: var(--text-secondary-light);
            --accent-primary: var(--accent-primary-light);
            --accent-primary-rgb: var(--accent-primary-light-rgb);
            --accent-secondary: var(--accent-secondary-light);
            --border-color: var(--border-color-light);
            --shadow: var(--shadow-light);
            --scrollbar-thumb: #cccccc;
            --scrollbar-thumb-hover: #aaaaaa;
        }
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
            --scrollbar-thumb: #444444;
            --scrollbar-thumb-hover: #666666;
        }

        /* General Styles */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: var(--font-family); background-color: var(--bg-primary); color: var(--text-primary); display:flex; transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* Main Content */
        .main-content { margin-left: 280px; width: calc(100% - 280px); padding: 2rem; transition: margin-left var(--transition-speed) ease, width var(--transition-speed) ease; }

        /* Header */
        .header { display:flex; justify-content: space-between; align-items:center; margin-bottom:2rem; padding-bottom:1rem; border-bottom:1px solid var(--border-color); }
        .header-left { display:flex; align-items:center; }
        .menu-toggle { display:none; font-size:1.5rem; cursor:pointer; margin-right:1.5rem; color:var(--text-primary); }
        .header-title { font-size:1.75rem; font-weight:600; color:var(--text-primary); }
        .header-right { display:flex; align-items:center; gap:1.5rem; }
        .theme-toggle { background:none; border:none; font-size:1.5rem; cursor:pointer; color:var(--text-primary); transition: color var(--transition-speed) ease; }
        .theme-toggle:hover { color:var(--accent-primary); }
        .user-profile { display:flex; align-items:center; gap:.8rem; }
        .user-profile img { width:40px; height:40px; border-radius:50%; object-fit:cover; }
        .user-info { display:flex; flex-direction:column; line-height:1.2; text-align:right; }
        .user-name { font-weight:600; font-size:.9rem; }
        .user-role { font-size:.8rem; color:var(--text-secondary); }

        /* Breadcrumb */
        .breadcrumb { display:flex; align-items:center; gap:.5rem; margin-bottom:2rem; font-size:.9rem; color:var(--text-secondary); }
        .breadcrumb a { color: var(--accent-primary); transition: color var(--transition-speed) ease; }
        .breadcrumb a:hover { color: var(--accent-secondary); }

        /* Form */
        .form-container { background-color: var(--bg-secondary); border-radius: 12px; box-shadow: var(--shadow); border: 1px solid var(--border-color); padding: 3rem; max-width: 1200px; width: 100%; }
        .form-header { margin-bottom: 2rem; text-align: center; }
        .form-title { font-size: 1.5rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem; }
        .form-subtitle { color: var(--text-secondary); font-size: 0.9rem; }
        .form-group { margin-bottom: 1.5rem; }
        label { display:block; margin-bottom:.75rem; font-weight:600; color:var(--text-primary); }
        input, textarea { width:100%; padding:1rem 1.25rem; border:1px solid var(--border-color); border-radius:8px; background-color: var(--bg-primary); color:var(--text-primary); }
        textarea { min-height: 120px; resize: vertical; }
        .form-row { display:grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
        .form-buttons { display:flex; gap:1.5rem; justify-content:flex-end; margin-top:2rem; padding-top:1.5rem; border-top:1px solid var(--border-color); }
        .btn { padding:1rem 2rem; border:none; border-radius:8px; font-weight:600; font-size:1rem; cursor:pointer; display:inline-flex; align-items:center; gap:.75rem; }
        .btn-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color:#fff; }
        .btn-secondary { background: var(--border-color); color: var(--text-primary); }

        @media (max-width: 768px) {
            .main-content { margin-left: 0; width: 100%; padding: 1.5rem; }
            .menu-toggle { display:block; }
            .header { flex-wrap: wrap; gap: 1rem; }
            .header-title { font-size: 1.4rem; }
            .form-row { grid-template-columns: 1fr; gap: 1rem; }
            .btn { width:100%; justify-content:center; }
            .form-buttons { flex-direction: column; }
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
                <h1 class="header-title">Add Bid Notice</h1>
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
            <a href="allbidnotice.php"><i class="fas fa-file"></i> Bid Notices</a>
            <span class="breadcrumb-separator">/</span>
            <span>Add Bid Notice</span>
        </div>

        <!-- Add Bid Notice Form -->
        <div class="form-container">
            <div class="form-header">
                <h2 class="form-title">Add New Bid Notice</h2>
                <p class="form-subtitle">Enter the description, dates, and attach images/PDFs</p>
            </div>

            <?php if ($message): ?>
                <div class="message success" style="background:#d4edda; color:#155724; border:1px solid #c3e6cb; padding:1rem; border-radius:8px; margin-bottom:1rem;">
                    <i class="fas fa-check-circle"></i>
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="message error" style="background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; padding:1rem; border-radius:8px; margin-bottom:1rem;">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="" id="add-bidnotice-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="description">Description <span style="color:#dc3545;">*</span></label>
                    <textarea id="description" name="description" placeholder="Enter bid notice description" required><?php echo htmlspecialchars($description ?? ''); ?></textarea>
                    <div class="error-text" id="desc-error">Description is required</div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="published_date">Published Date <span style="color:#dc3545;">*</span></label>
                        <input type="date" id="published_date" name="published_date" value="<?php echo htmlspecialchars($publishedDate ?? ''); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="closing_date">Closing Date <span style="color:#dc3545;">*</span></label>
                        <input type="date" id="closing_date" name="closing_date" value="<?php echo htmlspecialchars($closingDate ?? ''); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="files">Attach Files (Images or PDF)</label>
                    <input type="file" id="files" name="files[]" accept="image/*,application/pdf" multiple>
                    <div class="help-text">You may upload multiple images and/or PDF files. Max 16MB per file.</div>
                </div>

                <div class="form-buttons">
                    <a href="allbidnotice.php" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Back to List
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Add Bid Notice
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Theme toggler
            const themeToggle = document.getElementById('theme-toggle');
            const body = document.body;
            const themeIcon = themeToggle.querySelector('i');
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

            // Sidebar toggle (mobile)
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            menuToggle.addEventListener('click', () => { sidebar.classList.toggle('open'); });
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 && sidebar.classList.contains('open')) {
                    if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                        sidebar.classList.remove('open');
                    }
                }
            });

            // Form validation
            const form = document.getElementById('add-bidnotice-form');
            const desc = document.getElementById('description');
            const pub = document.getElementById('published_date');
            const clo = document.getElementById('closing_date');
            const descError = document.getElementById('desc-error');

            desc.addEventListener('input', () => {
                if (desc.value.trim() === '') { desc.classList.add('invalid'); descError.style.display = 'block'; }
                else { desc.classList.remove('invalid'); descError.style.display = 'none'; }
            });

            form.addEventListener('submit', (e) => {
                let ok = true;
                if (desc.value.trim() === '') { desc.classList.add('invalid'); descError.style.display = 'block'; ok = false; }
                if (pub.value === '') ok = false;
                if (clo.value === '') ok = false;
                if (!ok) {
                    e.preventDefault();
                    const firstError = document.querySelector('.invalid') || pub || clo;
                    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });

            // Init
            applyTheme();
        });
    </script>
</body>
</html>
