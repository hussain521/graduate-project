<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
<link rel="stylesheet" href="css/signup.css">
        <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Varela+Round&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>  

<header class="  w-100">
    <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container ">
    <a class="navbar-brand " href="#"><img src="images/logo.png" class="logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#home">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#home">services</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#home">Blog</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#home">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="History.php">History</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link  " href="contact.php"  >contact</a>
    </li>
    </ul>
            <div class="login-icon-wrapper">
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
                    echo '<a href="logout.php" class="btn-login">Logout</a>';
                } else {
                    echo '<a href="#log" class="btn-login">Login</a>';
                }
                ?>
            <a href="userpage.php">
                <img src="user1.png" width="30px" height="30px"  />
            </a>
    </div>
    </nav>
</header> 

<section class="sign-up w-75 p-0 container rounded-3 my-5 pb-5    ">   
    <div class="row">

        <div class="col-md-6   text-center">
            <form class="signup-form bg-d anger ps-2 pe-md-0 pe-2 h-100" action="sign_up.php" method="post">
                <h2 class="text-white p-5">Create A New Account</h2>
                <?php
                if (isset($f_name_error)) {
                    echo $f_name_error;
                }
                ?>
         <div class="row">
                    <div class="col-md-6">
                    <div class="form-group mb-4 p-2 border-2 border border-secondary rounded-3 position-relative">
                    <input class="w-100" type="text" id="fname" placeholder="First Name :" name="fname" required>
                    <i class="me-2 text-secondary position-absolute top-50 end-0 translate-middle-y fa-solid fa-id-card"></i>
                
                    </div>
                <?php
                if (isset($l_name_error)) {
                    echo $l_name_error;
                }
                ?>
                </div>
                    <div class="col-md-6">

                    
                <div class="form-group mb-4 p-2 border-2 border border-secondary rounded-3 position-relative">
                    <!-- <label for="lname"></label> -->
                    <input class="w-100" type="text" id="lname" name="lname"  placeholder="Last Name :" required>
                    <i class="me-2 text-secondary position-absolute top-50 end-0 translate-middle-y fa-solid fa-id-card"></i>
                </div>
                <?php
                if (isset($mail_error)) {
                    echo $mail_error;
                }
                ?>
                    </div>
         </div>
                <div class="form-group mb-4 p-2 border-2 border border-secondary rounded-3 position-relative">
                    <!-- <label for="email">Enter :</label> -->
                    <input class="w-100" type="email" id="email" placeholder="Your E-mail " name="email" required>
                    <i class=" me-2 text-secondary position-absolute top-50 end-0 translate-middle-y fa-solid fa-envelope"></i>
                </div>
                <?php
                if (isset($pass_error)) {
                    echo $pass_error;
                }
                ?>
         <div class="row">
                    <div class="col-md-6">
                <div class="form-group mb-4 p-2 border-2 border border-secondary rounded-3 position-relative">
                    <!-- <label for="password">Password :</label> -->
                    <input class="w-100" type="password" id="password" placeholder="Password :" name="password" required>
                    <i class=" me-2 text-secondary position-absolute top-50 end-0 translate-middle-y eye-icon fa fa-eye" data-target="password" onclick="togglePassword(this)"></i>
                </div>
                </div>
                    <div class="col-md-6">
                <div class="form-group mb-4 p-2 border-2 border border-secondary rounded-3 position-relative">
                      <!-- <label for="password">Repeat The Password :</label>  -->
                    <input class="w-100" type="password" id="repeat_password" placeholder="Confirm Password :" name="repeat_password" required>
    <i class="position-absolute me-2 text-secondary  top-50 end-0 translate-middle-y eye-icon fa fa-eye" data-target="repeat_password" onclick="togglePassword(this)"></i>
                </div>
                    </div>
         </div>
                <?php
                if (isset($_GET['error']) && $_GET['error'] === 'password_mismatch') {
                    echo '<p style="color: red; margin-top: -10px;">Passwords do not match.</p>';;}
                elseif (isset($_GET['error']) && $_GET['error'] === 'password_complexity') {
                    echo '<p style="color: red; margin-top: -10px;">Password must be at least 8 characters long and include letters, numbers, and special characters..</p>'; }
                elseif (isset($_GET['error']) && $_GET['error'] === 'email_existed') {
                    echo '<p style="color: red; margin-top: -10px;">Email already existed</p>'; }
                ?>
                <input type="submit" class="w-50 btn btn-light text-white" value="Sign Up" name="submit">
            </form>
        </div>
                <div class="col-md-6 d-md-inline d-none"><img class="w-100" src="images/e2426b86b183edc1e56f2d1701fa2ee8.png"></div>
    </div>
