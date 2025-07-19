/**
 * File: script.js
 * Deskripsi: Skrip final yang telah ditulis ulang untuk memperbaiki semua masalah
 * interaktivitas pada header.
 */

document.addEventListener('DOMContentLoaded', function () {
    // =========================================================================
    // 1. Inisialisasi Ikon (Lucide Icons)
    // =========================================================================
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // =========================================================================
    // 2. Definisi Variabel Global untuk Elemen DOM
    // =========================================================================
    const mainNav = document.getElementById('main-nav');
    
    // Elemen untuk Menu Mobile
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    // Elemen untuk Pencarian Desktop
    const searchToggleButton = document.getElementById('search-toggle-button');
    const searchInput = document.getElementById('search-input');
    const searchForm = document.getElementById('search-form');
    const searchIcon = document.getElementById('search-icon');

    // =========================================================================
    // 3. Logika untuk Menu Mobile (Hamburger)
    // =========================================================================
    if (mobileMenuButton && mobileMenu && menuIconOpen && menuIconClose) {
        mobileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            const isMenuOpen = mobileMenu.classList.contains('hidden');
            document.body.classList.toggle('overflow-hidden', isMenuOpen);
            mobileMenu.classList.toggle('hidden');
            menuIconOpen.classList.toggle('hidden', isMenuOpen);
            menuIconClose.classList.toggle('hidden', !isMenuOpen);
        });
    }

    // =========================================================================
    // 4. Logika Pencarian Desktop (DITULIS ULANG & DIPERBAIKI)
    // =========================================================================
    if (searchToggleButton && mainNav && searchInput && searchIcon && searchForm) {
        
        // Fungsi terpisah untuk membuka pencarian
        const openSearch = () => {
            mainNav.classList.add('search-active');
            searchIcon.setAttribute('data-lucide', 'x');
            lucide.createIcons();
            searchInput.focus();
        };

        // Fungsi terpisah untuk menutup pencarian
        const closeSearch = () => {
            mainNav.classList.remove('search-active');
            searchIcon.setAttribute('data-lucide', 'search');
            lucide.createIcons();
            searchInput.value = ''; // Kosongkan input saat ditutup
        };

        // Event listener pada tombol search/close
        searchToggleButton.addEventListener('click', (e) => {
            e.stopPropagation();
            const isSearchActive = mainNav.classList.contains('search-active');
            
            if (isSearchActive) {
                // Jika pencarian aktif, kita ingin menutupnya atau submit
                if (searchInput.value.trim() === '') {
                    closeSearch();
                } else {
                    searchForm.submit();
                }
            } else {
                // Jika tidak aktif, kita buka
                openSearch();
            }
        });
    }

    // =========================================================================
    // 5. Listener Klik Global (untuk menutup elemen saat klik di luar)
    // =========================================================================
    document.addEventListener('click', function(event) {
        // Menutup menu mobile jika klik di luar navigasi
        if (mobileMenu && !mobileMenu.classList.contains('hidden') && !mainNav.contains(event.target)) {
             mobileMenu.classList.add('hidden');
             document.body.classList.remove('overflow-hidden');
             menuIconOpen.classList.remove('hidden');
             menuIconClose.classList.add('hidden');
        }

        // Menutup pencarian desktop jika klik di luar form pencarian
        if (mainNav && mainNav.classList.contains('search-active') && !searchForm.contains(event.target)) {
            // Panggil fungsi closeSearch() secara langsung
            closeSearch();
        }
    });
});
