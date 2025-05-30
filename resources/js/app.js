document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById('navbar');
    const logoText = document.getElementById('logotext');
    const logoSpanText = document.getElementById('logospantext');
    const navMenu = document.querySelectorAll('#nav-menu');
    const flashMessage = document.getElementById('flash-message');
    const postJob = document.getElementById('post-job');
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navMenu.forEach(menu => {
                menu.classList.remove('menu');
                menu.classList.add('menuScroll');
            });

            navbar.classList.add("scrolled");
            logoText.classList.add('logotextscrol');
            logoSpanText.classList.add('logospanscrol');
            postJob.style.borderColor = 'black';
            postJob.style.color = 'black';
        } else {
            navMenu.forEach(menu => {
                menu.classList.remove('menuScroll');
                menu.classList.add('menu');
            });

            navbar.classList.remove("scrolled");
            logoText.classList.remove('logotextscrol');
            logoSpanText.classList.remove('logospanscrol');
            postJob.style.borderColor = 'white';
            postJob.style.color = 'white';
        }
    });
    // user type select
    const select = document.getElementById('userType');
    select.addEventListener('change', function () {
      if (select.value) {
        select.classList.remove('text-gray-400');
        select.classList.add('text-gray-900');
      }
    });
    // flash message
    setTimeout(() => {
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 3000);


});
