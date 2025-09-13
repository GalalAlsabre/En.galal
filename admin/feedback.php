<?php
// Page settings
$pageTitle = 'Feedback Inbox';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div data-aos="fade-up">
        <h2 class="text-2xl font-bold">Feedback Inbox</h2>
        <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Manage and respond to user messages.</p>
    </div>

    <!-- Feedback Inbox Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <!-- Card Header with Actions -->
        <div class="p-4 border-b border-[var(--admin-border)] flex justify-between items-center">
            <div class="flex items-center gap-2">
                <button class="p-2 rounded-md hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-xl">archive</span></button>
                <button class="p-2 rounded-md hover:bg-gray-100 text-[var(--admin-text-secondary)]"><span class="material-symbols-outlined text-xl">delete</span></button>
            </div>
            <div class="flex items-center gap-2 text-sm text-[var(--admin-text-secondary)]">
                <span>1-5 of 50</span>
                <button class="p-2 rounded-md hover:bg-gray-100"><span class="material-symbols-outlined text-xl">chevron_left</span></button>
                <button class="p-2 rounded-md hover:bg-gray-100"><span class="material-symbols-outlined text-xl">chevron_right</span></button>
            </div>
        </div>

        <!-- Feedback Table -->
        <div class="overflow-x-auto">
            <table class="admin-table">
                <tbody>
                    <!-- Unread Message -->
                    <tr class="hover:bg-gray-50 cursor-pointer font-semibold" data-micromodal-trigger="reply-modal">
                        <td class="p-4 w-1/4"><p>Sophia Bennett</p></td>
                        <td>
                            <p>Question about 'Espresso Basics'</p>
                            <p class="font-normal text-[var(--admin-text-secondary)] truncate">Hey there, I was wondering if you could clarify...</p>
                        </td>
                        <td class="p-4 text-right w-1/6"><p class="text-sm">Mar 15</p></td>
                    </tr>
                    <!-- Read Message -->
                    <tr class="hover:bg-gray-50 cursor-pointer text-[var(--admin-text-secondary)]" data-micromodal-trigger="reply-modal">
                        <td class="p-4 w-1/4"><p>Ethan Carter</p></td>
                        <td>
                            <p>Suggestion for a new recipe</p>
                            <p class="font-normal truncate">I had this amazing idea for a new cold brew flavor...</p>
                        </td>
                        <td class="p-4 text-right w-1/6"><p class="text-sm">Mar 12</p></td>
                    </tr>
                    <!-- Add more messages as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- =================================================================
MODAL STRUCTURE
================================================================== -->
<!-- =================================================================
MODAL STRUCTURE (CORRECTED SYNTAX)
================================================================== -->
<div class="modal micromodal-slide" id="reply-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container admin-card w-full max-w-2xl" role="dialog" aria-modal="true">
            <header class="p-4 border-b border-[var(--admin-border)] flex justify-between items-center">
                <h3 class="text-lg font-bold">Re: Question about 'Espresso Basics'</h3>
                <button class="modal__close text-2xl" aria-label="Close modal" data-micromodal-close>&times;</button>
            </header>
            <main class="p-6">
                <div class="mb-4 pb-4 border-b border-[var(--admin-border)]">
                    <p class="text-sm text-[var(--admin-text-secondary)]">From: <span class="font-medium text-[var(--admin-text-primary)]">Sophia Bennett</span></p>
                    <div class="mt-2 p-3 bg-gray-50 rounded-lg text-sm">
                        <p>Hey there, I was wondering if you could clarify the recommended grind size for a Breville Barista Express...</p>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Your Reply</label>
                    <textarea class="w-full p-3 border border-[var(--admin-border)] rounded-lg focus:ring-2 focus:ring-[var(--admin-accent)]/50 focus:border-[var(--admin-accent)] transition" placeholder="Compose your response..." rows="6"></textarea>
                </div>
            </main>
            <footer class="form-footer rounded-b-lg">
                <!-- THE CRITICAL FIX IS HERE: Correct attribute syntax -->
                <button class="px-4 py-2 text-sm font-medium rounded-lg hover:bg-gray-100" data-micromodal-close>Cancel</button>
                <button class="btn-primary">Send Reply</button>
            </footer>
        </div>
    </div>
</div>



<?php include 'templates/footer.php'; ?>