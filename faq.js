/**
 * File: faq.js
 * Deskripsi: Skrip ini menangani fungsionalitas pencarian
 * dan interaksi lain di halaman FAQ.
 */

document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('faq-search-input');
    const faqList = document.getElementById('faq-list');
    const noResults = document.getElementById('no-results');

    if (searchInput && faqList && noResults) {
        searchInput.addEventListener('keyup', function () {
            const searchTerm = searchInput.value.toLowerCase();
            const questions = faqList.getElementsByClassName('faq-item');
            let resultsFound = false;

            for (let i = 0; i < questions.length; i++) {
                const questionText = questions[i].querySelector('.faq-question span').textContent.toLowerCase();
                if (questionText.includes(searchTerm)) {
                    questions[i].style.display = '';
                    resultsFound = true;
                } else {
                    questions[i].style.display = 'none';
                }
            }

            if (resultsFound) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });
    }
});