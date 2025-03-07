document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1200,
        once: true,
        easing: 'ease-in-out',
        mirror: false,
        offset: 50,
    });
    var navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});