</section>
<footer class="container">
    <div class="row py-md-5 py-3">
        <div class="col-md-4 text-center mb-3 mb-md-0">
            <img src="images/logo.png" alt="logo" class="logo mb-3">
            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error, ea illum consequatur adipisci enim commodi.</p>
            <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error, ea illum consequatur adipisci enim commodi.</p>
            <div class="social">
                <i class="text-white-50 pe-2 fa-brands fa-facebook-f"></i>
                <i class="text-white-50 pe-2 fa-brands fa-paypal"></i>
                <i class="text-white-50 pe-2 fa-brands fa-twitter"></i>
                <i class="text-white-50 pe-2 fa-brands fa-youtube"></i>
                <i class="text-white-50 fa-brands fa-instagram"></i>
            </div>
        </div>
        <div class="col-md-2 text-center text-md-start">
            <h4 class="text-white-50 mb-md-5 mb-3">Support</h4>
            <p class="text-white-50">111 Bijoy Sarani, Dhaka, DH 1515, Bangladesh.</p>
            <p class="text-white-50">hussainelsid990@gmail.com</p>
            <p class="text-white-50">+010-172-850-81</p>
        </div>
        <div class="col-md-2 text-center text-md-start mb-md-0 mb-4">
            <h4 class="text-white-50 mb-4">Account</h4>
            <ul class="list-unstyled">
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-solid fa-arrow-right"></i> My Wishlist</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-solid fa-arrow-right"></i> My Account</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-solid fa-arrow-right"></i> My Favorite</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-solid fa-arrow-right"></i> My Project</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-solid fa-arrow-right"></i> Terms of Use</a></li>
            </ul>
        </div>
        <div class="col-md-2 text-center text-md-start mb-md-0 mb-4">
            <h4 class="text-white-50 mb-4">Quick Links</h4>
            <ul class="list-unstyled">
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-brands fa-facebook-f"></i> Facebook</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-brands fa-twitter"></i> Twitter</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-brands fa-instagram"></i> Instagram</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-brands fa-linkedin"></i> LinkedIn</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-brands fa-paypal"></i> PayPal</a></li>
                <li><a class="text-white-50 text-decoration-none" href="#"><i class="pe-1 fa-brands fa-google-play"></i> Google Play</a></li>
            </ul>
        </div>
        <div class="col-md-2 text-center">
            <h4 class="text-white-50">Download App</h4>
            <p class="text-white-50" style="font-size: 14px;">Save $3 with App New User Only</p>
            <div class="mb-3">
                <img src="images/app (2).jpeg" class="w-50" alt="Download App">
            </div>
            <form action="">
                <div class="border py-2 rounded-3 position-relative">
                    <input type="email" class="border-0 w-100 px-4 text-white-50" placeholder="Send your E-mail">
                    <i class='bx bx-send text-white-50'></i>
                </div>
            </form>
        </div>
    </div>
    <div class="footer_bottom border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="m-0 text-white-50 py-2">&copy; 2025 Team Member. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    function togglePassword(icon) {
        let inputField = document.getElementById(icon.getAttribute("data-target"));

        if (inputField.type === "password") {
            inputField.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            inputField.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
<script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>