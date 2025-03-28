<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="CSS/style.css"/>
    <link rel="stylesheet" href="CSS/normalize.css"/>
    <link rel="stylesheet" href="CSS/bootstrap.min.css"/>
    <link rel="stylesheet" href="CSS/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Varela+Round&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet">
    <title>Comm Scan</title>
        <!-- google font  -->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Varela+Round&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
  <body class="position-relative">
    <!-- <a href="#top" class=" text-center  move"><i class= "  fa-solid fa-arrow-up text-black-50 pt-2  "></i>
</a> -->
    <!-- header -->
<header class="position-absolute  w-100 ">
        <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container border-bottom">
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
            <a class="nav-link  " href="contact.html"  >contact</a>
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
    <!-- header -->
    <section class="contact   pt-5">
      <div class="container  mt-5 pt-5">
        <div class="tittel   text-center position-relative ">
          <h3 class="m-0 p-0 text-white text-uppercase fs-1 ">contact us</h3>
          <p class="text-white-50" style="font-size: 12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores repellendus error nihil quaerat odio corporis.</p>
        </div>

        <div class="row my-md-5 py-5">
          <div class="col-md-4 mb-4 py-3 text-center text-md-start"  >
            <h6 class="text-white-50 text-uppercase" style="letter-spacing: 5px;">Contact Information</h6>
            <h1 class="text-primary">Get In Touch.!!</h2>
            <p  class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magni possimus doloremque! Fuga aspernatur minus dolorem deleniti provident voluptas ipsum architecto consequatur voluptatum corporis, debitis reiciendis expedita laborum quidem vel.</p>
          </div>
          <div class="col-md-8">
            <form action="">
            <div class="row">
                <div class="col-md-6">
                <div class="form-box  mb-5 ps-2 rounded-3 border border-1 pb-1 position-relative">
                    <input class="w-100 border-0 py-2" type="text" name="" placeholder="User Name" id="" style="outline: none; background-color: transparent;" />
                    <i class="fa fa-solid fa-user text-white-50 position-absolute top-50 end-0 translate-middle-y me-2"></i>
                </div>
                <div class="form-box  mb-5 ps-2 rounded-3 border border-1 pb-1 position-relative">
                    <input class="w-100 border-0 py-2" type="text" name="" placeholder="Order Name" id="" style="outline: none; background-color: transparent;" />
                    <i class="fa fa-solid fa-pen text-white-50 position-absolute top-50 end-0 translate-middle-y me-2"></i>
                </div>
 
                </div>
                <div class="col-md-6">
                <div class="form-box  mb-5 ps-2 rounded-3 border border-1 pb-1 position-relative">
                    <input class="w-100 border-0 py-2" type="number" name="" placeholder="Phone Number" id="" style="outline: none; background-color: transparent;" />
                    <i class="fa fa-solid fa-phone-flip text-white-50 position-absolute top-50 end-0 translate-middle-y me-2"></i>
                </div>
                <div class="form-box  mb-5 ps-2 rounded-3 border border-1 pb-1 position-relative">
                    <input class="w-100 border-0 py-2" type="text" name="" placeholder="Address" id="" style="outline: none; background-color: transparent;" />
                    <i class="fa fa-solid fa-map-location-dot text-white-50 position-absolute top-50 end-0 translate-middle-y me-2"></i>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-box  mb-3 ps-2 rounded-3 border border-1 pb-1 position-relative">
                    <textarea class="w-100 border-0 py-2" name="" placeholder="Message" id="" style="outline: none; background-color: transparent;"></textarea>
                    <i class="fa fa-solid fa-pen-square text-white-50 position-absolute top-50 end-0 translate-middle-y me-2"></i>
                </div>
            </div>
            <button class="btn btn-primary w-25 m-auto my-3 text-white">Send Message</button>
            </form>
          </div>
        </div>
        <iframe
          class="rounded-3 pt-5"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6956.787680529979!2d31.00718156331567!3d30.797270044804204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c976cc688d87%3A0xd7aea7220d81518f!2z2LTYp9ix2Lkg2LPYudmK2K_YjCDYt9mG2LfYpyAo2YLYs9mFIDIp2Iwg2YLYs9mFINir2KfZhiDYt9mG2LfYp9iMINmF2K3Yp9mB2LjYqSDYp9mE2LrYsdio2YrYqQ!5e0!3m2!1sar!2seg!4v1738839104277!5m2!1sar!2seg"
          width="100%"
          height="350"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>
