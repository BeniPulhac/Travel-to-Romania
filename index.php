<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Travel to Romania">
    <meta name="keywords" content="travel, romania">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href = "assets/css/nav-bar.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light fixed-top position-relative">
        <div class="container-md">
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
                        <li class="nav-item nav-item-custom">
                            <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>
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

<!--        <nav class="navbar navbar-light navbar-expand-md container-md fixed-top">-->
<!--            <div class="container-fluid">-->
<!--                <a class="navbar-brand" href="index.php">-->
<!--                    <img src="assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top nav-bar-logo-custom">-->
<!--                </a>-->
<!---->
<!--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!---->
<!--                <div class="navigation-custom collapse navbar-collapse navbar-light" id="navbarSupportedContent">-->
<!--                  <img src="assets/images/close-menu.png" alt="Close Menu" class="navigation-close nav-icon-custom">-->
<!---->
<!--                    <ul class="nav-ul-custom nav justify-content-end">-->
<!--                        <li class="nav-item nav-item-custom">-->
<!--                            <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item nav-item-custom">-->
<!--                            <a class="nav-link nav-link-custom" href="attractions.php">Attractions</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item nav-item-custom">-->
<!--                            <a class="nav-link nav-link-custom" href="about.php">About</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                    <div class="navigation-btn btn-group">-->
<!--                        <button class="btn btn-light rounded-pill shadow-sm bg-body me-1"><a href="log-in.php" class="btn-custom">Log In</a></button>-->
<!--                        <button class="btn btn-light rounded-pill shadow bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </nav>-->

    <header id="anchor-scroll-up" class="head">
        <div class="head-container">
            <h1 class="head-title">Do you want to travel <span class="head-title-2">to Romania?</span></h1>
            <hr>
            <p class="head-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad, alias commodi dolores error eum eveniet fugit impedit ipsam laborum minus modi natus omnis quisquam quo, ratione similique vel vero.</p>
        </div>
    </header>

    <div class="hero-img"></div>

    <main class="ctn">
        <div class="ctn-container">

            <div class="search-box-custom">
                <h2 class="search-title-custom">You recently searched</h2>

                <div class="card mb-3" style="max-width: 768px;">
                    <div class="row g-1">
                        <div class="column-left-custom testing col-md-4">
                            <img src="assets/images/cities-small.jpg" class="search-img-custom img-fluid rounded-start" alt="...">
                        </div>

                        <div class="column-right-custom testing col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--------------------------->
<div class="travel">
    <div class="travel-title card-header">
        <h3 class="change-font">Travel Safe during COVID-19</h3>
    </div>

    <div class="information d-flex">

        <div class="accordion-custom accordion pb-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Keep yourself and others safe
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        If you develop symptoms or test positive for COVID-19, self-isolate until you recover.
                    </div>

                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings.
                    </div>

                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        Keep physical distance of at least 1 metre from others, even if they don’t appear to be sick. Avoid crowds and close contact.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-custom accordion pb-3" id="accordionExample1">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        What to do if you feel unwell
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        If you have a fever, cough and difficulty breathing, seek medical attention immediately. Call by telephone first and follow the directions of your local health authority.
                    </div>

                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        Know the full range of symptoms of COVID-19. The most common symptoms of COVID-19 are fever, dry cough, tiredness and loss of taste or smell. Less common symptoms include aches and pains, headache, sore throat, red or irritated eyes, diarrhoea,  a skin rash or discolouration of fingers or toes.
                    </div>

                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        Stay home and self-isolate for 10 days from symptom onset, plus three days after symptoms cease. Call your health care provider or hotline for advice. Have someone bring you supplies. If you need to leave your house or have someone near you, wear a properly fitted mask to avoid infecting others
                    </div>

                    <div class="accordion-body">
                        <i class="fa-solid fa-check p-absolute pe-1"></i>
                        Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities. Local and national authorities and public health units are best placed to advise on what people in your area should be doing to protect themselves.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--------------------------->

<!--            <div class="ctn-travel mt-5 mb-5">-->
<!--                <div class="ctn-travel-title-custom card-header">-->
<!--                    <h3 class="change-font">Travel Safe during COVID-19</h3>-->
<!--                </div>-->
<!---->
<!--                <div class="content d-flex">-->
<!---->
<!--                    <div class="left w-50">-->
<!--                        <div class="accordion" id="accordionExample">-->
<!--                            <div class="accordion-item">-->
<!--                                <h2 class="accordion-header" id="headingOne">-->
<!--                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<!--                                        Keep yourself and others safe-->
<!--                                    </button>-->
<!--                                </h2>-->
<!---->
<!--                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        If you develop symptoms or test positive for COVID-19, self-isolate until you recover.-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings.-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        Keep physical distance of at least 1 metre from others, even if they don’t appear to be sick. Avoid crowds and close contact.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="accordion right w-50">-->
<!--                        <div class="accordion" id="accordionExample1">-->
<!--                            <div class="accordion-item ">-->
<!--                                <h2 class="accordion-header" id="heading1">-->
<!--                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">-->
<!--                                        What to do if you feel unwell-->
<!--                                    </button>-->
<!--                                </h2>-->
<!---->
<!--                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">-->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        If you have a fever, cough and difficulty breathing, seek medical attention immediately. Call by telephone first and follow the directions of your local health authority.-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        Know the full range of symptoms of COVID-19. The most common symptoms of COVID-19 are fever, dry cough, tiredness and loss of taste or smell. Less common symptoms include aches and pains, headache, sore throat, red or irritated eyes, diarrhoea,  a skin rash or discolouration of fingers or toes.-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        Stay home and self-isolate for 10 days from symptom onset, plus three days after symptoms cease. Call your health care provider or hotline for advice. Have someone bring you supplies. If you need to leave your house or have someone near you, wear a properly fitted mask to avoid infecting others-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="accordion-body">-->
<!--                                        <i class="fa-solid fa-check p-absolute pe-1"></i>-->
<!--                                        Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities. Local and national authorities and public health units are best placed to advise on what people in your area should be doing to protect themselves.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->

        </div>
    </main>

    <footer class="bottom">
        <div class="bottom-container">

                <div class="bottom-left bottom-center">
                    <span>Travel to Romania is a website design to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
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
<style>
    button {
        border: none !important;
        outline: none !important;
    }

    button:focus {
        box-shadow: none !important;
    }
</style>