<?php
// Page settings
$pageTitle = 'Application Settings';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Application Settings</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Manage general application settings and configurations.</p>
    </div>

    <!-- Settings Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <form class="settings-form">
            <!-- General Section -->
            <div class="form-section">
                <h3>General</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center mt-6">
                    <div class="col-span-1"><label class="font-medium">Application Name</label></div>
                    <div class="col-span-2"><input type="text" value="Stillness Aroma" class="form-input" /></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center mt-6">
                    <div class="col-span-1"><label class="font-medium">Application Logo</label></div>
                    <div class="col-span-2 flex items-center gap-4">
                        <div class="w-16 h-16 bg-[var(--admin-bg)] rounded-md flex items-center justify-center border border-[var(--admin-border)]">
                            <i class="fas fa-coffee text-3xl text-[var(--admin-accent)]"></i>
                        </div>
                        <button type="button" class="px-4 py-2 bg-white border border-[var(--admin-border)] text-sm font-semibold rounded-md hover:bg-gray-50">Upload Logo</button>
                    </div>
                </div>
            </div>

            <!-- Notifications Section -->
            <div class="form-section">
                <h3>Notifications</h3>
                <div class="space-y-4 mt-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-medium">New User Sign-Ups</p>
                            <p class="text-sm text-[var(--admin-text-secondary)]">Receive email notifications for new user sign-ups.</p>
                        </div>
                        <label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer" checked><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-medium">New Recipe Uploads</p>
                            <p class="text-sm text-[var(--admin-text-secondary)]">Get notified for new recipe uploads.</p>
                        </div>
                        <label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer"><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label>
                    </div>
                </div>
            </div>

            <!-- Form Footer -->
            <div class="form-footer">
                <button type="submit" class="btn-primary">Save Settings</button>
            </div>
        </form>
    </div>
</div>

<?php include 'templates/footer.php'; ?>