<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Admin Panel</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" xintegrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        /* Sidebar styles moved to sidebar.php */

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

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .card {
            background-color: var(--bg-secondary);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .card-header h3 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-secondary);
        }

        .card-icon {
            font-size: 1.5rem;
            padding: 0.8rem;
            border-radius: 50%;
            color: #fff;
        }
        
        .icon-sales { background-color: #4a90e2; }
        .icon-revenue { background-color: #50e3c2; }
        .icon-users { background-color: #f5a623; }
        .icon-orders { background-color: #bd10e0; }

        .card-value {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .card-footer {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .positive { color: #2ecc71; }
        .negative { color: #e74c3c; }

        /* Data Table & Form Section */
        .data-section {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .data-table-container, .form-container {
            background-color: var(--bg-secondary);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th, .data-table td {
            padding: 0.8rem 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        .data-table th {
            font-weight: 600;
            color: var(--text-secondary);
            cursor: pointer;
            user-select: none;
        }
        
        .data-table th:hover {
            color: var(--text-primary);
        }
        
        .data-table th .sort-icon {
            margin-left: 0.5rem;
            opacity: 0.5;
        }
        
        .data-table th.sorted .sort-icon {
            opacity: 1;
        }

        .data-table tbody tr:hover {
            background-color: var(--bg-primary);
        }

        /* Form */
        .user-form .form-group {
            margin-bottom: 1rem;
        }

        .user-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-secondary);
        }

        .user-form input {
            width: 100%;
            padding: 0.7rem 1rem;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }

        .user-form input.invalid {
            border-color: #e74c3c;
        }

        .error-message {
            color: #e74c3c;
            font-size: 0.8rem;
            margin-top: 0.2rem;
            display: none;
        }

        .user-form button {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 8px;
            background-color: var(--accent-primary);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: background-color var(--transition-speed) ease;
        }
        
        .user-form button:hover {
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) { .main-content { margin-left: 0; width: 100%; } .menu-toggle { display: block; } .header { flex-wrap: wrap; gap: 1rem; } .header-title { font-size: 1.4rem; } }
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
                <h1 class="header-title">Dashboard Overview</h1>
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

        <!-- Dashboard Cards -->
        <section class="dashboard-cards">
            <div class="card">
                <div class="card-header">
                    <h3>Total Sales</h3>
                    <i class="fas fa-dollar-sign card-icon icon-sales"></i>
                </div>
                <p class="card-value">$24,890</p>
                <div class="card-footer">
                    <span class="positive">+12.5%</span> vs last month
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Total Revenue</h3>
                    <i class="fas fa-chart-bar card-icon icon-revenue"></i>
                </div>
                <p class="card-value">$15,230</p>
                <div class="card-footer">
                    <span class="positive">+8.2%</span> vs last month
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>New Users</h3>
                    <i class="fas fa-user-plus card-icon icon-users"></i>
                </div>
                <p class="card-value">1,250</p>
                <div class="card-footer">
                    <span class="negative">-2.1%</span> vs last month
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>Total Orders</h3>
                    <i class="fas fa-shopping-bag card-icon icon-orders"></i>
                </div>
                <p class="card-value">5,780</p>
                <div class="card-footer">
                    <span class="positive">+5.7%</span> vs last month
                </div>
            </div>
        </section>

        <!-- Data Table and Form Section -->
        <section class="data-section">
            <div class="data-table-container">
                <h2 class="section-title">Recent Orders</h2>
                <table class="data-table" id="orders-table">
                    <thead>
                        <tr>
                            <th data-column="0">Order ID <i class="fas fa-sort sort-icon"></i></th>
                            <th data-column="1">Customer <i class="fas fa-sort sort-icon"></i></th>
                            <th data-column="2">Amount <i class="fas fa-sort sort-icon"></i></th>
                            <th data-column="3">Date <i class="fas fa-sort sort-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1024</td>
                            <td>John Doe</td>
                            <td>$120.50</td>
                            <td>2025-08-19</td>
                        </tr>
                        <tr>
                            <td>#1023</td>
                            <td>Jane Smith</td>
                            <td>$85.00</td>
                            <td>2025-08-18</td>
                        </tr>
                        <tr>
                            <td>#1022</td>
                            <td>Mike Johnson</td>
                            <td>$250.75</td>
                            <td>2025-08-18</td>
                        </tr>
                        <tr>
                            <td>#1021</td>
                            <td>Emily Brown</td>
                            <td>$45.30</td>
                            <td>2025-08-17</td>
                        </tr>
                         <tr>
                            <td>#1020</td>
                            <td>Chris Lee</td>
                            <td>$310.00</td>
                            <td>2025-08-16</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-container">
                <h2 class="section-title">Add New User</h2>
                <form class="user-form" id="user-form" novalidate>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                        <div class="error-message" id="name-error">Name is required.</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                        <div class="error-message" id="email-error">Please enter a valid email.</div>
                    </div>
                    <button type="submit">Add User</button>
                </form>
            </div>
        </section>
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


            // --- TABLE SORTING ---
            const table = document.getElementById('orders-table');
            const headers = table.querySelectorAll('th');
            const tbody = table.querySelector('tbody');
            let sortDirections = Array.from(headers).map(() => 'asc');

            headers.forEach((header, index) => {
                header.addEventListener('click', () => {
                    // Reset icons for other headers
                    headers.forEach((h, i) => {
                        if (i !== index) {
                            h.classList.remove('sorted');
                            h.querySelector('.sort-icon').className = 'fas fa-sort sort-icon';
                        }
                    });
                    
                    const rows = Array.from(tbody.querySelectorAll('tr'));
                    const direction = sortDirections[index] === 'asc' ? 1 : -1;
                    
                    const sortedRows = rows.sort((a, b) => {
                        let aText = a.children[index].textContent.trim();
                        let bText = b.children[index].textContent.trim();

                        // Handle numeric and date sorting
                        if (index === 2) { // Amount column
                            aText = parseFloat(aText.replace('$', ''));
                            bText = parseFloat(bText.replace('$', ''));
                        } else if (index === 3) { // Date column
                            aText = new Date(aText);
                            bText = new Date(bText);
                        }

                        if (aText < bText) return -1 * direction;
                        if (aText > bText) return 1 * direction;
                        return 0;
                    });
                    
                    // Re-append sorted rows
                    tbody.innerHTML = '';
                    sortedRows.forEach(row => tbody.appendChild(row));
                    
                    // Update sort direction and icon
                    sortDirections[index] = sortDirections[index] === 'asc' ? 'desc' : 'asc';
                    header.classList.add('sorted');
                    const icon = header.querySelector('.sort-icon');
                    icon.className = `fas fa-sort-${sortDirections[index] === 'asc' ? 'down' : 'up'} sort-icon`;
                });
            });

            // --- FORM VALIDATION ---
            const form = document.getElementById('user-form');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const nameError = document.getElementById('name-error');
            const emailError = document.getElementById('email-error');

            form.addEventListener('submit', (e) => {
                e.preventDefault();
                let isValid = true;

                // Validate name
                if (nameInput.value.trim() === '') {
                    nameInput.classList.add('invalid');
                    nameError.style.display = 'block';
                    isValid = false;
                } else {
                    nameInput.classList.remove('invalid');
                    nameError.style.display = 'none';
                }

                // Validate email
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value.trim())) {
                    emailInput.classList.add('invalid');
                    emailError.style.display = 'block';
                    isValid = false;
                } else {
                    emailInput.classList.remove('invalid');
                    emailError.style.display = 'none';
                }

                if (isValid) {
                    // In a real app, you would submit the form data here
                    console.log('Form submitted successfully:', {
                        name: nameInput.value,
                        email: emailInput.value
                    });
                    form.reset();
                    // You could show a success message here
                }
            });

            // --- INITIALIZATION ---
            applyTheme(); // Apply theme on initial load
        });
    </script>
</body>
</html>
