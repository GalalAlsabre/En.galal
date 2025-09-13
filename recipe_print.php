<?php
// We don't include header or footer templates for a print page
$pageTitle = 'Print Recipe: Classic Pour Over'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <!-- We still need the fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- We load ONLY the necessary CSS files -->
    <link href="assets/css/colors.css" rel="stylesheet">
    <link href="assets/css/print.css" rel="stylesheet">

    <!-- Add a script to trigger print automatically -->
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</head>
<body class="bg-white">
    
    <div class="print-container">
        <!-- Print Header -->
        <div class="print-header">
            <h1>Stillness Aroma</h1>
            <p>Your guide to the perfect cup.</p>
        </div>

        <!-- Recipe Details -->
        <div class="p-4">
            <div class="flex flex-wrap justify-between items-baseline gap-4 mb-4">
                <h2 class="recipe-title">Perfect Pour-Over Coffee</h2>
                <p class="recipe-meta">Prep: 5 min | Brew: 3 min | Serves: 1</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <!-- Ingredients -->
                <div class="md:col-span-1">
                    <h3 class="section-title">Ingredients</h3>
                    <ul class="ingredients-list space-y-2">
                        <li><span class="checkbox"></span> 25g of freshly roasted coffee beans</li>
                        <li><span class="checkbox"></span> 400g of filtered water</li>
                        <li><span class="checkbox"></span> Pour-over device (e.g., Hario V60)</li>
                        <li><span class="checkbox"></span> Filter paper</li>
                        <li><span class="checkbox"></span> Gooseneck kettle</li>
                    </ul>
                </div>

                <!-- Instructions -->
                <div class="md:col-span-2">
                    <h3 class="section-title">Instructions</h3>
                    <ol class="instructions-list space-y-4 list-decimal list-inside">
                        <li>Grind coffee beans to a medium-coarse consistency.</li>
                        <li>Place and rinse filter paper with hot water. Discard water.</li>
                        <li>Add ground coffee to the filter paper.</li>
                        <li>Bloom the coffee by pouring about 50g of water and waiting 30 seconds.</li>
                        <li>Slowly pour the remaining water in a circular motion. Aim for a total brew time of 3 minutes.</li>
                        <li>Once all water has passed through, remove the pour-over device and enjoy.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</body>
</html>