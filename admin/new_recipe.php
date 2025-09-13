<?php
// Page settings
$pageTitle = 'Create New Recipe';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Create New Recipe</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Fill out the form below to add a new recipe.</p>
    </div>

    <!-- Main Form -->
    <form class="space-y-8">
        <!-- Basic Info Card -->
        <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
            <div class="p-6 space-y-6 settings-form">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-1">Recipe Title</label>
                        <input type="text" placeholder="e.g., Classic Pour-Over" class="form-input" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Category</label>
                        <select class="form-input"><option>Select a category</option></select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea class="form-input min-h-24" placeholder="A brief summary of the recipe."></textarea>
                </div>
            </div>
        </div>

        <!-- Instructions Card -->
        <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Instructions</h3>
            <div class="p-6 space-y-4" id="sortable-steps">
                <!-- Draggable Step 1 -->
                <div class="flex items-start gap-4 p-4 border border-[var(--admin-border)] rounded-md bg-[var(--admin-bg)] group">
                    <button type="button" class="cursor-move text-[var(--admin-text-secondary)] hover:text-[var(--admin-text-primary)] pt-1"><span class="material-symbols-outlined">drag_indicator</span></button>
                    <div class="flex-1 settings-form">
                        <label class="block text-sm font-medium">Step 1</label>
                        <textarea class="form-input mt-1 min-h-24 bg-white" placeholder="Describe the first step"></textarea>
                    </div>
                    <button type="button" class="text-[var(--admin-text-secondary)] hover:text-red-500 opacity-50 group-hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">delete</span></button>
                </div>
                <!-- Draggable Step 2 -->
                <div class="flex items-start gap-4 p-4 border border-[var(--admin-border)] rounded-md bg-[var(--admin-bg)] group">
                    <button type="button" class="cursor-move text-[var(--admin-text-secondary)] hover:text-[var(--admin-text-primary)] pt-1"><span class="material-symbols-outlined">drag_indicator</span></button>
                    <div class="flex-1 settings-form">
                        <label class="block text-sm font-medium">Step 2</label>
                        <textarea class="form-input mt-1 min-h-24 bg-white" placeholder="Describe the second step"></textarea>
                    </div>
                    <button type="button" class="text-[var(--admin-text-secondary)] hover:text-red-500 opacity-50 group-hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">delete</span></button>
                </div>
            </div>
            <div class="p-6 border-t border-[var(--admin-border)]">
                <button type="button" class="px-4 py-2 bg-gray-200 text-[var(--admin-text-primary)] text-sm font-semibold rounded-md hover:bg-gray-300 transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg">add</span>
                    <span>Add Step</span>
                </button>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end gap-4" data-aos="fade-up" data-aos-delay="300">
            <button type="button" class="px-6 py-2 bg-white border border-[var(--admin-border)] text-sm font-semibold rounded-md hover:bg-gray-50 transition-colors">Save as Draft</button>
            <button type="submit" class="btn-primary">Publish Recipe</button>
        </div>
    </form>
</div>

<!-- SortableJS Library -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
    // Initialize SortableJS on the steps container
    const sortable = new Sortable(document.getElementById('sortable-steps'), {
        animation: 150,
        handle: '.cursor-move', // Use the drag handle to move items
    });
</script>

<?php include 'templates/footer.php'; ?>