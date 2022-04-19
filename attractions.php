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
                            <a class="nav-link nav-link-custom active" aria-current="page" href="attractions.php">Attractions</a>
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
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
