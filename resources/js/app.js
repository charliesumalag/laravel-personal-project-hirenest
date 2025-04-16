document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById('navbar');
    const logoText = document.getElementById('logotext');
    const logoSpanText = document.getElementById('logospantext');
    const navMenu = document.querySelectorAll('#nav-menu');
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navMenu.forEach(menu => {
                menu.classList.remove('menu');
                menu.classList.add('menuScroll');
            });
            navbar.classList.add("scrolled");
            logoText.classList.add('logotextscrol');
            logoSpanText.classList.add('logospanscrol');
        } else {
            navMenu.forEach(menu => {
                menu.classList.remove('menuScroll');
                menu.classList.add('menu');
            });
            navbar.classList.remove("scrolled");
            logoText.classList.remove('logotextscrol');
            logoSpanText.classList.remove('logospanscrol');
        }
    });
});
