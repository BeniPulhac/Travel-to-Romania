<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Us">
    <meta name="keywords" content="contact, name, email">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
<!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width testBlur">
    <nav class="navbar navbar-light">
        <div class="container-md fixed-top">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top nav-bar-logo-custom">
            </a>

            <div class="navigation-custom navbar-light d-none d-md-flex">
                <ul class="nav-ul-custom nav justify-content-end">
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>
                    </li>
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="attractions.php">Attractions</a>
                    </li>
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="about.php">About</a>
                    </li>
                </ul>

                <div class="navigation-btn btn-group">
                    <button class="btn btn-light rounded-pill shadow-sm bg-body me-1" id="showForm">Sign in</button>
                    <button class="btn btn-light rounded-pill shadow bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                </div>
            </div>

            <button class="burger-menu-custom navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <button type="button" class="btn-close text-reset ms-auto p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                <div class="offcanvas-body">
                    <ul class="nav-ul-custom nav justify-content-end pb-2 d-block">
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="attractions.php">Attractions</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="about.php">About</a>
                        </li>
                    </ul>

                    <div class="navigation-btn btn-group">
                        <button class="btn btn-light rounded-pill shadow-sm bg-body me-1" id="showForm">Sign in</button>
                        <button class="btn btn-light rounded-pill shadow bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--------------------------------------------------------------------------------->
    <!-- Section: Design Block -->
    <section class="sign-up-custom text-center text-lg-start" id="formContent">
        <!-- Jumbotron -->
        <div class="container py-4 d-flex justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0 mx-auto">
                <div class="cascading-right-custom radius-pop-up card">
                    <div class="card-body p-5 shadow-5 text-center">
                        <div class="closing d-flex justify-content-end">
                            <button class="btn btn-light" id="closeForm">
                                <i class='fa fa-close fa-xl'></i>
                            </button>
                        </div>

                        <div class="title">
                            <h2 class="fw-bold mb-5">Sign In</h2>
                        </div>

                        <form id="myForm">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" placeholder="First name">
                                        <!--                                            <label class="form-label" for="form3Example1">First name</label>-->
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" class="form-control" placeholder="Last name">
                                        <!--                                            <label class="form-label" for="form3Example2">Last name</label>-->
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" placeholder="Email address">
                                <!--                                    <label class="form-label" for="form3Example3">Email address</label>-->
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" placeholder="Password">
                                <!--                                    <label class="form-label" for="form3Example4">Password</label>-->
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4 ">
                                <div>
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">
                                        Remember Me
                                    </label>
                                </div>

                                <!-- Simple link -->
                                <div class="col ms-auto">
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" onclick="myFunction()">
                                Sign In
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
<!--------------------------------------------------------------------------------->
<div id="testBlur">

    <header  id="anchor-scroll-up" class="head pt-5">
        <h1 class="head-title">We want to hear from you</h1>

    </header>

    <main class="ctn">
        <div class="container">
            <section class="help-center">
                <h2 class="help-center-title">Help Center</h2>
                <hr>
                <div class="help-center-subtitle">
                    <h3>Welcome to Help Center</h3>
                    <hr>
                    <h4>You have any problems within our website?</h4>
                    <p>Please sign in to contact Customer Service</p>
                </div>

                <div class="ways-of-contact">

                    <div class="contact-email contact-equal">
                        <div class="contact-email-top">
                            <i class="fa-solid fa-envelope"></i>
                            <h4 class="contact-email-title">Email Us</h4>
                        </div>

                        <div class="contact-email-text">
                            <p>Feel free to contact us via email at any time</p>
                        </div>
                    </div>

                    <div class="contact-phone contact-equal">
                        <div class="contact-phone-top">
                            <i class="fa-solid fa-phone"></i>
                            <h4 class="contact-phone-title">Call Us</h4>
                        </div>

                        <div class="contact-phone-text">
                            <p>For anything urgent, you can call us <br> <span class="contact-days">Mon-Fri</span> <br> 8:00 AM - 17:00 PM</p>
                        </div>
                    </div>

                </div>


                <div class="contact-log-in">
                    <button class="btn-contact-log-in" type="button">Log In</button>
                </div>
            </section>

            <section class="contact-email-box">
                <div class="contact-title">
                    <h1 class = "contact-us" >Contact Us via Email</h1>
                    <hr>
                </div>

                <div class="container-form">
                    <form>
                        <label for="name">Your Name</label><br>
                        <input type="text" id="name" name="name" autocomplete="off"><br>
                        <label for="email">Your Email Address</label><br>
                        <input type="text" id="email" name="email" autocomplete="off"><br>
                        <label for="message">Your Message</label><br>
                        <textarea name="message" id="message" rows="5"></textarea><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </section>

            <section class="contact-phone-box">
                <div class="contact-title">
                    <h1 class = "contact-us" >Contact Us via Phone</h1>
                    <hr>
                </div>
                <div class="cotainer-phone">
                    <p><span class="bold">Tel:</span>+447308352501</p>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer-container-custom">
        <div class="container py-5">
            <div class="row">

                <div class="col-12 col-md-5">
                    <span class="text-muted">Travel to Romania is a website design to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
                </div>

                <div class="col-12 col-md-5 my-3 my-md-0">
                    <form>
                        <h4>Subscribe to our newsletter</h4>
                        <p class="text-muted">Monthly digest of what's new and exciting from us.</p>
                        <div class="d-block d-md-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control mb-2" placeholder="Email address">
                            <button class="btn btn-primary mb-2" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-2">
                    <h4 class="ps-2">Menu</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted ps-2">Home</a></li>
                        <li class="nav-item mb-2"><a href="hotels.php" class="nav-link p-0 text-muted ps-2">Hotels</a></li>
                        <li class="nav-item mb-2"><a href="attractions.php" class="nav-link p-0 text-muted ps-2">Attractions</a></li>
                        <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted ps-2">Contact</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted ps-2">About</a></li>
                    </ul>
                </div>

            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2022 Company, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

<script src="assets/js/formSubmitted.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
