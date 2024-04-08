// ======================================
// Side Menu
// ======================================

// Get ref to burger menu button
const menuBtn = document.querySelector(".hamburger");
const sideMenu = document.querySelector(".side-menu");
const burgerBar = document.querySelector(".bar");
// Get ref to body element
const body = document.querySelector("body");

let canClose = false;
// On click, add class "side-menu-open" to show/hide
menuBtn.addEventListener("click", () => {
  sideMenu.classList.toggle("side-menu-open");
  // toggle margins on the body when menu is open
  body.classList.toggle("body-adjusted");
  // toggle the class "rotate"
  setTimeout(() => {
    burgerBar.classList.toggle("rotate");
  }, 100)
  setTimeout(() => {
    canClose = true
  }, 100);
  canClose = false;
});

body.addEventListener("click", () => {
  if (canClose) {
    sideMenu.classList.remove("side-menu-open");
    body.classList.remove("body-adjusted");
    setTimeout(() => {
      burgerBar.classList.remove("rotate");
    }, 150)
    canClose = false;
  }
});