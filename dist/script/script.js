const accordions = document.querySelectorAll(".faq__accordion");

function toggleDescription(event) {
  const accordion = event.currentTarget;
  accordion.classList.toggle("active");
}

accordions.forEach((accordion) => {
  accordion.addEventListener("click", toggleDescription);
});
