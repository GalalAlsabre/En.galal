<?php
$pageTitle = 'Manage Articles';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Manage Articles</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Create, edit, and manage all articles.</p>
        </div>
        <a href="#" class="btn-primary flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            <span>Add New Article</span>
        </a>
    </div>

    <!-- Articles Table Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <div class="overflow-x-auto">
            <!-- THE FIX IS HERE: Using the correct table class -->
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-semibold">The Art of Pour Over</td>
                        <td>Sophia Carter</td>
                        <td><span class="status-pill status-published">Published</span></td>
                        <td class="text-right action-buttons">
                            <a href="#"><span class="material-symbols-outlined text-lg">visibility</span></a>
                            <a href="#"><span class="material-symbols-outlined text-lg">edit</span></a>
                            <button class="delete-btn"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Espresso Extraction Techniques</td>
                        <td>Ethan Bennett</td>
                        <td><span class="status-pill status-published">Published</span></td>
                        <td class="text-right action-buttons">
                            <a href="#"><span class="material-symbols-outlined text-lg">visibility</span></a>
                            <a href="#"><span class="material-symbols-outlined text-lg">edit</span></a>
                            <button class="delete-btn"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Coffee Bean Origins</td>
                        <td>Olivia Hayes</td>
                        <td><span class="status-pill status-draft">Draft</span></td>
                        <td class="text-right action-buttons">
                            <a href="#"><span class="material-symbols-outlined text-lg">visibility</span></a>
                            <a href="#"><span class="material-symbols-outlined text-lg">edit</span></a>
                            <button class="delete-btn"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>