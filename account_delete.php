<?php
// Page settings
$pageTitle = 'Delete Account'; 
$pageStylesheets = ['assets/css/account.css']; // We REUSE the account styles

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
            <a href="account_profile.php" class="account-tab">Profile</a>
            <a href="account_settings.php" class="account-tab">Settings</a>
            <a href="account_delete.php" class="account-tab active">Security</a> <!-- Assuming Delete is under Security -->
        </nav>

        <!-- Delete Account Card -->
        <div class="account-card destructive-card" data-aos="fade-up" data-aos-delay="200">
            <form class="space-y-8 max-w-lg">
                <!-- Section Header -->
                <div class="form-section">
                    <h3>Delete Account</h3>
                    <p class="text-red-700">Once you delete your account, there is no going back. Please be certain.</p>
                </div>
                
                <!-- Form Content -->
                <div class="space-y-6">
                    <p class="text-sm text-[var(--c-text-body)]">
                        This action will permanently delete all your data, including your saved favorites, profile information, and any other associated content. To confirm this, please type your password.
                    </p>
                    <div>
                        <label class="block text-sm font-medium text-[var(--c-text-heading)] mb-2" for="password">Current Password</label>
                        <input id="password" name="password" placeholder="••••••••" type="password" class="form-input" required />
                    </div>
                </div>

                <!-- Form Footer -->
                <div class="form-footer">
                    <button type="submit" class="btn-danger">
                        Delete My Account
                    </button>
                </div>
            </form>
        </div>

    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>