<?php
// Page settings for header.php
$pageTitle = 'The Art of Coffee Brewing'; 
$pageStylesheets = ['assets/css/learn.css'];

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex flex-1 justify-center py-12 md:py-16">
    <div class="w-full max-w-4xl px-4">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumb" data-aos="fade-up">
            <a href="learn.php">Learn</a>
            <span class="mx-2">/</span>
            <span>The Art of Coffee Brewing</span>
        </div>

        <article>
            <!-- Article Header -->
            <header class="article-header" data-aos="fade-up">
                <h1 class="text-5xl font-bold leading-tight tracking-tight">The Art of Coffee Brewing</h1>
                <p class="subtitle">
                    A comprehensive guide to the essential techniques and equipment for crafting the perfect cup at home.
                </p>
            </header>
            
            <!-- Author Meta Data (Improvement) -->
            <div class="article-meta" data-aos="fade-up" data-aos-delay="100">
                <img class="author-avatar" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&q=80&fm=jpg&crop=faces&cs=srgb&w=96&h=96&fit=crop" alt="Author Sophia Bennett">
                <div class="meta-text">
                    <div class="author-name">By Sophia Bennett</div>
                    <div class="publish-date">Published on July 28, 2025 &middot; 7 min read</div>
                </div>
            </div>

            <!-- Main Image -->
            <div class="mb-12 aspect-[16/9] w-full overflow-hidden rounded-lg" data-aos="fade-up" data-aos-delay="200">
                <img alt="A detailed shot of coffee being poured." class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop">
            </div>
            
            <!-- Article Content -->
            <div class="prose max-w-none article-content" data-aos="fade-up" data-aos-delay="300">
                <p>The journey to exceptional coffee begins with selecting high-quality beans. Consider factors like origin, roast level, and processing method to find beans that match your taste preferences. Freshly roasted beans, ground just before brewing, release the most aromatic flavors.</p>
                
                <h2>Brewing Methods</h2>
                <p>Explore various brewing methods, each offering a unique flavor profile. From the immersion of a French press to the precision of a pour-over, understanding these techniques allows you to tailor your brew to perfection. Experiment with different methods to discover your favorite.</p>
                
                <img alt="Various coffee brewing methods displayed." src="https://images.unsplash.com/photo-1510972527921-b0f7d54e0c46?q=80&w=1200&auto=format&fit=crop">
                
                <h2>Grinding Your Coffee</h2>
                <p>The grind size significantly impacts the extraction process. A coarser grind is ideal for immersion methods like the French press, while a finer grind suits espresso. Consistent grind size ensures even extraction, preventing bitterness or sourness in your final brew.</p>
                
                <h2>Water Quality and Temperature</h2>
                <p>Water quality and temperature are crucial for optimal coffee extraction. Use filtered water to remove impurities that can affect taste. The ideal brewing temperature is between 195°F and 205°F (90°C to 96°C), allowing for proper flavor development without scorching the grounds.</p>
            </div>
        </article>
        
        <!-- Related Content Section -->
        <section class="mt-20 related-posts">
            <h2 class="text-3xl font-bold mb-8" data-aos="fade-up">Related Content</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                
                <!-- Related Card 1 -->
                <div class="related-card" data-aos="fade-up" data-aos-delay="100">
                    <a href="#">
                        <img alt="Latte art" class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop">
                        <div class="p-4 font-sans">
                            <h3 class="text-lg font-semibold">Latte Art Techniques</h3>
                            <p class="text-sm opacity-70 mt-1">Master the art of latte art with our step-by-step guide.</p>
                        </div>
                    </a>
                </div>

                <!-- Related Card 2 -->
                <div class="related-card" data-aos="fade-up" data-aos-delay="200">
                    <a href="#">
                        <img alt="Coffee beans from different origins" class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop">
                        <div class="p-4 font-sans">
                            <h3 class="text-lg font-semibold">Understanding Coffee Origins</h3>
                            <p class="text-sm opacity-70 mt-1">Explore the diverse world of coffee bean origins and their unique flavors.</p>
                        </div>
                    </a>
                </div>

                <!-- Related Card 3 -->
                <div class="related-card" data-aos="fade-up" data-aos-delay="300">
                    <a href="#">
                        <img alt="A person holding a coffee cup" class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1545665225-b23b99e4d45e?q=80&w=800&auto=format&fit=crop">
                        <div class="p-4 font-sans">
                            <h3 class="text-lg font-semibold">The Perfect Coffee Cup</h3>
                            <p class="text-sm opacity-70 mt-1">Discover the ideal cup for enhancing your coffee experience.</p>
                        </div>
                    </a>
                </div>

            </div>
        </section>

    </div>
</main>

<?php include 'templates/footer.php'; ?>