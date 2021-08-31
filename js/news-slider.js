const newsSlider = tns({
  container: '.news-slider',
  items: 1.35,
  slideBy: 1,
  autoplay: false,
  autoplayButtonOutput: false,
  autoplayTimeout: 6000,
  controls: false,
  loop: true,
  nav: false,
  viewportMax: 100,
  responsive: {
    578: {
      items: 2
    },
    1100: {
      items: 2.7
    }
  }
});

document.querySelector('.news-nav button:nth-child(1)').addEventListener('click', () => {
  newsSlider.goTo('prev');
})

document.querySelector('.news-nav button:nth-child(2)').addEventListener('click', () => {
  newsSlider.goTo('next');
})