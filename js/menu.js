const BURGER = document.querySelector('.burger');

BURGER.addEventListener('click', () => {
    document.body.classList.toggle('menu-fixed-opened');
});

let lastScroll = window.scrollY;

window.addEventListener('scroll', () => {
    if (window.scrollY) {
        document.body.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
    }

    if (window.scrollY < lastScroll) {
        document.body.classList.add('is-going-top');
    } else {
        document.body.classList.remove('is-going-top');
    }

    lastScroll = window.scrollY;
});

document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('.go-up').addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  })
});
