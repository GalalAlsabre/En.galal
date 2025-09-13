<?php
// Page settings
$pageTitle = 'Cookies Policy'; 
$pageStylesheets = ['assets/css/legal.css']; // We load the new legal styles

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow">
    <div class="legal-container">
        <div data-aos="fade-up">
            <h2 class="font-bold">Cookies Policy</h2>
            <p class="page-subtitle">
                This Cookies Policy explains how Stillness Aroma uses cookies and similar technologies to recognize you when you visit our website. It explains what these technologies are and why we use them, as well as your rights to control our use of them.
            </p>
        </div>

        <div class="space-y-10">
            <section data-aos="fade-up">
                <h3 class="font-bold">What are cookies?</h3>
                <p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>
            </section>
            
            <section data-aos="fade-up">
                <h3 class="font-bold">Why do we use cookies?</h3>
                <p>We use cookies for several reasons. Some cookies are required for technical reasons in order for our website to operate, and we refer to these as 'essential' cookies. Other cookies enable us to track and target the interests of our users to enhance the experience on our website.</p>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">What types of cookies do we use?</h3>
                <div class="cookie-table">
                    <!-- Row 1 -->
                    <div class="cookie-table-row">
                        <div class="cookie-table-header"><p>Essential Cookies</p></div>
                        <div class="cookie-table-data"><p>These cookies are strictly necessary to provide you with services available through our website and to use some of its features, such as access to secure areas.</p></div>
                    </div>
                    <!-- Row 2 -->
                    <div class="cookie-table-row">
                        <div class="cookie-table-header"><p>Performance Cookies</p></div>
                        <div class="cookie-table-data"><p>These cookies are used to enhance the performance and functionality of our website but are non-essential to their use.</p></div>
                    </div>
                    <!-- Row 3 -->
                    <div class="cookie-table-row">
                        <div class="cookie-table-header"><p>Analytics Cookies</p></div>
                        <div class="cookie-table-data"><p>These cookies collect information that is used to help us understand how our website is being used or how effective our marketing campaigns are.</p></div>
                    </div>
                </div>
            </section>

            <section data-aos="fade-up">
                <h3 class="font-bold">Where can I get further information?</h3>
                <p>If you have any questions about our use of cookies or other technologies, please email us at <a href="mailto:privacy@stillnessaroma.com">privacy@stillnessaroma.com</a>.</p>
            </section>
        </div>
    </div>
</main>

<?php include 'templates/footer.php'; ?>