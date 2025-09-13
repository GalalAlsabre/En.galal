<?php
// Page settings
$pageTitle = 'Search Results'; 
$pageStylesheets = ['assets/css/search.css'];

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow">
    <div class="search-container">
        <!-- Search Bar -->
        <div class="search-bar" data-aos="fade-up">
            <div class="search-icon"><i class="fas fa-search"></i></div>
            <input class="search-input" value="Coffee" type="search">
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="filter-tab active">All</a>
            <a href="#" class="filter-tab">Recipes</a>
            <a href="#" class="filter-tab">Articles</a>
        </div>

        <!-- Recipes Section -->
        <section class="results-section" data-aos="fade-up" data-aos-delay="200">
            <h2 class="font-bold">Recipes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $recipes = [
                    ['title' => 'Classic Espresso', 'desc' => 'A timeless <mark>coffee</mark> classic, the foundation for many other drinks.', 'img' => 'https://images.unsplash.com/photo-1511920183353-3c5c9ba3e551?q=80&w=800&auto=format&fit=crop'],
                    ['title' => 'Latte', 'desc' => 'A creamy <mark>coffee</mark> drink with espresso and steamed milk.', 'img' => 'https://images.unsplash.com/photo-1572442388855-4223a54a4a37?q=80&w=800&auto=format&fit=crop'],
                ];
                foreach ($recipes as $item): ?>
                <a href="recipe_detail.php" class="result-card info-card">
                    <div class="result-image"><img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>"></div>
                    <div class="p-4">
                        <p class="category">Recipe</p>
                        <h3><?= $item['title'] ?></h3>
                        <p><?= $item['desc'] ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Articles Section -->
        <section class="results-section" data-aos="fade-up" data-aos-delay="300">
            <h2 class="font-bold">Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $articles = [
                    ['title' => 'The History of Coffee', 'desc' => 'Explore the origins of <mark>coffee</mark>, from its discovery in Ethiopia to its global spread.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
                    ['title' => 'Types of Coffee Beans', 'desc' => 'Learn about the different varieties of <mark>coffee</mark> beans, including Arabica and Robusta.', 'img' => 'https://images.unsplash.com/photo-1559922513-2a8a81b2390a?q=80&w=800&auto=format&fit=crop'],
                ];
                foreach ($articles as $item): ?>
                <a href="learn_detail.php" class="result-card info-card">
                    <div class="result-image"><img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>"></div>
                    <div class="p-4">
                        <p class="category">Article</p>
                        <h3><?= $item['title'] ?></h3>
                        <p><?= $item['desc'] ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</main>

<?php include 'templates/footer.php'; ?>