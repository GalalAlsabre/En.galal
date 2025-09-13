<?php
// Page settings
$pageTitle = 'SEO Settings';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">SEO Settings</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Manage your site's search engine optimization settings.</p>
    </div>

    <form class="space-y-8">
        <!-- Global SEO Card -->
        <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
            <div class="form-section">
                <h3>Global SEO Settings</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium mb-1">Meta Title</label>
                        <input type="text" placeholder="e.g., Stillness Aroma - Coffee Education" class="form-input" />
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium mb-1">Meta Description</label>
                        <textarea class="form-input min-h-24" placeholder="Describe your website for search engines."></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Keywords</label>
                        <input type="text" placeholder="coffee, education, recipes" class="form-input" />
                        <p class="mt-1 text-xs text-[var(--admin-text-secondary)]">Separate keywords with commas.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Specific Page Settings Card -->
        <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
            <div class="form-section">
                <h3>Homepage Settings</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-1">Canonical URL</label>
                        <input type="url" placeholder="https://www.stillnessaroma.com" class="form-input" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Robot Directives</label>
                        <input type="text" placeholder="index, follow" class="form-input" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end" data-aos="fade-up" data-aos-delay="300">
            <button type="submit" class="btn-primary">Save Changes</button>
        </div>
    </form>
</div>

<?php include 'templates/footer.php'; ?>