<!-- footer -->
    <footer class=" container">
            <div class="row  py-md-5 py-3 ">
            <div class="col-md-4 text-center  mb-3 mb-md-0">
        <img src="images/logo.png"   alt="" class="logo mb-3">
        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error, ea illum consequatur adipisci enim commodi.</p>
        <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione error, ea illum consequatur adipisci enim commodi.</p>
        <div class="social">
                <i class="text-white-50 pe-2 fa-brands fa-facebook-f"></i>
                <i class="text-white-50 pe-2 fa-brands fa-paypal"></i>
                <i class="text-white-50 pe-2 fa-brands fa-twitter"></i>
                <i class="text-white-50 pe-2 fa-brands fa-youtube"></i>
                <i class="text-white-50      fa-brands fa-instagram"></i>
        </div>
    </div>
    <div class="col-md-2  text-center text-md-start">
        <h4 class="text-capitalize mb-md-5 mb-3 text-white-50  ">Support</h4>
        <p class="text-capitalize text-white-50">111 Bijoy sarani, Dhaka,  DH 1515, Bangladesh.</p>
        <p class="text-capitalize text-white-50">hussainelsid990@gmail.com</p>
        <p class="text-capitalize text-white-50">+010-172-850-81</p>
    </div>
    <div class="col-md-2  text-center text-md-start  mb-md-0 mb-4 ">
        <h4 class="mb-4 text-white-50 ">Account</h4>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50 " href="#"> <i class="text-white-50 pe-1 fa-solid fa-arrow-right"></i> my wishlist </a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50 " href="#"> <i class="text-white-50 pe-1 fa-solid fa-arrow-right"></i> my account </a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50 " href="#"> <i class="text-white-50 pe-1 fa-solid fa-arrow-right"></i> my account </a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50 " href="#"> <i class="text-white-50 pe-1 fa-solid fa-arrow-right"></i> my favorite </a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50 " href="#"> <i class="text-white-50 pe-1 fa-solid fa-arrow-right"></i> my project </a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50 " href="#"> <i class="text-white-50 pe-1 fa-solid fa-arrow-right"></i> terms of user </a></li>
    </div>
    <div class="col-md-2  text-center text-md-start mb-md-0 mb-4">
        <h4 class="mb-4 text-white-50 ">Quick Link</h4>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50  " href="#"> <i class="text-white-50 pe-1 fa-brands fa-facebook-f"></i>facebook</a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50  " href="#"> <i class="text-white-50 pe-1 fa-brands fa-twitter"></i>twitter</a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50  " href="#"> <i class="text-white-50 pe-1 fa-brands fa-instagram"></i>instagram</a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50  " href="#"> <i class="text-white-50 pe-1 fa-brands fa-linkedin"></i>linkedin</a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50  " href="#"> <i class="text-white-50 pe-1 fa-brands fa-paypal"></i>paypal</a></li>
        <li class="mb-3"><a class="text-decoration-none text-capitalize text-white-50  " href="#"> <i class="text-white-50 pe-1 fa-brands fa-google-play"></i>google-play</a></li>    </div>
    <div class="col-md-2 mb-md-0 mb-3 text-center ">
    <h4 class="mb-0 text-white-50 ">Download App</h4>
    <p class="text-white-50" style="font-size: 14px;">Save $3 with App New User Only</p>
    <div class="mb-3">
    <img src="images/app (2).jpeg" class="w-50" alt="">
    </div>
    <form action="">
        <div class="border py-2 rounded-3 position-relative ">
            <input type="email" name="" class="border-0 w-100 px-4 text-capitalize text-white-50 " placeholder="send your E-mail" id="">
            <i class='bx bx-send text-white-50'></i>
        </div>
    </form>
    </div>
</div> 
            <div class="footer_bottom border-top">
            <div class="container">
                <div class="row">
                    <div class="col-12  text-center">
                        <p class="m-0 text-white-50 py-2">&copy; 2025 Team Member. All rights reserved.</p>
                    </div>
                </div>
            </div>
            </div> 
    </footer> 



<!-- footer -->
 <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
