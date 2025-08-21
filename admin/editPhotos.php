<?php
// Include database connection
require_once 'config/database.php';

$message = '';
$error = '';
$photo = null;

// Get photo ID from URL parameter
$photo_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($photo_id <= 0) {
    $error = 'Invalid photo ID provided';
} else {
    try {
        $pdo = getConnection();
        
        // Fetch photo data for editing
        $stmt = $pdo->prepare("SELECT * FROM photos WHERE id = ?");
        $stmt->execute([$photo_id]);
        $photo = $stmt->fetch();
        
        if (!$photo) {
            $error = 'Photo not found';
        }
    } catch(PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}

// Handle form submission for updating
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $photo) {
    $name = trim($_POST['name'] ?? '');
    $status = $_POST['status'] ?? 'active';
    
    // Validation
    if (empty($name)) {
        $error = 'Photo name is required';
    } else {
        try {
            $pdo = getConnection();
            
            // Check if photo with same name already exists (excluding current)
            $checkStmt = $pdo->prepare("SELECT id FROM photos WHERE name = ? AND id != ?");
            $checkStmt->execute([$name, $photo_id]);
            
            if ($checkStmt->fetch()) {
                $error = 'Photo with this name already exists';
            } else {
                // If new file uploaded, process it
                $image_path = $photo['image_path'];
                if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
                    $uploadDirFs = __DIR__ . '/../assets/img/photos/';
                    if (!is_dir($uploadDirFs)) { @mkdir($uploadDirFs, 0755, true); }
                    $tmpPath = $_FILES['image_file']['tmp_name'];
                    $finfo = new finfo(FILEINFO_MIME_TYPE);
                    $mime = $finfo->file($tmpPath);
                    $allowed = [ 'image/jpeg'=>'jpg','image/png'=>'png','image/gif'=>'gif','image/webp'=>'webp'];
                    if (!isset($allowed[$mime])) { throw new RuntimeException('Unsupported image type'); }
                    $ext = $allowed[$mime];
                    $base = preg_replace('/[^a-zA-Z0-9_-]+/','-', strtolower($name));
                    $base = $base ?: 'photo';
                    $filename = $base.'-'.date('YmdHis').'-'.substr(sha1(uniqid('', true)),0,6).'.'.$ext;
                    $destFs = $uploadDirFs.$filename;
                    if (!move_uploaded_file($tmpPath, $destFs)) { throw new RuntimeException('Failed to save image'); }
                    $image_path = 'assets/img/photos/'.$filename;
                }

                // Update photo
                $stmt = $pdo->prepare("UPDATE photos SET name = ?, image_path = ?, status = ?, updated_at = NOW() WHERE id = ?");
                $result = $stmt->execute([$name, $image_path, $status, $photo_id]);
                
                if ($result) {
                    $message = 'Photo updated successfully!';
                    
                    // Refresh audio data
                    $stmt = $pdo->prepare("SELECT * FROM photos WHERE id = ?");
                    $stmt->execute([$photo_id]);
                    $photo = $stmt->fetch();
                } else {
                    $error = 'Failed to update photo';
                }
            }
        } catch(PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Photo - Admin Panel</title>
    
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
            --scrollbar-thumb: var(--scrollbar-thumb-light);
            --scrollbar-thumb-hover: var(--scrollbar-thumb-hover-light);
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
            --scrollbar-thumb: var(--scrollbar-thumb-dark);
            --scrollbar-thumb-hover: var(--scrollbar-thumb-hover-dark);
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

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

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
        
        .header-left {
            display: flex;
            align-items: center;
        }
        
        .header-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            margin-right: 1.5rem;
            color: var(--text-primary);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        .theme-toggle {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-primary);
            transition: color var(--transition-speed) ease;
        }
        
        .theme-toggle:hover {
            color: var(--accent-primary);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .user-info {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
            text-align: right;
        }

        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .user-role {
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .breadcrumb a {
            color: var(--accent-primary);
            transition: color var(--transition-speed) ease;
        }

        .breadcrumb a:hover {
            color: var(--accent-secondary);
        }

        .breadcrumb-separator {
            color: var(--text-secondary);
        }

        /* Form Container */
        .form-container {
            background-color: var(--bg-secondary);
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            padding: 3rem;
            max-width: 1200px;
            width: 100%;
        }

        .form-header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Messages */
        .message {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 600;
            color: var(--text-primary);
            font-size: 1rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            font-size: 0.95rem;
            transition: border-color var(--transition-speed) ease, box-shadow var(--transition-speed) ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-primary);
            box-shadow: 0 0 0 3px rgba(var(--accent-primary-rgb), 0.1);
        }

        .form-group input.invalid,
        .form-group select.invalid,
        .form-group textarea.invalid {
            border-color: #dc3545;
        }

        .form-group .help-text {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 0.5rem;
        }

        .form-group .error-text {
            font-size: 0.8rem;
            color: #dc3545;
            margin-top: 0.25rem;
            display: none;
        }

        /* Form Row */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }

        /* Buttons */
        .form-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: flex-end;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-secondary {
            background-color: var(--border-color);
            color: var(--text-primary);
        }

        .btn-secondary:hover {
            background-color: var(--text-secondary);
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                width: 100%;
                padding: 1rem;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .header {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            .header-title {
                font-size: 1.4rem;
            }
            
            .form-container {
                padding: 1.5rem;
            }
            
            .form-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
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
                <h1 class="header-title">Edit Photo</h1>
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
            <a href="allPhotos.php"><i class="fas fa-image"></i> Photos Management</a>
            <span class="breadcrumb-separator">/</span>
            <span>Edit Photo</span>
        </div>

        <?php if ($error && !$photo): ?>
            <!-- Error Message -->
            <div class="form-container">
                <div class="form-header">
                    <h2 class="form-title" style="color: #dc3545;">Error</h2>
                    <p class="form-subtitle">Unable to load photo for editing</p>
                </div>
                <div class="message error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php echo htmlspecialchars($error); ?>
                </div>
                <div class="form-buttons">
                    <a href="allPhotos.php" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Back to Photos List
                    </a>
                </div>
            </div>
        <?php elseif ($photo): ?>
            <!-- Edit Photo Form -->
            <div class="form-container">
                <div class="form-header">
                    <h2 class="form-title">Edit Photo</h2>
                    <p class="form-subtitle">Update details below; upload a new image to replace the current one</p>
                </div>

                <?php if ($message): ?>
                    <div class="message success">
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

                <form method="POST" action="" id="edit-photo-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Photo Name <span style="color: #dc3545;">*</span></label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="<?php echo htmlspecialchars($photo['name']); ?>"
                            placeholder="Enter photo name"
                            required
                            class="<?php echo isset($error) && empty($photo['name']) ? 'invalid' : ''; ?>"
                        >
                        <div class="help-text">Choose a descriptive name for the photo</div>
                        <div class="error-text" id="name-error">Photo name is required</div>
                    </div>

                    <div class="form-group">
                        <label>Current Image</label>
                        <div>
                            <img src="<?php echo '../'.htmlspecialchars($photo['image_path']); ?>" alt="Current" style="max-height:100px;border:1px solid var(--border-color);border-radius:6px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image_file">Replace Image (optional)</label>
                        <input type="file" id="image_file" name="image_file" accept="image/*">
                        <div class="help-text">Leave empty to keep the current image</div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status" name="status">
                                <option value="active" <?php echo $photo['status'] === 'active' ? 'selected' : ''; ?>>Active</option>
                                <option value="inactive" <?php echo $photo['status'] === 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                            </select>
                            <div class="help-text">Set whether the photo should be visible</div>
                        </div>

                        <div class="form-group">
                            <label for="created_at">Created Date</label>
                            <input 
                                type="text" 
                                id="created_at" 
                                value="<?php echo htmlspecialchars($photo['created_at']); ?>"
                                readonly
                                style="background-color: var(--border-color); cursor: not-allowed;"
                            >
                            <div class="help-text">This date cannot be modified</div>
                        </div>
                    </div>

                    <div class="form-buttons">
                        <a href="allPhotos.php" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Back to List
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Update Photo
                        </button>
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

            // --- FORM VALIDATION ---
            const form = document.getElementById('edit-photo-form');
            if (form) {
                const nameInput = document.getElementById('name');
                const nameError = document.getElementById('name-error');

                // Real-time validation
                nameInput.addEventListener('input', () => {
                    if (nameInput.value.trim() === '') {
                        nameInput.classList.add('invalid');
                        nameError.style.display = 'block';
                    } else {
                        nameInput.classList.remove('invalid');
                        nameError.style.display = 'none';
                    }
                });

                // Form submission validation
                form.addEventListener('submit', (e) => {
                    let isValid = true;

                    // Validate name
                    if (nameInput.value.trim() === '') {
                        nameInput.classList.add('invalid');
                        nameError.style.display = 'block';
                        isValid = false;
                    }

                    if (!isValid) {
                        e.preventDefault();
                        // Scroll to first error
                        const firstError = document.querySelector('.invalid');
                        if (firstError) {
                            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                    }
                });
            }

            // --- INITIALIZATION ---
            applyTheme(); // Apply theme on initial load
        });
    </script>
</body>
</html>
