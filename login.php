<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Career Guidance</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="CSS/all.css" type="text/css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <h2>Welcome Back</h2>
                <p>Please login to your account</p>
            </div>

            <form id="loginForm" class="login-form" action="loginbackend.php" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span class="input-group-text password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="toggleIcon"></i>
                        </span>
                    </div>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-login" id="createAccountBtn">Login</button>


                <div class="divider">
                    <span>Create account free!!</span>
                </div>

                <div class="signup-link">
                    Don't have an account? <a href="signup.php">Sign up</a>
                </div>
            </form>
        </div>
    </div>





    <!-- <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Basic validation
            if(this.checkValidity()) {
                // Show success message
                alert('Login successfully!');

                // Redirect to login page after a short delay
                setTimeout(function() {
                    window.location.href = 'RateSelf.html';
                }, 1000); // 1 second delay
            }
        });
        </script> -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/login.js"></script>
    <script src="js/all.js"></script>

</body>
</html>