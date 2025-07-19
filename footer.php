<?php
// File: footer.php
?>
<footer class="bg-[#0A2351] text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- About -->
            <div class="lg:col-span-2">
                 <a href="#" class="flex items-center gap-4 mb-4">
                    <img src="bea-cukai.png" alt="Logo Kemenkeu" class="h-16">
                    <div>
                        <h1 class="text-white font-bold text-lg leading-tight">Kementerian Keuangan</h1>
                        <p class="text-white/70 text-sm leading-tight">Direktorat Jenderal Bea dan Cukai</p>
                    </div>
                </a>
                <p class="text-white/70 mt-4">Mengawal lalu lintas barang dan melayani Indonesia dengan profesional, transparan, dan penuh integritas.</p>
            </div>

            <!-- Layanan Utama -->
            <div>
                <h5 class="font-bold text-lg mb-4">Layanan Utama</h5>
                <ul class="space-y-3">
                    <li><a href="#" class="text-white/70 hover:text-white">Lacak Kiriman</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white">Portal PPIT</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white">CEISA</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white">Kalkulator Pabean</a></li>
                </ul>
            </div>
            
            <!-- Informasi -->
            <div>
                <h5 class="font-bold text-lg mb-4">Informasi</h5>
                <ul class="space-y-3">
                    <li><a href="#" class="text-white/70 hover:text-white">Berita</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white">Peraturan</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white">Statistik</a></li>
                    <li><a href="#" class="text-white/70 hover:text-white">FAQ</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h5 class="font-bold text-lg mb-4">Kontak</h5>
                <ul class="space-y-3 text-white/70">
                    <li class="flex items-start gap-2"><i data-lucide="phone" class="w-4 h-4 mt-1 flex-shrink-0"></i> Call Center: 1500-225</li>
                    <li class="flex items-start gap-2"><i data-lucide="message-square" class="w-4 h-4 mt-1 flex-shrink-0"></i> WhatsApp: +62 811 1500 225</li>
                    <li class="flex items-start gap-2"><i data-lucide="mail" class="w-4 h-4 mt-1 flex-shrink-0"></i> info@beacukai.go.id</li>
                    <li class="flex items-start gap-2"><i data-lucide="map-pin" class="w-4 h-4 mt-1 flex-shrink-0"></i> Jakarta, Indonesia</li>
                </ul>
            </div>
        </div>
        <div class="mt-12 border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
            <p class="text-white/70">&copy; 2025 Direktorat Jenderal Bea dan Cukai. Hak Cipta Dilindungi.</p>
            <div class="flex gap-4 mt-4 md:mt-0">
                <a href="#" class="text-white/70 hover:text-white"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                <a href="#" class="text-white/70 hover:text-white"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                <a href="#" class="text-white/70 hover:text-white"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                <a href="#" class="text-white/70 hover:text-white"><i data-lucide="youtube" class="w-5 h-5"></i></a>
            </div>
        </div>
    </div>
</footer>

<script>
    // Initialize Lucide Icons
    lucide.createIcons();

    // --- Search Toggle Logic ---
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    const desktopMenuContainer = document.getElementById('desktop-menu-container');

    searchButton.addEventListener('click', (e) => {
        e.preventDefault();
        // Check if input is currently hidden (or has no width)
        if (searchInput.classList.contains('w-0')) {
            // Expand search input
            searchInput.classList.remove('w-0', 'opacity-0');
            searchInput.classList.add('w-64', 'opacity-100', 'px-4'); // Give it width and padding
            desktopMenuContainer.classList.add('opacity-0', 'invisible', 'w-0'); // Hide menu and collapse its space
            searchInput.focus(); // Focus on the input field
        } else {
            // Collapse search input
            searchInput.classList.add('w-0', 'opacity-0');
            searchInput.classList.remove('w-64', 'opacity-100', 'px-4');
            desktopMenuContainer.classList.remove('opacity-0', 'invisible', 'w-0'); // Show menu
        }
    });

    // --- Mobile Menu Toggle Logic ---
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
