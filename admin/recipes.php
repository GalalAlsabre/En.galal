<?php
// Page settings
$pageTitle = 'Manage Recipes';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Manage Recipes</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Add, edit, and manage all coffee recipes.</p>
        </div>
        <a href="new_recipe.php" class="btn-primary flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            <span>Add New Recipe</span>
        </a>
    </div>

    <!-- Recipes Table Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <!-- Card Header with Search -->
        <div class="p-4 border-b border-[var(--admin-border)]">
            <div class="relative max-w-xs">
                <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                <input type="search" placeholder="Search recipes..." class="w-full h-10 pl-10 pr-4 rounded-md border border-[var(--admin-border)] bg-[var(--admin-bg)] focus:outline-none focus:ring-2 focus:ring-[var(--admin-accent)] text-sm">
            </div>
        </div>

        <!-- Recipes Table -->
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Published</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-semibold">Espresso</td>
                        <td>Ethan Carter</td>
                        <td>Coffee</td>
                        <td><label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer" checked><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label></td>
                        <td class="text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Cappuccino</td>
                        <td>Olivia Bennett</td>
                        <td>Coffee</td>
                        <td><label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer" checked><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label></td>
                        <td class="text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Latte</td>
                        <td>Noah Thompson</td>
                        <td>Coffee</td>
                        <td><label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer"><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label></td>
                        <td class="text-right space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 rounded-full hover:bg-gray-100 text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>