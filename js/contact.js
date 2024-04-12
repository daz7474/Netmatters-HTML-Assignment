// Show accordion on click
document.querySelector(".accordion").addEventListener("click", () => {
  const accordionInfo = document.querySelector(".accordion-info");

  // Add active to accordion
  accordionInfo.classList.toggle("accordion-active");
});