document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('faq-search-input');
    const faqList = document.getElementById('faq-list');
    const noResults = document.getElementById('no-results');
    const faqItems = Array.from(faqList.querySelectorAll('.faq-item'));
    const filterButtons = document.querySelectorAll('.faq-filter-button');

    function filterFAQs() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        const activeCategory = document.querySelector('.faq-filter-button.active').textContent.toLowerCase();

        let found = false;
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question span').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
            const category = item.dataset.category;

            const matchesSearch = question.includes(searchTerm) || answer.includes(searchTerm);
            const matchesCategory = activeCategory === 'semua' || category === activeCategory;

            if (matchesSearch && matchesCategory) {
                item.style.display = '';
                found = true;
            } else {
                item.style.display = 'none';
            }
        });

        if (found) {
            noResults.classList.add('hidden');
        } else {
            noResults.classList.remove('hidden');
            noResults.innerHTML = `<p>Tidak ada hasil yang ditemukan.</p>`;
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterFAQs);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            filterFAQs();
        });
    });
});
