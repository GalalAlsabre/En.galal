<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Stillness Aroma';
$pageStylesheets = isset($pageStylesheets) ? $pageStylesheets : [];
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Stillness Aroma</title>
    <!-- CSS and Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/css/colors.css?v=<?php echo time(); ?>" rel="stylesheet">
    <?php foreach ($pageStylesheets as $stylesheet): ?>
        <link href="<?= htmlspecialchars($stylesheet) ?>?v=<?php echo time(); ?>" rel="stylesheet">
    <?php endforeach; ?>
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>
<body class="">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <header class="sticky top-0 z-50">
            <div class="container mx-auto px-4 md:px-10 flex items-center justify-between">
                <a href="index.php" class="flex items-center gap-2">
                    <i class="fas fa-coffee text-xl"></i>
                    <h1 class="whitespace-nowrap">Stillness Aroma</h1>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="index.php" class="<?= ($activePage == 'index') ? 'active' : '' ?>">Home</a>
                    <a href="recipes.php" class="<?= ($activePage == 'recipes') ? 'active' : '' ?>">Recipes</a>
                    <a href="learn.php" class="<?= ($activePage == 'learn') ? 'active' : '' ?>">Learn</a>
                    <div class="dropdown">
                        <button class="dropdown-toggle whitespace-nowrap">More <i class="fas fa-chevron-down text-xs ml-1 "></i></button>
                        <div class="dropdown-menu">
                            <a href="equipment.php">Equipment</a>
                            <a href="media.php">Media</a>
                            <a href="simulator.php">Simulator</a>
                            <a href="about.php">About Us</a>
                            <a href="contact.php">Contact</a>
                        </div>
                    </div>
                </nav>
                
                <!-- Auth Buttons & Mobile Toggle -->
                <div class="flex items-center gap-2">
                    <a href="login.php" class="btn-header hidden md:flex">Login</a>
                    <button id="mobile-menu-button" class="md:hidden text-xl p-2">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation Menu (Hidden by default) -->
            <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
                <nav class="flex flex-col p-4 space-y-2">
                    <a href="index.php">Home</a>
                    <a href="recipes.php">Recipes</a>
                    <a href="learn.php">Learn</a>
                    <a href="equipment.php">Equipment</a>
                    <a href="media.php">Media</a>
                    <a href="simulator.php">Simulator</a>
                    <a href="about.php">About Us</a>
                    <a href="contact.php">Contact</a>
                    <a href="login.php" class="btn-header mt-2">Login</a>
                </nav>
            </div>
        </header>
        <main class="flex-grow">