// ---------- Swiper ----------

// init Swiper:

var swiper = new Swiper('.swiper-container', {
  spaceBetween: 60,
  speed: 1000,
  autoplay: {
      delay: 250,
  },
  effect: 'Cover Flow',
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: 3,
  coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
  },
  autoplay: {
      delay: 2500,
      disableOnInteraction: false,
  },

})