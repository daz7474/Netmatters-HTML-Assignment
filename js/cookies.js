const consentBtn = document.getElementById("manage-cookies");
const cookiePopup = document.querySelector(".cookie-consent");
const acceptBtn = document.getElementById("accept");
const main = document.querySelector("body");

// When page loads, show cookie popup
window.onload = () => {
  // If not stored in local storage, show popup
  if (localStorage.getItem("policyAccepted") === false || localStorage.getItem("policyAccepted") === null) {
    window.onload = cookiePopup.classList.toggle("cookie-show");
    main.classList.add("lock");
  }
};

consentBtn.addEventListener("click", () => {
  // Open popup on manage consent click
  cookiePopup.classList.toggle("cookie-show");
  main.classList.add("lock");
});

acceptBtn.addEventListener("click", (e) => {
  // Close popup on accept button click
  cookiePopup.classList.toggle("cookie-show");
  main.classList.remove("lock");
  // Save state to local storage
  localStorage.setItem("policyAccepted", true);
  e.preventDefault();
})