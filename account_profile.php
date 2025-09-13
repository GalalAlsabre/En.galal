<?php
// Page settings
$pageTitle = 'Account Profile'; 
$pageStylesheets = ['assets/css/account.css']; // We load the new account styles

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow">
    <div class="account-container">
        <h2 class="text-4xl font-bold mb-8" data-aos="fade-up">Account</h2>

        <!-- Account Navigation Tabs -->
        <nav class="account-tabs" data-aos="fade-up" data-aos-delay="100">
            <a href="account_profile.php" class="account-tab active">Profile</a>
            <a href="#" class="account-tab">Settings</a>
            <a href="#" class="account-tab">Security</a>
        </nav>

        <!-- Profile Form Card -->
        <div class="account-card" data-aos="fade-up" data-aos-delay="200">
            <form class="space-y-8 max-w-lg">
                <!-- Section Header -->
                <div class="form-section">
                    <h3>Profile Information</h3>
                    <p>Update your account's profile information and email address.</p>
                </div>
                
                <!-- Form Fields -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-[var(--c-text-heading)] mb-2" for="name">Name</label>
                        <input id="name" name="name" type="text" value="Eleanor Vance" class="form-input" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[var(--c-text-heading)] mb-2" for="email">Email address</label>
                        <input id="email" name="email" type="email" value="eleanor@stillness.com" class="form-input" />
                    </div><div>
                        <label class="block text-sm font-medium text-[var(--c-text-heading)] mb-2" for="password">New Password</label>
                        <input id="password" name="password" placeholder="••••••••" type="password" class="form-input" />
                        <p class="mt-2 text-xs text-[var(--c-text-subtle)]">Leave blank to keep your current password.</p>
                    </div>
                </div>

                <!-- Form Footer -->
                <div class="form-footer">
                    <button type="submit" class="btn-primary">Update Profile</button>
                </div>
            </form>
        </div>

    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>