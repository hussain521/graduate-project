
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/New.css">
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Varela+Round&family=Work+Sans:ital@0;1&display=swap" rel="stylesheet">
    <title>Comm Scan</title>
</head>
<body class="position-relative">
        <div class="Chat_Bot" id="chatBoxs">
            <div class="chat-header">
                <span class="close-btn   text-white d-flex justify-content-center align-items-center rounded-pill  " onclick="toggleChat()"> <i class="fa-solid fa-xmark fs-6"></i></span>
            </div>
            <div id="chatBox" class="border border-1 rounded-3 py-2 mb-2 border-secondary"><p class="fs-5">What can I help with ? <i class=" ms-2 text-secondary fa-solid fa-robot"></i></p></div>
            <div class="input-container">
                <input type="text" id="userInput" placeholder="Write your message..." />
                <button onclick="sendMessage()">➤</button>
            </div>
        </div>
        <span class="chat-icon position-fixed text-white d-flex justify-content-center align-items-center rounded-pill  " onclick="toggleChat()">
            <i class="fa-solid fa-robot fs-6"></i>
        </span>
        <span class="position-fixed text-white d-flex justify-content-center align-items-center   rounded-pill" id="up"><i class="fa-solid fa-arrow-up  "></i></span>
    <section class="main" id="home">
        <header class="position-absolute w-100">
                    <nav class="navbar navbar-expand-lg navbar-dark ">
                    <div class="container ">
                    <a class="navbar-brand " href="#"><img src="images/logo.png" class="logo" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link fs-6 text-uppercase active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-6 text-uppercase active" aria-current="page" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-6 text-uppercase active" aria-current="page" href="#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link fs-6 text-uppercase active" href="History.php">History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-6 text-uppercase active" href="contact.php"  >contact</a>
                    </li>
                    </ul>
                                <div class="login-icon-wrapper">
                                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                                        echo '<a href="logout.php" class="btn-login btn btn-outline-primary me-2 text-uppercase">Logout</a>';
                                    } else {
                                        
                                        echo '<button class="btn-login btn btn-outline-primary me-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-backdrop="false">Login</button>';
                                    } ?>
                                    <a href="userpage.php"><img src="user1.png" width="30px" height="30px"></a>
                                </div>
                    
                    </nav>
        </header>
        <div class="modal  fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div style="    background: linear-gradient(to right, rgb(1, 51, 94), rgb(1, 2, 19)) !important;" class="modal-content  w-100 ">
                <div class="modal-header  ">
                    <h2 class="modal-title text-white text-center w-100 " id="loginModalLabel">LOGIN</h2> 
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST">
                        <div class="form-group mb-3">
                            <?php if (isset($email_err)) echo $email_err; ?>
                            <label class="mb-2 text-white" for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <?php if (isset($password_err)) echo $password_err; ?>
                            <label class="mb-2 text-white" for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <input type="submit" value="Login" class="btn btn-primary w-100" name="submit">
                        <p class="mt-3  text-white text-center">Don't have an account? <a href="signupindex.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <section class="home text-center  position-relative ">
            <div class=" position-absolute w-100 scan_text mt-5 pt-5">
            <div class="pt-5 mt-2 container">
            <h1 class="name-project text-white w-100">Comm<span>Scan</span></h1>
            <p class="text-white-50 mx-auto info-project  py-3  ">We are glad you are using our website We hope that your website will be more secure We provide comprehensive dark web monitoring solutions to safeguard businesses, leveraging advanced technologies and intelligence-driven approaches to detect and mitigate risks associated with compromised data. <span class="heart">&hearts;</span></p>
            <div class="scan_form ">
                <form action="process_input.php" class="mt-5" method="post">
                    <div class="url-box mx-auto rounded-pill">
                        <input type="text" id="Url" class="w-100 py-3  px-4 rounded-pill  input-url" name="Url" required placeholder="Enter Your URL">
                    </div>
                    <input type="submit" value="Scan Now" class="submit btn btn-primary fw-bold  rounded-pill py-2 w-25 mt-5" name="submit">
                </form>
            </div>
            </div>
            </div>
            <img loding="lazy" src="images/earth1.png" alt="" class="earth  w-100">
        </section>
    </section> 
    <section class="services pt-md-5" id="services">
        <div class="title text-center py-4">
        <h2 class="text-white m-auto py-2 px-5 text-capitalize rounded-pill mb-2">Our services</h2>
        <p class="w-50 m-auto text-white-50 text-capitalize">With our uniquely experienced team, we offer a wide range of Cybersecurity services. Following is an example, but feel free to get in touch for the full services catalog.</p>
        </div>
            <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
            <div class="col">
                <div class="card">
                <i class="fa-solid fa-laptop fs-1 text-primary"></i>
                <div class="card-body">
                <h4 class="card-title text-white">Dark Web Monitoring</h4>
                <p class="card-text text-white-50">With our automated monitoring of the surface, deep & dark web, your company assets are tracked 24/7 for data-leaks.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <i class="fa-solid fa-circle-check fs-1 text-primary"></i>
                <div class="card-body">
                <h4 class="card-title text-white">Attack Surface Discovery</h4>
                <p class="card-text text-white-50">Automated security scanning for vulnerabilities, CVE’s and misconfigurations that periodically scans All your external assets</p>
                </div>
                </div>
            </div>
            <div class="col">
            <div class="card">
                    <i class="fa-solid fa-shield-halved fs-1 text-primary"></i>
                <div class="card-body">
                <h4 class="card-title text-white">Security Assessment</h4>
                <p class="card-text text-white-50">Information security assessment, Penetration testing, Red & Purple Teaming, SAP Hacking and scenario based assessments.</p>
                </div>
            </div>

            </div>
            <div class="col">
            <div class="card">
                <i class="fa-solid fa-layer-group fs-1 text-primary"></i>
                    
                <div class="card-body">
                <h4 class="card-title text-white">Application Security</h4>
                <p class="card-text text-white-50">Secure Software Development (SDLC), Threat Modelling and Source Code Review.</p>
                </div>
            </div>

            </div>
            <div class="col">
            <div class="card">
                <i class="fa-solid fa-font-awesome fs-1 text-primary"></i>
                <div class="card-body">
                <h4 class="card-title text-white">Security Awareness Platform</h4>
                <p class="card-text text-white-50">Complete security awareness interactive program using our security awareness & training platform.</p>
                </div>
            </div>

            </div>
            <div class="col">
            <div class="card">
                <i class="fa-solid fa-cloud fs-1 text-primary"></i>
                <div class="card-body">
                <h4 class="card-title text-white">Professional Training</h4>
                <p class="card-text text-white-50">Professional and customized Training (i.e. OWASP top 10) for the Developers & Security engineers.</p>
                </div>
            </div>

            </div>
            </div>
    </section>
    <section class="numbers" id="number">
        <div class="container">
            <div class="title text-center py-4">
            <h2 style="  background-color: rgba(255, 255, 255, 0.08); width: fit-content;" class="text-white m-auto py-2 px-5 text-capitalize rounded-pill mb-2">CommScan In Numbers</h2>
            <p class="w-50 m-auto text-white-50 text-capitalize">Our comprehensive feeds are updated across the hour. The aim is to capture and contextualize as much leaked data as possible, to help our customers prevent data breach at an early stage.</p>
            </div>
            <div class="row row-cols-1 w-75 m-auto row-cols-md-3 g-4 content">
                <div class="col">
                    <div style="background-color: rgba(255, 255, 255, 0.08) ;" class="card p-5 text-center h-100">
                    <i class="fa-solid fa-location-pin fs-1 text-primary"></i>
                    <div class="card-body">
                        <div class="num d-inline text-white fs-3 fw-bold" data-num="6">0</div><span class="ms-2 text-white fw-bold">Millions</span>
                        <p class="card-text text-white-50">Collected Passwords</p>
                    </div>
                    </div>
                    </div>
                    <div class="col">
                    <div style="background-color: rgba(255, 255, 255, 0.08) ;" class="card p-5 text-center h-100">
                    <i class="fa-brands fa-ubuntu fs-1 text-primary"></i>
                    <div class="card-body">
                        <div class="num d-inline text-white fs-3 fw-bold" data-num="469">0</div><span class="ms-2 text-white fw-bold">Millions</span>
                        <p class="card-text text-white-50">Compromised Devices</p>
                    </div>
                    </div>
                    </div>
                    <div class="col">
                    <div style="background-color: rgba(255, 255, 255, 0.08) ;" class="card p-5 text-center h-100">
                    <i class="fa-solid fa-circle-info fs-1 text-primary"></i>
                    <div class="card-body ">
                        <div class="num d-inline text-white fs-3 fw-bold" data-num="3">0</div><span class="ms-2 text-white fw-bold">Billions</span>
                        <p class="card-text text-white-50">Breached Business Emails</p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
    </section>
    <section class="why mt-5">
                <div class="title text-center py-4">
                    <h2 style="  background-color: rgba(255, 255, 255, 0.08); width: fit-content;" class="text-white m-auto py-2 px-5 text-capitalize rounded-pill mb-2"> Why CommScan </h2>
                    <p class="w-50 m-auto text-white-50 text-capitalize">Our comprehensive feeds are updated across the hour. The aim is to capture and contextualize as much leaked data as possible, to help our customers prevent data breach at an early stage.</p>
                </div>
                <div class="container w-75">
                    <div class="box w-100 mb-3 ">
                        <div class="titel position-relative d-flex justify-content-between align-items-center p-4 fs-5 text-white-50 ">Hybrid Approach</div>
                        <div class="info text-capitalize text-white-50 ">
                        In a Hybrid approach, we combine Artificial intelligence with human intelligence to achieve the best results and eliminate false positives during data collection, analaysis and clasification.        </div>
                    </div>
                    <div class="box w-100 mb-3 ">
                        <div class="titel position-relative d-flex justify-content-between align-items-center p-4 fs-5 text-white-50 ">Always up-to-date</div>
                        <div class="info text-capitalize text-white-50 ">
                            Might sound simple, but our team and tools works across the hour to keep our database alway up-to-date. That means everyday is a chance of saving your business from a data breach.                       </div>
                    </div>
                    <div class="box w-100 mb-3 ">
                        <div class="titel position-relative d-flex justify-content-between align-items-center p-4 fs-5 text-white-50 ">Post-Alerting Mitigation Plans</div>
                        <div class="info text-capitalize text-white-50 ">
                            Unlike other vendors, we dont just alert you of the identified data leakage. In fact, we take few steps further by giving you a detailed actions plan and a way to track your mitigation activities through our unified                      </div>
                    </div>
                    <div class="box w-100 mb-3 ">
                        <div class="titel position-relative d-flex justify-content-between align-items-center p-4 fs-5 text-white-50 ">API Integration</div>
                        <div class="info text-capitalize text-white-50 ">
                            DarkEntry provides an easy-to-use API, which means you can integrate it with your Jira, Slack, SIEM Solution, Unified Dashboard, or any other monitoring solutions you have in place.                      </div>
                    </div>
                    <div class="box w-100 mb-3 ">
                        <div class="titel position-relative d-flex justify-content-between align-items-center p-4 fs-5 text-white-50 ">Continues Monitoring</div>
                        <div class="info text-capitalize text-white-50 ">
                            Being part of many Dark, Deep and Surface web platforms allows us to continuously track data breaches and threat-actors for even potential data leaks related to our clients.                       </div>
                    </div>

            
                </div>
    </section>
    <section class="team " id="team">
        <div class="title text-center py-5">
            <h2 style="  background-color: rgba(255, 255, 255, 0.08); width: fit-content;" class="text-white m-auto py-2 px-5 text-capitalize rounded-pill mb-2">Our Team</h2>
            <p class="text-white-50 text-capitalize">Awesome Team Members</p>
        </div>
        <div class="container w-75">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="card  bg-dark text-white position-relative">
                            <span class="shadow"> </span>
                            <img src="images/shs.jpg" class="card-img card-img-top h-100 object-fit-cover" alt="...">
                            <div class=" position-absolute bottom-0 start-0 ps-2 pb-2 ">
                                <h5 class="card-title">Hussein AL Sayed</h5>
                                <p class="card-text">Front-End Developer ( REACT.JS )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  bg-dark text-white position-relative">
                            <span class="shadow"> </span>
                            <img src="images/mostafa.jpg" class="card-img card-img-top h-100 object-fit-cover" alt="...">
                            <div class=" position-absolute bottom-0 start-0 ps-2 pb-2 ">
                                <h5 class="card-title">Mostafa Hamada</h5>
                                <p class="card-text">Front-End Developer ( REACT.JS )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  bg-dark text-white position-relative">
                            <span class="shadow"> </span>
                            <img src="images/abotaleb.jpg" class="card-img card-img-top h-100 object-fit-cover" alt="...">
                            <div class=" position-absolute bottom-0 start-0 ps-2 pb-2 ">
                                <h5 class="card-title">Mohamed Abo Taleb</h5>
                                <p class="card-text">Front-End Developer ( REACT.JS )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  bg-dark text-white position-relative">
                            <span class="shadow"> </span>
                            <img src="images/yehia.jpg" class="card-img card-img-top h-100 object-fit-cover" alt="...">
                            <div class=" position-absolute bottom-0 start-0 ps-2 pb-2 ">
                                <h5 class="card-title">Yahia Abdelhady</h5>
                                <p class="card-text">Front-End Developer ( REACT.JS )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  bg-dark text-white position-relative">
                            <span class="shadow"> </span>
                            <img src="images/WhatsApp Image 2025-03-28 at 17.16.24_8ab9a776.jpg" class="card-img card-img-top h-100 object-fit-cover" alt="...">
                            <div class=" position-absolute bottom-0 start-0 ps-2 pb-2 ">
                                <h5 class="card-title">Omar Elashmawy</h5>
                                <p class="card-text">Front-End Developer ( REACT.JS )</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card  bg-dark text-white position-relative">
                            <span class="shadow"> </span>
                            <img src="images/WhatsApp Image 2025-03-28 at 19.26.04_e374cf9c.jpg" class="card-img card-img-top h-100 object-fit-cover" alt="...">
                            <div class=" position-absolute bottom-0 start-0 ps-2 pb-2 ">
                                <h5 class="card-title">Mostafa Menisy</h5>
                                <p class="card-text">Front-End Developer ( REACT.JS )</p>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
    <section class="post my-5 py-5" id="post">
    <div class="container  w-75 p-5 text-center rounded-pill">
        <p class="text-white fs-4 fw-bold text-capitalize">Ready to get started? we're here to help! Request a demo below:</p>
        <button class="btn btn-primary text-dark" id="btn">Request Free demo</button>
    </div>
    </section>




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





 
<script src="js/Chat.js" ></script>
<script src="js/main.js" ></script>
<script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>
