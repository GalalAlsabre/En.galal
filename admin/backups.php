<?php
// Page settings
$pageTitle = 'Data Backups';
// No page-specific stylesheet needed, we use the main admin styles
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Data Backups</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Create and manage your platform's data backups.</p>
    </div>

    <!-- Backups Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <!-- Card Header -->
        <div class="p-4 border-b border-[var(--admin-border)] flex justify-between items-center">
            <h3 class="text-lg font-bold">Existing Backups</h3>
            <button class="flex items-center gap-2 px-4 py-2 bg-[var(--admin-accent)] text-white text-sm font-semibold rounded-md hover:bg-[var(--admin-accent-hover)] transition-colors">
                <span class="material-symbols-outlined text-base">add_circle</span>
                <span>Create New Backup</span>
            </button>
        </div>

        <!-- Backups Table -->
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Date Created</th>
                        <th>Size</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-01-15 10:00 AM</td>
                        <td>500 MB</td>
                        <td class="text-right">
                            <div class="flex justify-end items-center gap-4">
                                <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                                <a href="#" class="text-[var(--admin-text-secondary)] hover:text-[var(--admin-text-primary)] text-sm font-medium">Restore</a>
                                <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-01-08 09:30 AM</td>
                        <td>450 MB</td>
                        <td class="text-right">
                            <div class="flex justify-end items-center gap-4">
                                <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                                <a href="#" class="text-[var(--admin-text-secondary)] hover:text-[var(--admin-text-primary)] text-sm font-medium">Restore</a>
                                <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-01-01 11:15 AM</td>
                        <td>400 MB</td>
                        <td class="text-right">
                            <div class="flex justify-end items-center gap-4">
                                <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Download</a>
                                <a href="#" class="text-[var(--admin-text-secondary)] hover:text-[var(--admin-text-primary)] text-sm font-medium">Restore</a>
                                <button class="text-red-600 hover:text-red-800 text-sm font-medium">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>