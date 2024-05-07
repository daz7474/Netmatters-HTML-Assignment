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
    if (!validateInput(input)) {
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
    .then(response => response.json().then(data => ({
      status: response.status, body: data
    })))
    .then(result => {
      document.querySelectorAll('.error-message, .success-message').forEach(span => {
        span.innerHTML = '';
        span.classList.remove('error-message', 'success-message');
      });

      if (result.status !== 200) {
        Object.keys(result.body.errors).forEach(key => {
          let errorSpan = document.getElementById('error-' + key);
          if (errorSpan) {
            errorSpan.innerHTML = `<p>${result.body.errors[key]}</p><button class="closeBtn">X</button>`;
            errorSpan.classList.add('error-message');
          }
        });
      } else {
        let successSpan = document.getElementById('success-message');
        if (successSpan) {
          successSpan.innerHTML = `<p>${result.body.success}</p><button class="closeBtn">X</button>`;
          successSpan.classList.add('success-message');
        }
        this.reset(); // Reset form after successful submission
      }
    })
    .catch(error => {
      console.error('Network or JSON error:', error);
      let errorSpan = document.getElementById('error-general');
      if (errorSpan) {
        errorSpan.innerHTML = `<p>Failed to process form due to a network error.</p><button class="closeBtn">X</button>`;
        errorSpan.classList.add('error-message');
      }
    });

  document.addEventListener('click', function (event) {
    if (event.target.classList.contains('closeBtn')) {
      const messageContainer = event.target.parentElement;
      messageContainer.innerHTML = '';
      messageContainer.classList.remove('error-message', 'success-message');
    }
  });
});

function validateInput(input) {
  const inputType = input.getAttribute('type');
  const value = input.value.trim();

  if (inputType === 'email') {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
  } else if (inputType == 'tel') {
    return /^(\d{11})|(\+44[\s-]?\d{10})$/.test(value);
  } else {
    return value !== '';
  }
}

const requiredInputs = document.querySelectorAll(".is-required");
requiredInputs.forEach(input => {
  input.addEventListener('blur', function () {
    if (!validateInput(this)) {
      this.style.borderColor = '#d64541'; // If validation fails
    } else {
      this.style.borderColor = ''; // If validation passes
    }
  });
});
