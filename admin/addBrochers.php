<?php
// Include database connection
require_once 'config/database.php';

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $image_file = $_FILES['image'] ?? null;
    
    // Validation
    if (empty($name)) {
        $error_message = 'Brochure name is required.';
    } elseif (!$image_file || $image_file['error'] !== UPLOAD_ERR_OK) {
        $error_message = 'Please select a valid image file.';
    } else {
        // Validate file type
        $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($image_file['tmp_name']);
        
        if (!in_array($file_type, $allowed_types)) {
            $error_message = 'Only JPG, PNG, and GIF images are allowed.';
        } else {
            // Validate file size (5MB max)
            if ($image_file['size'] > 5 * 1024 * 1024) {
                $error_message = 'Image file size must be less than 5MB.';
            } else {
                try {
                    $pdo = getConnection();
                    
                    // Generate unique filename
                    $file_extension = pathinfo($image_file['name'], PATHINFO_EXTENSION);
                    $unique_filename = 'brochure_' . time() . '_' . uniqid() . '.' . $file_extension;
                    $upload_path = '../assets/uploads/brochures/' . $unique_filename;
                    
                    // Create directory if it doesn't exist
                    $upload_dir = dirname($upload_path);
                    if (!is_dir($upload_dir)) {
                        mkdir($upload_dir, 0755, true);
                    }
                    
                    // Move uploaded file
                    if (move_uploaded_file($image_file['tmp_name'], $upload_path)) {
                        // Save to database
                        $stmt = $pdo->prepare('INSERT INTO broachers (name, img_path, created_at) VALUES (?, ?, NOW())');
                        $relative_path = 'assets/uploads/brochures/' . $unique_filename;
                        
                        if ($stmt->execute([$name, $relative_path])) {
                            $success_message = 'Brochure added successfully!';
                            // Clear form data
                            $name = '';
                        } else {
                            $error_message = 'Failed to save brochure to database.';
                            // Remove uploaded file if database insert failed
                            @unlink($upload_path);
                        }
                    } else {
                        $error_message = 'Failed to upload image file.';
                    }
                } catch (PDOException $e) {
                    $error_message = 'Database error: ' . $e->getMessage();
                    // Remove uploaded file if database error occurred
                    if (isset($upload_path) && file_exists($upload_path)) {
                        @unlink($upload_path);
                    }
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Brochure - Admin Panel</title>
    
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
            color: var(--border-color);
        }

        /* Form Container */
        .form-container {
            background-color: var(--bg-secondary);
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            overflow: hidden;
        }

        .form-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            background-color: rgba(var(--accent-primary-rgb), 0.05);
        }

        .form-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Form */
        .form {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-primary);
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.9rem;
            font-family: var(--font-family);
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            transition: border-color var(--transition-speed) ease, box-shadow var(--transition-speed) ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--accent-primary);
            box-shadow: 0 0 0 3px rgba(var(--accent-primary-rgb), 0.1);
        }

        .form-input.error {
            border-color: #dc3545;
        }

        .form-error {
            color: #dc3545;
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }

        .file-input-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-input {
            position: absolute;
            left: -9999px;
        }

        .file-input-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1rem;
            border: 2px dashed var(--border-color);
            border-radius: 6px;
            background-color: rgba(var(--accent-primary-rgb), 0.05);
            color: var(--text-secondary);
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            font-size: 0.9rem;
        }

        .file-input-label:hover {
            border-color: var(--accent-primary);
            background-color: rgba(var(--accent-primary-rgb), 0.1);
            color: var(--accent-primary);
        }

        .file-input-label.dragover {
            border-color: var(--accent-primary);
            background-color: rgba(var(--accent-primary-rgb), 0.1);
            color: var(--accent-primary);
        }

        .file-info {
            margin-top: 0.5rem;
            font-size: 0.8rem;
            color: var(--text-secondary);
        }

        /* Buttons */
        .form-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            font-family: var(--font-family);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
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

        /* Messages */
        .message {
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .dark-theme .message.success {
            background-color: rgba(52, 211, 153, 0.2);
            color: #6ee7b7;
            border-color: rgba(52, 211, 153, 0.3);
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .dark-theme .message.error {
            background-color: rgba(220, 53, 69, 0.2);
            color: #f5a3a3;
            border-color: rgba(220, 53, 69, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) { 
            .main-content { 
                margin-left: 0; 
                width: 100%; 
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
            
            .form-buttons {
                flex-direction: column;
            }
            
            .btn {
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
                <h1 class="header-title">Add New Brochure</h1>
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
        <nav class="breadcrumb">
            <a href="allBroachers.php">Brochures</a>
            <span class="breadcrumb-separator">/</span>
            <span>Add New</span>
        </nav>

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-header">
                <h2 class="form-title">
                    <i class="fas fa-plus-circle"></i>
                    Add New Brochure
                </h2>
            </div>
            
            <form class="form" method="POST" enctype="multipart/form-data" id="addBrochureForm">
                <!-- Success/Error Messages -->
                <?php if ($success_message): ?>
                    <div class="message success">
                        <i class="fas fa-check-circle"></i>
                        <?php echo htmlspecialchars($success_message); ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="message error">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo htmlspecialchars($error_message); ?>
                    </div>
                <?php endif; ?>

                <!-- Brochure Name -->
                <div class="form-group">
                    <label for="name" class="form-label">Brochure Name *</label>
                    <input type="text" id="name" name="name" class="form-input" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image" class="form-label">Brochure Image *</label>
                    <div class="file-input-wrapper">
                        <input type="file" id="image" name="image" class="file-input" accept="image/*" required>
                        <label for="image" class="file-input-label" id="fileInputLabel">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Choose an image file or drag and drop here</span>
                        </label>
                    </div>
                    <div class="file-info">
                        Supported formats: JPG, PNG, GIF (Max size: 5MB)
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="form-buttons">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Add Brochure
                    </button>
                    <a href="allBroachers.php" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Back to List
                    </a>
                </div>
            </form>
        </div>
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

            // --- FILE INPUT HANDLING ---
            const fileInput = document.getElementById('image');
            const fileInputLabel = document.getElementById('fileInputLabel');
            const fileInputLabelText = fileInputLabel.querySelector('span');

            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    fileInputLabelText.textContent = `Selected: ${file.name}`;
                    fileInputLabel.classList.add('has-file');
                }
            });

            // Drag and drop functionality
            const fileInputWrapper = document.querySelector('.file-input-wrapper');

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                fileInputWrapper.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                fileInputWrapper.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                fileInputWrapper.addEventListener(eventName, unhighlight, false);
            });

            function highlight(e) {
                fileInputLabel.classList.add('dragover');
            }

            function unhighlight(e) {
                fileInputLabel.classList.remove('dragover');
            }

            fileInputWrapper.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length > 0) {
                    fileInput.files = files;
                    fileInputLabelText.textContent = `Selected: ${files[0].name}`;
                    fileInputLabel.classList.add('has-file');
                }
            }

            // --- FORM VALIDATION ---
            const form = document.getElementById('addBrochureForm');
            
            form.addEventListener('submit', function(e) {
                const name = document.getElementById('name').value.trim();
                const image = document.getElementById('image').files[0];
                
                // Remove previous error classes
                document.querySelectorAll('.form-input.error').forEach(input => {
                    input.classList.remove('error');
                });
                document.querySelectorAll('.form-error').forEach(error => {
                    error.remove();
                });
                
                let hasErrors = false;
                
                // Validate name
                if (!name) {
                    showError('name', 'Brochure name is required.');
                    hasErrors = true;
                }
                
                // Validate image
                if (!image) {
                    showError('image', 'Please select an image file.');
                    hasErrors = true;
                }
                
                if (hasErrors) {
                    e.preventDefault();
                }
            });
            
            function showError(fieldId, message) {
                const field = document.getElementById(fieldId);
                field.classList.add('error');
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'form-error';
                errorDiv.textContent = message;
                
                field.parentNode.appendChild(errorDiv);
            }

            // --- INITIALIZATION ---
            applyTheme(); // Apply theme on initial load
        });
    </script>
</body>
</html>
