<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIAP Admin Panel</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* CSS Variables for Theming */
        :root {
            --bg-light: #f3f4f6;
            --bg-dark: #111827;
            --text-light: #1f2937;
            --text-dark: #f9fafb;
            --card-bg-light: #ffffff;
            --card-bg-dark: #1f2937;
            --sidebar-bg: #1f2937;
            --sidebar-logo-bg: #1f2937; /* Changed to match sidebar */
            --sidebar-text: #d1d5db;
            --sidebar-text-hover: #ffffff;
            --sidebar-active-bg: #374151;
            --border-light: #e5e7eb;
            --border-dark: #374151;
            --indigo-400: #818cf8;
            --indigo-600:rgb(94, 70, 229);
            --font-sans: 'Inter', sans-serif;
            --transition-speed: 300ms;
            
            /* Sidebar CSS Variables */
            --bg-secondary: var(--card-bg-light);
            --border-color: var(--border-light);
            --text-secondary: var(--text-light);
            --accent-primary: var(--indigo-600);
            --accent-primary-rgb: 79, 70, 229;
            --scrollbar-thumb: #cccccc;
            --scrollbar-thumb-hover: #aaaaaa;
        }

        .dark {
            --bg-light: #111827;
            --bg-dark: #f3f4f6;
            --text-light: #f9fafb;
            --text-dark: #1f2937;
            --card-bg-light: #1f2937;
            --card-bg-dark: #ffffff;
            --border-light: #374151;
            --border-dark: #e5e7eb;
            
            /* Dark theme sidebar variables */
            --bg-secondary: var(--card-bg-light);
            --border-color: var(--border-light);
            --text-secondary: var(--text-light);
            --accent-primary: var(--indigo-400);
            --accent-primary-rgb: 129, 140, 248;
            --scrollbar-thumb: #444444;
            --scrollbar-thumb-hover: #666666;
        }

        /* Base & Reset */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-family: var(--font-sans);
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-light);
            transition: background-color var(--transition-speed), color var(--transition-speed);
            font-synthesis: none;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Layout */
        .admin-panel {
            display: flex;
            min-height: 100vh;
            position: relative;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            transition: margin-left var(--transition-speed);
            margin-left: 0;
        }

        /* Mobile Header (for menu toggle) */
        .mobile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            background-color: var(--card-bg-light);
            border-bottom: 1px solid var(--border-light);
        }
        
        .menu-toggle {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-light);
        }
        
        .header-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .theme-toggle {
            padding: 0.5rem;
            border-radius: 9999px;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-light);
            transition: background-color var(--transition-speed);
        }

        .theme-toggle:hover {
            background-color: #e5e7eb;
        }
        
        .dark .theme-toggle:hover {
             background-color: #374151;
        }

        .profile-button {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: none;
            border: none;
            cursor: pointer;
        }

        .profile-button img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--indigo-400);
        }
        
        .profile-button span {
            font-weight: 500;
            color: var(--text-light);
        }

        /* Main Area */
        .main-area {
            flex-grow: 1;
            padding: 0 2rem 2rem 2rem; /* Removed top padding */
            overflow-y: auto;
        }
        
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 88px; /* Matched height */
            margin-bottom: 2rem; /* Replaced padding with margin */
            border-bottom: 1px solid var(--border-light);
        }
        
        .main-header h2 {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--text-light);
        }
        
        .main-header .header-right {
            display: none; /* Hide on mobile, shown on desktop */
        }
        
        /* Search Bar Styles */
        .search-container {
            flex: 1;
            max-width: 400px;
            margin: 0 2rem;
        }
        
        .search-input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .search-icon {
            position: absolute;
            left: 12px;
            color: #9ca3af;
            pointer-events: none;
            transition: color 0.3s ease;
        }
        
        .search-input {
            width: 100%;
            padding: 10px 12px 10px 40px;
            border: 1px solid var(--border-light);
            border-radius: 8px;
            font-size: 14px;
            background-color: var(--card-bg-light);
            color: var(--text-light);
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--indigo-400);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        
        .search-input::placeholder {
            color: #9ca3af;
            transition: color 0.3s ease;
        }
        
        /* Dark theme styles for search bar */
        .dark .search-input {
            background-color: var(--card-bg-dark);
            border-color: var(--border-dark);
            color: var(--text-light);
        }
        
        .dark .search-input:focus {
            border-color: var(--indigo-400);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }
        
        .dark .search-input::placeholder {
            color: #6b7280;
        }
        
        .dark .search-icon {
            color: #6b7280;
        }
        
        /* Hover effects for dark theme */
        .dark .search-input:hover {
            border-color: #4b5563;
        }
        
        .dark .search-input:focus:hover {
            border-color: var(--indigo-400);
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background-color: var(--card-bg-light);
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .stat-card-icon {
            padding: 0.75rem;
            border-radius: 50%;
        }
        
        .stat-card-icon svg {
            width: 1.5rem;
            height: 1.5rem;
        }
        
        .stat-card-info p:first-child {
            font-size: 0.875rem;
            font-weight: 500;
            color: #6b7280;
        }
        
        .dark .stat-card-info p:first-child {
            color: #9ca3af;
        }

        .stat-card-info p:last-child {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-light);
        }
        
        /* Color variations for stat cards */
        .icon-indigo { background-color: #e0e7ff; } .dark .icon-indigo { background-color: rgba(99, 102, 241, 0.2); }
        .icon-indigo svg { color: #4338ca; } .dark .icon-indigo svg { color: #a5b4fc; }
        .icon-green { background-color: #d1fae5; } .dark .icon-green { background-color: rgba(16, 185, 129, 0.2); }
        .icon-green svg { color: #059669; } .dark .icon-green svg { color: #6ee7b7; }
        .icon-yellow { background-color: #fef3c7; } .dark .icon-yellow { background-color: rgba(245, 158, 11, 0.2); }
        .icon-yellow svg { color: #d97706; } .dark .icon-yellow svg { color: #fcd34d; }
        .icon-red { background-color: #fee2e2; } .dark .icon-red { background-color: rgba(239, 68, 68, 0.2); }
        .icon-red svg { color: #dc2626; } .dark .icon-red svg { color: #fca5a5; }

        /* Recent Users Table */
        .users-table-container {
            background-color: var(--card-bg-light);
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            padding: 1.5rem;
        }
        
        .users-table-container h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-light);
        }
        
        .table-wrapper {
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 0.75rem 1rem;
            vertical-align: middle;
        }
        
        thead tr {
            border-bottom: 1px solid var(--border-light);
        }
        
        th {
            font-weight: 600;
            color: #4b5567;
        }
        .dark th {
            color: #d1d5db;
        }
        
        tbody tr {
            border-bottom: 1px solid rgba(229, 231, 235, 0.5);
            transition: background-color var(--transition-speed);
        }
        .dark tbody tr {
             border-bottom: 1px solid rgba(55, 65, 81, 0.5);
        }
        tbody tr:last-child {
            border-bottom: none;
        }
        
        tbody tr:hover {
            background-color: #f9fafb;
        }
        .dark tbody tr:hover {
            background-color: rgba(55, 65, 81, 0.5);
        }
        
        td {
            color: #374151;
        }
        .dark td {
            color: #9ca3af;
        }
        
        .user-cell {
            display: flex;
            align-items: center;
        }
        
        .user-cell img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 0.75rem;
        }
        
        .status-badge {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 9999px;
        }
        
        .status-active { color: #14532d; background-color: #dcfce7; }
        .dark .status-active { color: #a7f3d0; background-color: rgba(22, 163, 74, 0.2); }
        .status-pending { color: #78350f; background-color: #fef3c7; }
        .dark .status-pending { color: #fcd34d; background-color: rgba(245, 158, 11, 0.2); }
        .status-inactive { color: #991b1b; background-color: #fee2e2; }
        .dark .status-inactive { color: #fca5a5; background-color: rgba(220, 38, 38, 0.2); }

        /* Responsive */
        @media (min-width: 640px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .profile-button span {
                display: inline;
            }
        }

        @media (min-width: 1024px) {
            .sidebar {
                position: fixed;
                transform: translateX(0);
            }
            .main-content {
                margin-left: 256px;
            }
            .mobile-header {
                display: none;
            }
            .main-header .header-right {
                display: flex;
            }
            .stats-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        
        /* Mobile responsive for search bar */
        @media (max-width: 1023px) {
            .search-container {
                display: none; /* Hide search bar on mobile */
            }
        }
        
        /* Utility Classes */
        .hidden { display: none; }
        
        /* Mobile Sidebar Overlay */
        #sidebar-overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(0,0,0,0.6);
            z-index: 10;
        }
           
        /* Chart Container Styles */
        .chart-container {
            background-color: var(--card-bg-light);
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            padding: 1.5rem;
        }
           
        .chart-container h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-light);
        }
           
        .chart-wrapper {
            position: relative;
            height: 300px;
            width: 100%;
        }

    </style>
</head>
<body>

    <div class="admin-panel">
        <?php include 'sidebar.php'; ?>

        <div class="main-content">
            <header class="mobile-header">
                <button id="menu-toggle" class="menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                </button>
                <div class="header-right">
                    <button id="theme-toggle-mobile" class="theme-toggle">
                        <svg id="theme-icon-light-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                        <svg id="theme-icon-dark-mobile" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
                    </button>
                    <button class="profile-button">
                        <img src="https://placehold.co/40x40/6366f1/ffffff?text=A" alt="Admin">
                    </button>
                </div>
            </header>

            <main class="main-area">
                <div class="main-header">
                    <h2>Dashboard</h2>
                    
                    <div class="search-container">
                        <div class="search-input-wrapper">
                            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                            <input type="text" class="search-input" placeholder="Search..." id="searchInput">
                        </div>
                    </div>
                    
                    <div class="header-right">
                        <button id="theme-toggle-desktop" class="theme-toggle">
                            <svg id="theme-icon-light-desktop" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                            <svg id="theme-icon-dark-desktop" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
                        </button>
                        <button class="profile-button">
                            <img src="https://placehold.co/40x40/6366f1/ffffff?text=A" alt="Admin">
                            <span>Admin</span>
                        </button>
                    </div>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-card-icon icon-indigo">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21,15 16,10 5,21"/></svg>
                        </div>
                        <div class="stat-card-info">
                            <p>Total Sliders</p>
                            <p>12</p>
                        </div>
                    </div>
                     <div class="stat-card">
                        <div class="stat-card-icon icon-green">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
                        </div>
                        <div class="stat-card-info">
                            <p>Total Products</p>
                            <p>150</p>
                        </div>
                    </div>
                     <div class="stat-card">
                        <div class="stat-card-icon icon-yellow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h18v18H3zM21 9V3M9 21H3M21 3l-7 7M3 21l7-7"/></svg>
                        </div>
                        <div class="stat-card-info">
                            <p>Total Categories</p>
                            <p>25</p>
                        </div>
                    </div>
                     <div class="stat-card">
                        <div class="stat-card-icon icon-red">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <div class="stat-card-info">
                            <p>Total Users (Admin)</p>
                            <p>4</p>
                        </div>
                    </div>
                </div>

                <div class="chart-container">
                    <h3>Data Overview</h3>
                    <div class="chart-wrapper">
                        <canvas id="dataChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <div id="sidebar-overlay" class="hidden"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggleBtnDesktop = document.getElementById('theme-toggle-desktop');
            const themeToggleBtnMobile = document.getElementById('theme-toggle-mobile');
            const htmlEl = document.documentElement;

            let setTheme = (theme) => { // Make setTheme mutable
                const lightIcons = document.querySelectorAll('[id^="theme-icon-light"]');
                const darkIcons = document.querySelectorAll('[id^="theme-icon-dark"]');

                if (theme === 'dark') {
                    htmlEl.classList.add('dark');
                    lightIcons.forEach(icon => icon.classList.remove('hidden'));
                    darkIcons.forEach(icon => icon.classList.add('hidden'));
                    localStorage.setItem('theme', 'dark');
                } else {
                    htmlEl.classList.remove('dark');
                    lightIcons.forEach(icon => icon.classList.add('hidden'));
                    darkIcons.forEach(icon => icon.classList.remove('hidden'));
                    localStorage.setItem('theme', 'light');
                }
            };
            
            const toggleTheme = () => {
                const currentTheme = htmlEl.classList.contains('dark') ? 'dark' : 'light';
                setTheme(currentTheme === 'dark' ? 'light' : 'dark');
            };

            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (savedTheme) {
                setTheme(savedTheme);
            } else {
                setTheme(prefersDark ? 'dark' : 'light');
            }

            themeToggleBtnDesktop.addEventListener('click', toggleTheme);
            themeToggleBtnMobile.addEventListener('click', toggleTheme);

            const menuToggleBtn = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebar-overlay');

            const toggleSidebar = () => {
                const isVisible = sidebar.style.transform === 'translateX(0px)';
                sidebar.style.transform = isVisible ? 'translateX(-100%)' : 'translateX(0px)';
                sidebarOverlay.classList.toggle('hidden', isVisible);
            };

            menuToggleBtn.addEventListener('click', toggleSidebar);
            sidebarOverlay.addEventListener('click', toggleSidebar);
            
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const searchTerm = e.target.value.toLowerCase();
                    console.log('Searching for:', searchTerm);
                });
                
                document.addEventListener('keydown', function(e) {
                    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                        e.preventDefault();
                        searchInput.focus();
                    }
                });
            }
             
            // Chart.js Bar Chart
            const ctx = document.getElementById('dataChart').getContext('2d');

            // Define color schemes for light and dark themes
            const lightThemeColors = {
                backgrounds: [
                    'rgba(99, 102, 241, 0.8)',  // Indigo
                    'rgba(16, 185, 129, 0.8)',   // Green
                    'rgba(245, 158, 11, 0.8)'    // Yellow
                ],
                borders: [
                    'rgba(99, 102, 241, 1)',
                    'rgba(16, 185, 129, 1)',
                    'rgba(245, 158, 11, 1)'
                ],
                grid: 'rgba(0, 0, 0, 0.1)',
                ticks: '#6b7280'
            };

            const darkThemeColors = {
                backgrounds: [
                    'rgba(129, 140, 248, 0.8)', // Lighter Indigo for dark mode
                    'rgba(52, 211, 153, 0.8)',  // Lighter Green
                    'rgba(251, 191, 36, 0.8)'   // Lighter Yellow
                ],
                borders: [
                    'rgba(129, 140, 248, 1)',
                    'rgba(52, 211, 153, 1)',
                    'rgba(251, 191, 36, 1)'
                ],
                grid: 'rgba(255, 255, 255, 0.1)',
                ticks: '#9ca3af'
            };

            const dataChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Sliders', 'Total Products', 'Total Categories'],
                    datasets: [{
                        label: 'Count',
                        data: [12, 150, 25], // Using your hard-coded data
                        backgroundColor: lightThemeColors.backgrounds,
                        borderColor: lightThemeColors.borders,
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#ffffff',
                            bodyColor: '#ffffff',
                            borderColor: 'rgba(255, 255, 255, 0.2)',
                            borderWidth: 1,
                            cornerRadius: 8,
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    return context.parsed.y + ' items';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: lightThemeColors.grid,
                                drawBorder: false
                            },
                            ticks: {
                                color: lightThemeColors.ticks,
                                font: {
                                    size: 12
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: lightThemeColors.ticks,
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            });
            
            // Dark theme support for chart
            const updateChartTheme = () => {
                const isDark = document.documentElement.classList.contains('dark');
                const colors = isDark ? darkThemeColors : lightThemeColors;

                // Update bar colors
                dataChart.data.datasets[0].backgroundColor = colors.backgrounds;
                dataChart.data.datasets[0].borderColor = colors.borders;

                // Update grid and text colors
                dataChart.options.scales.y.grid.color = colors.grid;
                dataChart.options.scales.y.ticks.color = colors.ticks;
                dataChart.options.scales.x.ticks.color = colors.ticks;
                
                dataChart.update();
            };
            
            // Hijack the original setTheme function to ensure the chart updates
            const originalSetTheme = setTheme;
            setTheme = (theme) => {
                originalSetTheme(theme);
                // Use a small timeout to allow the DOM to update before the chart redraws
                setTimeout(updateChartTheme, 50); 
            };
            
            // Initial theme update for the chart on page load
            updateChartTheme();
            
            // --- SIDEBAR SUBMENU TOGGLE ---
            const submenuToggles = document.querySelectorAll('.has-submenu > .nav-link');
            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    const parent = toggle.parentElement;
                    parent.classList.toggle('active');
                });
            });
        });
     </script>
     
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>