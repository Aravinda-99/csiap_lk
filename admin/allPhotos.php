<?php
// Include database connection
require_once 'config/database.php';

// Pagination settings
$itemsPerPage = 10;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, $currentPage); // Ensure page is at least 1

// Fetch photos data from database with pagination
try {
    $pdo = getConnection();
    
    // Get total count
    $countStmt = $pdo->query("SELECT COUNT(*) as total FROM photos");
    $totalItems = $countStmt->fetch()['total'];
    
    // Calculate pagination
    $totalPages = ceil($totalItems / $itemsPerPage);
    $offset = ($currentPage - 1) * $itemsPerPage;
    
    // Fetch paginated data
    $stmt = $pdo->prepare("SELECT id, name, image_path, status, created_at, updated_at FROM photos ORDER BY created_at DESC LIMIT ? OFFSET ?");
    $stmt->bindValue(1, $itemsPerPage, PDO::PARAM_INT);
    $stmt->bindValue(2, $offset, PDO::PARAM_INT);
    $stmt->execute();
    $photos = $stmt->fetchAll();
    
} catch(PDOException $e) {
    $error = "Database error: " . $e->getMessage();
    $photos = [];
    $totalItems = 0;
    $totalPages = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos Management - Admin Panel</title>
    
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

        /* Add New Button */
        .btn-add {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            text-decoration: none;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        /* Table Container */
        .table-container {
            background-color: var(--bg-secondary);
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            overflow: hidden;
        }

        .table-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title-section {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .table-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .table-count {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 400;
        }

        /* Data Table */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .data-table th, .data-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.85rem;
            line-height: 1.4;
        }

        .data-table th {
            font-weight: 600;
            color: var(--text-secondary);
            background-color: rgba(var(--accent-primary-rgb), 0.05);
            font-size: 0.9rem;
        }

        .data-table tbody tr:hover {
            background-color: rgba(var(--accent-primary-rgb), 0.02);
        }

        .data-table tbody tr:last-child td {
            border-bottom: none;
        }



        /* Status Badge */
        .status-badge {
            display: inline-block;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .status-active {
            background-color: #d4edda;
            color: #155724;
        }

        .dark-theme .status-active {
            background-color: rgba(52, 211, 153, 0.2);
            color: #6ee7b7;
        }

        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }

        .dark-theme .status-inactive {
            background-color: rgba(220, 53, 69, 0.2);
            color: #f5a3a3;
        }

        /* Image Display */
        .image-thumb {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow);
        }
        .image-path {
            color: var(--text-primary);
            font-size: 0.75rem;
            font-family: 'Courier New', monospace;
            background-color: rgba(var(--accent-primary-rgb), 0.05);
            padding: 0.3rem 0.5rem;
            border-radius: 4px;
            border: 1px solid var(--border-color);
            word-break: break-all;
            display: inline-block;
            line-height: 1.3;
            max-width: 260px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-edit {
            background-color:rgba(64, 131, 79, 0.81);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color:rgb(131, 51, 59);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Pagination Styles */
        .pagination-container {
            padding: 1.5rem;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .pagination-info {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .pagination-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .pagination-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 36px;
            height: 36px;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            text-decoration: none;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all var(--transition-speed) ease;
            cursor: pointer;
        }

        .pagination-btn:hover {
            background-color: var(--accent-primary);
            color: white;
            border-color: var(--accent-primary);
            transform: translateY(-1px);
        }

        .pagination-current {
            background-color: var(--accent-primary);
            color: white;
            border-color: var(--accent-primary);
            cursor: default;
        }

        .pagination-current:hover {
            transform: none;
        }

        .pagination-ellipsis {
            color: var(--text-secondary);
            padding: 0.5rem;
            font-weight: 500;
        }

        .pagination-first,
        .pagination-prev,
        .pagination-next,
        .pagination-last {
            font-size: 0.8rem;
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
            
            .pagination-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .pagination-controls {
                justify-content: center;
            }
            
            .pagination-btn {
                min-width: 32px;
                height: 32px;
                font-size: 0.8rem;
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
                <h1 class="header-title">Photos Management</h1>
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

        <!-- Table Container -->
        <div class="table-container">
            <div class="table-header">
                <div class="table-title-section">
                    <h2 class="table-title">Photos</h2>
                    <?php if (!empty($photos)): ?>
                        <span class="table-count">(<?php echo count($photos); ?> items)</span>
                    <?php endif; ?>
                </div>
                <a href="addPhotos.php" class="btn-add">
                    <i class="fas fa-plus"></i>
                    + Add New Photo
                </a>
            </div>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Path</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                                         <?php if (isset($error)): ?>
                         <tr>
                             <td colspan="6" style="text-align: center; color: red; padding: 2rem;">
                                 <?php echo htmlspecialchars($error); ?>
                             </td>
                         </tr>
                     <?php elseif (empty($photos)): ?>
                         <tr>
                             <td colspan="6" style="text-align: center; color: var(--text-secondary); padding: 2rem;">
                                 No photos found in the database.
                             </td>
                         </tr>
                    <?php else: ?>
                        <?php foreach ($photos as $photo): ?>
                                                         <tr id="photo-row-<?php echo htmlspecialchars($photo['id']); ?>">
                                 <td><?php echo htmlspecialchars($photo['id']); ?></td>
                                 <td><?php echo htmlspecialchars($photo['name']); ?></td>
                                <td>
                                    <?php 
                                        $imgPath = isset($photo['image_path']) ? $photo['image_path'] : '';
                                        $isAbsolute = preg_match('#^(?:https?://|/)#', $imgPath) === 1;
                                        $imgSrc = $isAbsolute ? $imgPath : ('../' . ltrim($imgPath, '/'));
                                    ?>
                                    <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="Photo" class="image-thumb" onerror="this.onerror=null;this.src='https://placehold.co/80x60?text=No+Img';">
                                </td>
                                <td>
                                    <span class="image-path"><?php echo htmlspecialchars($photo['image_path']); ?></span>
                                </td>
                                <td>
                                    <?php if ($photo['status'] === 'active'): ?>
                                        <span class="status-badge status-active">Active</span>
                                    <?php else: ?>
                                        <span class="status-badge status-inactive">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('Y-m-d', strtotime($photo['created_at'])); ?></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-edit" onclick="editPhoto(<?php echo htmlspecialchars($photo['id']); ?>)">Edit</button>
                                        <button class="btn-delete" onclick="deletePhoto(<?php echo htmlspecialchars($photo['id']); ?>)">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            
            <!-- Pagination Controls -->
            <?php if ($totalPages > 1): ?>
                <div class="pagination-container">
                    <div class="pagination-info">
                        Showing <?php echo $offset + 1; ?> to <?php echo min($offset + $itemsPerPage, $totalItems); ?> of <?php echo $totalItems; ?> items
                    </div>
                    <div class="pagination-controls">
                        <?php if ($currentPage > 1): ?>
                            <a href="?page=1" class="pagination-btn pagination-first" title="First Page">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                            <a href="?page=<?php echo $currentPage - 1; ?>" class="pagination-btn pagination-prev" title="Previous Page">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        <?php endif; ?>
                        
                        <?php
                        // Show page numbers
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($totalPages, $currentPage + 2);
                        
                        if ($startPage > 1) {
                            echo '<span class="pagination-ellipsis">...</span>';
                        }
                        
                        for ($i = $startPage; $i <= $endPage; $i++) {
                            if ($i == $currentPage) {
                                echo '<span class="pagination-btn pagination-current">' . $i . '</span>';
                            } else {
                                echo '<a href="?page=' . $i . '" class="pagination-btn">' . $i . '</a>';
                            }
                        }
                        
                        if ($endPage < $totalPages) {
                            echo '<span class="pagination-ellipsis">...</span>';
                        }
                        ?>
                        
                        <?php if ($currentPage < $totalPages): ?>
                            <a href="?page=<?php echo $currentPage + 1; ?>" class="pagination-btn pagination-next" title="Next Page">
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <a href="?page=<?php echo $totalPages; ?>" class="pagination-btn pagination-last" title="Last Page">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
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

            // --- INITIALIZATION ---
            applyTheme(); // Apply theme on initial load
        });

        // --- PHOTO MANAGEMENT FUNCTIONS ---
        function editPhoto(id) {
            window.location.href = `editPhotos.php?id=${id}`;
        }

        function deletePhoto(id) {
            if (!confirm(`Are you sure you want to delete photo with ID: ${id}?`)) {
                return;
            }

            const formData = new FormData();
            formData.append('id', id);

            fetch('deletePhotos.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data && data.success) {
                    const row = document.getElementById(`photo-row-${id}`);
                    if (row) row.remove();
                    alert('Photo deleted successfully.');
                } else {
                    alert(`Failed to delete: ${data && data.message ? data.message : 'Unknown error'}`);
                }
            })
            .catch(err => {
                console.error(err);
                alert('Server error while deleting.');
            });
        }
    </script>
</body>
</html>
