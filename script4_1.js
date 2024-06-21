document.addEventListener('DOMContentLoaded', function() {
    const openFormButton = document.getElementById('openFormButton');
    const overlay = document.getElementById('overlay');
    const closeFormButton = document.getElementById('closeFormButton');

    openFormButton.addEventListener('click', function() {
        overlay.style.display = 'block';
    });

    closeFormButton.addEventListener('click', function() {
        overlay.style.display = 'none';
    });
});