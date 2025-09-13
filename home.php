<?php
$pageTitle = 'Home'; 
$pageStylesheets = ['assets/css/home.css']; 
include 'templates/header.php'; 
?>

<main class="flex-grow">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container mx-auto px-4">
            <div class="flex items-center min-h-[80vh]">
                <div class="w-full text-center hero-content" data-aos="fade-up">
                    <div class="coffee-cup-illustration mb-8"><i class="fas fa-coffee"></i></div>
                    <h1 class="hero-title">Elevate Your Coffee Ritual</h1>
                    <p class="hero-subtitle max-w-3xl mx-auto">Discover the art of coffee brewing with our curated recipes and expert lessons.</p>
                    <a href="recipes.php" class="inline-block font-bold text-white bg-[var(--coffee-brown)] hover:bg-[var(--dark-brown)] py-3 px-8 rounded-lg mt-4 transition-colors">Explore Recipes</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <div class="container mx-auto px-4 md:px-10 py-16 md:py-20">
        <!-- Featured Recipe Section -->
        <section class="mb-16 md:mb-20" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-center mb-12">Featured Recipe</h2>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 h-64 md:h-auto bg-cover bg-center min-h-[300px]" style="background-image: url('https://images.unsplash.com/photo-1512568400610-62da2848a094?q=80&w=987&auto=format&fit=crop');"></div>
                <div class="p-8 md:p-12 md:w-1/2">
                    <h3 class="text-3xl font-bold mb-4">The Perfect Pour-Over</h3>
                    <p class="text-base mb-6">Master the art of pour-over coffee with our step-by-step guide for a balanced and flavorful cup.</p>
                    <a href="#" class="inline-block font-bold text-white bg-[var(--coffee-brown)] hover:bg-[var(--dark-brown)] py-2 px-6 rounded-lg">View Recipe</a>
                </div>
            </div>
        </section>

        <!-- Latest Lesson Section -->
        <section class="mb-16 md:mb-20" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-center mb-12">Latest Lesson</h2>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row-reverse items-center">
                <div class="md:w-1/2 h-64 md:h-auto bg-cover bg-center min-h-[300px]" style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=987&auto=format&fit=crop');"></div>
                <div class="p-8 md:p-12 md:w-1/2">
                    <h3 class="text-3xl font-bold mb-4">Understanding Coffee Origins</h3>
                    <p class="text-base mb-6">Explore the diverse world of coffee origins, from Ethiopia to Guatemala.</p>
                                        <a href="#" class="inline-block font-bold text-white bg-[var(--coffee-brown)] hover:bg-[var(--dark-brown)] py-2 px-6 rounded-lg">View Recipe</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Newsletter Section -->
    <section class="newsletter-section py-16 md:py-20" data-aos="fade-up">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Join Our Coffee Community</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Stay up-to-date with the latest recipes, lessons, and brewing tips.</p>
            <form class="flex w-full max-w-md mx-auto">
                <input class="w-full rounded-l-lg border-0 focus:ring-2 focus:ring-[var(--coffee-brown)] text-[var(--black)] px-4 py-3" placeholder="Enter your email" type="email" required />
                <button class="bg-[var(--coffee-brown)] hover:bg-[var(--dark-brown)] text-white font-bold py-3 px-8 rounded-r-lg transition-colors" type="submit">Subscribe</button>
            </form>
        </div>
    </section>

<?php include 'templates/footer.php'; ?>