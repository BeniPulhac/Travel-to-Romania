<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Us">
    <meta name="keywords" content="about, review, romania, travel">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/about.css">
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
                            <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="attractions.php">Attractions</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom active" aria-current="page" href="about.php">About</a>
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

    <header  id="anchor-scroll-up" class="head pt-5">
        <div class="head-container">
            <h1 class="head-title">Wanna learn more about us?</h1>
            <p class="head-prg">Travel to Romania provides you with <span class="new-line">amazing diversity and breadth of choice - all in one place.</span></p>
        </div>

    </header>

    <div class = "hero-img"></div>

    <main class="ctn">
        <div class="ctn-container">

            <div class="box">
                <div class="container-left">
                    <div class="about-title">
                        <h2 class="about-title-left">About us</h2>
                    </div>

                    <div class="about-prg">
                        <p class="prg-right prg-equal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi magnam qui sequi. Amet dolores excepturi expedita, minus molestias nulla perferendis quaerat, quos rerum saepe sed sint temporibus tenetur, ullam veritatis.</p>
                        <p class="prg-left prg-equal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae cupiditate debitis earum est harum id iste, odit perferendis porro provident quae ratione repudiandae, sit sunt ullam vitae? Amet, possimus.</p>
                    </div>
                </div>

                <div class="container-right">
                    <div class="review-title-container">
                        <h2 class="review-title">WE APPRECIATE YOUR REVIEW!</h2>
                        <h6 class="review-subtitle">Your review will help us to improve our web hosting quality products, and customer services.</h6>
                    </div>

                    <form id="myForm" class="feedback" action="">
                        <div class="title-equal">Your personal info</div>
                        <div class="group-box">
                            <input type="text" class="prs-info" name="name" placeholder="Your Name">
                            <input type="email" class="prs-info" name="email" placeholder="Email">
                        </div>

                        <div class="title-equal">Rate our overall services</div>
                        <div class="rate-box">
                            <input class="rate-input" type="number" min="1" max="5" placeholder="1-5">
                        </div>

                        <div class="title-equal">Write your feedback</div>
                        <div class="write-box">
                            <textarea class="write-area" id="review" rows="3"></textarea>
                        </div>

                        <button type="submit" class="feedback-btn" onclick="myFunction()" value="Submit form">Submit</button>
                    </form>
                </div>
            </div>

            <div class="others-review">

            </div>
