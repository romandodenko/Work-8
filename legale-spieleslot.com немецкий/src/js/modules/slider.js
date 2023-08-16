// Слайдер
const rezensionenSliderInit = document.querySelector(".rezensionen-slider_1");

if(rezensionenSliderInit) {
  const rezensionenSlider = new Swiper('.rezensionen-slider_1', { 
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 32, 
    direction: 'horizontal', 
    pagination: {
      el: '.rezensionen-slider-pagination',
      clickable: true, 
    },
    navigation: {
      nextEl: '.rezensionen-slider-next',
      prevEl: '.rezensionen-slider-prev',
    }, 
  });
}