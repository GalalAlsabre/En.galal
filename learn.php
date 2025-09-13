<?php
// Page settings
$pageTitle = 'Learning Hub'; 
$pageStylesheets = ['assets/css/learn.css']; // We load the new learn styles

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow py-12 md:py-16">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="learn-header" data-aos="fade-up">
            <h2 class="font-bold">Learning Hub</h2>
            <p>Dive deep into the world of coffee. From bean to cup, explore our articles and guides to elevate your coffee knowledge.</p>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar" data-aos="fade-up" data-aos-delay="100">
            <div class="search-input-wrapper">
                <div class="search-input-icon"><i class="fas fa-search"></i></div>
                <input class="search-input" placeholder="Search articles..." type="text">
            </div>
            <div class="filter-tags">
                <button class="filter-tag active">All</button>
                <button class="filter-tag">Coffee</button>
                <button class="filter-tag">Brewing</button>
                <button class="filter-tag">Equipment</button>
            </div>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php
// learn.php -> Image Links Fix

$articles = [
    ['cat' => 'Brewing', 'title' => 'The Art of the Pour-Over', 'desc' => 'A step-by-step guide to achieving the perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
 ['cat' => 'Brewing', 'title' => 'The Art of the Pour-Over', 'desc' => 'A step-by-step guide to achieving the perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
 ['cat' => 'Brewing', 'title' => 'The Art of the Pour-Over', 'desc' => 'A step-by-step guide to achieving the perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
 ['cat' => 'Brewing', 'title' => 'The Art of the Pour-Over', 'desc' => 'A step-by-step guide to achieving the perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],
 ['cat' => 'Brewing', 'title' => 'The Art of the Pour-Over', 'desc' => 'A step-by-step guide to achieving the perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'], 
 ['cat' => 'Brewing', 'title' => 'The Art of the Pour-Over', 'desc' => 'A step-by-step guide to achieving the perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop'],   
];

// ... rest of the file remains the same ...

            foreach ($articles as $index => $article): ?>
                <a href="learn_detail.php" class="article-card info-card" data-aos="fade-up" data-aos-delay="<?= ($index + 2) * 50 ?>">
                    <div class="article-image"><img src="<?= $article['img'] ?>" alt="<?= $article['title'] ?>"></div>
                    <div class="p-4">
                        <p class="category"><?= $article['cat'] ?></p>
                        <h3><?= $article['title'] ?></h3>
                        <p><?= $article['desc'] ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <nav class="pagination" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="disabled"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </nav>
    </div>
</main>

<?php include 'templates/footer.php'; ?>