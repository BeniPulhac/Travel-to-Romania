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

    <header id="anchor-scroll-up">
        <p class="header-prg"> Here you can log in or sign up</p>
    </header>
        <div class="hero-img"></div>
    <main>
        <section class="testing">
            <div class="container-log-in">
                <h4>Sign In</h4>
                <form>
                    <label for="email"></label>
                    <input type="text" id="email" name="email" autocomplete="off" placeholder="Email"><br>
                    <label for="password"></label>
                    <input type="text" id="password" name="password" autocomplete="off" placeholder="Password"><br>
                </form>
                <div class="remeber-forget">
                    <form action="">
                        <input type="checkbox" id="keepSignIn" name="keep-sing-in" value="Remember">
                        <label for="keepSignIn">Keep me signed in</label>
                    </form>
                </div>



            </div>
        </section>

        <section class="sign-up-tab">

        </section>
    </main>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
<script src="assets/js/main.js"></script>
</body>
</html>
