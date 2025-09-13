<?php
// Page settings
$pageTitle = 'Media Gallery'; 
$pageStylesheets = ['assets/css/media.css'];

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow py-12 md:py-16">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="media-header" data-aos="fade-up">
            <h2 class="font-bold">Our Media Gallery</h2>
            <p>Explore the world of coffee through our lens. Click on any image or video to view it in full screen.</p>
        </div>

        <!-- Media Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php
            $mediaItems = [
                ['type' => 'image', 'url' => 'https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=1771&auto=format&fit=crop', 'icon' => 'zoom_in'],
                ['type' => 'video', 'url' => 'https://www.youtube.com/watch?v=kDIl-H2Zp-8', 'icon' => 'play_circle'],
                ['type' => 'image', 'url' => 'https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?q=80&w=1769&auto=format&fit=crop', 'icon' => 'zoom_in'],
                ['type' => 'image', 'url' => 'https://images.unsplash.com/photo-1525082756834-142a22591a2a?q=80&w=1770&auto=format&fit=crop', 'icon' => 'zoom_in'],
                ['type' => 'image', 'url' => 'https://images.unsplash.com/photo-1495743479034-7a2e8c33a925?q=80&w=1852&auto=format&fit=crop', 'icon' => 'zoom_in'],
                ['type' => 'video', 'url' => 'https://vimeo.com/229982548', 'icon' => 'play_circle'],
                ['type' => 'image', 'url' => 'https://images.unsplash.com/photo-1558961363-fa8fdf82db35?q=80&w=1664&auto=format&fit=crop', 'icon' => 'zoom_in'],
                ['type' => 'image', 'url' => 'https://images.unsplash.com/photo-1559922513-2a8a81b2390a?q=80&w=1770&auto=format&fit=crop', 'icon' => 'zoom_in'],
            ];
            foreach ($mediaItems as $index => $item): ?>
                <a href="<?= $item['url'] ?>" class="media-card glightbox" data-aos="fade-up" data-aos-delay="<?= ($index % 4 + 1) * 100 ?>">
                    <img src="<?= $item['url'] ?>" alt="Gallery item <?= $index + 1 ?>" class="media-image">
                    <div class="media-overlay">
                        <span class="material-symbols-outlined media-icon"><?= $item['icon'] ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php include 'templates/footer.php'; ?>