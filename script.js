document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi ikon Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Logika untuk menu mobile
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const isMenuOpen = !mobileMenu.classList.contains('hidden');
            document.getElementById('menu-icon-open').classList.toggle('hidden', isMenuOpen);
            document.getElementById('menu-icon-close').classList.toggle('hidden', !isMenuOpen);
        });
    }

    // --- LOGIKA PENCARIAN DESKTOP (HANYA MENGURUS PENCARIAN) ---
    const mainNav = document.getElementById('main-nav');
    const searchToggleButton = document.getElementById('search-toggle-button');
    const searchInput = document.getElementById('search-input');
    const searchIconOpen = document.getElementById('search-icon-open');
    const searchIconClose = document.getElementById('search-icon-close');

    if (mainNav && searchToggleButton && searchInput) {
        searchToggleButton.addEventListener('click', function (event) {
            event.stopPropagation(); 
            mainNav.classList.toggle('search-active');
            
            const isSearchActive = mainNav.classList.contains('search-active');

            if (isSearchActive) {
                searchInput.focus();
            }

            searchIconOpen.classList.toggle('hidden', isSearchActive);
            searchIconClose.classList.toggle('hidden', !isSearchActive);
        });
    }

    // Menutup bar pencarian saat mengklik di luar
    document.addEventListener('click', function(event) {
        const searchContainer = document.getElementById('search-container');
        if (searchContainer && !searchContainer.contains(event.target) && mainNav.classList.contains('search-active')) {
             mainNav.classList.remove('search-active');
             searchIconOpen.classList.remove('hidden');
             searchIconClose.classList.add('hidden');
        }
    });


});
