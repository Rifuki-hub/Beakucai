<?php
// File: header.php
// Tidak ada perubahan pada file ini.
?>
<header class="bg-[#0A2351] sticky top-0 z-50 shadow-md">
    <!-- Top Bar -->
    <div class="bg-black/20 text-white/70 text-xs">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-2">
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1.5"><i data-lucide="phone" class="w-4 h-4"></i><span>Call Center: 1500-225</span></div>
                    <div class="hidden sm:flex items-center gap-1.5"><i data-lucide="map-pin" class="w-4 h-4"></i><span>Jakarta, Indonesia</span></div>
                </div>
                <div class="flex items-center gap-2">
                    <a href="#" class="font-semibold text-white">Bahasa Indonesia</a>
                    <span class="text-white/50">|</span>
                    <a href="#" class="hover:text-white">EN</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8" id="main-nav">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 flex-shrink-0">
                <img src="bea-cukai.png" alt="Bea Cukai Logo" class="h-12">
                <div>
                    <h1 class="text-white font-bold text-lg leading-tight">Kementrian Keuangan</h1>
                    <p class="text-white/70 text-xs leading-tight">Direktorat Jenderal Bea dan Cukai</p>
                </div>
            </a>

            <!-- Right Side: Menu, Search, Mobile Toggle -->
            <div class="flex items-center gap-4">
                <!-- Desktop Menu & Search -->
                <div class="hidden lg:flex items-center gap-4">
                    <div id="desktop-menu-items" class="flex items-center gap-6 text-sm font-medium transition-opacity duration-300">
                        <!-- Active link example -->
                        <a href="#" class="nav-link active flex items-center gap-2"><i data-lucide="home" class="w-5 h-5"></i><span>Beranda</span></a>
                        
                        <div class="relative group">
                            <button class="nav-link text-white/80 hover:text-white flex items-center gap-2">
                                <i data-lucide="user-circle" class="w-5 h-5"></i>
                                <span>Profil</span>
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                            </button>
                            <div class="dropdown-menu absolute top-full left-0 mt-2 w-60 bg-white rounded-md shadow-lg py-2 z-20">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Organisasi</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kantor Bea dan Cukai</a>
                                <div class="relative group/submenu">
                                    <a href="#" class="flex justify-between items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <span>Unit Khusus</span>
                                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                    </a>
                                    <div class="submenu absolute top-0 left-full -mt-2 ml-1 w-60 bg-white rounded-md shadow-lg py-2">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Customs Narcotics Team</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">K-9 Unit</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Marine Customs</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Customs Enforcement Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative group">
                            <button class="nav-link text-white/80 hover:text-white flex items-center gap-2">
                                <i data-lucide="file-text" class="w-5 h-5"></i>
                                <span>Layanan & Panduan</span>
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                            </button>
                            <div class="dropdown-menu absolute top-full right-0 mt-2 w-[56rem] z-20">
                                <div class="bg-white rounded-md shadow-lg">
                                    <div class="p-8 grid grid-cols-3 gap-8">
                                        <!-- Mega Menu Content -->
                                        <div><h3 class="font-bold text-sm uppercase text-gray-400 mb-4">Untuk Anda</h3><ul class="space-y-4"><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Layanan Online</div><p class="text-sm text-gray-500">Lacak kiriman, registrasi IMEI, kalkulator pabean.</p></a></li><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Tanya Jawab (FAQ)</div><p class="text-sm text-gray-500">Jawaban untuk pertanyaan umum.</p></a></li><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Kantor Bea dan Cukai</div><p class="text-sm text-gray-500">Temukan alamat dan kontak kantor layanan.</p></a></li></ul></div>
                                        <div><h3 class="font-bold text-sm uppercase text-gray-400 mb-4">Regulasi & Fasilitas</h3><ul class="space-y-4"><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Pabean</div><p class="text-sm text-gray-500">Aturan & prosedur impor-ekspor.</p></a></li><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Cukai</div><p class="text-sm text-gray-500">Aturan & prosedur barang kena cukai.</p></a></li><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Fasilitas</div><p class="text-sm text-gray-500">KITE, Kawasan Berikat, dan lainnya.</p></a></li></ul></div>
                                        <div><h3 class="font-bold text-sm uppercase text-gray-400 mb-4">Transparansi Publik</h3><ul class="space-y-4"><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Permohonan Informasi Publik</div><p class="text-sm text-gray-500">Ajukan permintaan informasi resmi (PPID).</p></a></li><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Statistik</div><p class="text-sm text-gray-500">Data perdagangan, penerimaan, dan lainnya.</p></a></li><li><a href="#" class="group/item"><div class="font-semibold text-gray-800 group-hover/item:text-blue-600">Layanan Publik</div><p class="text-sm text-gray-500">Informasi mengenai layanan publik kami.</p></a></li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="nav-link text-white/80 hover:text-white flex items-center gap-2"><i data-lucide="book-open" class="w-5 h-5"></i><span>Berita</span></a>
                    </div>
                    <div id="search-container" class="flex items-center">
                        <form id="search-form" class="relative flex items-center" onsubmit="return document.getElementById('search-input').value.trim() !== ''">
                            <input type="text" id="search-input" placeholder="Cari informasi..." class="bg-white rounded-full h-10 text-gray-800 transition-all duration-300 ease-in-out w-0 opacity-0 p-0 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                            <button id="search-toggle-button" type="button" class="text-white/80 hover:text-white p-2">
                                <i data-lucide="search" id="search-icon" class="w-6 h-6"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Mobile Menu Toggle -->
                <button class="lg:hidden text-white" id="mobile-menu-button" aria-label="Toggle Menu">
                    <i data-lucide="menu" class="w-7 h-7" id="menu-icon-open"></i>
                    <i data-lucide="x" class="w-7 h-7 hidden" id="menu-icon-close"></i>
                </button>
            </div>
        </div>
    
        <!-- Mobile Menu -->
        <div class="hidden lg:hidden absolute top-full left-0 w-full bg-[#0A2351] h-[calc(100vh-80px)] overflow-y-auto" id="mobile-menu">
            <div class="p-4 space-y-2">
                 <!-- Active mobile link example -->
                 <a href="#" class="mobile-nav-link active flex items-center gap-4 p-3 rounded-md font-semibold">
                    <i data-lucide="home" class="w-6 h-6"></i>
                    <span>Beranda</span>
                </a>
                
                <details class="group">
                    <summary class="flex items-center justify-between gap-4 p-3 rounded-md text-white/90 hover:bg-white/10 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i data-lucide="user-circle" class="w-6 h-6"></i>
                            <span>Profil</span>
                        </div>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform group-open:rotate-180"></i>
                    </summary>
                    <div class="mt-1 pl-10 space-y-1">
                        <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Organisasi</a>
                        <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Kantor Bea dan Cukai</a>
                        <details class="group/mobile">
                            <summary class="flex justify-between items-center p-2 rounded-md text-white/80 hover:bg-white/10 cursor-pointer">
                                <span>Unit Khusus</span>
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-open/mobile:rotate-180"></i>
                            </summary>
                            <div class="pl-4 border-l-2 border-white/10 ml-2">
                                <a href="#" class="block p-2 text-sm rounded-md text-white/70 hover:bg-white/10">Customs Narcotics Team</a>
                                <a href="#" class="block p-2 text-sm rounded-md text-white/70 hover:bg-white/10">K-9 Unit</a>
                                <a href="#" class="block p-2 text-sm rounded-md text-white/70 hover:bg-white/10">Marine Customs</a>
                                <a href="#" class="block p-2 text-sm rounded-md text-white/70 hover:bg-white/10">Customs Enforcement Team</a>
                            </div>
                        </details>
                    </div>
                </details>

                <details class="group">
                    <summary class="flex items-center justify-between gap-4 p-3 rounded-md text-white/90 hover:bg-white/10 cursor-pointer">
                        <div class="flex items-center gap-4">
                           <i data-lucide="file-text" class="w-6 h-6"></i>
                           <span>Layanan & Panduan</span>
                        </div>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform group-open:rotate-180"></i>
                    </summary>
                    <div class="mt-2 pl-6 space-y-3">
                        <!-- Mobile Mega Menu Content -->
                        <div>
                            <h3 class="px-4 py-1 text-yellow-400 font-bold text-sm">UNTUK ANDA</h3>
                            <div class="pl-4 space-y-1">
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Layanan Online</a>
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Tanya Jawab (FAQ)</a>
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Kantor Bea dan Cukai</a>
                            </div>
                        </div>
                         <div>
                            <h3 class="px-4 py-1 text-yellow-400 font-bold text-sm">REGULASI & FASILITAS</h3>
                            <div class="pl-4 space-y-1">
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Pabean</a>
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Cukai</a>
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Fasilitas</a>
                            </div>
                        </div>
                        <div>
                            <h3 class="px-4 py-1 text-yellow-400 font-bold text-sm">TRANSPARANSI PUBLIK</h3>
                            <div class="pl-4 space-y-1">
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Layanan Publik</a>
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Layanan Informasi Publik</a>
                                <a href="#" class="block p-2 rounded-md text-white/80 hover:bg-white/10">Statistik</a>
                            </div>
                        </div>
                    </div>
                </details>

                <a href="#" class="mobile-nav-link flex items-center gap-4 p-3 rounded-md text-white/90 hover:bg-white/10">
                    <i data-lucide="book-open" class="w-6 h-6"></i>
                    <span>Berita</span>
                </a>

                <div class="pt-4 border-t border-white/20">
                    <form class="relative">
                        <input type="text" placeholder="Cari informasi..." class="w-full h-11 bg-white/10 rounded-md pl-4 pr-10 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <button type="submit" class="absolute right-0 top-0 h-full px-3 text-white/60 hover:text-white" aria-label="Search">
                            <i data-lucide="search" class="w-5 h-5"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
