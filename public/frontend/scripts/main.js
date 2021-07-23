// slider-testimonial
$(".owl-carousel").owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 4000,
  responsive: {
    0: {
      items: 1,
    },
    767: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1200: {
      items: 1,
    },
    1500: {
      items: 1,
    },
  },
});

//Typed Animate
var typed = new Typed(".type-animate", {
  strings: ["Bali?", "Jogja?", "Lombok?", "Bandung?", "Tokyo?"],
  typeSpeed: 100,
  backSpeed: 50,
  loop: true,
  startDelay: 1000,
});

AOS.init({
  duration: 1000,
});
