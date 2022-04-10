<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotels in Romania">
    <meta name="keywords" content="hotel, romania, booking, check in">

    <title>Travel to Romania</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/hotels.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
</head>
<body>
    <nav>
        <img src="assets/images/logo.png" class="logo" alt="Logo">

        <img src="assets/images/close-menu.png" alt="Close Menu" class="close">


        <ul class="nav-ul">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li><a href="attractions.php" class="nav-link">Attractions</a></li>
            <li><a href="contact.php" class="nav-link">Contact</a></li>
            <li><a href="about.php" class="nav-link">About</a></li>
        </ul>
        <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="menu">

    </nav>
    <div class = "hero-img"></div>

    <header>
        <h1>This is the header</h1>
        <button type="button" id="logIn"><a href="log-in.php">Log In</a></button>
    </header>



    <main>
        <div class = "sub-meniu-bar">
            <div class="check-in">
                <button id = "checkIn">Check In</button>

<!--                <div class="calendar">-->
<!--                    <div class="header-calendar">-->
<!--                        <span>Select a date to Check In</span>-->
<!--                        <hr>-->
<!--                        <div class="top-calendar">-->
<!--                            <button id = "left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg></button>-->
<!--                            <div class="calendar-month" id = "calendarMonth" aria-live="polite">-->
<!--                                Aprilie 2022-->
<!--                            </div>-->
<!--                            <button id = "right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg></button>-->
<!--                        </div>-->
<!--                        <div class="calendar-check-in">-->
<!--                            <table class = "calendar-dates" aria-labelledby="calendar-month">-->
<!--                                <thead class = "calendar-row">-->
<!--                                    <tr>-->
<!--                                        <th scope = "col" class = "calendar-day-name">Mo</th>-->
<!--                                        <th scope = "col" class = "calendar-day-name">Tu</th>-->
<!--                                        <th scope = "col" class = "calendar-day-name">We</th>-->
<!--                                        <th scope = "col" class = "calendar-day-name">Th</th>-->
<!--                                        <th scope = "col" class = "calendar-day-name">Fr</th>-->
<!--                                        <th scope = "col" class = "calendar-day-name">Sa</th>-->
<!--                                        <th scope = "col" class = "calendar-day-name">Su</th>-->
<!--                                    </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                    <tr></tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>-->
<!--                    </div>-->
<!--                </div>-->

            </div>

            <div class="check-out">
                <button id = "checkOut">Check Out</button>

<!--                <div class="calendar">-->
<!--                    <div class="top-calendar">-->
<!--                        <span>Select a date to Check Out</span>-->
<!--                        <hr>-->
<!--                        <div class="calendar-check-in">-->
<!---->
<!--                        </div>-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>-->
<!--                    </div>-->
<!--                </div>-->

            </div>

            <div class="guests">
                <button id = "guests">Guests</button>

            </div>

            <div class="search">
                <button id = "search">Search</button>
            </div>
        </div>

        <div class="destinations">

        </div>

        <div class="top-picks">

        </div>
    </main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer>
        <div class="footer-left">
            <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
        </div>

        <div class="footer-middle">
            <button class="scroll-up" id="scrollUp" type="button">Scroll Up</button>
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

<script src = "assets/js/main.js"></script>
</body>
</html>
