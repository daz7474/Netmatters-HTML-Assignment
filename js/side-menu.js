// ======================================
// Side Menu
// ======================================

// Get ref to burger menu button
const menuBtn = document.querySelector(".hamburger");
const sideBar = document.getElementById("side-bar");
const burgerBar = document.querySelector(".bar");
// Get ref to body element
const mainContent = document.getElementById("main-content-container");

let canClose = false;
// On click, add class "side-menu-open" to show/hide
menuBtn.addEventListener("click", () => {
  sideBar.classList.toggle("side-bar-open");
  // toggle margins on the body when menu is open
  mainContent.classList.toggle("side-bar-open");
  // toggle the class "rotate"
  setTimeout(() => {
    burgerBar.classList.toggle("rotate");
  }, 100)
  setTimeout(() => {
    canClose = true
  }, 100);
  canClose = false;
});

mainContent.addEventListener("click", () => {
  if (canClose) {
    sideBar.classList.remove("side-bar-open");
    mainContent.classList.remove("side-bar-open");
    setTimeout(() => {
      burgerBar.classList.remove("rotate");
    }, 150)
    canClose = false;
  }
});