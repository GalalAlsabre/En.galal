<?php
$pageTitle = 'Coffee Equipment'; 
$pageStylesheets = ['assets/css/equipment.css']; 
include 'templates/header.php'; 
?>

<main class="flex-1 px-4 md:px-10 py-12">
    <div class="mx-auto max-w-7xl">
        <div class="mb-10 text-center" data-aos="fade-up">
            <h2 class="text-5xl font-bold">Coffee Equipment</h2>
            <p class="mt-4 text-lg text-[var(--c-text-subtle)] max-w-2xl mx-auto">Discover the best tools to elevate your coffee brewing experience.</p>
        </div>
        
        <div class="mb-12 max-w-lg mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="relative"><span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[var(--c-text-subtle)]">search</span>
                <input class="search-input" placeholder="Search for equipment..." type="search" />
            </div>
        </div>
        
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php 
            $products = [
                ['name' => 'Espresso Machine', 'desc' => 'High-pressure brewing for rich, aromatic espresso shots.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
                ['name' => 'Pour Over Kettle', 'desc' => 'Precise water control for a perfect pour-over coffee.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
                ['name' => 'Coffee Grinder', 'desc' => 'Consistent grind size for optimal coffee extraction.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'],
                ['name' => 'French Press', 'desc' => 'Full immersion brewing for a bold, rich flavor.', 'img' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop']
            ];
            foreach ($products as $index => $product): ?>
            <div class="group equipment-card" data-aos="fade-up" data-aos-delay="<?= ($index + 2) * 100 ?>">
                <div class="overflow-hidden"><div class="equipment-card-image" style="background-image: url('<?= htmlspecialchars($product['img']) ?>');"></div></div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-xl font-bold"><?= htmlspecialchars($product['name']) ?></h3>
                    <p class="mt-2 flex-1 text-base text-[var(--c-text-subtle)]"><?= htmlspecialchars($product['desc']) ?></p>
                    <div class="mt-6 flex gap-3">
                        <button class="flex-1 btn btn-secondary" data-micromodal-trigger="compare-modal">Compare</button>
                        <button class="flex-1 btn btn-primary">View Details</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<div class="modal micromodal-slide" id="compare-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true">
            <header class="p-4 border-b border-[var(--c-border)] flex justify-between items-center"><h2 class="text-xl font-bold">Compare Equipment</h2><button class="text-2xl hover:opacity-70" aria-label="Close modal" data-micromodal-close>&times;</button></header>
            <main class="p-6"><p>Comparison details would go here.</p></main>
        </div>
    </div>
</div>

<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 600 });
  MicroModal.init();
</script>

<?php include 'templates/footer.php'; ?>