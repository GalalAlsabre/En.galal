<?php
// Page settings
$pageTitle = 'Coffee Recipes'; 
$pageStylesheets = ['assets/css/recipes.css'];

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow py-12 md:py-16">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="recipes-header" data-aos="fade-up">
            <h2 class="font-bold">Coffee Recipes</h2>
            <p>Explore a variety of coffee recipes to elevate your brewing experience. From classic preparations to innovative blends, find your perfect cup.</p>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar" data-aos="fade-up" data-aos-delay="100">
            <div class="filter-selects">
                <div class="filter-select"><select><option>Brew Method</option></select><i class="fas fa-chevron-down select-icon"></i></div>
                <div class="filter-select"><select><option>Roast Level</option></select><i class="fas fa-chevron-down select-icon"></i></div>
                <div class="filter-select"><select><option>Flavor Profile</option></select><i class="fas fa-chevron-down select-icon"></i></div>
            </div>
            <div class="view-toggle">
                <button class="active"><i class="fas fa-th-large"></i></button>
                <button><i class="fas fa-list"></i></button>
            </div>
        </div>

        <!-- Recipes Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php
            $recipes = [
                ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
               ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
               ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
                ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
                 ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
                  ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
                   ['title' => 'Classic Pour Over', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
            ];
            foreach ($recipes as $index => $recipe): ?>
                <a href="recipe_detail.php" class="recipe-card" data-aos="fade-up" data-aos-delay="<?= ($index % 4 + 1) * 100 ?>">
                    <div class="recipe-image-wrapper">
                        <img src="<?= $recipe['img'] ?>" alt="<?= $recipe['title'] ?>" class="recipe-image">
                    </div>
                    <h3 class="card-title"><?= $recipe['title'] ?></h3>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Pagination (We can reuse the styles from learn.css if available or create a global pagination style) -->
<nav class="pagination mt-12 flex items-center justify-center gap-2" data-aos="fade-up">
    <a href="#" class="disabled"><i class="fas fa-chevron-left"></i></a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <span class="disabled">...</span>
    <a href="#">10</a>
    <a href="#"><i class="fas fa-chevron-right"></i></a>
</nav>
    </div>
</main>

<?php include 'templates/footer.php'; ?>