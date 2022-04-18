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
    <div class="container fixed-top">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top nav-bar-logo-custom">
                </a>

                <div class="navigation d-flex">
                    <img src="assets/images/close-menu.png" alt="Close Menu" class="navigation-close nav-icon-custom">

                    <ul class="nav justify-content-end">
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
                        <button class="btn btn-light btn-outline-primary rounded-pill shadow-sm p-2 bg-body" data-bs-toggle="button" aria-pressed="true"><a href="log-in.php" class="btn-custom">Log In</a></button>
                        <button class="btn btn-light rounded-pill shadow p-2 bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                    </div>
                </div>

                <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="navigation-menu nav-icon-custom">
            </div>
        </nav>
    </div>

    <header id="anchor-scroll-up" class="head">
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

    <footer class="bottom">
        <div class="bottom-container">
            <div class="bottom-left bottom-center">
                <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
            </div>

            <div class="bottom-middle bottom-center">
                <button class="bottom-scroll" id="scrollUp" type="button"><a href="#anchor-scroll-up" class="bottom-scroll-modifier">Scroll Up</a></button>
                <span class="bottom-copyright">© 2022 Travel to Romania</span>
            </div>

            <div class="bottom-right bottom-center">
                <ul class="bottom-ul">
                    <li class="bottom-link"><a class="bottom-link-modifier" href="index.php">Home</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="hotels.php">Hotels</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="attractions.php">Attractions</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="contact.php">Contact</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="about.php">About</a></li>
                </ul>
            </div>
        </div>
    </footer>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
