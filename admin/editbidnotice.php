<?php
// Include database connection
require_once 'config/database.php';

$message = '';
$error = '';
$bidnotice = null;
$files = [];

// Get bid notice ID from URL
$bidId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($bidId <= 0) {
    $error = 'Invalid bid notice ID';
} else {
    try {
        $pdo = getConnection();
        
        // Fetch existing bidnotice data
        $stmt = $pdo->prepare('SELECT * FROM bidnotices WHERE id = ?');
        $stmt->execute([$bidId]);
        $bidnotice = $stmt->fetch();
        
        if ($bidnotice) {
            // Fetch attached files (images/pdfs)
            $fstmt = $pdo->prepare('SELECT id, image_path FROM bidnotice_images WHERE bidnotice_id = ? ORDER BY id ASC');
            $fstmt->execute([$bidId]);
            $files = $fstmt->fetchAll();
        } else {
            $error = 'Bid notice not found';
        }
    } catch (Throwable $e) {
        $error = 'Database error: ' . $e->getMessage();
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $bidnotice) {
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

            // Update core fields
            $up = $pdo->prepare('UPDATE bidnotices SET description = ?, published_date = ?, closing_date = ? WHERE id = ?');
            $up->execute([$description, $publishedDate, $closingDate, $bidId]);

            // Handle deletions of existing files
            $deleteIds = isset($_POST['delete_image_ids']) && is_array($_POST['delete_image_ids']) ? $_POST['delete_image_ids'] : [];
            if (!empty($deleteIds)) {
                $deleteIds = array_map('intval', $deleteIds);
                $in = implode(',', array_fill(0, count($deleteIds), '?'));
                // Fetch paths to delete from disk
                $pathsStmt = $pdo->prepare("SELECT image_path FROM bidnotice_images WHERE bidnotice_id = ? AND id IN ($in)");
                $pathsStmt->execute(array_merge([$bidId], $deleteIds));
                $paths = $pathsStmt->fetchAll();
                foreach ($paths as $p) {
                    $rel = $p['image_path'] ?? '';
                    if ($rel) {
                        $tryPaths = [
                            __DIR__ . '/../' . ltrim($rel, '/'),
                            __DIR__ . '/' . ltrim($rel, '/'),
                        ];
                        foreach ($tryPaths as $tp) {
                            if (is_file($tp)) { @unlink($tp); break; }
                        }
                    }
                }
                // Delete rows
                $delStmt = $pdo->prepare("DELETE FROM bidnotice_images WHERE bidnotice_id = ? AND id IN ($in)");
                $delStmt->execute(array_merge([$bidId], $deleteIds));
            }

            // Handle new uploads (images or PDFs)
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
            $message = 'Bid notice updated successfully!';

            // Refresh data
            $stmt = $pdo->prepare('SELECT * FROM bidnotices WHERE id = ?');
            $stmt->execute([$bidId]);
            $bidnotice = $stmt->fetch();
            $fstmt = $pdo->prepare('SELECT id, image_path FROM bidnotice_images WHERE bidnotice_id = ? ORDER BY id ASC');
            $fstmt->execute([$bidId]);
            $files = $fstmt->fetchAll();
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
    <title>Edit Bid Notice - Admin Panel</title>
    
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
        }

        /* General Styles */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: var(--font-family); background: var(--bg-primary); color: var(--text-primary); display:flex; transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease; }
        a { text-decoration: none; color: inherit; }

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

        /* Containers */
        .form-container { background:var(--bg-secondary); border:1px solid var(--border-color); border-radius:12px; box-shadow:var(--shadow); padding:2rem; }
        .form-row { display:grid; grid-template-columns: 1fr 1fr; gap:1.5rem; }
        .form-group { margin-bottom:1.25rem; }
        label { display:block; margin-bottom:.5rem; font-weight:600; color:var(--text-primary); }
        input, textarea { width:100%; padding:.9rem 1rem; border:1px solid var(--border-color); border-radius:8px; background:var(--bg-primary); color:var(--text-primary); }
        textarea { min-height:120px; resize: vertical; }

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

    <?php include __DIR__ . '/sidebar.php'; ?>

    <main class="main-content">
        <header class="header">
            <div class="header-left">
                <i class="fas fa-bars menu-toggle" id="menu-toggle"></i>
                <h1 class="header-title">Edit Bid Notice</h1>
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

        <div class="breadcrumb">
            <a href="index.php">Dashboard</a>
            <span>/</span>
            <a href="allbidnotice.php">Bid Notices</a>
            <span>/</span>
            <span>Edit</span>
        </div>

        <?php if ($error && !$bidnotice): ?>
            <div class="form-container">
                <div style="padding:1rem; background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:8px;"><?php echo htmlspecialchars($error); ?></div>
            </div>
        <?php elseif ($bidnotice): ?>
            <div class="form-container">
                <?php if ($message): ?>
                    <div style="padding:1rem; background:#d4edda; color:#155724; border:1px solid #c3e6cb; border-radius:8px; margin-bottom:1rem;"><?php echo htmlspecialchars($message); ?></div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div style="padding:1rem; background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:8px; margin-bottom:1rem;"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="description">Description <span style="color:#dc3545;">*</span></label>
                        <textarea id="description" name="description" required><?php echo htmlspecialchars($bidnotice['description'] ?? ''); ?></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="published_date">Published Date <span style="color:#dc3545;">*</span></label>
                            <input type="date" id="published_date" name="published_date" value="<?php echo htmlspecialchars(substr((string)($bidnotice['published_date'] ?? ''),0,10)); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="closing_date">Closing Date <span style="color:#dc3545;">*</span></label>
                            <input type="date" id="closing_date" name="closing_date" value="<?php echo htmlspecialchars(substr((string)($bidnotice['closing_date'] ?? ''),0,10)); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Current Files</label>
                        <?php if (empty($files)): ?>
                            <div style="color:#777;">No files uploaded</div>
                        <?php else: ?>
                            <div class="files-grid">
                                <?php foreach ($files as $f): ?>
                                    <?php 
                                        $path = $f['image_path'];
                                        $isPdf = str_ends_with(strtolower($path), '.pdf');
                                        $href = '../' . ltrim($path, '/');
                                    ?>
                                    <label class="thumb">
                                        <?php if ($isPdf): ?>
                                            <a href="<?php echo htmlspecialchars($href); ?>" target="_blank" class="file-badge"><i class="fas fa-file-pdf"></i> PDF</a>
                                        <?php else: ?>
                                            <img src="<?php echo htmlspecialchars($href); ?>" alt="File" onerror="this.src='https://placehold.co/120x90?text=No+Img';">
                                        <?php endif; ?>
                                        <input type="checkbox" name="delete_image_ids[]" value="<?php echo (int)$f['id']; ?>"> Remove
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="files">Add Files (images or PDF)</label>
                        <input type="file" id="files" name="files[]" accept="image/*,application/pdf" multiple>
                        <div style="color:#777; font-size:.9rem; margin-top:.25rem;">You can upload multiple images or PDFs. Max file size 16MB each.</div>
                    </div>

                    <div class="form-buttons">
                        <a href="allbidnotice.php" class="btn btn-secondary">Back to List</a>
                        <button type="submit" class="btn btn-primary">Update Bid Notice</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;
        const themeIcon = themeToggle ? themeToggle.querySelector('i') : null;

        const applyTheme = () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            if (savedTheme === 'dark') {
                body.classList.add('dark-theme');
                if (themeIcon) { themeIcon.classList.remove('fa-moon'); themeIcon.classList.add('fa-sun'); }
            } else {
                body.classList.remove('dark-theme');
                if (themeIcon) { themeIcon.classList.remove('fa-sun'); themeIcon.classList.add('fa-moon'); }
            }
        };

        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-theme');
                if (body.classList.contains('dark-theme')) {
                    localStorage.setItem('theme', 'dark');
                    if (themeIcon) { themeIcon.classList.remove('fa-moon'); themeIcon.classList.add('fa-sun'); }
                } else {
                    localStorage.setItem('theme', 'light');
                    if (themeIcon) { themeIcon.classList.remove('fa-sun'); themeIcon.classList.add('fa-moon'); }
                }
            });
        }

        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.querySelector('.sidebar');
        if (menuToggle && sidebar) {
            menuToggle.addEventListener('click', () => { sidebar.classList.toggle('open'); });
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 && sidebar.classList.contains('open')) {
                    if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                        sidebar.classList.remove('open');
                    }
                }
            });
        }

        applyTheme();
    });
</script>
</body>
</html>
