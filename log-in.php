<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log In">
    <meta name="keywords" content="romania, register, log in, log out, sign up">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/log-in.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
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
                    <button class="btn btn-light rounded-pill shadow-sm bg-body me-1"><a href="log-in.php" class="btn-custom">Log In</a></button>
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
                        <button class="btn btn-light rounded-pill shadow-sm bg-body me-1"><a href="log-in.php" class="btn-custom">Log In</a></button>
                        <button class="btn btn-light rounded-pill shadow bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header id="anchor-scroll-up" class="head pt-5">
        <div class="head-container">
            <p class="head-prg"> Creat an account so you can use more functions</p>
        </div>
    </header>

        <div class="hero-img"></div>

    <main class="ctn">
            <div class="container-log-in">
                <div class="container-align">
                    <div class="container-title">
                        <span class="container-title-modifier">Sing In</span>
                    </div>

                    <div class="container-box">
                        <div class="container-box-input">
                            <input type="email" autocomplete="off" placeholder="  Email" class="input-sign-in first input-equal">
                            <input type="password" autocomplete="off" placeholder="  Password" class="input-sign-in second input-equal">
                        </div>

                        <div class="container-box-remember">
                            <div class="remember remember-equal">
                                <input type="checkbox" id="keepSignIn" value="Remember">
                                <label for="keepSignIn">Keep me signed in</label>
                            </div>

                            <a href="#" onclick="showResetPasswordForm(); return false" id="new-password-link" class="forget-password remember-equal">Forget Password?</a>
                        </div>

                        <div class="button-box">
                            <button class="button-text" type="submit">Sign In</button>
                        </div>

                        <div class="line">
                            <hr>
                            <span class="line-text">or</span>
                        </div>
                    </div>
                </div>

            </div>

<!--I need a Sign Up form-->
<!--            <div class="container-sign-up">-->
<!---->
<!--            </div>-->

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
<script src="assets/js/main.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
