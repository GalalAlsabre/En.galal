<?php
// Page settings
$pageTitle = 'Forgot Password'; 
$pageStylesheets = ['assets/css/auth.css']; // We load the new auth styles

include 'templates/header.php'; // Use '../' because we are inside the 'auth' folder
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="auth-page">
    <div class="auth-card" data-aos="fade-up">
        
        <div class="auth-card-header">
            <h2 class="font-bold">Forgot your password?</h2>
            <p>Enter your email and we'll send you a reset link.</p>
        </div>
        
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required 
                       class="form-input" 
                       placeholder="Email Address">
            </div>

            <div>
                <button type="submit" class="btn-primary">
                    Send Reset Link
                </button>
            </div>
        </form>

        <div class="auth-footer-link">
            <a href="login.php">
                Remember your password? Sign in
            </a>
        </div>
        
    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>