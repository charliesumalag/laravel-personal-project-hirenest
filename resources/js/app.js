document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById('navbar');
    const logoText = document.getElementById('logotext');
    const logoSpanText = document.getElementById('logospantext');

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            logoText.classList.add('logotextscrol');
            logoSpanText.classList.add('logospanscrol');
        } else {
            navbar.classList.remove("scrolled");
            logoText.classList.remove('logotextscrol');
            logoSpanText.classList.remove('logospanscrol');
        }
    });
});