<!---->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <h2>Feedback</h2>-->
<!--                    <table width="100%" border="0">-->
<!--                        <div class="col-md-9 col-md-offset-0">-->
<!--                            <tr><td width="77%">-->
<!--                                    <div class="">-->
<!--                                        <form class="form-horizontal" action="send.php" method="post">-->
<!--                                            <fieldset>-->
<!---->
<!--                                                <!-- Name input-->-->
<!--                                                <div class="form-group">-->
<!--                                                    <label class="col-md-3 control-label" for="name">Full Name</label>-->
<!--                                                    <div class="col-md-9">-->
<!--                                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!---->
<!--                                                <!-- Email input-->-->
<!--                                                <div class="form-group">-->
<!--                                                    <label class="col-md-3 control-label" for="email">Your E-mail</label>-->
<!--                                                    <div class="col-md-9">-->
<!--                                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!---->
<!--                                                <!-- Message body -->-->
<!--                                                <div class="form-group">-->
<!--                                                    <label class="col-md-3 control-label" for="message">Your message</label>-->
<!--                                                    <div class="col-md-9">-->
<!--                                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5"></textarea>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!---->
<!---->
<!--                                                <!-- Rating -->-->
<!--                                                <div class="form-group">-->
<!--                                                    <label class="col-md-3 control-label" for="message">Your rating</label>-->
<!--                                                    <div class="col-md-9">-->
<!--                                                        <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                </td>-->
<!--                                <td align="center" valign="top" width="23%">-->
<!--                                    <!-- Form actions -->-->
<!--                                    <div class="form-group">-->
<!--                                        <div class="col-md-12 text-center">-->
<!--                                            <img src="http://www.gohacking.com/wp-content/uploads/2010/06/captcha-300x171.jpg" height="140px" width="270px"/><br/>-->
<!--                                            <button type="submit" class="btn btn-primary btn-md">Submit</button>-->
<!--                                            <button type="reset" class="btn btn-default btn-md">Clear</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    </fieldset>-->
<!--                                    </form>-->
<!--                        </div>-->
<!--                </div>-->
<!--                </td>-->
<!--                </tr>-->
<!--                </table>-->
<!--            </div>-->
<!---->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <h2>-->
<!--                        Featured Testimonials</h2>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="blockquote-box clearfix">-->
<!--                            <div class="square pull-left">-->
<!--                                <img src="http://placehold.it/60/8e44ad/FFF&text=B" alt="" class="" />-->
<!--                            </div>-->
<!--                            <h4>-->
<!--                                John Doe</h4>-->
<!--                            <p>-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a-->
<!--                                ante.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="blockquote-box blockquote-primary clearfix">-->
<!--                            <div class="square pull-left">-->
<!--                                <span class="glyphicon glyphicon-music glyphicon-lg"></span>-->
<!--                            </div>-->
<!--                            <h4>-->
<!--                                John Doe</h4>-->
<!--                            <p>-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a-->
<!--                                ante. <a href="http://www.jquery2dotnet.com/search/label/jquery">jquery2dotnet</a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="blockquote-box blockquote-success clearfix">-->
<!--                            <div class="square pull-left">-->
<!--                                <span class="glyphicon glyphicon-tree-conifer glyphicon-lg"></span>-->
<!--                            </div>-->
<!--                            <h4>-->
<!--                                John Doe</h4>-->
<!--                            <p>-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a-->
<!--                                ante.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="blockquote-box blockquote-info clearfix">-->
<!--                            <div class="square pull-left">-->
<!--                                <span class="glyphicon glyphicon-info-sign glyphicon-lg"></span>-->
<!--                            </div>-->
<!--                            <h4>-->
<!--                                John Doe</h4>-->
<!--                            <p>-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a-->
<!--                                ante.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="blockquote-box blockquote-warning clearfix">-->
<!--                            <div class="square pull-left">-->
<!--                                <span class="glyphicon glyphicon-warning-sign glyphicon-lg"></span>-->
<!--                            </div>-->
<!--                            <h4>-->
<!--                                John Doe</h4>-->
<!--                            <p>-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a-->
<!--                                ante.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="blockquote-box blockquote-danger clearfix">-->
<!--                            <div class="square pull-left">-->
<!--                                <span class="glyphicon glyphicon-record glyphicon-lg"></span>-->
<!--                            </div>-->
<!--                            <h4>-->
<!--                                John Doe</h4>-->
<!--                            <p>-->
<!--                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a-->
<!--                                ante.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <!--            -->
        </div>
    </main>

    <footer class="footer-container-custom">
        <div class="container py-5">
            <div class="row">

                <div class="col-12 col-md-5">
                    <span class="text-muted">Travel to Romania is a website design to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
                </div>

                <div class="col-12 col-md-5 my-3 my-md-0">
                    <form>
                        <h4>Subscribe to our newsletter</h4>
                        <p class="text-muted">Monthly digest of what's new and exciting from us.</p>
                        <div class="d-block d-md-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control mb-2" placeholder="Email address">
                            <button class="btn btn-primary mb-2" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-2">
                    <h4 class="ps-2">Menu</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted ps-2">Home</a></li>
                        <li class="nav-item mb-2"><a href="hotels.php" class="nav-link p-0 text-muted ps-2">Hotels</a></li>
                        <li class="nav-item mb-2"><a href="attractions.php" class="nav-link p-0 text-muted ps-2">Attractions</a></li>
                        <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted ps-2">Contact</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted ps-2">About</a></li>
                    </ul>
                </div>

            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2022 Company, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
<!--<script src="assets/js/main.js"></script>-->
<script src="assets/js/formSubmitted.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
