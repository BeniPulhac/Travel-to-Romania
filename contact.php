<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Us">
    <meta name="keywords" content="contact, name, email">

    <title>Travel to Romania</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/contact.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
</head>
<body>
    <nav>
        <img src="assets/images/flag-logo.jpg" class="logo" alt="Romania">

        <img src="assets/images/close-menu.png" alt="Close Menu" class="close">

        <ul class="nav-ul">
            <li><a href = "index.php" class="nav-link">Home</a></li>
            <li><a href = "hotels.php" class="nav-link">Hotels</a></li>
            <li><a href = "attractions.php" class="nav-link">Attractions</a></li>
            <li><a href = "contact.php" class="nav-link">Contact</a></li>
            <li><a href = "about.php" class="nav-link">About</a></li>
        </ul>
    </nav>

    <header>
        <h1>This is the header</h1>
        <button type="button" id="logIn"><a href="log-in.php">Log In</a></button>

        <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="menu">
    </header>



    <div class = "hero-img"></div>

    <main>
        <div class="contact-title">
            <h1 class = "contact-us" >Contact Us</h1>
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
    </main>

    <footer>

        <div class="footer-text">
            <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
        </div>

        <div class = "copyright">© 2022 Beniamin Pulhac</div>

        <div class="footer-nav">
            <ul class="footer-ul">
                <li><a href = "index.php" class="footer-link">Home</a></li>
                <li><a href = "hotels.php" class="footer-link">Hotels</a></li>
                <li><a href = "attractions.php" class="footer-link">Attractions</a></li>
                <li><a href = "contact.php" class="footer-link">Contact</a></li>
                <li><a href = "about.php" class="footer-link">About</a></li>
            </ul>
        </div>
    </footer>
<script src = "assets/js/main.js"></script>
</body>
</html>
