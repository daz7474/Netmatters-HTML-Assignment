// Show accordion on click
document.querySelector(".accordion").addEventListener("click", () => {
  const accordionInfo = document.querySelector(".accordion-info");
  accordionInfo.classList.toggle("accordion-active");
});

// Form response
document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();

  let isFormValid = true;
  const requiredInputs = this.querySelectorAll(".is-required");

  requiredInputs.forEach(input => {
    if (!input.value.trim()) {
      input.style.borderColor = '#d64541';
      isFormValid = false;
    } else {
      input.style.borderColor = '';
    }
  });

  if (!isFormValid) {
    return;
  }

  let formData = new FormData(this);

  fetch(this.action, {
    method: "POST",
    body: formData
  })
    .then(response => response.ok ? response.json() : Promise.reject(response))
    .then(data => {
      // Clear all messages
      document.querySelectorAll('.error-message, .success-message').forEach(span => {
        span.innerHTML = '';
        span.classList.remove('error-message', 'success-message');
      });

      if (data.errors) {
        // Display error messages
        Object.keys(data.errors).forEach(key => {
          let errorSpan = document.getElementById('error-' + key);
          if (errorSpan) {
            errorSpan.innerHTML = `
            <p>${data.errors[key]}</p><button class="closeBtn">X</button>
            `;
            errorSpan.classList.add('error-message');
          }
        });
      } else if (data.success) {
        // Show success message
        let successSpan = document.getElementById('success-message');
        if (successSpan) {
          successSpan.innerHTML = `
          <p>${data.success}</p><button class="closeBtn">X</button>
          `;
          successSpan.classList.add('success-message');
        }
      }
    })
    .catch(error => {
      error.json().then(body => {
        // Show general error for any network error
        let errorSpan = document.getElementById('error-general');
        if (errorSpan) {
          errorSpan.innerHTML = `
          <p>Failed to process form.</p><button class="closeBtn">X</button>
          `;
          errorSpan.classList.add('error-message');
        }
      });
    });

  // Handle close button
  document.addEventListener('click', function (event) {
    if (event.target.classList.contains('closeBtn')) {
      const messageContainer = event.target.parentElement;
      messageContainer.innerHTML = '';
      messageContainer.classList.remove('error-message', 'success-message');
    }
  });
});