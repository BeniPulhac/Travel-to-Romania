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
</head>
<body>
    <nav class="navigation">
        <div class="navigation__container">
            <img src="assets/images/logo.png" class="navigation__logo" alt="Logo">

            <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="navigation__menu">

            <ul class="navigation__ul">
                <li><a class="navigation__link" href="index.php">Home</a></li>
                <li><a class="navigation__link" href="hotels.php">Hotels</a></li>
                <li><a class="navigation__link" href="attractions.php">Attractions</a></li>
                <li><a class="navigation__link" href="contact.php">Contact</a></li>
                <li><a class="navigation__link" href="about.php">About</a></li>
                <li><button class="navigation__button"><a href="log-in.php" class="navigation__log-in">Log In</a></button></li>
            </ul>
            <img src="assets/images/close-menu.png" alt="Close Menu" class="navigation__close">
        </div>
    </nav>

    <header  id="anchor-scroll-up">
        <h1>We want to hear from you</h1>

    </header>



    <div class = "hero-img"></div>

    <main>
            <section class="help-center">
                <h2 class="help-center-title">Help Center</h2>
                <hr>
                <div class="help-center-subtitle">
                    <h3>Welcome to Help Center</h3>
                    <hr>
                    <h4>You have any problems within our website?</h4>
                    <p>Please sign in to contact Customer Service</p>
                </div>
                <hr>
                <div class="ways-of-contact">
                    <hr>
                    <div class="contact-email">
                        <div class="contact-email-top">
                            <img src="assets/images/email.png" alt="Email Icon">
                            <h4>Email Us</h4>
                        </div>

                        <div class="contact-email-text">
                            <p>Feel free to contact us via email at any time</p>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-phone">
                        <div class="contact-phone-top">
                            <img src="assets/images/call.png" alt="Phone Icon">
                            <h4>Call Us</h4>
                        </div>

                        <div class="contact-phone-text">
                            <p>For anything urgent, you can call us <br> <span class="contact-days">Mon-Fri</span> <br> 8:00 AM - 17:00 PM</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <hr>

                <div class="contact-log-in">
                    <button class="btn-contact-log-in">Log In</button>
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

    </main>

    <footer class="footer">
        <div class="footer__container">
            <div class="footer__left">
                <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
            </div>

            <div class="footer__middle">
                <button class="footer__scroll" id="scrollUp" type="button"><a href="#anchor-scroll-up" class="footer__scroll--modifier">Scroll Up</a></button>
                <span class="footer__copyright">© 2022 Travel to Romania</span>
            </div>

            <div class="footer__right">
                <ul class="footer__ul">
                    <li class="footer__link"><a class="footer__link-modifier" href="index.php">Home</a></li>
                    <li class="footer__link"><a class="footer__link-modifier" href="hotels.php">Hotels</a></li>
                    <li class="footer__link"><a class="footer__link-modifier" href="attractions.php">Attractions</a></li>
                    <li class="footer__link"><a class="footer__link-modifier" href="contact.php">Contact</a></li>
                    <li class="footer__link"><a class="footer__link-modifier" href="about.php">About</a></li>
                </ul>
            </div>
        </div>
    </footer>
<script src = "assets/js/main.js"></script>
</body>
</html>
