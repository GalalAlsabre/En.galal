<?php
// Page settings
$pageTitle = 'Edit Recipe';
include 'templates/header.php'; 
?>

<form class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Edit Recipe</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Modify the details of your existing coffee recipe.</p>
        </div>
        <div class="flex items-center gap-4">
            <button type="button" class="px-4 py-2 bg-white border border-[var(--admin-border)] text-sm font-semibold rounded-md hover:bg-gray-50">Discard Changes</button>
            <button type="submit" class="btn-primary">Save Changes</button>
        </div>
    </div>

    <!-- Main Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column: Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6 settings-form space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Recipe Title</label>
                        <input type="text" class="form-input text-base" value="Classic Espresso" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Description</label>
                        <textarea class="form-input min-h-24" placeholder="A brief summary of the recipe.">A timeless and fundamental coffee brewing method that produces a concentrated, flavorful shot.</textarea>
                    </div>
                </div>
            </div>
            <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Instructions</h3>
                <div class="p-6 space-y-4" id="sortable-steps">
                    <!-- Draggable Step -->
                    <div class="flex items-start gap-4 p-4 border border-[var(--admin-border)] rounded-md bg-[var(--admin-bg)] group">
                        <button type="button" class="cursor-move text-[var(--admin-text-secondary)] hover:text-[var(--admin-text-primary)] pt-1"><span class="material-symbols-outlined">drag_indicator</span></button>
                        <div class="flex-1 settings-form">
                            <label class="block text-sm font-medium">Step 1</label>
                            <textarea class="form-input mt-1 min-h-24 bg-white" placeholder="Describe the step">Grind the coffee beans to a fine, consistent powder.</textarea>
                        </div>
                        <button type="button" class="text-[var(--admin-text-secondary)] hover:text-red-500 opacity-50 group-hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">delete</span></button>
                    </div>
                    <!-- Add more steps as needed -->
                </div>
                <div class="p-6 border-t border-[var(--admin-border)]">
                    <button type="button" class="px-4 py-2 bg-gray-200 text-[var(--admin-text-primary)] text-sm font-semibold rounded-md hover:bg-gray-300 transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">add</span>
                        <span>Add Step</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Column: Sidebar Settings -->
        <div class="lg:col-span-1 space-y-8">
            <div class="admin-card" data-aos="fade-up" data-aos-delay="300">
                <div class="form-section">
                    <h3>Metadata</h3>
                    <div class="space-y-4 mt-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Category</label>
                            <select class="form-input"><option>Espresso</option></select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Status</label>
                            <select class="form-input"><option>Published</option><option>Draft</option></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="admin-card" data-aos="fade-up" data-aos-delay="400">
                <div class="form-section">
                    <h3>Featured Image</h3>
                    <div class="mt-4 flex justify-center px-6 pt-5 pb-6 border-2 border-[var(--admin-border)] border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <span class="material-symbols-outlined text-4xl text-[var(--admin-text-secondary)]">add_photo_alternate</span>
                            <div class="flex text-sm text-[var(--admin-text-secondary)]">
                                <label for="file-upload" class="relative cursor-pointer rounded-md font-medium text-[var(--admin-accent)] hover:underline">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- SortableJS Library -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
    const sortable = new Sortable(document.getElementById('sortable-steps'), {
        animation: 150,
        handle: '.cursor-move',
    });
</script>

<?php include 'templates/footer.php'; ?>