const BURGER = document.querySelector('.burger');
const SUB_MENU_BTN = document.querySelector('.not-clickable');
const CLOSE_SUB_MENU = document.querySelector('.close-sub-menu');

BURGER.addEventListener('click', () => {
    document.body.classList.toggle('menu-fixed-opened');
});

SUB_MENU_BTN.addEventListener('click', () => {
    document.body.classList.add('sub-menu-opened');
});

CLOSE_SUB_MENU.addEventListener('click', (e) => {
    e.preventDefault();
    e.stopPropagation();
    document.body.classList.remove('sub-menu-opened');
});

window.addEventListener('scroll', () => {
    if (window.scrollY) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const isSubMenuLinkActive = !!document.querySelector('.sub-menu .current-menu-item');

    if (isSubMenuLinkActive) {
        document.body.classList.add('sub-menu-opened');
    };

    const img = document.createElement('img');
    const img2 = document.createElement('img');
    img.src = 'http://gb.sodova.com/wp-content/uploads/2021/08/menu1.jpg';
    document.querySelector('.sub-menu li:nth-child(2) a').prepend(img);
    img2.src = 'http://gb.sodova.com/wp-content/uploads/2021/08/menu2.jpg';
    document.querySelector('.sub-menu li:nth-child(3) a').prepend(img2);
})