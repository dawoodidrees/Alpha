const accordions = document.querySelectorAll(".faq__accordion");

function toggleDescription(event) {
  const accordion = event.currentTarget;
  accordion.classList.toggle("active");
}

accordions.forEach((accordion) => {
  accordion.addEventListener("click", toggleDescription);
});

// Swiper
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 5,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2500,
  },
  breakpoints: {
    350: {
      slidesPerView: 3,
      spaceBetweenSlides: 30,
    },

    // when window width is <= 499px
    499: {
      slidesPerView: 3,
      spaceBetweenSlides: 30,
    },

    1000: {
      slidesPerView: 3,
      spaceBetweenSlides: 30,
    },
    // when window width is <= 999px
    1200: {
      slidesPerView: 5,
      spaceBetweenSlides: 40,
    },
  },
});
