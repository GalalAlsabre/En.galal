<?php
// Page settings
$pageTitle = 'Activity Logs';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Activity Logs</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Review all activities that have occurred on the platform.</p>
        </div>
        <div class="relative min-w-64">
            <select class="w-full h-10 px-3 pr-8 text-sm rounded-md border border-[var(--admin-border)] bg-white focus:outline-none focus:ring-2 focus:ring-[var(--admin-accent)] appearance-none">
                <option>Filter by activity...</option>
                <option>System Update</option>
                <option>Recipe Created</option>
                <option>Login</option>
            </select>
            <i class="fas fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i>
        </div>
    </div>

    <!-- Logs Table Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Timestamp</th>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-03-15 10:00 AM</td>
                        <td>Admin User</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">System Update</span></td>
                        <td>Version 2.0 deployed</td>
                    </tr>
                    <tr>
                        <td>2025-03-15 09:30 AM</td>
                        <td>User 1</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Recipe Created</span></td>
                        <td>Recipe: Espresso Delight</td>
                    </tr>
                    <tr>
                        <td>2025-03-15 09:00 AM</td>
                        <td>User 2</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Login</span></td>
                        <td>Successful login</td>
                    </tr>
                    <tr>
                        <td>2025-03-15 08:45 AM</td>
                        <td>User 3</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Recipe Updated</span></td>
                        <td>Recipe: Latte Art</td>
                    </tr>
                    <tr>
                        <td>2025-03-15 08:15 AM</td>
                        <td>User 5</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Recipe Deleted</span></td>
                        <td>Recipe: Iced Coffee</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Table Footer with Pagination -->
        <div class="p-4 border-t border-[var(--admin-border)] flex items-center justify-between text-sm text-[var(--admin-text-secondary)]">
            <p>Showing 1 to 5 of 100 results</p>
            <div class="flex items-center gap-2">
                <button class="px-3 py-1 border border-[var(--admin-border)] rounded-md hover:bg-gray-50 disabled:opacity-50" disabled>Previous</button>
                <button class="px-3 py-1 border border-[var(--admin-border)] rounded-md hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>