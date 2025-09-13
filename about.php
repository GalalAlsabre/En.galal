<?php
$pageTitle = 'About Us'; 
$pageStylesheets = ['assets/css/about.css'];

 include 'templates/header.php'; 


?>


            <!-- =================================================================
            MAIN CONTENT
            ================================================================== -->
            <main class="flex flex-1 justify-center py-12 md:py-16 px-4 md:px-10">
                <div class="flex flex-col w-full max-w-4xl">

                    <section class="text-center mb-16 md:mb-20" data-aos="fade-up">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">About Us</h2>
                        <p class="text-[var(--brand-light-brown)] text-lg max-w-3xl mx-auto leading-relaxed font-sans">
                            At Stillness Aroma, we are passionate about the art and science of coffee...
                        </p>
                    </section>

                    <section class="mb-16 md:mb-20">
                        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                            <div data-aos="fade-right" data-aos-delay="100">
                                <h3 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight">Our Story</h3>
                                <p class="text-[var(--brand-dark-brown)] text-base leading-relaxed mb-4 font-sans">
                                    Founded in 2023, Stillness Aroma was born from a shared love for coffee...
                                </p>
                                <p class="text-[var(--brand-dark-brown)] text-base leading-relaxed font-sans">
                                    We believe that coffee is more than just a morning ritual...
                                </p>
                            </div>
                            <div class="h-64 md:h-80 rounded-lg bg-cover bg-center our-story-image" data-aos="fade-left" data-aos-delay="200"></div>
                        </div>
                    </section>

<!-- "Meet Our Team" Section - CORRECTED HTML STRUCTURE -->
<section class="mb-16 md:mb-20">
    <h3 class="text-3xl md:text-4xl font-bold mb-10 text-center tracking-tight" data-aos="fade-up">Meet Our Team</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Team Member 1 -->
        <div class="team-card" data-aos="fade-up" data-aos-delay="100">
            <div class="team-avatar team-member-sophia"></div>
            <h4 class="team-name">Sophia Bennett</h4>
            <p class="team-role">Founder &amp; Head of Education</p>
        </div>

        <!-- Team Member 2 -->
        <div class="team-card" data-aos="fade-up" data-aos-delay="200">
            <div class="team-avatar team-member-ethan"></div>
            <h4 class="team-name">Ethan Carter</h4>
            <p class="team-role">Lead Barista &amp; Recipe Developer</p>
        </div>

        <!-- Team Member 3 -->
        <div class="team-card" data-aos="fade-up" data-aos-delay="300">
            <div class="team-avatar team-member-olivia"></div>
            <h4 class="team-name">Olivia Davis</h4>
            <p class="team-role">Community Manager</p>
        </div>

    </div>
    <p class="text-[var(--c-text-body)] text-base leading-relaxed mt-10 max-w-3xl mx-auto text-center font-sans" data-aos="fade-up">
        Our team is composed of experienced coffee professionals, educators, and enthusiasts...
    </p>
</section>
                    
                    <section class="mb-16 md:mb-20">
                        <h3 class="text-3xl md:text-4xl font-bold mb-10 text-center tracking-tight" data-aos="fade-up">Our Values</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                             <!-- Value 1 -->
                             <div class="flex flex-col gap-4 rounded-lg border border-[var(--brand-border)] bg-white p-6 hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                                <div class="text-[var(--brand-brown)]"><span class="material-symbols-outlined text-4xl">coffee</span></div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="text-xl font-bold leading-tight">Quality</h4>
                                    <p class="text-[var(--brand-light-brown)] text-sm font-normal leading-relaxed font-sans">We are committed to sourcing and presenting the highest quality coffee information and resources.</p>
                                </div>
                            </div>
                            <!-- Value 2 -->
                            <div class="flex flex-col gap-4 rounded-lg border border-[var(--brand-border)] bg-white p-6 hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                                <div class="text-[var(--brand-brown)]"><span class="material-symbols-outlined text-4xl">book_4</span></div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="text-xl font-bold leading-tight">Education</h4>
                                    <p class="text-[var(--brand-light-brown)] text-sm font-normal leading-relaxed font-sans">
                                        We believe in empowering our community with the knowledge and skills to brew exceptional coffee at home.
                                    </p>
                                </div>
                            </div>
                            <!-- Value 3 -->
                            <div class="flex flex-col gap-4 rounded-lg border border-[var(--brand-border)] bg-white p-6 hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                                <div class="text-[var(--brand-brown)]"><span class="material-symbols-outlined text-4xl">groups</span></div>
                                <div class="flex flex-col gap-1">
                                    <h4 class="text-xl font-bold leading-tight">Community</h4>
                                    <p class="text-[var(--brand-light-brown)] text-sm font-normal leading-relaxed font-sans">
                                        We strive to create a welcoming and inclusive space for coffee lovers to connect, share, and learn from one another.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="text-center bg-white p-8 md:p-12 rounded-lg border border-[var(--brand-border)]" data-aos="zoom-in-up">
                        <h3 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight">Contact Us</h3>
                        <p class="text-[var(--brand-light-brown)] text-lg max-w-2xl mx-auto leading-relaxed mb-6 font-sans">
                            We'd love to hear from you! If you have any questions, feedback, or suggestions, please don't hesitate to reach out.
                        </p>
                        <a class="text-[var(--brand-brown)] font-bold text-lg hover:underline font-sans" href="mailto:contact@stillnessaroma.com">contact@stillnessaroma.com</a>
                    </section>

                </div>
            </main>

<?php include 'templates/footer.php'; ?>