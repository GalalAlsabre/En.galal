<?php
// Page settings
$pageTitle = 'Contact Us'; 
$pageStylesheets = ['assets/css/contact.css'];

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex flex-1 items-center justify-center py-16 px-4 ">
    <div class="w-full max-w-lg contact-form-container">

        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold tracking-tight">Contact Us</h2>
            <p class="text-[var(--c-text-subtle)] text-lg mt-3">
                We'd love to hear from you. Please fill out the form below.
            </p>
        </div>

        <div class="mt-12" data-aos="fade-up" data-aos-delay="100">
            <!-- The Form -->
            <form id="contact-form" class="space-y-6" novalidate>
                <div>
                    <label class="block text-base font-medium mb-2" for="name">Name</label>
                    <input class="form-input" id="name" name="name" placeholder="Your Name" required type="text" />
                </div>
                <div>
                    <label class="block text-base font-medium mb-2" for="email">Email</label>
                    <input class="form-input" id="email" name="email" placeholder="you@example.com" required type="email" />
                </div>
                <div>
                    <label class="block text-base font-medium mb-2" for="subject">Subject</label>
                    <input class="form-input" id="subject" name="subject" placeholder="How can we help?" required type="text" />
                </div>
                <div>
                    <label class="block text-base font-medium mb-2" for="message">Message</label>
                    <textarea class="form-input form-textarea" id="message" name="message" placeholder="Your Message" required></textarea>
                </div>
                <div class="pt-4">
                    <button class="btn-primary" type="submit">Send Message</button>
                </div>
            </form>

            <!-- Success Message (Initially Hidden) -->
            <div id="success-message" class="success-message">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                    <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="mt-4 text-2xl font-bold">Thank You!</h3>
                <p class="mt-2 text-[var(--c-text-body)]">Your message has been sent successfully. We will get back to you as soon as possible.</p>
            </div>
        </div>
        
    </div>
</main>

<script src="assets/js/forms.js"></script>
<?php include 'templates/footer.php'; ?>