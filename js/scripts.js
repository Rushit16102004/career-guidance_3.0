// Toggle content for blog posts    9
function toggleContent(postId) {
  const content = document.getElementById(postId);
  if (content.style.display === "none") {
    content.style.display = "block";
  } else {
    content.style.display = "none";
  }
}



// Review form   69
function validateInput() {
  let emailInput = document.querySelector('.formbox input[type="email"][required]');
  
  emailInput.addEventListener('input', function () {
      if (/.+@.+\..+/.test(emailInput.value.trim())) {
          emailInput.style.border = "2px solid green";
      } else {
          emailInput.style.border = "2px solid red";
      }
  });
}

document.addEventListener('DOMContentLoaded', validateInput);

function submitForm() {
  let inputs = document.querySelectorAll('.formbox input[required], .formbox textarea[required]');
  let isValid = true;
  let emailInput = document.querySelector('.formbox input[type="email"][required]');
  
  inputs.forEach(input => {
      if (input.value.trim() === "") {
          isValid = false;
          input.style.border = "2px solid red";
      } else {
          input.style.border = "";
      }
  });
  
  if (emailInput && !/.+@.+\..+/.test(emailInput.value.trim())) {
      isValid = false;
      alert("Please enter a valid email address with '@'.");
      return false;
  }
  
  if (!isValid) {
      alert("Please fill in all fields before submitting the form.");
      return false;
  }
  
  if (!document.getElementById('successMessage')) {
      const messageDiv = document.createElement('div');
      messageDiv.id = 'successMessage';
      messageDiv.innerText = "🚀 Your message has been sent successfully! We'll get back to you as soon as possible. Thank you for reaching out!";
      document.body.appendChild(messageDiv);
  }
  const messageDiv = document.getElementById('successMessage');
  messageDiv.style.display = 'block';
  setTimeout(() => {
      messageDiv.style.opacity = 1;
  }, 10);
  setTimeout(() => {
      messageDiv.style.opacity = 0;
  }, 3000);
  
  return true;
}