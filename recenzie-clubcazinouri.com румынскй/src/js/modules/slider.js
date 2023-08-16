// Слайдер

const sliderInit = document.querySelector(".reviews-slider-1");

if (sliderInit) {
  const reviewsSlider = new Swiper('.reviews-slider-1', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
 
    direction: 'horizontal',
    pagination: {
      el: '.reviews-slider-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.reviews-slider-button-next',
      prevEl: '.reviews-slider-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 16
      }, 
      992: {
        slidesPerView: 2,
        spaceBetween: 32,
      }
    },
  });
}