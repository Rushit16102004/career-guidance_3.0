<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Career Guidance</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <div class="signup-container">
            <div class="signup-header">
                <h2>Create Account</h2>
                <p>Please fill in the details to sign up</p>
            </div>

            <form id="signupForm" class="signup-form" action="signupbackend.php" method="POST">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <small id="emailHelp" class="form-text"></small>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span class="input-group-text password-toggle" onclick="togglePassword('password', 'toggleIcon1')">
                            <i class="fas fa-eye" id="toggleIcon1"></i>
                        </span>
                    </div>
                    <small id="passwordHelp" class="form-text"></small>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                        <span class="input-group-text password-toggle" onclick="togglePassword('confirmPassword', 'toggleIcon2')">
                            <i class="fas fa-eye" id="toggleIcon2"></i>
                        </span>
                    </div>
                    <small id="confirmPasswordHelp" class="form-text"></small>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-signup" id="createAccountBtn">Create Account</button>

                <div class="login-link">
                    Already have an account? <a href="login.html">Login</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission
            
            // Basic validation
            if(this.checkValidity()) {
                // Show success message
                alert('Account created successfully!');
                
                // Redirect to login page after a short delay
                setTimeout(function() {
                    window.location.href = 'login.html';
                }, 1000); // 1 second delay
            }
        });
        </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/signup.js"></script>
</body>
</html>