// JavaScript for Toggle Functionality 9
document.addEventListener("DOMContentLoaded", function () {
    const blogPosts = [
        { title: "Post One", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", more: "Additional content for Post One." },
        { title: "Post Two", content: "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", more: "Extra details for Post Two." },
        { title: "Post Three", content: "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.", more: "Further reading for Post Three." }
    ];

    const container = document.getElementById("blog-container");

    blogPosts.forEach(post => {
        const postDiv = document.createElement("div");
        postDiv.classList.add("col-md-4");
        postDiv.innerHTML = `
            <div class="blog-post">
                <h3>${post.title}</h3>
                <p>${post.content}</p>
                <button class="btn" onclick="toggleMoreContent(this)">Read More</button>
                <div class="more-content">${post.more}</div>
            </div>
        `;
        container.appendChild(postDiv);
    });
});

function toggleMoreContent(button) {
    const moreContent = button.nextElementSibling;
    if (moreContent.style.display === "block") {
        moreContent.style.display = "none";
        button.textContent = "Read More";
    } else {
        moreContent.style.display = "block";
        button.textContent = "Read Less";
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