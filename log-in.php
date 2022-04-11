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
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>
<body>
    <nav>
        <div>
            <img src="assets/images/logo.png" class="logo" alt="Logo" id="anchor-scroll-up">

            <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="menu">

            <ul class="nav-ul">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="hotels.php" class="nav-link">Hotels</a></li>
                <li><a href="attractions.php" class="nav-link">Attractions</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><button class="log-in"><a href="log-in.php" class="log-in-text">Log In</a></button></li>
            </ul>

            <img src="assets/images/close-menu.png" alt="Close Menu" class="close">
        </div>

    </nav>

    <header>
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

    <footer>
        <div class="footer-left">
            <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
        </div>

        <div class="footer-middle">
            <button class="scroll-up" id="scrollUp" type="button"><a href="#anchor-scroll-up" class="scroll-up-text">Scroll Up</a></button>
            <span>© 2022 Travel to Romania</span>
        </div>

        <div class="footer-right">
            <ul class="footer-ul">
                <li><a href="index.php" class="footer-link">Home</a></li>
                <li><a href="hotels.php" class="footer-link">Hotels</a></li>
                <li><a href="attractions.php" class="footer-link">Attractions</a></li>
                <li><a href="contact.php" class="footer-link">Contact</a></li>
                <li><a href="about.php" class="footer-link">About</a></li>
            </ul>
        </div>
    </footer>
<script src="assets/js/main.js"></script>
</body>
</html>
