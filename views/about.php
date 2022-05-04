<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Us">
    <meta name="keywords" content="about, review, romania, travel">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel = "stylesheet" href = "../assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "../assets/css/header.css">
    <link rel = "stylesheet" href = "../assets/css/footer.css">
<!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width testBlur">
<!-----------------------------------Nav Bar----------------------------------------------->
    <?php include 'components/navbar.php';?>
<!----------------------------------/Nav Bar----------------------------------------------->

<!----------------------------------Sign in / Register----------------------------------------------->
    <?php include 'components/signIn.php';?>
<!----------------------------------Sign in / Register----------------------------------------------->
<div id="testBlur">

    <header  id="anchor-scroll-up" class="head pt-5">
        <div class="head-container">
            <h1 class="head-title">Wanna learn more about us?</h1>
            <p class="head-prg">Travel to Romania provides you with <span class="new-line">amazing diversity and breadth of choice - all in one place.</span></p>
        </div>

    </header>

<!--    <div class = "hero-img"></div>-->

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


                    <form id="reviewForm" class="feedback" action="" method="POST">
                        <div class="title-equal">Your personal info</div>
                        <div class="group-box">

                            <input type="text" class="prs-info" id="name" name="name" placeholder="Your Name" autocomplete="off">
                            <span class="error" id="nameError"> </span>


                            <input type="email" class="prs-info" id="email" name="email" placeholder="Email" autocomplete="off">
                            <span class="error" id="emailError"> </span>

                        </div>

                        <div class="title-equal">Rate our overall services</div>
                        <div class="rate-box">
                            <input class="rate-input" id="rate" type="number" name="rate" min="1" max="5" placeholder="1-5">
                        </div>
                        <span class="error" id="rateError"></span>

                        <div class="title-equal">Write your feedback</div>
                        <div class="write-box">
                            <textarea class="write-area" name="comment" id="review" rows="3"></textarea>
                        </div>
<!--                        <p><span class="error">* required field</span></p>-->
                        <button type="button" class="feedback-btn" id="submitBtn" value="Submit form">Submit</button>
                        <span class="d-flex justify-content-center" id="success"></span>
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

<!--------------------------------------------footer-------------------------------------------->
    <?php include 'components/footer.php';?>
<!--------------------------------------------/footer-------------------------------------------->
</div>

<script src="../assets/js/formSubmit.js"></script>
<script src="../assets/js/formSubmitted.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.js"></script>
</body>
</html>
