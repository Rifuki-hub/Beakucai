/**
 * File: layanan.js
 * Deskripsi: Skrip ini menangani fungsionalitas accordion
 * di halaman Layanan Publik.
 */

document.addEventListener('DOMContentLoaded', function () {
    const accordions = document.querySelectorAll('.service-accordion-item');

    accordions.forEach(accordion => {
        accordion.addEventListener('toggle', (event) => {
            // Jika accordion ini sedang dibuka
            if (accordion.open) {
                // Tutup semua accordion lain
                accordions.forEach(otherAccordion => {
                    if (otherAccordion !== accordion && otherAccordion.open) {
                        otherAccordion.open = false;
                    }
                });
            }
        });
    });
});