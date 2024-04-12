// Show accordion on click
document.querySelector(".accordion").addEventListener("click", () => {
  const accordionInfo = document.querySelector(".accordion-info");

  // Add active to accordion
  accordionInfo.classList.toggle("accordion-active");
});

// Form response
document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();
  let formData = new FormData(this);

  fetch(this.action, {
    method: "POST",
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      if (data.errors) {
        alert("Errors were found: " + data.errors.join(", "));
      } else {
        alert(data.success);
      }
    })
    .catch(error => alert("Failed to process form: " + error));
});