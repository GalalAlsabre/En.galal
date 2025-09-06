// ===== GLOBAL VARIABLES =====
let isLoggedIn = false;
let currentUser = null;
let favorites = JSON.parse(localStorage.getItem('stillness_favorites')) || [];
let recipes = [];
let learningContent = [];

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
    
    // Initialize navbar scroll effect
    initNavbarScrollEffect();
    
    // Initialize smooth scrolling
    initSmoothScrolling();
    
    // Check login status
    checkLoginStatus();
    
    // Initialize page-specific functionality
    initPageSpecificFeatures();
    
    // Initialize search functionality
    initSearchFunctionality();
    
    // Initialize filter functionality
    initFilterFunctionality();
    
    // Load dummy data
    loadDummyData();
});

// ===== NAVBAR SCROLL EFFECT =====
function initNavbarScrollEffect() {
    const navbar = document.getElementById('mainNavbar');
    if (!navbar) return;
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// ===== SMOOTH SCROLLING =====
function initSmoothScrolling() {
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 80; // Account for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ===== LOGIN STATUS =====
function checkLoginStatus() {
    const userData = localStorage.getItem('stillness_user');
    if (userData) {
        isLoggedIn = true;
        currentUser = JSON.parse(userData);
        updateUIForLoggedInUser();
    }
}

function updateUIForLoggedInUser() {
    const loginBtn = document.querySelector('a[href="login.html"]');
    if (loginBtn) {
        loginBtn.textContent = currentUser.name || 'Account';
        loginBtn.href = 'account.html';
    }
}

// ===== PAGE-SPECIFIC FEATURES =====
function initPageSpecificFeatures() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    
    switch(currentPage) {
        case 'index.html':
        case '':
            initHomePage();
            break;
        case 'recipes.html':
            initRecipesPage();
            break;
        case 'learning.html':
            initLearningPage();
            break;
        case 'favorites.html':
            initFavoritesPage();
            break;
        case 'login.html':
            initLoginPage();
            break;
        case 'signup.html':
            initSignupPage();
            break;
        case 'feedback.html':
        case 'contact.html':
            initFormPages();
            break;
        case 'account.html':
            initAccountPage();
            break;
        case 'admin.html':
            initAdminPage();
            break;
    }
}

// ===== HOME PAGE =====
function initHomePage() {
    // Add any home page specific functionality here
    console.log('Home page initialized');
}

// ===== RECIPES PAGE =====
function initRecipesPage() {
    displayRecipes();
    initRecipeModals();
}

function displayRecipes(filteredRecipes = null) {
    const recipesContainer = document.getElementById('recipesContainer');
    if (!recipesContainer) return;
    
    const recipesToShow = filteredRecipes || recipes;
    
    recipesContainer.innerHTML = recipesToShow.map(recipe => `
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="recipe-card h-100">
                <div class="recipe-image">
                    <img src="${recipe.image}" alt="${recipe.title}" class="img-fluid">
                    <div class="recipe-overlay">
                        <button class="btn btn-primary" onclick="openRecipeModal('${recipe.id}')">
                            <i class="fas fa-eye me-2"></i>View Recipe
                        </button>
                    </div>
                </div>
                <div class="recipe-content">
                    <div class="recipe-meta">
                        <span class="recipe-difficulty ${recipe.difficulty.toLowerCase()}">${recipe.difficulty}</span>
                        <span class="recipe-time"><i class="fas fa-clock me-1"></i>${recipe.time}</span>
                    </div>
                    <h4 class="recipe-title">${recipe.title}</h4>
                    <p class="recipe-description">${recipe.description}</p>
                    <div class="recipe-actions">
                        <button class="btn btn-outline-primary btn-sm" onclick="toggleFavorite('${recipe.id}')">
                            <i class="fas fa-heart ${favorites.includes(recipe.id) ? 'text-danger' : ''}"></i>
                        </button>
                        <button class="btn btn-primary btn-sm" onclick="openRecipeModal('${recipe.id}')">
                            View Recipe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

function initRecipeModals() {
    // Recipe modal functionality will be added here
}

function openRecipeModal(recipeId) {
    const recipe = recipes.find(r => r.id === recipeId);
    if (!recipe) return;
    
    // Create and show modal (simplified version)
    alert(`Recipe: ${recipe.title}\n\nIngredients:\n${recipe.ingredients.join('\n')}\n\nInstructions:\n${recipe.instructions.join('\n')}`);
}

// ===== LEARNING PAGE =====
function initLearningPage() {
    displayLearningContent();
}

function displayLearningContent() {
    const learningContainer = document.getElementById('learningContainer');
    if (!learningContainer) return;
    
    learningContainer.innerHTML = learningContent.map((content, index) => `
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="${index * 100}">
            <h2 class="accordion-header" id="heading${index}">
                <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" type="button" 
                        data-bs-toggle="collapse" data-bs-target="#collapse${index}">
                    <i class="${content.icon} me-3"></i>
                    ${content.title}
                </button>
            </h2>
            <div id="collapse${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" 
                 data-bs-parent="#learningContainer">
                <div class="accordion-body">
                    <p>${content.description}</p>
                    <div class="learning-topics">
                        ${content.topics.map(topic => `
                            <div class="topic-item">
                                <h6>${topic.title}</h6>
                                <p>${topic.content}</p>
                            </div>
                        `).join('')}
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

// ===== FAVORITES PAGE =====
function initFavoritesPage() {
    if (!isLoggedIn) {
        showLoginRequired();
        return;
    }
    displayFavorites();
}

function displayFavorites() {
    const favoritesContainer = document.getElementById('favoritesContainer');
    if (!favoritesContainer) return;
    
    const favoriteRecipes = recipes.filter(recipe => favorites.includes(recipe.id));
    
    if (favoriteRecipes.length === 0) {
        favoritesContainer.innerHTML = `
            <div class="text-center py-5">
                <i class="fas fa-heart fa-3x text-muted mb-3"></i>
                <h3>No Favorites Yet</h3>
                <p>Start adding recipes to your favorites to see them here.</p>
                <a href="recipes.html" class="btn btn-primary">Browse Recipes</a>
            </div>
        `;
        return;
    }
    
    displayRecipes(favoriteRecipes);
}

function showLoginRequired() {
    const favoritesContainer = document.getElementById('favoritesContainer');
    if (!favoritesContainer) return;
    
    favoritesContainer.innerHTML = `
        <div class="text-center py-5">
            <i class="fas fa-lock fa-3x text-muted mb-3"></i>
            <h3>Login Required</h3>
            <p>Please log in to view your favorite recipes.</p>
            <a href="login.html" class="btn btn-primary">Login</a>
        </div>
    `;
}

// ===== AUTHENTICATION =====
function initLoginPage() {
    const loginForm = document.getElementById('loginForm');
    if (!loginForm) return;
    
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        handleLogin();
    });
}

function initSignupPage() {
    const signupForm = document.getElementById('signupForm');
    if (!signupForm) return;
    
    signupForm.addEventListener('submit', function(e) {
        e.preventDefault();
        handleSignup();
    });
}

function handleLogin() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Simulate login (in real app, this would be an API call)
    if (email && password) {
        const userData = {
            id: Date.now(),
            name: email.split('@')[0],
            email: email
        };
        
        localStorage.setItem('stillness_user', JSON.stringify(userData));
        isLoggedIn = true;
        currentUser = userData;
        
        showSuccessMessage('Login successful! Redirecting...');
        setTimeout(() => {
            window.location.href = 'index.html';
        }, 1500);
    } else {
        showErrorMessage('Please fill in all fields.');
    }
}

