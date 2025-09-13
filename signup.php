<?php
// Page settings
$pageTitle = 'Sign Up'; 
$pageStylesheets = ['assets/css/auth.css']; // We reuse the auth styles

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="auth-page">
    <div class="auth-card" data-aos="fade-up">
        
        <div class="auth-card-header">
            <h2 class="font-bold">Create Your Account</h2>
            <p>Join our community of coffee lovers.</p>
        </div>
        
        <form action="#" method="POST" class="space-y-6">
            <!-- Name Input -->
            <div class="input-with-icon">
                <i class="fas fa-user input-icon"></i>
                <label for="name" class="sr-only">Name</label>
                <input id="name" name="name" type="text" autocomplete="name" required 
                       class="form-input" 
                       placeholder="Full Name">
            </div>

            <!-- Email Input -->
            <div class="input-with-icon">
                <i class="fas fa-envelope input-icon"></i>
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required 
                       class="form-input" 
                       placeholder="Email Address">
            </div>

            <!-- Password Input -->
            <div>
                <div class="input-with-icon">
                    <i class="fas fa-lock input-icon"></i>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" required 
                           class="form-input" 
                           placeholder="Password">
                </div>
                <!-- Password Strength Meter -->
                <div class="mt-2">
                    <div class="password-strength-meter-bg">
                        <div id="password-strength-bar" class="password-strength-meter"></div>
                    </div>
                    <ul class="password-requirements">
                        <li id="req-length"><i class="icon fas fa-times-circle"></i> 8+ characters</li>
                        <li id="req-uppercase"><i class="icon fas fa-times-circle"></i> 1 uppercase</li>
                        <li id="req-number"><i class="icon fas fa-times-circle"></i> 1 number</li>
                        <li id="req-symbol"><i class="icon fas fa-times-circle"></i> 1 symbol</li>
                    </ul>
                </div>
            </div>

            <!-- Confirm Password Input (This was the missing field) -->
            <div class="input-with-icon">
                <i class="fas fa-check-circle input-icon"></i>
                <label for="confirm-password" class="sr-only">Confirm Password</label>
                <input id="confirm-password" name="confirm-password" type="password" autocomplete="new-password" required 
                       class="form-input" 
                       placeholder="Confirm Password">
            </div>

            <div>
                <button type="submit" class="btn-primary">
                    Create Account
                </button>
            </div>
        </form>

        <div class="auth-footer-link">
            <p>
                Already have an account? 
                <a href="login.php" class="font-medium text-[var(--c-accent)] hover:underline">Log in</a>
            </p>
        </div>
        
    </div>
</main>

<!-- JavaScript for Password Strength Meter (as it was before) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const strengthBar = document.getElementById('password-strength-bar');
    const reqs = {
        length: document.getElementById('req-length'),
        uppercase: document.getElementById('req-uppercase'),
        number: document.getElementById('req-number'),
        symbol: document.getElementById('req-symbol'),
    };

    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const value = passwordInput.value;
            let score = 0;
            
            const hasLength = value.length >= 8;
            const hasUppercase = /[A-Z]/.test(value);
            const hasNumber = /[0-9]/.test(value);
            const hasSymbol = /[^A-Za-z0-9]/.test(value);
            
            updateRequirement(reqs.length, hasLength);
            updateRequirement(reqs.uppercase, hasUppercase);
            updateRequirement(reqs.number, hasNumber);
            updateRequirement(reqs.symbol, hasSymbol);

            if (hasLength) score++;
            if (hasUppercase) score++;
            if (hasNumber) score++;
            if (hasSymbol) score++;

            strengthBar.className = 'password-strength-meter';
            if (score === 1 || score === 2) {
                strengthBar.classList.add('strength-weak');
            } else if (score === 3) {
                strengthBar.classList.add('strength-medium');
            } else if (score === 4) {
                strengthBar.classList.add('strength-strong');
            }
        });
    }

    function updateRequirement(element, isMet) {
        if (!element) return;
        const icon = element.querySelector('.icon');
        if (isMet) {
            element.classList.add('met');
            icon.classList.remove('fa-times-circle');
            icon.classList.add('fa-check-circle');
        } else {
            element.classList.remove('met');
            icon.classList.remove('fa-check-circle');
            icon.classList.add('fa-times-circle');
        }
    }
});
</script>

<?php 
include 'templates/footer.php'; 
?>