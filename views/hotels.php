<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotels in Romania">
    <meta name="keywords" content="hotel, romania, booking, check in">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "../assets/css/hotels.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel = "stylesheet" href = "../assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "../assets/css/header.css">
    <link rel = "stylesheet" href = "../assets/css/footer.css">
<!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width">
<!-----------------------------------Nav Bar----------------------------------------------->
<?php include 'components/navbar.php';?>
<!----------------------------------/Nav Bar----------------------------------------------->

<!----------------------------------Sign in / Register----------------------------------------------->
<?php include 'components/signIn.php';?>
<!----------------------------------Sign in / Register----------------------------------------------->
<div id="testBlur">
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

<!--------------------------------------------------------------------------------->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 card-margin">
                        <div class="card search-form">
                            <div class="card-body p-0">
                                <form id="search-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row no-gutters">
                                                <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                                    <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-12 p-0 border-start border-end">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>Nr. Show</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                                    <button type="button" class="btn btn-base" id="searchButton">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card card-margin">
                            <div class="card-body">
                                <div class="row search-body">
                                    <div class="col-lg-12">
                                        <div class="search-result">
                                            <div class="result-header">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="records">Showing: <b>1-20</b> of <b>200</b> result</div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="result-actions">
                                                            <div class="result-sorting">
                                                                <span>Sort By:</span>
                                                                <select class="form-control border-0" id="exampleOption">
                                                                    <option value="1">Relevance</option>
                                                                    <option value="2">Names (A-Z)</option>
                                                                    <option value="3">Names (Z-A)</option>
                                                                </select>
                                                            </div>

                                                            <div class="result-views">
                                                                <button type="button" class="btn btn-soft-base btn-icon">
                                                                    <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24"
                                                                            height="24"
                                                                            viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-list"
                                                                    >
                                                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                                                        <line x1="3" y1="6" x2="3" y2="6"></line>
                                                                        <line x1="3" y1="12" x2="3" y2="12"></line>
                                                                        <line x1="3" y1="18" x2="3" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                                <button type="button" class="btn btn-soft-base btn-icon">
                                                                    <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24"
                                                                            height="24"
                                                                            viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-grid"
                                                                    >
                                                                        <rect x="3" y="3" width="7" height="7"></rect>
                                                                        <rect x="14" y="3" width="7" height="7"></rect>
                                                                        <rect x="14" y="14" width="7" height="7"></rect>
                                                                        <rect x="3" y="14" width="7" height="7"></rect>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="result-body">
                                                <div class="row-custom row row-cols-1 row-cols-md-2 g-4 m-auto align-content-center" id="insertCard">

<!--                                                    Insert cards with JS-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="d-flex justify-content-center">
                                    <ul class="pagination pagination-base pagination-boxed pagination-square mb-0">
                                        <li class="page-item">
                                            <a class="page-link no-border" href="#">
                                                <span aria-hidden="true">«</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link no-border" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link no-border" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link no-border" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link no-border" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link no-border" href="#">
                                                <span aria-hidden="true">»</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--------------------------------------------------------------------------------->
<!--Search Results-->
            <div class="container-custom container border">
                <div class="card-header-custom card-header"><h4>Search Results</h4></div>

                <div class="row-custom row row-cols-1 row-cols-md-2 g-4 m-auto align-content-center">

                    <div class="col d-flex justify-content-center">
                        <div class="card-custom card text-dark bg-light mb-3 h-100">
                            <img src="../assets/images/cities-small.jpg" class="card-img-top" alt="...">
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
                            <img src="../assets/images/cities-small.jpg" class="card-img-top" alt="...">
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
                            <img src="../assets/images/cities-small.jpg" class="card-img-top" alt="...">
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
                            <img src="../assets/images/cities-small.jpg" class="card-img-top" alt="...">
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
            <div class="search-box-custom container my-5">
                <h2 class="search-title-custom text-center py-1">Top Destinations</h2>

                <div id="carouselTopHotels" class="carousel carousel-dark slide pb-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselMainPage" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>


                </div>
            </div>
<!--            -->

        </div>
    </main>
<!--------------------------------------------footer-------------------------------------------->
    <?php include 'components/footer.php';?>
<!--------------------------------------------/footer-------------------------------------------->
</div>

<script src="../assets/js/hotels.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.js"></script>
</body>
</html>
