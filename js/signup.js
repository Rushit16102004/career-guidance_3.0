// Toggle password visibility
function togglePassword(inputId, iconId) {
    const passwordInput = document.getElementById(inputId);
    const toggleIcon = document.getElementById(iconId);
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// Real-time password strength indicator
document.getElementById('password').addEventListener('input', function(e) {
    const password = e.target.value;
    const helpText = document.getElementById('passwordHelp');
    
    if (password.length === 0) {
        helpText.textContent = '';
        return;
    }

    if (password.length < 8) {
        helpText.textContent = 'Password is too short';
        helpText.className = 'form-text error';
    } else if (validatePassword(password)) {
        helpText.textContent = 'Password strength: Strong';
        helpText.className = 'form-text success';
    } else {
        helpText.textContent = 'Password must contain letters, numbers, and special characters';
        helpText.className = 'form-text error';
    }
});

// Function to validate password strength
function validatePassword(password) {
    const hasLetters = /[a-zA-Z]/.test(password);
    const hasNumbers = /[0-9]/.test(password);
    const hasSpecialChars = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    return hasLetters && hasNumbers && hasSpecialChars;
}


document.getElementById('signupForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default form submission

    let formData = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        password: document.getElementById('password').value
    };

    fetch("http://127.0.0.1:5000/signup", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            alert(data.message);
            window.location.href = "login.html"; // Redirect to login
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error("Error:", error));
});
