<?php
// Page settings
$pageTitle = 'Privacy Policy'; 
$pageStylesheets = ['assets/css/legal.css']; // We REUSE the legal styles for consistency

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow">
    <div class="legal-container">
        <!-- Page Header -->
        <div data-aos="fade-up">
            <h2 class="font-bold">Privacy Policy</h2>
            <p class="page-subtitle">
                Last updated: October 26, 2025
            </p>
        </div>

        <div class="space-y-10">
            <section data-aos="fade-up">
                <p>At Stillness Aroma, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you interact with our website and services. By using our platform, you consent to the practices described in this policy.</p>
            </section>
            
            <section data-aos="fade-up">
                <h3 class="font-bold">Information We Collect</h3>
                <p>We collect various types of information to provide and improve our services, including:</p>
                <ul class="list-disc list-inside space-y-4 pl-4 mt-4">
                    <li><strong>Personal Information:</strong> Such as your name, email address, and contact details when you create an account, subscribe to our newsletter, or contact us.</li>
                    <li><strong>Usage Data:</strong> Including your IP address, browser type, device information, pages visited, and the time and date of your visit.</li>
                </ul>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">How We Use Your Information</h3>
                <p>We use the collected information for various purposes, including to provide and maintain our platform, personalize your experience, communicate with you, and for analytics and improvement.</p>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">Data Security</h3>
                <p>We implement reasonable administrative, technical, and physical security measures to protect your information from unauthorized access, use, or disclosure. However, no method of transmission over the internet or electronic storage is completely secure.</p>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">Contact Us</h3>
                <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at <a href="mailto:privacy@stillnessaroma.com">privacy@stillnessaroma.com</a>.</p>
            </section>
        </div>
    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>