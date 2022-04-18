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
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
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
                        <button class="btn btn-light rounded-pill shadow-sm p-2 bg-body" data-bs-toggle="button" aria-pressed="true"><a href="log-in.php" class="btn-custom">Log In</a></button>
                        <button class="btn btn-light rounded-pill shadow p-2 bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                    </div>
                </div>

                <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="navigation-menu nav-icon-custom">
            </div>
        </nav>
    </div>

    <header  id="anchor-scroll-up" class="head">
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
