<?php
// Page settings
$pageTitle = 'Under Maintenance'; 
$pageStylesheets = ['assets/css/utility-pages.css']; // We load the new utility page styles

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="utility-page">
    <div class="utility-content" data-aos="fade-up">
        
        <div class="utility-image">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQPZ8deJ1WnyCxLvu3DbrokVUIqW3s3cuXFjqHrwGPfOg13JZkNbuPcFB4L-edhAsvz-P7IEQmeW3yFcq3U3_LejJ8_UKJPb5OVh3yJApyUIkhOSnIlep1VoVP1BIlnDc_pOTVOecdNGL_Tdp_vHAzD-qPAE8dLUy7tgeMgnyaQ1pZk7IgzcxDJooNlhe1RHs__a-sSCs5glWM6C2ht9pYQZSJDgHOyo8B9BJbrGm_3WYTyLv2X7tvXRD0rQfWkqZSnbKt3cYdjc8" alt="Maintenance Illustration">
        </div>
        
        <h2 class="font-bold">We're brewing up something special</h2>
        
        <p>
            Our site is currently undergoing scheduled maintenance. We expect to be back online shortly. Thank you for your patience.
        </p>

        <a href="index.php" class="btn-primary">
            Back to Home
        </a>

    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>