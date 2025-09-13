<?php
// Page settings
$pageTitle = 'Manage Users';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Manage Users</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Add, edit, and manage user accounts and roles.</p>
        </div>
        <button class="btn-primary flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            <span>Add New User</span>
        </button>
    </div>

    <!-- Users Table Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <!-- Card Header can be used for filters/search in the future -->
        <div class="p-4 border-b border-[var(--admin-border)]">
            <p class="font-semibold">All Users</p>
        </div>

        <!-- Users Table -->
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-semibold">Ethan Carter</td>
                        <td>ethan.carter@email.com</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Admin</span></td>
                        <td class="text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Olivia Bennett</td>
                        <td>olivia.bennett@email.com</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Editor</span></td>
                        <td class="text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Liam Harper</td>
                        <td>liam.harper@email.com</td>
                        <td><span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">User</span></td>
                        <td class="text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Table Footer with Pagination -->
        <div class="p-4 border-t border-[var(--admin-border)] flex items-center justify-between text-sm text-[var(--admin-text-secondary)]">
            <p>Showing 1 to 3 of 20 results</p>
            <div class="flex items-center gap-2">
                <button class="px-3 py-1 border border-[var(--admin-border)] rounded-md hover:bg-gray-50 disabled:opacity-50" disabled>Previous</button>
                <button class="px-3 py-1 border border-[var(--admin-border)] rounded-md hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>