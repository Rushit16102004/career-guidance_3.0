<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Custom CSS-->
    <link rel="stylesheet" href="CSS/styles.css" type="text/css">

    <link rel="stylesheet" href="CSS/all.css" type="text/css">


    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Career <span class="brand">Guidance</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <div class="hero-header">
                        <h2>Tomorrow Looks Better Because We're <span class="hero-head">Here to Help You </span>Choose Your Career Track.</h2>
                    </div>
                    <div class="more">
                        <a href="#about">
                            <button class="btn">Get Started!<span class="brand">Guidance</span></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-md-12">
                    <div class="scrolls">
                        <a href="#" class="scroll-down" address="true">
                            <img src="Images/mouse_click.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="who">Who <span class="guide">We Are</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="say">
                        <p class="wassup">Career Guidance is a webpage that offers insights in both life, social and school skills.<br>We strive to give you world class advice on career choices based on
                            interests,  IQ(intelligence quotient) as well as a stable position   in the days of tomorrow <br> With a team of diversity in culture and ethnicity, we give you access to banks of information from all corners of the
                            globe.<br>We guarantee you a blissful experience as we help you navigate the perilous waters of life after high school on this great journey.<br>Join us and be part of the experience.<br> </p>
                    </div>
                    <div class="login">
                        <a href="/login.html">
                            <button type="button" class="btn btn-dark">Let's Begin</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="blog">
        <div class="container">
            <h2 class="blog-title">Latest Blog Posts</h2>
            <div class="row" id="blog-container"></div>
        </div>
    </section>
    <html>
        <body>
            <form action="indexbackend.php" method="POST">
    <section id="contact">
        <div class="container">
            <div id="contactinfo">
                <h1>Contact Info</h1>
                <ul class="info">
                    <li>
                        <span><img src="Images/location.png" /></span>
                        <span>AIT<br />Ahmedabad, Gujarat<br />380060</span>
                    </li>
                    <li>
                        <span><img src="Images/mail.png" /></span>
                        <span>career247@gmail.con</span>
                    </li>
                    <li>
                        <span><img src="Images/call.png" /></span>
                        <span>+91 93271 70178</span>
                    </li>
                </ul>
                <ul class="social-media">
                    <li><a href="#"><img src="Images/1.png"></a></li>
                    <li><a href="#"><img src="Images/2.png"></a></li>
                    <li><a href="#"><img src="Images/3.png"></a></li>
                    <li><a href="#"><img src="Images/4.png"></a></li>
                    <li><a href="#"><img src="Images/5.png"></a></li>
                </ul>
            </div>
            <div class="contactform">
                <h2>Send A Message</h2>
                <div class="formbox">
                    <div class="inputbox w50">
                        <input type="text" id="firstname" name="firstname" required>
                        <span>First Name</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" id="lastname" name="lastname" required>
                        <span>Last Name</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="email" id="email" name="email" required>
                        <span>Email Address</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" id="mobile" name="mobile" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="inputbox w100">
                        <textarea id="message" name="message" required></textarea>
                        <span>Write your message here...</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="submit" value="Send" onclick="submitForm()">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    </body>
    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="JS/scripts.js"></script>
    <script src="js/all.js"></script>

</body>
</html>