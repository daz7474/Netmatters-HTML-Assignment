const accordion = document.querySelector(".accordion");

accordion.addEventListener("click", () => {
  const accordionInfo = document.querySelector(".accordion-info");

  accordionInfo.classList.toggle("accordion-active");
});