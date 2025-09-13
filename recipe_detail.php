<?php
// Page settings
$pageTitle = 'Classic Pour Over'; 
$pageStylesheets = ['assets/css/recipe.css'];

include 'templates/header.php'; 
?>

<!-- =================================================================
MAIN CONTENT
================================================================== -->
<main class="flex-grow">
    <div class="recipe-container">
        <!-- Recipe Header -->
        <div class="recipe-header" data-aos="fade-up">
            <h1 class="font-bold">Classic Pour Over</h1>
            <p class="mt-3">A timeless method for a balanced and flavorful cup of coffee, perfect for highlighting the unique characteristics of single-origin beans.</p>
            <div class="flex flex-wrap gap-3 mt-6">
                <button class="btn btn-primary"><i class="fas fa-bookmark"></i> Save to Favorites</button>
                <button class="btn btn-secondary"><i class="fas fa-print"></i> Print Recipe</button>
            </div>
        </div>

        <!-- Recipe Body: Main Content + Sidebar -->
        <div class="recipe-body">
            <!-- Main Content: Ingredients & Instructions -->
            <div class="order-2 lg:order-1" data-aos="fade-up" data-aos-delay="100">
                <!-- Ingredients -->
                <section class="ingredients-list">
                    <h3 class="font-bold">Ingredients</h3>
                    <div class="space-y-3">
                        <label class="ingredient-item"><input type="checkbox" class="rounded"><p>25g of freshly roasted coffee beans</p></label>
                        <label class="ingredient-item"><input type="checkbox" class="rounded"><p>400ml of filtered water, heated to 92-96°C</p></label>
                        <label class="ingredient-item"><input type="checkbox" class="rounded"><p>Pour over device (e.g., Hario V60)</p></label>
                    </div>
                </section>

                <!-- Instructions -->
                <section class="instructions-list mt-12">
                    <h3 class="font-bold">Instructions</h3>
                    <div class="space-y-8">
                        <div class="instruction-step">
                            <div class="step-number">1</div>
                            <div>
                                <h4 class="step-title">Bloom</h4>
                                <p class="step-description">Place and rinse the filter. Add ground coffee. Start timer, pour 50g of water over grounds, ensuring they are all wet. Wait 30-45 seconds for the coffee to "bloom".</p>
                            </div>
                        </div>
                        <div class="instruction-step">
                            <div class="step-number">2</div>
                            <div>
                                <h4 class="step-title">Brew</h4>
                                <p class="step-description">After the bloom, continue pouring the remaining water in slow, steady circles. Aim to finish your pour by 2:30. Total brew time should be around 3 minutes.</p>
                            </div>
                        </div>
                        <div class="instruction-step">
                            <div class="step-number">3</div>
                            <div>
                                <h4 class="step-title">Serve</h4>
                                <p class="step-description">Once all water has drained, remove the dripper. Give your brew a gentle swirl, let it cool for a minute, and enjoy your freshly brewed coffee!</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar: Recipe Info -->
            <aside class="order-1 lg:order-2" data-aos="fade-left" data-aos-delay="200">
                <div class="recipe-info-card">
                    <h3 class="font-bold">Recipe Information</h3>
                    <div class="space-y-2">
                        <div class="info-item"><span class="label">Prep time</span><span class="value">5 minutes</span></div>
                        <div class="info-item"><span class="label">Brew time</span><span class="value">3 minutes</span></div>
                        <div class="info-item"><span class="label">Servings</span><span class="value">1 cup</span></div>
                        <div class="info-item"><span class="label">Difficulty</span><span class="value">Beginner</span></div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php 
include 'templates/footer.php'; 
?>