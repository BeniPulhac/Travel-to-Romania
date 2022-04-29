<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Visit Romania">
    <meta name="keywords" content="visit, romania, hotels, landscape, restaurants, activities">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/attractions.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/general.css">
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
                    <button class="btn btn-light rounded-pill shadow bg-body d-none" id="showRegister">Register</button>
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
                            <a class="nav-link nav-link-custom active" aria-current="page" href="attractions.php">Attractions</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="about.php">About</a>
                        </li>
                    </ul>

                    <div class="navigation-btn btn-group">
                        <button class="btn btn-light rounded-pill shadow-sm bg-body me-1" id="showForm">Sign in</button>
                        <button class="btn btn-light rounded-pill shadow bg-body d-none" id="showRegister">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--------------------------------------------------------------------------------->
    <!-- Section: Sign in -->
    <section class="sign-up-custom text-center text-lg-start" id="formContent">
        <div class="container py-4 d-flex justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="cascading-right-custom radius-pop-up card">
                    <div class="card-body p-5 shadow-5 text-center">
                        <div class="closing d-flex justify-content-end">
                            <button class="btn" id="closeForm">
                                <i class='fa fa-close fa-xl'></i>
                            </button>
                        </div>

                        <div class="title">
                            <h2 class="fw-bold mb-5">Sign In</h2>
                        </div>

                        <form id="myLogIn">

                            <!-- User name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1" class="form-control" placeholder="User name">
                                <!--                                            <label class="form-label" for="form3Example1">First name</label>-->
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

                            <!-- Go to Register -->
                            <p class="text-center mt-5 mb-0">You don't have an account?
                                <a type="button" id="goToRegister" class="fw-bold text-body"><u>Register</u></a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: Sign in -->
    <!-- Section: Register -->
    <section class="sign-up-custom text-center text-lg-start" id="formContentRegister">
        <div class="container py-4 d-flex justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="cascading-right-custom radius-pop-up card">
                    <div class="card-body p-5 shadow-5 text-center">
                        <div class="closing d-flex justify-content-end">
                            <button class="btn" id="closeFormRegister">
                                <i class='fa fa-close fa-xl'></i>
                            </button>
                        </div>

                        <div class="title">
                            <h2 class="fw-bold mb-5">Creat an account</h2>
                        </div>

                        <form id="myForm">

                            <!-- Name input -->
                            <div class="row">
                                <div class="form-outline col-lg-6 mb-4">
                                    <input type="text" id="form3Example1" class="form-control" placeholder="First name">
                                    <!--                                            <label class="form-label" for="form3Example1">First name</label>-->
                                </div>

                                <div class="form-outline col-lg-6 mb-4">
                                    <input type="text" id="form3Example1" class="form-control" placeholder="Last name">
                                    <!--                                            <label class="form-label" for="form3Example1">First name</label>-->
                                </div>
                            </div>


                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" placeholder="Email address">
                                <!--                                    <label class="form-label" for="form3Example3">Email address</label>-->
                            </div>

                            <!-- Password input -->
                            <div class="row">
                                <div class="form-outline  mb-4">
                                    <input type="password" id="form3Example4" class="form-control" placeholder="Password">
                                    <!--                                    <label class="form-label" for="form3Example4">Password</label>-->
                                </div>

                                <div class="form-outline  mb-4">
                                    <input type="password" id="form3Example4" class="form-control" placeholder="Repeat your password">
                                    <!--                                    <label class="form-label" for="form3Example4">Password</label>-->
                                </div>
                            </div>


                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4 ">
                                <div>
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">
                                        I agree all statements in Terms of service
                                    </label>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block" onclick="myFunction()">
                                Register
                            </button>

                            <!-- Go to Log in -->
                            <p class="text-center mt-5 mb-0">Have already an account?
                                <a type="button" id="goToLogIn" class="fw-bold text-body"><u>Login here</u></a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: Register -->
    <!--------------------------------------------------------------------------------->
<div id="testBlur">

    <header class="head pt-5" id="anchor-scroll-up">
        <div class="head-container">
            <h1 class="head-title">See the Beautiful Romania!</h1>
            <hr>
            <p class="head-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur esse maiores minima nam necessitatibus, officiis perferendis perspiciatis quaerat similique temporibus! Asperiores autem nemo nihil nobis sit. Consequatur itaque numquam reprehenderit?</p>
        </div>
    </header>

    <main class="ctn">
        <section class="ctn-container">

            <div class="container-right container-equal">
                <div class="container-right-text">
                    <p class="container-title">Cities</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolorum enim est illo, in incidunt laudantium magni perspiciatis quae, quam quasi ratione rem reprehenderit sapiente, soluta unde ut? Similique?</p>
                </div>
                <img src="assets/images/cities-small.jpg" alt="cities" class="container-img">
            </div>

            <div class="container-left container-equal">
                <div class="container-left-text">
                    <p class="container-title">Restaurants</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, autem culpa dolor esse incidunt pariatur sunt tempora tempore voluptatibus? Alias doloremque fuga fugiat incidunt ipsam minus perferendis recusandae rem tenetur!</p>
                </div>
                <img src="assets/images/restaurants-small.jpg" alt="restaurants" class="container-img">
            </div>

            <div class="container-right container-equal">
                <div class="container-right-text">
                    <p class="container-title">Landscapes</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolorum enim est illo, in incidunt laudantium magni perspiciatis quae, quam quasi ratione rem reprehenderit sapiente, soluta unde ut? Similique?</p>
                </div>
                <img src="assets/images/landscapes-small.jpg" alt="landscapes" class="container-img">
            </div>

            <div class="container-left container-equal">
                <div class="container-left-text">
                    <p class="container-title">Places to Visit</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, autem culpa dolor esse incidunt pariatur sunt tempora tempore voluptatibus? Alias doloremque fuga fugiat incidunt ipsam minus perferendis recusandae rem tenetur!</p>
                </div>
                <img src="assets/images/places-to-visit-small.jpg" alt="visit" class="container-img">
            </div>

        </section>
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
