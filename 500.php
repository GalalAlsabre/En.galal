<?php
// Page settings
$pageTitle = 'Server Error'; 
$pageStylesheets = ['assets/css/utility-pages.css']; 

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->

<!-- This style tag is ONLY for the secondary button on this page -->
<style>
    .btn-secondary-utility {
        background-color: var(--c-bg-card);
        border: 1px solid var(--c-border);
        color: var(--c-text-body);
    }
    .btn-secondary-utility:hover {
        background-color: var(--c-bg-main);
        border-color: #DCD0C2;
    }
</style>

<main class="utility-page">
    <div class="utility-content" data-aos="fade-up">
        
        <!-- THE ICON as requested -->
        <div class="mb-6">
            <span class="material-symbols-outlined text-7xl md:text-8xl text-stone-300">error</span>
        </div>
        
        <h2 class="font-bold text-5xl">500</h2>
        
        <h3 class="font-bold text-3xl mt-4">Something went wrong</h3>
        
        <p class="mt-4">
            We've encountered an unexpected server error. Please try refreshing the page, or come back later. Our team has been notified.
        </p>

        <!-- The buttons with the corrected styling -->
        <div class="flex flex-col sm:flex-row gap-4 mt-8">
            <a href="index.php" class="btn-primary">
                Go to Homepage
            </a>
            <a href="contact.php" class="btn-primary btn-secondary-utility">
                Contact Support
            </a>
        </div>

    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>