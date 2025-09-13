<?php
$pageTitle = 'Account Settings';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Account Settings</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Manage your administrator profile and preferences.</p>
    </div>

    <!-- Settings Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <!-- We add the .settings-form class to the form to scope our styles -->
        <form class="settings-form">
            <!-- Profile Section -->
            <div class="form-section">
                <h3>Profile</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Name</label>
                        <input type="text" value="Admin" class="form-input" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Email</label>
                        <input type="email" value="admin@stillness.co" class="form-input" />
                    </div>
                </div>
            </div>

            <!-- Password Section -->
            <div class="form-section">
                <h3>Change Password</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">New Password</label>
                        <input type="password" placeholder="••••••••" class="form-input" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Confirm Password</label>
                        <input type="password" placeholder="••••••••" class="form-input" />
                    </div>
                </div>
            </div>

            <!-- Preferences Section -->
            <div class="form-section">
                <h3>Preferences</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Language</label>
                        <select class="form-input"><option>English</option></select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Time Zone</label>
                        <select class="form-input"><option>(GMT-08:00) Pacific Time</option></select>
                    </div>
                </div>
            </div>

            <!-- Form Footer -->
            <div class="form-footer">
                <button type="submit" class="btn-primary">Save All Changes</button>
            </div>
        </form>
    </div>
</div>

<?php include 'templates/footer.php'; ?>