
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Travel to Romania">
    <meta name="keywords" content="travel, romania">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/main.css">

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width">

<!-----------------------------------Nav Bar----------------------------------------------->
    <?php include 'components/navbar.php'?>
<!----------------------------------/Nav Bar----------------------------------------------->

<!----------------------------------Sign in / Register----------------------------------------------->
    <?php include 'components/signIn.php'?>
<!----------------------------------Sign in / Register----------------------------------------------->

<div id="testBlur">

    <!--------------------------------------------header-------------------------------------------->
    <header class="head pt-5 vh-100">
        <div class="hero-img vh-100"></div>

        <div class="head-container-custom container">
            <h1 class="head-title-custom w-75 pt-5">Do you want to travel <span class="head-title-2">to Romania?</span></h1>

            <p class="head-para-custom w-md-75"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A earum inventore maiores omnis pariatur rerum sequi voluptas. Accusamus accusantium, aliquam aut commodi eligendi, excepturi explicabo, facere fugit molestiae quas quod!</span></p>
        </div>
    </header>
    <!--------------------------------------------/header-------------------------------------------->

    <!-----------------------------------Main---------------------------------------------->
    <div class="search-box-custom container my-5">
        <h2 class="search-title-custom text-center py-1">Top Destinations</h2>

        <div id="carouselMainPage" class="carousel carousel-dark slide pb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <div class="card-custom card m-auto">
                        <div class="d-flex flex-column flex-sm-row g-0">
                            <div class="card-image-custom"></div>

                            <div class="testing">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="search-card-btn-custom btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card-custom card m-auto">
                        <div class="d-flex flex-column flex-sm-row g-0">
                            <div class="card-image-custom"></div>

                            <div class="testing">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="search-card-btn-custom btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card-custom card m-auto">
                        <div class="d-flex flex-column flex-sm-row g-0">
                            <div class="card-image-custom"></div>

                            <div class="testing">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="search-card-btn-custom btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="card-custom card m-auto">
                        <div class="d-flex flex-column flex-sm-row g-0">
                            <div class="card-image-custom"></div>

                            <div class="testing">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="search-card-btn-custom btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselMainPage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon carousel-icon-custom me-auto mb-5" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMainPage" data-bs-slide="next">
                <span class="carousel-control-next-icon carousel-icon-custom ms-auto mb-5" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <!--------------------------------------------------------------------------------->
    <div class="travel-container-custom">
        <div class="travel-custom container my-5">
            <div class="travel-title card-header">
                <h3 class="change-font">Travel Safe during COVID-19</h3>
            </div>

            <div class="information d-flex">
                <div class="accordion-custom accordion-left-custom accordion pb-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Keep yourself and others safe
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
                                <p>If you develop symptoms or test positive for COVID-19, self-isolate until you recover.</p>
                            </div>

                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
                                Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings.
                            </div>

                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
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
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                What to do if you feel unwell
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample1">
                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
                                If you have a fever, cough and difficulty breathing, seek medical attention immediately. Call by telephone first and follow the directions of your local health authority.
                            </div>

                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
                                Know the full range of symptoms of COVID-19. The most common symptoms of COVID-19 are fever, dry cough, tiredness and loss of taste or smell. Less common symptoms include aches and pains, headache, sore throat, red or irritated eyes, diarrhoea,  a skin rash or discolouration of fingers or toes.
                            </div>

                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
                                Stay home and self-isolate for 10 days from symptom onset, plus three days after symptoms cease. Call your health care provider or hotline for advice. Have someone bring you supplies. If you need to leave your house or have someone near you, wear a properly fitted mask to avoid infecting others
                            </div>

                            <div class="accordion-body d-flex align-items-baseline">
                                <i class="fa-solid fa-check p-absolute pe-2"></i>
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
    </div>
    <!-------------------------------------/Main-------------------------------------------->

<!--------------------------------------------Cookies-------------------------------------------->
    <?php include 'components/cookiesPolicy.php'?>
<!--------------------------------------------/Cookies-------------------------------------------->

<!--------------------------------------------footer-------------------------------------------->
    <?php include 'components/footer.php'?>
<!--------------------------------------------/footer-------------------------------------------->
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
