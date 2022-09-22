
// initializing  main swiper 

const main_swiper = new Swiper('.swiper.main-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed:1000,
    autoplay:{
      delay:5000,
    },
    effect:'fade',
    grabCursor:true,
  
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination.main-swiper-pagination',
    //   type:'bullets',
    //   clickable:true,
    // },
  
    // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
  
    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });

// initializing  main swiper  ends


const au_swiper = new Swiper('.swiper.au-slider', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed:2000,
  autoplay:{
    delay:5000,
  },
  effect:'cube',
  grabCursor:true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination.main-swiper-pagination',
    type:'bullets',
    clickable:true,
  },

  // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});

// initializing  swiper  ends