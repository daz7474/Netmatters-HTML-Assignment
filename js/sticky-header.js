const header = document.getElementById("header");
let lastScroll = 0;

window.addEventListener("scroll", () => {
  // Set to current pages scroll
  const currentScroll = window.pageYOffset

  // If at the top, remove the "scoll-up" class
  if (currentScroll <= 0) {
    header.classList.remove("scroll-up")
  } // If scrolled past 350px, add the "scoll-down" class
  else if (currentScroll > lastScroll && currentScroll > 350) {
    header.classList.remove("scroll-up");
    header.classList.add("scroll-down");
  } // If scrolling up and "scroll-down" is on, remove and add "scroll-up"
  else if (currentScroll < lastScroll && header.classList.contains("scroll-down")) {
    header.classList.remove("scroll-down");
    header.classList.add("scroll-up");
  }

  // Set last scroll to current page scroll
  lastScroll = currentScroll;
})