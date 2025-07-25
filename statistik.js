/**
 * File: statistic.js
 * Deskripsi: Skrip ini khusus untuk menginisialisasi semua grafik
 * dan interaksi di halaman statistik.
 */

document.addEventListener('DOMContentLoaded', function () {
    initializeStatisticsPageLogic();
});

/**
 * Menginisialisasi grafik dan interaksi di halaman statistik.
 */
function initializeStatisticsPageLogic() {
    // Periksa apakah kita berada di halaman statistik dengan mencari elemen grafik
    const penerimaanChartEl = document.querySelector("#penerimaan-chart");
    if (!penerimaanChartEl) return; // Keluar jika bukan halaman statistik

    // --- Grafik 1: Penerimaan Negara (Bar Chart) ---
    const optionsPenerimaan = {
        series: [{
            name: 'Bea Masuk',
            data: [45.5, 48.2, 52.1, 55.3, 58.9]
        }, {
            name: 'Cukai',
            data: [190.3, 205.6, 215.8, 220.1, 230.5]
        }, {
            name: 'Bea Keluar',
            data: [30.1, 32.5, 35.0, 38.2, 40.7]
        }],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: { show: false }
        },
        plotOptions: {
            bar: { horizontal: false, columnWidth: '55%', endingShape: 'rounded' },
        },
        dataLabels: { enabled: false },
        stroke: { show: true, width: 2, colors: ['transparent'] },
        xaxis: { categories: ['2020', '2021', '2022', '2023', '2024'] },
        yaxis: { title: { text: '(Triliun Rupiah)' } },
        fill: { opacity: 1 },
        tooltip: { y: { formatter: (val) => `Rp ${val} T` } },
        colors: ['#3B82F6', '#10B981', '#F59E0B']
    };
    const chartPenerimaan = new ApexCharts(penerimaanChartEl, optionsPenerimaan);
    chartPenerimaan.render();

    // --- Grafik 2: Komoditas Ekspor (Donut Chart) ---
    const optionsKomoditas = {
        series: [44, 25, 15, 10, 6],
        chart: { type: 'donut', height: 350 },
        labels: ['Bahan Bakar Mineral', 'Lemak & Minyak Hewani', 'Besi & Baja', 'Mesin & Peralatan', 'Lainnya'],
        responsive: [{
            breakpoint: 480,
            options: { chart: { width: 200 }, legend: { position: 'bottom' } }
        }],
        colors: ['#1D4ED8', '#2563EB', '#60A5FA', '#93C5FD', '#BFDBFE']
    };
    const chartKomoditas = new ApexCharts(document.querySelector("#komoditas-chart"), optionsKomoditas);
    chartKomoditas.render();

    // --- Grafik 3: Tren Perdagangan (Line Chart) ---
    const optionsPerdagangan = {
        series: [{
            name: "Ekspor",
            data: [320, 330, 345, 350, 340, 360, 370, 365, 380, 390, 400, 410]
        }, {
            name: "Impor",
            data: [280, 290, 300, 310, 305, 320, 330, 325, 340, 350, 360, 370]
        }],
        chart: { height: 350, type: 'line', zoom: { enabled: false }, toolbar: { show: false } },
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth' },
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'] },
        tooltip: { y: { formatter: (val) => `Rp ${val} T` } },
        colors: ['#16A34A', '#DC2626']
    };
    const chartPerdagangan = new ApexCharts(document.querySelector("#perdagangan-chart"), optionsPerdagangan);
    chartPerdagangan.render();
}