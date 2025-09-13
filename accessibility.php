<?php

$pageTitle = 'Accessibility Statement'; 
$pageStylesheets = ['assets/css/legal.css']; 
include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex flex-1 justify-center py-16 px-4 md:px-10">
    <div class="w-full max-w-4xl legal-content">

        <h1 class="text-5xl font-bold tracking-tight" data-aos="fade-up">
            Accessibility Statement
        </h1>

        <p data-aos="fade-up" data-aos-delay="100">
            At Stillness Aroma, we are committed to ensuring that our website is accessible to everyone, including individuals with disabilities. We strive to provide a user-friendly experience that meets or exceeds the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.
        </p>

        <div class="space-y-12">
            <div data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-3xl font-bold tracking-tight">Accessibility Features</h2>
                <ul class="features-list mt-8">
                    <li data-aos="fade-up" data-aos-delay="300">
                        <span class="icon-wrapper">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <p>
                            <span class="font-semibold">Keyboard navigation:</span> Our website can be navigated using a keyboard alone, without the need for a mouse.
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400">
                        <span class="icon-wrapper">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <p>
                            <span class="font-semibold">Alternative text for images:</span> All images have descriptive alternative text to convey their meaning to users who cannot see them.
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="500">
                        <span class="icon-wrapper">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        <p>
                            <span class="font-semibold">Sufficient color contrast:</span> We ensure that text and background colors have sufficient contrast to meet WCAG 2.1 AA standards.
                        </p>
                    </li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="600">
                <h2 class="text-3xl font-bold tracking-tight">Feedback and Contact Information</h2>
                <p class="mt-4 text-lg">
                    We welcome your feedback on the accessibility of our website. If you encounter any accessibility barriers or have suggestions for improvement, please contact us at:
                </p>
                <div class="info-box">
                    <p>
                        <strong>Email:</strong> <a href="mailto:accessibility@stillnessaroma.com">accessibility@stillnessaroma.com</a>
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</main>

<?php include 'templates/footer.php'; ?>