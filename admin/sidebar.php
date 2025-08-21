<style>
    /* Sidebar-only styles (moved from index) */
    .sidebar {
        width: 280px;
        height: 100vh;
        background-color: var(--bg-secondary);
        position: fixed;
        left: 0;
        top: 0;
        display: flex;
        flex-direction: column;
        border-right: 1px solid var(--border-color);
        transition: transform var(--transition-speed) ease, background-color var(--transition-speed) ease;
        z-index: 1000;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 500;
    }

    .sidebar-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.5rem;
        padding-bottom: 2rem;
        margin-bottom: 1rem;
        border-bottom: 1px solid var(--border-color);
    }

    .sidebar-header .logo-icon { font-size: 2rem; color: var(--accent-primary); }
    .sidebar-header .logo-text { 
        font-size: 1.5rem; 
        font-weight: 700; 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        letter-spacing: 0.5px;
    }

    .sidebar-nav { 
        flex-grow: 1; 
        overflow-y: auto; 
        padding: 0 1.5rem; 
        list-style: none; /* Remove all bullet points */
    }
    .sidebar-nav::-webkit-scrollbar { width: 8px; }
    .sidebar-nav::-webkit-scrollbar-track { background: transparent; }
    .sidebar-nav::-webkit-scrollbar-thumb { background-color: var(--scrollbar-thumb); border-radius: 10px; border: 2px solid var(--bg-secondary); }
    .sidebar-nav::-webkit-scrollbar-thumb:hover { background-color: var(--scrollbar-thumb-hover); }

    .nav-item { 
        margin-bottom: 0.5rem; 
        list-style: none; /* Remove bullet points */
    }
    .nav-link {
        display: flex;
        align-items: center;
        padding: 0.8rem 1.2rem;
        border-radius: 8px;
        color: var(--text-secondary);
        font-size: 0.95rem;
        font-weight: 500;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        letter-spacing: 0.3px;
        transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease, transform var(--transition-speed) ease;
    }
    .nav-link:hover { background-color: rgba(var(--accent-primary-rgb), 0.1); color: var(--accent-primary); transform: translateX(5px); }
    .nav-link.active { background-color: var(--accent-primary); color: #fff; }
    .nav-link.active:hover { transform: translateX(0); background-color: var(--accent-primary); color: #fff; }
    .nav-link i { width: 20px; margin-right: 1rem; text-align: center; }

    /* Submenu */
    .has-submenu .nav-link { justify-content: space-between; }
    .submenu-toggle-icon { transition: transform var(--transition-speed) ease; }
    .has-submenu.active > .nav-link .submenu-toggle-icon { transform: rotate(90deg); }

    .submenu { max-height: 0; overflow: hidden; transition: max-height var(--transition-speed) ease-in-out; padding-left: 1rem; }
    .has-submenu.active > .submenu { max-height: 500px; }
    .submenu .nav-link { 
        padding: 0.6rem 1.2rem; 
        font-size: 0.9rem; 
        font-weight: 400;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        letter-spacing: 0.2px;
    }

    .sidebar-footer { margin-top: auto; padding: 1.5rem; }

    /* Mobile */
    @media (max-width: 768px) {
        .sidebar { transform: translateX(-100%); }
        .sidebar.open { transform: translateX(0); box-shadow: var(--shadow); }
    }
</style>

<nav class="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-chart-pie logo-icon"></i>
        <span class="logo-text">AdminPanel</span>
    </div>
    <br>
    <ul class="sidebar-nav">
        <li class="nav-item">
            <a href="index.php" class="nav-link active">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a href="#" class="nav-link">
                <div>
                    <i class="fas fa-images"></i>
                    <span>Gallery</span>
                </div>
                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
            </a>
            <ul class="submenu">
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>Audio</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="allAudio.php" class="nav-link"><span>All Audio</span></a></li>
                        <li class="nav-item"><a href="addAudio.php" class="nav-link"><span>Add Audio</span></a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>Photos</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="allPhotos.php" class="nav-link"><span>All Photos</span></a></li>
                        <li class="nav-item"><a href="addPhotos.php" class="nav-link"><span>Add Photos</span></a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>Videos</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="#" class="nav-link"><span>All Videos</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><span>Add Videos</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a href="#" class="nav-link">
                <div>
                    <i class="fas fa-newspaper"></i>
                    <span>News & Event</span>
                </div>
                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
            </a>
            <ul class="submenu">
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>News</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="#" class="nav-link"><span>All News</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><span>Add News</span></a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>News Articles</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="#" class="nav-link"><span>All Articles</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><span>Add Articles</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a href="#" class="nav-link">
                <div>
                    <i class="fas fa-bullhorn"></i>
                    <span>Public Notice</span>
                </div>
                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
            </a>
            <ul class="submenu">
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>Bid Notices</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="#" class="nav-link"><span>All Notices</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><span>Add Notices</span></a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>Vacancies</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item"><a href="#" class="nav-link"><span>All Vacancies</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><span>Add Vacancies</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a href="#" class="nav-link">
                <div>
                    <i class="fas fa-file-alt"></i>
                    <span>Publications</span>
                </div>
                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
            </a>
            <ul class="submenu">
                <li class="nav-item has-submenu">
                    <a href="#" class="nav-link">
                        <span>Publicity Materials</span>
                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li class="nav-item has-submenu">
                            <a href="#" class="nav-link">
                                <span>Brochures</span>
                                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li class="nav-item"><a href="#" class="nav-link"><span>All Brochures</span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><span>Add Brochures</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item has-submenu">
                            <a href="#" class="nav-link">
                                <span>Leaflets</span>
                                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li class="nav-item has-submenu">
                                    <a href="#" class="nav-link">
                                        <span>CSIAP</span>
                                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="nav-item"><a href="#" class="nav-link"><span>All CSIAP</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link"><span>Add CSIAP</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item has-submenu">
                                    <a href="#" class="nav-link">
                                        <span>Covid 19</span>
                                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="nav-item"><a href="#" class="nav-link"><span>All Covid 19</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link"><span>Add Covid 19</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-submenu">
                            <a href="#" class="nav-link">
                                <span>News Letters</span>
                                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li class="nav-item"><a href="#" class="nav-link"><span>All News Letters</span></a></li>
                                <li class="nav-item"><a href="#" class="nav-link"><span>Add News Letters</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item has-submenu">
                            <a href="#" class="nav-link">
                                <span>Posters</span>
                                <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li class="nav-item has-submenu">
                                    <a href="#" class="nav-link">
                                        <span>CSIAP</span>
                                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="nav-item"><a href="#" class="nav-link"><span>All CSIAP</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link"><span>Add CSIAP</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item has-submenu">
                                    <a href="#" class="nav-link">
                                        <span>Covid 19</span>
                                        <i class="fas fa-chevron-right submenu-toggle-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="nav-item"><a href="#" class="nav-link"><span>All Covid 19</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link"><span>Add Covid 19</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </div>
</nav>

