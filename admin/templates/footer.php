            </main>
        </div>
    </div>
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden"></div>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script> <!-- THIS LINE IS CRITICAL -->

    <!-- AOS Library Script (THE MISSING PART) -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script>
    // --- 1. Initialize Global Libraries ---
    AOS.init({ once: true, duration: 600 });
    MicroModal.init({
        awaitCloseAnimation: true,
        disableScroll: true
    });

    // --- 2. Sidebar Toggle Logic (Safely Scoped) ---
    const sidebar = document.getElementById('admin-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const menuToggle = document.getElementById('menu-toggle');

    // IMPORTANT: Only run this code if the sidebar elements actually exist on the page.
    if (sidebar && overlay && menuToggle) {
        function toggleSidebar() {
            // Mobile behavior
            if (window.innerWidth < 768) {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            } 
            // Desktop behavior
            else {
                // This part is for collapsing the sidebar on desktop
                const mainContent = document.getElementById('main-content');
                sidebar.classList.toggle('w-64');
                sidebar.classList.toggle('w-20');
                if (mainContent) {
                    mainContent.classList.toggle('md:ml-64');
                    mainContent.classList.toggle('md:ml-20');
                }
                document.querySelectorAll('.sidebar-brand-text, .link-text').forEach(el => {
                    el.classList.toggle('hidden');
                });
            }
        }

        menuToggle.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);
    }
    
    
// ... الكود الموجود لـ AOS و Sidebar ...

// --- Dropdown Menu Logic ---
function toggleDropdown() {
    document.getElementById('settings-dropdown').classList.toggle('hidden');
    document.getElementById('dropdown-icon').classList.toggle('rotate-180');
}
</script>
    
    
</body>
</html>


