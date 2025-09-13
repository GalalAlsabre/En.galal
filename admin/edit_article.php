<?php
// Page settings
$pageTitle = 'Edit Article';
include 'templates/header.php'; 
?>

<form class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Edit Article</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Modify the content and settings of the article.</p>
        </div>
        <div class="flex items-center gap-4">
            <button type="button" class="px-4 py-2 bg-white border border-[var(--admin-border)] text-sm font-semibold rounded-md hover:bg-gray-50">Preview</button>
            <button type="submit" class="btn-primary">Update Article</button>
        </div>
    </div>

    <!-- Main Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column: Main Content -->
        <div class="lg:col-span-2 space-y-8">
            <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6 settings-form">
                    <label class="block text-lg font-bold mb-2">Article Title</label>
                    <input type="text" class="form-input text-lg" value="The Art of Pour-Over Coffee" />
                </div>
            </div>
            <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
                <div class="p-6 settings-form">
                    <label class="block text-lg font-bold mb-2">Article Content (WYSIWYG)</label>
                    <textarea class="form-input min-h-96" placeholder="Start writing your article here..."></textarea>
                </div>
            </div>
        </div>

        <!-- Right Column: Sidebar Settings -->
        <div class="lg:col-span-1 space-y-8">
           <!-- الكود المُعدَّل والنهائي -->
<div class="admin-card" data-aos="fade-up" data-aos-delay="300">
    <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Metadata</h3>
    <div class="p-6 space-y-4 settings-form">
        <div>
            <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Category</label>
            <select class="form-input">
                <option>Select a category</option>
                <option>Brewing Techniques</option>
                <option>Coffee Beans</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Status</label>
            <select class="form-input">
                <option>Draft</option>
                <option>Published</option>
            </select>
        </div>
    </div>
</div>
            <div class="admin-card" data-aos="fade-up" data-aos-delay="400">
                <div class="form-section">
                    <h3>Featured Image</h3>
                    <div class="mt-4 flex justify-center px-6 pt-5 pb-6 border-2 border-[var(--admin-border)] border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <span class="material-symbols-outlined text-4xl text-[var(--admin-text-secondary)]">photo_camera</span>
                            <div class="flex text-sm text-[var(--admin-text-secondary)]">
                                <label for="file-upload" class="relative cursor-pointer rounded-md font-medium text-[var(--admin-accent)] hover:underline">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include 'templates/footer.php'; ?>