document.addEventListener('DOMContentLoaded', function () {
    const serviceCards = document.querySelectorAll('.service-card');
    const modal = document.getElementById('service-modal');
    const closeModalButton = document.getElementById('close-modal-button');
    const modalTitle = document.getElementById('modal-title');
    const modalContent = document.getElementById('modal-content');

    // --- STRUKTUR DATA DIPERBARUI ---
    const serviceDetails = {
        'Layanan Importasi': {
            title: 'Layanan Importasi',
            // Konten sekarang berupa objek untuk dropdown
            dropdownContent: {
                'Pemberitahuan Pengangkutan RKSP': `
                    <p class="font-semibold mb-2">Detail untuk Pemberitahuan Pengangkutan RKSP:</p>
                    <ol class="list-decimal pl-5 space-y-1">
                        <li>Penyerahan dan Penatausahaan Pemberitahuan RKSP untuk Sarana Pengangkut melalui Laut dan Udara melalui Tulisan di Atas Formulir</li>
                        <li>Penyerahan dan Penatausahaan Pemberitahuan RKSP untuk Sarana Pengangkut melalui Laut dan Udara melalui Media Penyimpan Data Elektronik</li>
                        <li>Penyerahan dan Penatausahaan Pemberitahuan RKSP untuk Sarana Pengangkut melalui Laut dan Udara Melalui Sistem PDE</li>
                        <li>Perbaikan RKSP (dengan Persetujuan Kepala Kantor)</li>
                        <li>Perbaikan RKSP (tanpa Persetujuan Kepala Kantor)</li>
                        <li>Pembatalan RKSP</li>
                    </ol>
                    <p class="mt-4">
                        Rincian komponen standar pelayanan di atas dapat dilihat di sini 
                        <a href="https://repository.beacukai.go.id/download/2022/03/c2f2a33509068ac9134f19aeeb5f8b34-pelayanan-tema-impor-kategori-pemberitahuan-pengangkutan-rksp.pdf" class="text-blue-600 hover:underline">(download)</a>.
                    </p>
                `,
                'Pemberitahuan Pengangkutan Manifest': `
                    <p>Konten untuk <strong>Pemberitahuan Pengangkutan Manifest</strong> akan segera tersedia.</p>
                `,
                'Operasional Kawasan Pabean dan TPS': `
                    <p>Konten untuk <strong>Operasional Kawasan Pabean dan TPS</strong> akan segera tersedia.</p>
                `,
                'Pemberitahuan Pabean Impor': `
                    <p>Konten untuk <strong>Pemberitahuan Pabean Impor</strong> akan segera tersedia.</p>
                `,
                'Barang Kiriman dan Barang Pribadi Penumpang & Awak Sarana Pengangkut': `
                    <p>Konten untuk <strong>Barang Kiriman dan Barang Pribadi Penumpang & Awak Sarana Pengangkut</strong> akan segera tersedia.</p>
                `,
                'Impor Sementara': `
                    <p>Konten untuk <strong>Impor Sementara</strong> akan segera tersedia.</p>
                `,
                'Pelayanan Penetapan Klasifikasi Sebelum Impor': `
                    <p>Konten untuk <strong>Pelayanan Penetapan Klasifikasi Sebelum Impor</strong> akan segera tersedia.</p>
                `,
                'Penetapan Keasalan Barang Sebelum Impor (PKBSI)': `
                    <p>Konten untuk <strong>Penetapan Keasalan Barang Sebelum Impor (PKBSI)</strong> akan segera tersedia.</p>
                `,
                'Valuation Advice': `
                    <p>Konten untuk <strong>Valuation Advice</strong> akan segera tersedia.</p>
                `
            }
        },
        'Layanan Ekspor': {
            title: 'Layanan Ekspor',
            content: '<p>Informasi detail untuk layanan ekspor akan segera tersedia.</p>'
        },
        'Fasilitas Kepabeanan': {
            title: 'Layanan Fasilitas Kepabeanan',
            content: '<p>Informasi detail untuk layanan fasilitas kepabeanan akan segera tersedia.</p>'
        },
        'Layanan Cukai': {
            title: 'Layanan Cukai',
            content: '<p>Informasi detail untuk layanan cukai akan segera tersedia.</p>'
        }
    };

    serviceCards.forEach(card => {
        card.addEventListener('click', function (e) {
            e.preventDefault();
            const serviceName = this.querySelector('.service-card-title').textContent;
            const details = serviceDetails[serviceName];

            if (details) {
                modalTitle.textContent = details.title;

                // --- LOGIKA BARU UNTUK HANDLE DROPDOWN ---
                if (details.dropdownContent) {
                    // 1. Buat kerangka HTML untuk dropdown dan area konten
                    let html = `
                        <p class="mb-3">Silakan pilih jenis layanan importasi di bawah ini:</p>
                        <select id="import-service-dropdown" class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    `;
                    
                    // 2. Isi opsi dropdown dari keys di objek dropdownContent
                    Object.keys(details.dropdownContent).forEach(key => {
                        html += `<option value="${key}">${key}</option>`;
                    });

                    html += `
                        </select>
                        <div id="import-content-display" class="mt-4 border-t pt-4"></div>
                    `;
                    
                    modalContent.innerHTML = html;

                    // 3. Dapatkan elemen yang baru dibuat
                    const dropdown = document.getElementById('import-service-dropdown');
                    const contentDisplay = document.getElementById('import-content-display');
                    
                    // Fungsi untuk update konten berdasarkan pilihan dropdown
                    const updateContent = (selectedKey) => {
                        contentDisplay.innerHTML = details.dropdownContent[selectedKey];
                    };

                    // 4. Tambahkan event listener ke dropdown
                    dropdown.addEventListener('change', (event) => {
                        updateContent(event.target.value);
                    });

                    // 5. Tampilkan konten untuk item pertama secara default
                    updateContent(dropdown.value);

                } else {
                    // Logika lama untuk layanan tanpa dropdown
                    modalContent.innerHTML = details.content;
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        });
    });

    // Fungsi untuk menutup modal (tidak ada perubahan)
    if (closeModalButton) {
        closeModalButton.addEventListener('click', function () {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    }

    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    }
});