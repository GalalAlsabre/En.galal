<?php
// Page settings
$pageTitle = 'Page Not Found'; 
$pageStylesheets = ['assets/css/utility-pages.css']; // We REUSE the utility page styles

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="utility-page">
    <div class="utility-content" data-aos="fade-up">
        
        <!-- You can add an optional illustration here if you want -->
        <!-- <div class="utility-image">
            <img src="path/to/your/404-image.svg" alt="Page Not Found Illustration">
        </div> -->

        <span class="text-7xl md:text-8xl font-bold text-[var(--c-accent)]">404</span>
        
        <h2 class="font-bold mt-6">Page Not Found</h2>
        
        <p>
            Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>

        <a href="index.php" class="btn-primary">
            Go to Homepage
        </a>

    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>