function handleSignup() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    if (!name || !email || !password || !confirmPassword) {
        showErrorMessage('Please fill in all fields.');
        return;
    }
    
    if (password !== confirmPassword) {
        showErrorMessage('Passwords do not match.');
        return;
    }
    
    // Simulate signup
    const userData = {
        id: Date.now(),
        name: name,
        email: email
    };
    
    localStorage.setItem('stillness_user', JSON.stringify(userData));
    isLoggedIn = true;
    currentUser = userData;
    
    showSuccessMessage('Account created successfully! Redirecting...');
    setTimeout(() => {
        window.location.href = 'index.html';
    }, 1500);
}

// ===== FORM PAGES =====
function initFormPages() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            handleFormSubmission(this);
        });
    });
}

function handleFormSubmission(form) {
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    
    // Simulate form submission
    showSuccessMessage('Thank you for your message! We\'ll get back to you soon.');
    form.reset();
}

// ===== ACCOUNT PAGE =====
function initAccountPage() {
    if (!isLoggedIn) {
        window.location.href = 'login.html';
        return;
    }
    
    displayAccountInfo();
}

function displayAccountInfo() {
    const accountContainer = document.getElementById('accountContainer');
    if (!accountContainer || !currentUser) return;
    
    accountContainer.innerHTML = `
        <div class="account-info">
            <h3>Account Information</h3>
            <form id="accountForm">
                <div class="mb-3">
                    <label for="accountName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="accountName" value="${currentUser.name}">
                </div>
                <div class="mb-3">
                    <label for="accountEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="accountEmail" value="${currentUser.email}">
                </div>
                <button type="submit" class="btn btn-primary">Update Account</button>
                <button type="button" class="btn btn-danger ms-2" onclick="requestAccountDeletion()">
                    Delete Account
                </button>
            </form>
        </div>
    `;
    
    document.getElementById('accountForm').addEventListener('submit', function(e) {
        e.preventDefault();
        updateAccount();
    });
}

