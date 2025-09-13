<?php
// Page settings
$pageTitle = 'Internationalization';
include 'templates/header.php'; 
?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-wrap justify-between items-center gap-4" data-aos="fade-up">
        <div>
            <h2 class="text-2xl font-bold">Internationalization (i18n)</h2>
            <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Manage languages and translations for your platform.</p>
        </div>
        <button class="btn-primary flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            <span>Add Language</span>
        </button>
    </div>

    <!-- Languages Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Languages</h3>
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Language</th>
                        <th>Code</th>
                        <th>Status</th>
                        <th class="text-right">Enable/Disable</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-semibold">English</td>
                        <td>en</td>
                        <td><span class="status-dot status-published"></span>Enabled</td>
                        <td class="text-right"><label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer" checked><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Spanish</td>
                        <td>es</td>
                        <td><span class="status-dot status-published"></span>Enabled</td>
                        <td class="text-right"><label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer" checked><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">French</td>
                        <td>fr</td>
                        <td><span class="status-dot status-draft"></span>Disabled</td>
                        <td class="text-right"><label class="inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer"><div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[var(--admin-accent)]"></div></label></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Translations Card -->
    <div class="admin-card" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-lg font-bold p-4 border-b border-[var(--admin-border)]">Translations</h3>
        <div class="overflow-x-auto">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>English</th>
                        <th>Spanish</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-mono text-xs text-[var(--admin-text-secondary)]">welcome_message</td>
                        <td>Welcome to Stillness Aroma</td>
                        <td class="text-[var(--admin-text-secondary)]">Bienvenido a Stillness Aroma</td>
                    </tr>
                    <tr>
                        <td class="font-mono text-xs text-[var(--admin-text-secondary)]">learn_more</td>
                        <td>Learn More</td>
                        <td class="text-[var(--admin-text-secondary)]">Aprende Más</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>