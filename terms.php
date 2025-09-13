<?php
// Page settings
$pageTitle = 'Terms & Conditions'; 
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
            <h2 class="font-bold">Terms & Conditions</h2>
            <p class="page-subtitle">
                Last updated: October 20, 2025
            </p>
        </div>

        <div class="space-y-10">
            <section data-aos="fade-up">
                <p>Welcome to Stillness Aroma. By accessing or using our website, you agree to be bound by these Terms & Conditions. Please read them carefully.</p>
            </section>
            
            <section data-aos="fade-up">
                <h3 class="font-bold">1. Acceptance of Terms</h3>
                <p>By using our services, you agree to comply with and be bound by these Terms & Conditions. If you do not agree to these terms, please do not use our website.</p>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">2. Use of Our Services</h3>
                <p>You agree to use our services only for lawful purposes and in a manner that does not infringe the rights of, restrict, or inhibit anyone else's use and enjoyment of the website.</p>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">3. Intellectual Property</h3>
                <p>All content on this website, including text, graphics, logos, and images, is the property of Stillness Aroma and is protected by copyright laws. You may not reproduce or distribute works without our express written permission.</p>
            </section>
            
            <section data-aos="fade-up">
                <h3 class="font-bold">4. Limitation of Liability</h3>
                <p>To the fullest extent permitted by law, Stillness Aroma shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, resulting from your access to or use of our services.</p>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">5. Contact Us</h3>
                <p>If you have any questions about these Terms & Conditions, please contact us at <a href="mailto:contact@stillnessaroma.com">contact@stillnessaroma.com</a>.</p>
            </section>
        </div>
    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>