function updateAccount() {
    const name = document.getElementById('accountName').value;
    const email = document.getElementById('accountEmail').value;
    
    currentUser.name = name;
    currentUser.email = email;
    
    localStorage.setItem('stillness_user', JSON.stringify(currentUser));
    showSuccessMessage('Account updated successfully!');
}

function requestAccountDeletion() {
    if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
        localStorage.removeItem('stillness_user');
        localStorage.removeItem('stillness_favorites');
        showSuccessMessage('Account deleted successfully. Redirecting...');
        setTimeout(() => {
            window.location.href = 'index.html';
        }, 1500);
    }
}

// ===== ADMIN PAGE =====
function initAdminPage() {
    // Simulate admin check
    if (!isLoggedIn || currentUser.email !== 'admin@stillnessaroma.com') {
        window.location.href = 'index.html';
        return;
    }
    
    displayAdminDashboard();
}

function displayAdminDashboard() {
    // Admin dashboard functionality would be implemented here
    console.log('Admin dashboard initialized');
}

// ===== SEARCH FUNCTIONALITY =====
function initSearchFunctionality() {
    const searchInput = document.getElementById('searchInput');
    if (!searchInput) return;
    
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        filterRecipes({ search: query });
    });
}

// ===== FILTER FUNCTIONALITY =====
function initFilterFunctionality() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterType = this.dataset.filter;
            const filterValue = this.dataset.value;
            
            // Update active state
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            filterRecipes({ [filterType]: filterValue });
        });
    });
}

function filterRecipes(filters) {
    let filteredRecipes = [...recipes];
    
    if (filters.search) {
        filteredRecipes = filteredRecipes.filter(recipe => 
            recipe.title.toLowerCase().includes(filters.search) ||
            recipe.description.toLowerCase().includes(filters.search)
        );
    }
    
    if (filters.difficulty && filters.difficulty !== 'all') {
        filteredRecipes = filteredRecipes.filter(recipe => 
            recipe.difficulty.toLowerCase() === filters.difficulty
        );
    }
    
    if (filters.method && filters.method !== 'all') {
        filteredRecipes = filteredRecipes.filter(recipe => 
            recipe.method.toLowerCase() === filters.method
        );
    }
    
    displayRecipes(filteredRecipes);
}

// ===== FAVORITES FUNCTIONALITY =====
function toggleFavorite(recipeId) {
    if (!isLoggedIn) {
        showErrorMessage('Please log in to add favorites.');
        return;
    }
    
    const index = favorites.indexOf(recipeId);
    if (index > -1) {
        favorites.splice(index, 1);
        showSuccessMessage('Removed from favorites');
    } else {
        favorites.push(recipeId);
        showSuccessMessage('Added to favorites');
    }
    
    localStorage.setItem('stillness_favorites', JSON.stringify(favorites));
    
    // Update UI
    const heartIcon = document.querySelector(`button[onclick="toggleFavorite('${recipeId}')"] i`);
    if (heartIcon) {
        heartIcon.classList.toggle('text-danger');
    }
}

// ===== UTILITY FUNCTIONS =====
function showSuccessMessage(message) {
    showMessage(message, 'success');
}

function showErrorMessage(message) {
    showMessage(message, 'error');
}

