// Select all market rating stars
const stars = document.querySelectorAll('.star');

// Add click event to each star
stars.forEach(star => {
    star.addEventListener('click', function () {
        const rating = this.dataset.value;
        const parent = this.parentElement;

        // Reset all stars
        parent.querySelectorAll('.star').forEach(s => {
            s.classList.remove('selected');
        });

        // Highlight the selected stars
        for (let i = 0; i < rating; i++) {
            parent.children[i].classList.add('selected');
        }
    });
});