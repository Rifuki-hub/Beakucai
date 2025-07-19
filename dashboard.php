<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktorat Jenderal Bea dan Cukai</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body class="bg-gray-50">

    <?php include 'header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section class="hero-bg text-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-24 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                    Mengawal Lalu Lintas Barang,<br>
                    <span class="highlight-yellow">Melayani Indonesia</span>
                </h1>
                <p class="mt-6 max-w-3xl mx-auto text-lg text-white/80">
                    Temukan informasi, gunakan layanan, dan akses peraturan terbaru kepabeanan dan cukai dengan mudah.
                </p>

                <!-- Search Bar -->
                <div class="mt-10 max-w-2xl mx-auto">
                    <form class="flex flex-col sm:flex-row gap-2 bg-white/10 p-2 rounded-full border border-white/20">
                        <div class="relative w-full sm:w-48">
                            <select class="w-full bg-transparent text-white pl-4 pr-8 py-3 rounded-full appearance-none focus:outline-none">
                                <option value="semua" class="text-black">Semua</option>
                                <option value="lacak" class="text-black">Lacak Kiriman</option>
                                <option value="peraturan" class="text-black">Peraturan</option>
                                <option value="kurs" class="text-black">Kurs Pajak</option>
                                <option value="berita" class="text-black">Berita</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Ketik kata kunci di sini..." class="flex-grow bg-transparent py-3 px-4 placeholder-white/50 focus:outline-none">
                        <button type="submit" class="bg-yellow-400 text-[#0A2351] font-bold px-8 py-3 rounded-full hover:bg-yellow-300 transition-colors duration-200 flex items-center justify-center gap-2">
                            <i data-lucide="search" class="w-5 h-5"></i>
                            <span>Cari</span>
                        </button>
                    </form>
                </div>

                <!-- Feature Cards -->
                <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <a href="#" class="feature-card"><i data-lucide="package-search" class="w-12 h-12 mx-auto mb-4 text-yellow-400"></i><h3 class="font-bold text-lg">Lacak Kiriman</h3><p class="text-sm text-white/70">Pantau status pengiriman real-time</p></a>
                    <a href="#" class="feature-card"><i data-lucide="smartphone-nfc" class="w-12 h-12 mx-auto mb-4 text-yellow-400"></i><h3 class="font-bold text-lg">Registrasi IMEI</h3><p class="text-sm text-white/70">Daftarkan perangkat mobile Anda</p></a>
                    <a href="#" class="feature-card"><i data-lucide="calculator" class="w-12 h-12 mx-auto mb-4 text-yellow-400"></i><h3 class="font-bold text-lg">Kalkulator Pabean</h3><p class="text-sm text-white/70">Hitung tarif dan pajak import</p></a>
                    <a href="#" class="feature-card"><i data-lucide="users" class="w-12 h-12 mx-auto mb-4 text-yellow-400"></i><h3 class="font-bold text-lg">Portal Pengguna Jasa</h3><p class="text-sm text-white/70">Akses layanan terpadu online</p></a>
                </div>
            </div>
        </section>

        <!-- Apps Section -->
        <section class="py-16 sm:py-24 bg-gray-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto">
                    <h2 class="text-3xl font-bold text-gray-800">Aplikasi Resmi Bea Cukai</h2>
                    <p class="mt-4 text-lg text-gray-600">Unduh aplikasi resmi kami untuk mendapatkan akses mudah ke layanan dan informasi Bea Cukai.</p>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-8 rounded-xl shadow-sm border flex flex-col sm:flex-row items-center gap-6">
                        <div class="bg-blue-100 text-blue-600 p-4 rounded-lg"><i data-lucide="smartphone" class="w-12 h-12"></i></div>
                        <div class="flex-1 text-center sm:text-left">
                            <h3 class="text-xl font-semibold text-gray-900">Mobile Bea Cukai</h3>
                            <p class="mt-2 text-gray-600">Akses layanan pelacakan, registrasi IMEI, dan dapatkan informasi kepabeanan langsung dari genggaman Anda.</p>
                            <a href="#" class="mt-4 inline-block"><img src="https://placehold.co/150x50/000000/FFFFFF?text=Get+it+on+Google+Play" alt="Get it on Google Play" class="h-12"></a>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-sm border flex flex-col sm:flex-row items-center gap-6">
                        <div class="bg-orange-100 text-orange-600 p-4 rounded-lg"><i data-lucide="newspaper" class="w-12 h-12"></i></div>
                        <div class="flex-1 text-center sm:text-left">
                            <h3 class="text-xl font-semibold text-gray-900">Warta Bea Cukai</h3>
                            <p class="mt-2 text-gray-600">Baca majalah digital, berita, dan publikasi resmi terbaru dari Direktorat Jenderal Bea dan Cukai.</p>
                            <a href="#" class="mt-4 inline-block"><img src="https://placehold.co/150x50/000000/FFFFFF?text=Get+it+on+Google+Play" alt="Get it on Google Play" class="h-12"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Exchange Rate Section -->
        <section class="py-16 sm:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-between items-center gap-4 mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Informasi Kurs Pajak Terkini</h2>
                        <p class="mt-2 text-lg text-gray-600">Kurs yang berlaku untuk perhitungan nilai pabean.</p>
                    </div>
                    <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-lg hover:bg-gray-300 transition-colors flex items-center gap-2">
                        Lihat Semua Kurs Pajak <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md border">
                    <p class="text-sm text-gray-500 mb-6 font-medium"><i data-lucide="calendar-days" class="inline-block mr-2 w-4 h-4"></i>Berlaku: 19 - 25 Juli 2025</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                        <div><p class="text-sm text-gray-500">USD</p><p class="text-2xl font-bold text-gray-800 mt-1">15,485.00</p><p class="text-sm text-green-600 font-medium mt-1">+0.15%</p></div>
                        <div><p class="text-sm text-gray-500">EUR</p><p class="text-2xl font-bold text-gray-800 mt-1">16,892.50</p><p class="text-sm text-red-600 font-medium mt-1">-0.08%</p></div>
                        <div><p class="text-sm text-gray-500">JPY</p><p class="text-2xl font-bold text-gray-800 mt-1">103.75</p><p class="text-sm text-green-600 font-medium mt-1">+0.21%</p></div>
                        <div><p class="text-sm text-gray-500">SGD</p><p class="text-2xl font-bold text-gray-800 mt-1">11,456.25</p><p class="text-sm text-red-600 font-medium mt-1">-0.02%</p></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News & Publication Section -->
        <section class="py-16 sm:py-24 bg-gray-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-between items-center gap-4 mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Informasi & Publikasi</h2>
                        <p class="mt-2 text-lg text-gray-600">Berita terkini dan peraturan terbaru dari Direktorat Jenderal Bea dan Cukai.</p>
                    </div>
                    <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-4 py-2 rounded-lg hover:bg-gray-300 transition-colors flex items-center gap-2">
                        Lihat Semua <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2"><div class="news-card h-full flex flex-col"><img src="https://placehold.co/800x450/cccccc/4A4A4A?text=Berita+Utama" alt="Implementasi Sistem CEISA 4.0" class="w-full h-64 object-cover"><div class="p-6 flex-grow flex flex-col"><span class="bg-yellow-400 text-yellow-900 text-xs font-bold px-2 py-1 rounded-full self-start mb-3">FEATURED</span><p class="text-sm text-gray-500 mb-2">19 Juli 2025</p><h3 class="text-2xl font-bold text-gray-900">Implementasi Sistem CEISA 4.0 Meningkatkan Efisiensi Pelayanan</h3><p class="mt-3 text-gray-600 flex-grow">Sistem baru CEISA 4.0 berhasil mengurangi waktu proses clearance hingga 60% dan meningkatkan kepuasan pengguna jasa.</p><a href="#" class="mt-4 font-semibold text-[#0A2351] hover:text-yellow-500 self-start flex items-center gap-2">Baca Selengkapnya <i data-lucide="arrow-right" class="w-4 h-4"></i></a></div></div></div>
                    <div class="space-y-6">
                        <a href="#" class="flex items-center gap-4 group"><img src="https://placehold.co/150x100/cccccc/4A4A4A?text=Info" alt="Kerjasama Internasional" class="w-28 h-20 object-cover rounded-md flex-shrink-0"><div><p class="text-sm text-gray-500">18 Juli 2025</p><h4 class="font-semibold text-gray-800 group-hover:text-[#0A2351]">Kerjasama Internasional dalam Pemberantasan Narkoba</h4></div></a>
                        <a href="#" class="flex items-center gap-4 group"><img src="https://placehold.co/150x100/cccccc/4A4A4A?text=Info" alt="Program Digitalisasi" class="w-28 h-20 object-cover rounded-md flex-shrink-0"><div><p class="text-sm text-gray-500">17 Juli 2025</p><h4 class="font-semibold text-gray-800 group-hover:text-[#0A2351]">Program Digitalisasi Layanan Publik Raih Penghargaan</h4></div></a>
                        <a href="#" class="flex items-center gap-4 group"><img src="https://placehold.co/150x100/cccccc/4A4A4A?text=Info" alt="Ekspor UKM" class="w-28 h-20 object-cover rounded-md flex-shrink-0"><div><p class="text-sm text-gray-500">16 Juli 2025</p><h4 class="font-semibold text-gray-800 group-hover:text-[#0A2351]">Bea Cukai Permudah Prosedur Ekspor untuk Pelaku UKM</h4></div></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Commitment Section -->
        <section class="py-16 sm:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="commitment-bg p-8 md:p-12 rounded-2xl flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0 text-center">
                        <div class="bg-[#0A2351] rounded-full w-48 h-48 flex items-center justify-center mx-auto">
                            <i data-lucide="shield-check" class="w-24 h-24 text-yellow-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-[#0A2351] mt-4">Kawal Integritas,<br>Bangun Negeri</h3>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-gray-800">Komitmen Kami untuk Transparansi</h2>
                        <p class="mt-4 text-lg text-gray-600">Bea Cukai berkomitmen untuk memberikan pelayanan yang transparan dan bebas dari korupsi. Laporkan setiap pelanggaran yang Anda temui dan bantu kami membangun sistem yang lebih baik.</p>
                        <div class="mt-6 flex flex-wrap gap-4">
                            <a href="#" class="bg-[#0A2351] text-white font-semibold px-6 py-3 rounded-lg hover:bg-opacity-90 transition-colors flex items-center gap-2">
                                <i data-lucide="file-text" class="w-5 h-5"></i> Lapor Gratifikasi
                            </a>
                            <a href="#" class="bg-gray-200 text-gray-800 font-semibold px-6 py-3 rounded-lg hover:bg-gray-300 transition-colors flex items-center gap-2">
                                <i data-lucide="phone-call" class="w-5 h-5"></i> Tanya BRAVO 1500225
                            </a>
                        </div>
                        <div class="mt-8 bg-white/70 p-4 rounded-lg border">
                            <h4 class="font-bold text-gray-700">Saluran Pengaduan Lainnya</h4>
                            <ul class="mt-2 space-y-2 text-sm text-gray-600">
                                <li class="flex items-center gap-2"><i data-lucide="mail" class="w-4 h-4 text-gray-500"></i> Email: pengaduan@customs.go.id</li>
                                <li class="flex items-center gap-2"><i data-lucide="message-square" class="w-4 h-4 text-gray-500"></i> WhatsApp: +62 811-1500-225</li>
                                <li class="flex items-center gap-2"><i data-lucide="globe" class="w-4 h-4 text-gray-500"></i> Website: www.beacukai.go.id/pengaduan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Units Section -->
        <section class="py-16 sm:py-24 bg-gray-100">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-800">Mengenal Unit Khusus Kami</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Tim-tim spesialis yang berdedikasi untuk menjaga keamanan dan kelancaran lalu lintas barang di Indonesia.</p>
                <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center group"><a href="#"><img src="https://placehold.co/200x200/0A2351/FACC15?text=CNT" alt="Customs Narcotics Team" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg group-hover:scale-105 transition-transform"><h3 class="mt-4 font-semibold text-lg text-gray-800">Customs Narcotics Team</h3></a></div>
                    <div class="text-center group"><a href="#"><img src="https://placehold.co/200x200/0A2351/FACC15?text=K-9" alt="K-9 Unit" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg group-hover:scale-105 transition-transform"><h3 class="mt-4 font-semibold text-lg text-gray-800">K-9 Unit</h3></a></div>
                    <div class="text-center group"><a href="#"><img src="https://placehold.co/200x200/0A2351/FACC15?text=MC" alt="Marine Customs" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg group-hover:scale-105 transition-transform"><h3 class="mt-4 font-semibold text-lg text-gray-800">Marine Customs</h3></a></div>
                    <div class="text-center group"><a href="#"><img src="https://placehold.co/200x200/0A2351/FACC15?text=CET" alt="Customs Enforcement Team" class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-lg group-hover:scale-105 transition-transform"><h3 class="mt-4 font-semibold text-lg text-gray-800">Customs Enforcement Team</h3></a></div>
                </div>
            </div>
        </section>

        <!-- International Partners Section -->
        <section class="py-16 sm:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-800">Tautan & Mitra Internasional</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">Berkolaborasi dengan organisasi internasional untuk kemudahan perdagangan global.</p>
                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                    <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow border"><img src="https://placehold.co/200x80/CCCCCC/4A4A4A?text=APEC" alt="Logo APEC" class="h-12 mx-auto"></a>
                    <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow border"><img src="https://placehold.co/200x80/CCCCCC/4A4A4A?text=ASEAN+Tariff" alt="Logo ASEAN Tariff Finder" class="h-12 mx-auto"></a>
                    <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow border"><img src="https://placehold.co/200x80/CCCCCC/4A4A4A?text=INSW" alt="Logo INSW" class="h-12 mx-auto"></a>
                    <a href="#" class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow border"><img src="https://placehold.co/200x80/CCCCCC/4A4A4A?text=WCO" alt="Logo World Customs Organization" class="h-12 mx-auto"></a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>