function showMessage(message, type) {
    // Create toast notification
    const toast = document.createElement('div');
    toast.className = `alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
    toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    toast.innerHTML = `
        ${message}
        <button type="button" class="btn-close" onclick="this.parentElement.remove()"></button>
    `;
    
    document.body.appendChild(toast);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        if (toast.parentElement) {
            toast.remove();
        }
    }, 3000);
}

// ===== DUMMY DATA =====
function loadDummyData() {
    recipes = [
        {
            id: 'french-press',
            title: 'French Press Coffee',
            description: 'Rich and full-bodied coffee with a simple brewing method.',
            difficulty: 'Beginner',
            time: '4 minutes',
            method: 'french-press',
            image: 'https://via.placeholder.com/300x200?text=French+Press',
            ingredients: ['30g coarse ground coffee', '500ml hot water (200°F)', 'French press'],
            instructions: [
                'Heat water to 200°F (93°C)',
                'Add coarse ground coffee to French press',
                'Pour hot water over coffee grounds',
                'Stir gently and let steep for 4 minutes',
                'Press plunger down slowly',
                'Serve immediately'
            ]
        },
        {
            id: 'pour-over',
            title: 'Pour Over Coffee',
            description: 'Clean and bright coffee with precise control over extraction.',
            difficulty: 'Intermediate',
            time: '3-4 minutes',
            method: 'pour-over',
            image: 'https://via.placeholder.com/300x200?text=Pour+Over',
            ingredients: ['22g medium-fine ground coffee', '350ml hot water (205°F)', 'Pour over dripper', 'Paper filter'],
            instructions: [
                'Place filter in dripper and rinse with hot water',
                'Add ground coffee and create a small well in center',
                'Start timer and pour 50ml water for bloom (30 seconds)',
                'Continue pouring in circular motions',
                'Total brew time should be 3-4 minutes',
                'Enjoy your clean, bright coffee'
            ]
        },
        {
            id: 'cold-brew',
            title: 'Cold Brew Coffee',
            description: 'Smooth and less acidic coffee perfect for hot days.',
            difficulty: 'Beginner',
            time: '12-24 hours',
            method: 'cold-brew',
            image: 'https://via.placeholder.com/300x200?text=Cold+Brew',
            ingredients: ['100g coarse ground coffee', '1L cold water', 'Large jar or container', 'Fine mesh strainer'],
            instructions: [
                'Combine coffee and cold water in large container',
                'Stir to ensure all grounds are saturated',
                'Cover and refrigerate for 12-24 hours',
                'Strain through fine mesh strainer',
                'Dilute with water or milk as desired',
                'Serve over ice'
            ]
        }
    ];
    
    learningContent = [
        {
            icon: 'fas fa-seedling',
            title: 'Coffee Origins & Types',
            description: 'Learn about different coffee varieties, growing regions, and how origin affects flavor.',
            topics: [
                {
                    title: 'Arabica vs Robusta',
                    content: 'Arabica beans are sweeter and softer, while Robusta beans are stronger and more bitter with higher caffeine content.'
                },
                {
                    title: 'Growing Regions',
                    content: 'Coffee grows in the "coffee belt" between 25°N and 30°S latitude, with each region producing unique flavor profiles.'
                },
                {
                    title: 'Processing Methods',
                    content: 'Washed, natural, and honey processing methods significantly impact the final flavor of your coffee.'
                }
            ]
        },
        {
            icon: 'fas fa-cogs',
            title: 'Brewing Equipment',
            description: 'Understand different brewing equipment and how to choose the right tools for your coffee journey.',
            topics: [
                {
                    title: 'Grinders',
                    content: 'Burr grinders provide consistent particle size, essential for even extraction and better flavor.'
                },
                {
                    title: 'Brewing Devices',
                    content: 'From French press to espresso machines, each device offers unique advantages and flavor profiles.'
                },
                {
                    title: 'Water Quality',
                    content: 'Water makes up 98% of your coffee. Use filtered water with proper mineral content for best results.'
                }
            ]
        },
        {
            icon: 'fas fa-flask',
            title: 'Brewing Science',
            description: 'Dive deep into the science behind coffee extraction and how to optimize your brewing.',
            topics: [
                {
                    title: 'Extraction Principles',
                    content: 'Proper extraction balances sweetness, acidity, and bitterness for optimal flavor.'
                },
                {
                    title: 'Grind Size Impact',
                    content: 'Finer grinds extract faster, while coarser grinds extract slower. Match grind to brewing method.'
                },
                {
                    title: 'Temperature & Time',
                    content: 'Water temperature (195-205°F) and contact time affect extraction rate and final flavor.'
                }
            ]
        }
    ];
}

