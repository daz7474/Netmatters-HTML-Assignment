// ======================================
// Side Menu
// ======================================

// Get ref to burger menu button
const menuBtn = document.querySelector(".hamburger");
const sideMenu = document.querySelector(".side-menu");
const burgerBars = document.querySelectorAll(".bar");
// Get ref to body element
const body = document.querySelector("body");

// On click, toggles class "side-menu-open" to show/hide
menuBtn.addEventListener("click", () => {
  sideMenu.classList.toggle("side-menu-open");
  // Toggles margins on the body when menu is open
  body.classList.toggle("body-adjusted");
  // Toggles the class "x" to add/remove a cross
  burgerBars.forEach(bar => bar.classList.toggle('x'));
});