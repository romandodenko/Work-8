// Слайдер
const rewiviewsSliderInit = document.querySelector(".rewiviews-slider-1");
if(rewiviewsSliderInit) {
  const rewiviewsSlider = new Swiper('.rewiviews-slider-1', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 32,
    direction: 'horizontal',
    pagination: {
      el: '.rewiviews-slider-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.rewiviews-slider-next',
      prevEl: '.rewiviews-slider-prev',
    },
  });
   
}