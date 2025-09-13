<?php
$pageTitle = 'Favorites'; 
$pageStylesheets = ['assets/css/favorites.css']; 
include 'templates/header.php'; 

// --- Demo Data ---
// In a real application, this would come from a database.
// To test the empty state, just make this an empty array: $favorites = [];

// favorites.php -> Image Links Fix

// --- Demo Data (with guaranteed working image links) ---
$favorites = [
    ['name' => 'Classic Espresso', 'desc' => 'A rich, concentrated coffee brew.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
    ['name' => 'Iced Latte', 'desc' => 'Espresso and cold milk over ice.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
    ['name' => 'French Press', 'desc' => 'A full-bodied, steeped coffee brew.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
    ['name' => 'Cold Brew', 'desc' => 'Smooth, low-acid cold-steeped coffee.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
];

// ... rest of the file remains the same ...
?>


<main class="flex flex-1 justify-center py-12">
    <div class="w-full max-w-5xl px-4 md:px-10">

        <!-- Page Header -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8" data-aos="fade-up">
            <h2 class="text-4xl font-bold">Favorites</h2>
            <?php if (!empty($favorites)): // Show buttons only if there are items ?>
                <div class="flex items-center gap-2 page-actions">
                    <button class="btn btn-secondary">Remove Selected</button>
                    <button class="btn btn-danger">Clear All</button>
                </div>
            <?php endif; ?>
        </div>

        <?php if (empty($favorites)): ?>
            <!-- EMPTY STATE: Displayed when there are no favorite items -->
            <div class="empty-state" data-aos="fade-up" data-aos-delay="100">
                <div class="icon material-symbols-outlined">favorite</div>
                <h3 class="text-2xl font-bold">No Favorites Yet</h3>
                <p>You haven't added any recipes to your favorites. Start exploring and save the ones you love!</p>
                <a href="recipes.php" class="btn btn-primary">Explore Recipes</a>
            </div>

        <?php else: ?>
            <!-- GRID VIEW: Displayed when there are favorite items -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php foreach ($favorites as $index => $item): ?>
                    <div class="favorite-card" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <input type="checkbox" class="card-checkbox" />
                        <div class="card-image">
                            <img src="<?= htmlspecialchars($item['img']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="h-full w-full object-cover">
                        </div>
                        <div class="mt-2">
                            <h3 class="font-bold text-base"><?= htmlspecialchars($item['name']) ?></h3>
                            <p class="text-sm text-[var(--c-text-subtle)]"><?= htmlspecialchars($item['desc']) ?></p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                <?php endforeach; ?>
            </div>
            
        <?php endif; ?>

    </div>
</main>

<?php include 'templates/footer.php'; ?>