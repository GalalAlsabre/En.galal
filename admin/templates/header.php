<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Admin';
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Stillness Aroma Admin</title>
    <!-- CSS and Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../assets/css/admin.css?v=<?php echo time(); ?>" rel="stylesheet">
    
</head>
<body class="admin-body bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="admin-sidebar" class="bg-white w-64 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50 flex flex-col border-r border-gray-200">
            <div class="sidebar-brand flex items-center gap-3 px-6 h-16 shrink-0">
                <i class="fas fa-coffee text-xl text-[var(--admin-accent)]"></i>
                <h1 class="sidebar-brand-text text-lg font-bold">Stillness Aroma</h1>
            </div>
            <!-- الكود المُعدَّل والنهائي -->
<nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto">
    <a href="dashboard.php" class="sidebar-link <?= ($activePage == 'dashboard') ? 'active' : '' ?>">
        <span class="material-symbols-outlined text-lg">dashboard</span>
        <span class="link-text">Dashboard</span>
    </a>
    <a href="recipes.php" class="sidebar-link <?= in_array($activePage, ['recipes', 'new_recipe', 'edit_recipe']) ? 'active' : '' ?>">
        <span class="material-symbols-outlined text-lg">menu_book</span>
        <span class="link-text">Recipes</span>
    </a>
    <a href="articles.php" class="sidebar-link <?= in_array($activePage, ['articles', 'new_article', 'edit_article']) ? 'active' : '' ?>">
        <span class="material-symbols-outlined text-lg">article</span>
        <span class="link-text">Articles</span>
    </a>
    <a href="users.php" class="sidebar-link <?= ($activePage == 'users') ? 'active' : '' ?>">
        <span class="material-symbols-outlined text-lg">group</span>
        <span class="link-text">Users</span>
    </a>
    <a href="feedback.php" class="sidebar-link <?= ($activePage == 'feedback') ? 'active' : '' ?>">
        <span class="material-symbols-outlined text-lg">comment</span>
        <span class="link-text">Feedback</span>
    </a>
    <a href="media.php" class="sidebar-link <?= ($activePage == 'media') ? 'active' : '' ?>">
        <span class="material-symbols-outlined text-lg">image</span>
        <span class="link-text">Media</span>
    </a>

    <!-- Settings Dropdown -->
    <div>
        <button type="button" class="sidebar-link w-full text-left" onclick="toggleDropdown()">
            <span class="material-symbols-outlined text-lg">settings</span>
            <span class="link-text">Settings</span>
            <span id="dropdown-icon" class="material-symbols-outlined text-lg ml-auto link-text transition-transform">expand_more</span>
        </button>
        <div id="settings-dropdown" class="hidden mt-1 pl-8 space-y-1">
            <a href="settings.php" class="sidebar-link text-xs <?= ($activePage == 'settings') ? 'active' : '' ?>">General</a>
            <a href="seo.php" class="sidebar-link text-xs <?= ($activePage == 'seo') ? 'active' : '' ?>">SEO</a>
            <a href="backups.php" class="sidebar-link text-xs <?= ($activePage == 'backups') ? 'active' : '' ?>">Backups</a>
            <a href="import_export.php" class="sidebar-link text-xs <?= ($activePage == 'import_export') ? 'active' : '' ?>">Import/Export</a>
            <a href="i18n.php" class="sidebar-link text-xs <?= ($activePage == 'i18n') ? 'active' : '' ?>">i18n</a>
            <a href="logs.php" class="sidebar-link text-xs <?= ($activePage == 'logs') ? 'active' : '' ?>">Logs</a>
        </div>
    </div>
</nav>
        </aside>

        <!-- Main Content -->
        <div id="main-content" class="flex-1 flex flex-col md:ml-64">
            <header class="admin-header flex items-center justify-between h-16 px-8 sticky top-0 z-30">
                <button id="menu-toggle" class=" text-xl text-[var(--admin-text-primary)]">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="hidden md:block"></div> <!-- Spacer -->
                <div class="flex items-center gap-4">
                    <p class="font-semibold text-sm">Admin</p>
                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100&auto=format&fit=crop" alt="Admin Avatar">
                </div>
            </header>
            <main class="p-4 md:p-8 flex-grow">