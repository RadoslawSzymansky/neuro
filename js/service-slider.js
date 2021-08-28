const serviceSlider = tns({
  container: '.service__slider',
  items: 1.15,
  slideBy: 1,
  autoplay: false,
  autoplayButtonOutput: false,
  autoplayTimeout: 6000,
  navPosition: 'bottom',
  controls: false,
  loop: false,
  responsive: {
    578: {
      items: 2
    },
    1190: {
      items: 5
    }
  }
});
