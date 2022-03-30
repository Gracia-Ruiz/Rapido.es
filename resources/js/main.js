document.addEventListener('scroll', () =>{
      let nav = document.querySelector('#nav');
      if ( window.pageYOffset > 100 ) {
        nav.classList.remove('bg-nav');
        nav.classList.add('bg-main');
        nav.classList.add('borde-bottom');
        nav.style.transition = "0.4s";
        
      } else {
        nav.classList.remove('borde-bottom');
        nav.classList.remove('bg-main');
        nav.classList.add('bg-nav');
      }
    })
    document.addEventListener('scroll', () =>{
      let money = document.querySelector('#money');
      if ( window.pageYOffset > 190 ) {
        money.classList.add('money');
        money.classList.remove('money-back');
      } else {
        money.classList.remove('money');
        money.classList.add('money-back');
      }
    })
    document.addEventListener('scroll', () =>{
      let inserta = document.querySelector('#inserta');
      if ( window.pageYOffset > 200 ) {
        inserta.classList.add('animation-inserta');
      } else {
        inserta.classList.remove('animation-inserta');
      }
    })

var swiper = new Swiper.default(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper.default(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });