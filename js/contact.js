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
    .then(response => {
      if (!response.ok) {
        throw response;
      }
      return response.json();
    })
    .then(data => {
      if (data.errors) {
        // Clear any messages
        const successMsg = document.getElementById('success-message');
        if (successMsg) successMsg.textContent = '';

        // Display error message
        Object.keys(data.errors).forEach(key => {
          let errorSpan = document.getElementById('error-' + key);
          if (errorSpan) {
            errorSpan.textContent = data.errors[key];
          }
        });
      } else {
        // Clear any messages
        document.querySelectorAll('.error-span').forEach(span => span.textContent = '');

        // Display success message
        let successSpan = document.getElementById('success-message');
        if (successSpan) {
          successSpan.textContent = data.success;
          // Clear the form
          document.getElementById("contact-form").reset();
          setTimeout(() => {
            successSpan.textContent = '';
          }, 4000);
        }
      }
    })
    .catch(error => {
      error.json().then(body => {
        // Clear any messages
        const successMsg = document.getElementById('success-message');
        if (successMsg) successMsg.textContent = '';

        // Handle HTTP response error
        if (body && body.errors) {
          Object.keys(body.errors).forEach(key => {
            let errorSpan = document.getElementById('error-' + key);
            if (errorSpan) {
              errorSpan.textContent = body.errors[key];
            }
          });
        } else {
          // Generic error
          let errorSpan = document.getElementById('error-general');
          if (errorSpan) {
            errorSpan.textContent = 'Failed to process form.';
          }
        }
      });
    });
});