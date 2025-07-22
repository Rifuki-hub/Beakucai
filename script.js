document.addEventListener('DOMContentLoaded', function () {
    // --- Inisialisasi Ikon Lucide ---
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    initializeMenuLogic();
    // initializeTrackingPageLogic(); // ✅ DIHAPUS karena sudah di file terpisah
});

function initializeMenuLogic() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    const searchToggleButton = document.getElementById('search-toggle-button');
    const searchCloseButton = document.getElementById('search-close-button');
    const searchInput = document.getElementById('search-input');
    const searchForm = document.getElementById('search-form');
    const desktopMenuItems = document.getElementById('desktop-menu-items');

    const isMobile = () => window.innerWidth < 768;

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });
    }

    const openSearch = () => {
        if (!searchInput || !searchCloseButton) return;

        if (isMobile()) {
            searchInput.classList.remove('hidden');
            searchCloseButton.classList.remove('hidden');
            searchToggleButton.classList.add('hidden');
            searchInput.focus();
        } else {
            desktopMenuItems?.classList.add('opacity-0', 'w-0', 'invisible');
            searchInput.classList.remove('w-0', 'opacity-0', 'p-0');
            searchInput.classList.add('w-64', 'opacity-100', 'search-active');
            searchCloseButton.classList.remove('hidden');
            searchToggleButton.classList.add('hidden');
            searchInput.focus();
        }
    };

    const closeSearch = () => {
        if (!searchInput || !searchCloseButton) return;

        if (isMobile()) {
            searchInput.classList.add('hidden');
            searchCloseButton.classList.add('hidden');
            searchToggleButton.classList.remove('hidden');
            searchInput.value = '';
        } else {
            desktopMenuItems?.classList.remove('opacity-0', 'w-0', 'invisible');
            searchInput.classList.add('w-0', 'opacity-0', 'p-0');
            searchInput.classList.remove('w-64', 'opacity-100', 'search-active');
            searchCloseButton.classList.add('hidden');
            searchToggleButton.classList.remove('hidden');
            searchInput.value = '';
        }
    };

    searchToggleButton?.addEventListener('click', openSearch);
    searchCloseButton?.addEventListener('click', closeSearch);

    document.addEventListener('click', function (e) {
        const target = e.target;
        if (
            searchForm &&
            !searchForm.contains(target) &&
            !searchInput.classList.contains('w-0')
        ) {
            closeSearch();
        }

        if (mobileMenu && !mobileMenu.contains(target) && !mobileMenuButton.contains(target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    window.addEventListener('resize', () => {
        closeSearch();
    });
}