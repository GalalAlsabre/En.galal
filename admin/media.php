<?php
// Page settings
$pageTitle = 'Media Library';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Media Library</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Manage all your uploaded images and videos.</p>
    </div>

    <!-- Upload Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Upload New Media</h3>
        <div class="p-6">
            <div class="flex flex-col items-center justify-center gap-4 rounded-lg border-2 border-dashed border-[var(--admin-border)] p-12 text-center">
                <span class="material-symbols-outlined text-5xl text-[var(--admin-text-secondary)]">cloud_upload</span>
                <p class="text-[var(--admin-text-primary)] text-lg font-semibold">Drag and drop files here</p>
                <p class="text-[var(--admin-text-secondary)] text-sm">Or click to browse your files</p>
                <button class="btn-primary mt-4">Upload Files</button>
            </div>
        </div>
    </div>

    <!-- Existing Media Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 border-b border-[var(--admin-border)] flex flex-wrap justify-between items-center gap-4">
            <h3 class="text-lg font-bold">Existing Media</h3>
            <div class="flex items-center gap-2">
                <input class="h-10 w-64 rounded-md border-[var(--admin-border)] px-3 text-sm focus:outline-none focus:ring-2 focus:ring-[var(--admin-accent)]" placeholder="Search media..." type="search" />
            </div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-6">
            <?php
            $mediaItems = [
                'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=400&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1511920183353-3c5c9ba3e551?q=80&w=400&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1572442388855-4223a54a4a37?q=80&w=400&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=400&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1507135895182-39f3d5ce7223?q=80&w=400&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1563822652-031e21b7a7c1?q=80&w=400&auto=format&fit=crop',
            ];
            foreach ($mediaItems as $img): ?>
                <div class="group relative aspect-square">
                    <img src="<?= $img ?>" class="w-full h-full object-cover rounded-lg">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg flex items-center justify-center gap-2">
                        <button class="bg-white/80 rounded-full p-2 text-[var(--admin-text-primary)] hover:bg-white"><span class="material-symbols-outlined">edit</span></button>
                        <button class="bg-white/80 rounded-full p-2 text-red-600 hover:bg-white"><span class="material-symbols-outlined">delete</span></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>