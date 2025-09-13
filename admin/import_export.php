<?php
// Page settings
$pageTitle = 'Data Management';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Data Management</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Import and export your platform data.</p>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Import Card -->
        <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Import Data</h3>
            <form class="p-6 space-y-6 settings-form">
                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Data Type</label>
                    <select class="form-input"><option>Select data type</option><option>Recipes</option><option>Users</option></select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">File Format</label>
                    <select class="form-input"><option>Select file format</option><option>CSV</option><option>JSON</option></select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Upload File</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-[var(--admin-border)] border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <span class="material-symbols-outlined text-4xl text-[var(--admin-text-secondary)]">cloud_upload</span>
                            <div class="flex text-sm text-[var(--admin-text-secondary)]">
                                <label for="file-upload" class="relative cursor-pointer rounded-md font-medium text-[var(--admin-accent)] hover:underline">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-[var(--admin-text-secondary)]">CSV, JSON up to 10MB</p>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">file_upload</span>
                        <span>Import Data</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Export Card -->
        <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Export Data</h3>
            <form class="p-6 space-y-6 settings-form">
                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Data Type</label>
                    <select class="form-input"><option>Select data type</option><option>All Content</option><option>Recipes</option><option>Users</option></select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">File Format</label>
                    <select class="form-input"><option>Select file format</option><option>CSV</option><option>JSON</option></select>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-6 py-2 bg-gray-200 text-[var(--admin-text-primary)] text-sm font-semibold rounded-md hover:bg-gray-300 transition-colors">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Export Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>