document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.toggle');
    const menu = document.querySelector('.main-menu');

    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            menu.classList.toggle('active');
        });
    }
});
