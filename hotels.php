<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotels in Romania">
    <meta name="keywords" content="hotel, romania, booking, check in">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/hotels.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
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
                            <a class="nav-link nav-link-custom active" aria-current="page" href="hotels.php">Hotels</a>
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

    <div class = "hero-img"></div>

    <header class="head pt-5" id="anchor-scroll-up">
        <div class="head-container">
            <h1 class="head-title">Are you looking for a Hotel?</h1>
            <hr>
        </div>
    </header>

    <main class="ctn">
        <div class="ctn-container">
<!--            -->
            <div class="search-bar">
                <div class="search-nav">

                        <div class="search-check-in search-equal"><span>Check In</span></div>

                        <div class="search-check-out search-equal"><span>Check Out</span></div>

                        <div class="search-guest search-equal"><span>Guests</span></div>

                </div>

                <div class="search-btn">
                    <div class="testing">
                        <span>Search</span>
                    </div>
                </div>
            </div>
<!--Search Results-->
            <div class="container-custom container border">
                <div class="card-header-custom card-header"><h4>Search Results</h4></div>

                <div class="row-custom row row-cols-1 row-cols-md-2 g-4 m-auto align-content-center">

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus cumque deleniti, deserunt dolorem ducimus ipsa iste nihil non officia provident quidem recusandae, saepe, sequi soluta temporibus totam ullam velit?.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eos impedit quisquam reprehenderit sed tempore totam veritatis. A aliquam aut deleniti hic id minus necessitatibus voluptas voluptatem! Blanditiis, possimus, voluptas.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            -->

 <!--Top Picks-->
            <div class="container-custom container border">
                <div class="card-header-custom card-header"><h4>Top Picks</h4></div>

                <div class="row-custom row row-cols-1 row-cols-md-4 g-4 m-auto align-content-center">

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, provident quidem recusandae, saepe, sequi soluta temporibus totam ullam velit?.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="assets/images/cities-small.jpg" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-lg-between">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-btn-custom btn btn-primary">Go somewhere</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Insert km details</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            -->

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
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
