const BURGER = document.querySelector('.burger');

BURGER.addEventListener('click', () => {
    document.body.classList.toggle('menu-fixed-opened');
});

window.addEventListener('scroll', () => {
    if (window.scrollY) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
});
