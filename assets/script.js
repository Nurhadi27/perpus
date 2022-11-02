const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: "autoplay",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
  
    pagination: {
      el: '.swiper-pagination',
    },
  
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });