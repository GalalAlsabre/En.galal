<?php
// Page settings
$pageTitle = 'Login'; 
$pageStylesheets = ['assets/css/auth.css']; // We reuse the auth styles for consistency

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="auth-page">
    <div class="auth-card" data-aos="fade-up">
        
        <div class="auth-card-header">
            <h2 class="font-bold">Welcome Back</h2>
            <p>
                Don't have an account? 
                <a href="signup.php" class="font-medium text-[var(--c-accent)] hover:underline">Sign up</a>
            </p>
        </div>
        
        <form action="#" method="POST" class="space-y-6">
            <!-- Email Input with Icon -->
            <div class="input-with-icon">
                <i class="fas fa-envelope input-icon"></i>
                <label for="email-address" class="sr-only">Email or username</label>
                <input id="email-address" name="email" type="text" autocomplete="email" required 
                       class="form-input" 
                       placeholder="Email or username">
            </div>

            <!-- Password Input with Icon -->
            <div class="input-with-icon">
                <i class="fas fa-lock input-icon"></i>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required 
                       class="form-input" 
                       placeholder="Password">
            </div>

            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" 
                           class="h-4 w-4 rounded border-[var(--c-border)] text-[var(--c-accent)] focus:ring-[var(--c-accent)]">
                    <label for="remember-me" class="ml-2 block text-[var(--c-text-body)]">Remember me</label>
                </div>

                <div>
                    <a href="forgot.php" class="font-medium text-[var(--c-text-subtle)] hover:text-[var(--c-accent)] underline">
                        Forgot your password?
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="btn-primary">
                    Log In
                </button>
            </div>
        </form>
        
    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>