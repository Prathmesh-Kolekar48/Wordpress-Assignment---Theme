document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.toggle');
    const menu = document.querySelector('.menu');
    const menuItems = document.querySelectorAll('.buttons');
    
    if (menu && menuItems.length > 0) {
        menuItems.forEach(button => {
            menu.appendChild(button);
        });
    }

    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            menu.classList.toggle('active');
        });
    }
});
