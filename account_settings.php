<?php
// Page settings
$pageTitle = 'Account Settings'; 
$pageStylesheets = ['assets/css/account.css']; // We REUSE the account styles for consistency

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
            <a href="account_settings.php" class="account-tab active">Settings</a>
            <a href="#" class="account-tab">Security</a>
        </nav>

        <!-- Settings Form Card -->
        <div class="account-card" data-aos="fade-up" data-aos-delay="200">
            <form class="space-y-8 max-w-lg">
                <!-- Section 1: Email Notifications -->
                <div class="form-section">
                    <h3>Email Notifications</h3>
                    <p>Manage your email subscription preferences.</p>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center">
                        <input id="newsletter" name="newsletter" type="checkbox" checked
                               class="h-4 w-4 rounded border-[var(--c-border)] text-[var(--c-accent)] focus:ring-[var(--c-accent)]">
                        <label for="newsletter" class="ml-3 block text-sm font-medium text-[var(--c-text-heading)]">
                            Weekly Newsletter
                            <span class="block text-xs text-[var(--c-text-subtle)]">Receive our weekly roundup of new recipes and articles.</span>
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input id="promotions" name="promotions" type="checkbox"
                               class="h-4 w-4 rounded border-[var(--c-border)] text-[var(--c-accent)] focus:ring-[var(--c-accent)]">
                        <label for="promotions" class="ml-3 block text-sm font-medium text-[var(--c-text-heading)]">
                            Promotional Offers
                            <span class="block text-xs text-[var(--c-text-subtle)]">Get notified about special offers and discounts.</span>
                        </label>
                    </div>
                </div>

                <!-- Form Footer -->
                <div class="form-footer">
                    <button type="submit" class="btn-primary">Save Changes</button>
                </div>
            </form>
        </div>

    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>