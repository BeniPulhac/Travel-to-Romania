<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel to Romania</title>
    <link rel = "stylesheet" href = "css/hotels.css">
    <link rel = "stylesheet" href = "css/header.css">
    <link rel = "stylesheet" href = "css/footer.css">
</head>
<body>
<div class = "hero-img"></div>
<div class = "wrapper">
    <header>
        <img src = "images/flagLogo.jpg" class = "logo" alt = "Romania">

        <nav>
            <svg class="close" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2V2ZM14.71 13.29C14.8037 13.383 14.8781 13.4936 14.9289 13.6154C14.9797 13.7373 15.0058 13.868 15.0058 14C15.0058 14.132 14.9797 14.2627 14.9289 14.3846C14.8781 14.5064 14.8037 14.617 14.71 14.71C14.617 14.8037 14.5064 14.8781 14.3846 14.9289C14.2627 14.9797 14.132 15.0058 14 15.0058C13.868 15.0058 13.7373 14.9797 13.6154 14.9289C13.4936 14.8781 13.383 14.8037 13.29 14.71L12 13.41L10.71 14.71C10.617 14.8037 10.5064 14.8781 10.3846 14.9289C10.2627 14.9797 10.132 15.0058 10 15.0058C9.86799 15.0058 9.73729 14.9797 9.61543 14.9289C9.49357 14.8781 9.38297 14.8037 9.29 14.71C9.19628 14.617 9.12188 14.5064 9.07111 14.3846C9.02034 14.2627 8.99421 14.132 8.99421 14C8.99421 13.868 9.02034 13.7373 9.07111 13.6154C9.12188 13.4936 9.19628 13.383 9.29 13.29L10.59 12L9.29 10.71C9.1017 10.5217 8.99591 10.2663 8.99591 10C8.99591 9.7337 9.1017 9.4783 9.29 9.29C9.47831 9.1017 9.7337 8.99591 10 8.99591C10.2663 8.99591 10.5217 9.1017 10.71 9.29L12 10.59L13.29 9.29C13.4783 9.1017 13.7337 8.99591 14 8.99591C14.2663 8.99591 14.5217 9.1017 14.71 9.29C14.8983 9.4783 15.0041 9.7337 15.0041 10C15.0041 10.2663 14.8983 10.5217 14.71 10.71L13.41 12L14.71 13.29Z" fill="black"/>
            </svg>

            <ul>
                <li><a href = "index.php">Home</a></li>
                <li><a href = "hotels.php">Hotels</a></li>
                <li><a href = "attractions.php">Attractions</a></li>
                <li><a href = "contact.php">Contact</a></li>
                <li><a href = "about.php">About</a></li>
            </ul>
        </nav>

        <svg class="menu" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="white"/>
        </svg>

    </header>
</div>
    <div class = "tab_checkIn">
        <div class="checkIn">
            <button id = "checkIn">Check In</button>

            <div class="calendar">
                <div class="header_calendar">
                    <span>Select a date to Check In</span>
                    <hr>
                    <div class="top_calendar">
                        <button id = "left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg></button>
                        <div class="calendar_month" id = "calendar_month" aria-live="polite">
                            Aprilie 2022
                        </div>
                        <button id = "right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg></button>
                    </div>
                    <div class="calendar_checkIn">
                        <table class = "calendar_dates" aria-labelledby="calendar_month">
                            <thead class = "calendar_row">
                                <tr>
                                    <th scope = "col" class = "calendar_day_name">Mo</th>
                                    <th scope = "col" class = "calendar_day_name">Tu</th>
                                    <th scope = "col" class = "calendar_day_name">We</th>
                                    <th scope = "col" class = "calendar_day_name">Th</th>
                                    <th scope = "col" class = "calendar_day_name">Fr</th>
                                    <th scope = "col" class = "calendar_day_name">Sa</th>
                                    <th scope = "col" class = "calendar_day_name">Su</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>
                </div>
            </div>

        </div>

        <div class="checkOut">
            <button id = "checkOut">Check Out</button>

            <div class="calendar">
                <div class="top_calendar">
                    <span>Select a date to Check Out</span>
                    <hr>
                    <div class="calendar_checkIn">

                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>
                </div>
            </div>

        </div>

        <div class="buests">
            <button id = "guests">Guests</button>

        </div>

        <div class="search">
            <button id = "search">Search</button>
        </div>
    </div>

    <div class="destinations">

    </div>

    <div class="top_picks">

    </div>

<footer>

    <div class="footer-text">
        <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
    </div>

    <div class = "copyright">
        © 2022 Beniamin Pulhac
    </div>

    <div class="footer-meniu">
        <a href = "index.php">Home</a>
        <a href = "hotels.php">Hotels</a>
        <a href = "attractions.php">Attractions</a>
        <a href = "contact.php">Contact</a>
        <a href = "about.php">About</a>
    </div>
</footer>
</body>
</html>
<script src = "js/main.js"></script>