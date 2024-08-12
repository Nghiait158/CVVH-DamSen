document.querySelectorAll('.locationPoint').forEach(point => {
    point.addEventListener('click', function() {
        const popup = this.querySelector('.popup-location');
        if (popup.classList.contains('hidden')) {
            popup.classList.remove('hidden');
            popup.style.display = 'block';
        } else {
            popup.classList.add('hidden');
            popup.style.display = 'none';
        }
    });
});
