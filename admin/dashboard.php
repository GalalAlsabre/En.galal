<?php
$pageTitle = 'Dashboard';
// No page-specific stylesheet is needed for the dashboard
include 'templates/header.php'; 
?>

<div class="space-y-12"> <!-- Increased spacing for better visual separation -->

    <!-- Metric Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up">
        <div class="admin-card metric-card">
            <div class="flex items-center justify-between">
                <p class="text-[var(--admin-text-secondary)]">Total Users</p>
                <i class="fas fa-users text-gray-300"></i>
            </div>
            <p class="value">1,234</p>
            <p class="change positive flex items-center gap-1"><i class="fas fa-arrow-up text-xs"></i> 12%</p>
        </div>
        <div class="admin-card metric-card">
            <div class="flex items-center justify-between">
                <p class="text-[var(--admin-text-secondary)]">New Recipes</p>
                <i class="fas fa-book-open text-gray-300"></i>
            </div>
            <p class="value">56</p>
            <p class="change positive flex items-center gap-1"><i class="fas fa-arrow-up text-xs"></i> 5%</p>
        </div>
        <div class="admin-card metric-card">
            <div class="flex items-center justify-between">
                <p class="text-[var(--admin-text-secondary)]">Articles Published</p>
                <i class="fas fa-file-alt text-gray-300"></i>
            </div>
            <p class="value">23</p>
            <p class="change negative flex items-center gap-1"><i class="fas fa-arrow-down text-xs"></i> 2%</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-xl font-bold mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="#" class="admin-card action-card">
                <div class="flex items-center gap-4">
                    <div class="icon-wrapper bg-green-500"><i class="fas fa-plus"></i></div>
                    <div><p class="font-semibold">Add New Recipe</p></div>
                </div>
                <i class="fas fa-arrow-right text-gray-400"></i>
            </a>
            <a href="#" class="admin-card action-card">
                <div class="flex items-center gap-4">
                    <div class="icon-wrapper bg-blue-500"><i class="fas fa-pen"></i></div>
                    <div><p class="font-semibold">Write an Article</p></div>
                </div>
                <i class="fas fa-arrow-right text-gray-400"></i>
            </a>
            <a href="#" class="admin-card action-card">
                <div class="flex items-center gap-4">
                    <div class="icon-wrapper bg-red-500"><i class="fas fa-comments"></i></div>
                    <div><p class="font-semibold">Manage Comments</p></div>
                </div>
                <i class="fas fa-arrow-right text-gray-400"></i>
            </a>
        </div>
    </div>

    <!-- Recent Activity Tables -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" data-aos="fade-up" data-aos-delay="200">
        <div class="admin-card">
            <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Latest Recipes</h3>
            <div class="overflow-x-auto">
                <table class="admin-table">
                    <thead><tr><th>Title</th><th>Status</th></tr></thead>
                    <tbody>
                        <tr><td>Classic Pour Over</td><td><span class="status-dot status-published"></span>Published</td></tr>
                        <tr><td>Iced Latte</td><td><span class="status-dot status-published"></span>Published</td></tr>
                        <tr><td>New Draft Recipe</td><td><span class="status-dot status-draft"></span>Draft</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="admin-card">
            <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">New Users</h3>
            <div class="overflow-x-auto">
                <table class="admin-table">
                    <thead><tr><th>Name</th><th>Date Joined</th></tr></thead>
                    <tbody>
                        <tr><td>Eleanor Vance</td><td>Jul 28, 2025</td></tr>
                        <tr><td>John Doe</td><td>Jul 27, 2025</td></tr>
                        <tr><td>Jane Smith</td><td>Jul 25, 2025</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>