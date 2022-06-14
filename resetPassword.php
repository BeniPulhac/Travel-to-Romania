<link rel="stylesheet" href="assets/css/bootstrap.css">
<div class="blur" id="resetPwdBlur">
    <?php
    include 'views/home.php';
    ?>
</div>

<?php

$selector = $_GET['selector'];
$token = $_GET['token'];
$validate = $_GET['validate'];

if(empty($selector) || empty($token)) {
    echo 'Could not validate your request!'; //Need to change this to appear nice in the website
} else {
    if($validate > date('U') ) {
        ?>

        <section class="sign-up-custom text-center text-lg-start" id="changePasswordTab">
            <div class="container py-4 d-flex justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="cascading-right-custom radius-pop-up">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h3><i class="fa-solid fa-shuffle"></i></h3>
                            <h2 class="text-center">Input new password</h2>
                            <div class="container panel-body">

                                <form id="changePasswordForm" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group py-2">
                                        <div class="d-flex flex-column">
                                            <input type="hidden" name="selector" value="<?php echo $selector ?>" id="selectorInput">
                                            <input type="hidden" name="token" value="<?php echo $token ?>" id="tokenInput">
                                            <input id="passwordChange" name="passwordChange" placeholder="New password" class="form-control py-2 my-2"  type="password">
                                            <span id="passwordChangeError" class="text-danger"></span>
                                            <input id="passwordChange2" name="passwordChange2" placeholder="Retype password" class="form-control py-2 my-2"  type="password">
                                            <span id="passwordChange2Error" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="button" id="changePasswordBtn">
                                    </div>

                                    <span class="text-success" id="resetPwdResponse"></span>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    } else { ?>

        <section class="sign-up-custom text-center text-lg-start d-block" id="sendEmailTab">
            <div class="container py-4 d-flex justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="cascading-right-custom radius-pop-up">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h3><i class="fa fa-lock"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="container panel-body">

                                <form id="SendTokenForm" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group py-2 d-flex flex-column">
                                        <div class="input-group">
                                            <input id="emailSentToken" name="emailSentToken" placeholder=" email address" class="form-control"  type="email">
                                        </div>
                                        <span class="text-danger" id="emailSentError"></span>
                                    </div>
                                    <div class="form-group py-2">
                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Send Email" type="button" id="sendPassword">
                                    </div>

                                    <span class="text-danger" id="resetPassSuccess">*The token had expired, please introduce the email again for a new token</span>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   <?php }
}
?>

<!--In functie de token daca a expirat afisam popup sa introduca emailu din nou si daca nu a expirat afisam reset password-->

<!-- Section: Send Email -->
<!--<section class="sign-up-custom text-center text-lg-start d-block" id="sendEmailTab">-->
<!--    <div class="container py-4 d-flex justify-content-center">-->
<!--        <div class="col-lg-6 mb-5 mb-lg-0">-->
<!--            <div class="cascading-right-custom radius-pop-up">-->
<!--                <div class="card-body p-5 shadow-5 text-center">-->
<!--                    <h3><i class="fa fa-lock"></i></h3>-->
<!--                    <h2 class="text-center">Forgot Password?</h2>-->
<!--                    <p>You can reset your password here.</p>-->
<!--                    <div class="container panel-body">-->
<!---->
<!--                        <form id="SendTokenForm" role="form" autocomplete="off" class="form" method="post">-->
<!---->
<!--                            <div class="form-group py-2 d-flex flex-column">-->
<!--                                <div class="input-group">-->
<!--                                    <input id="emailSentToken" name="emailSentToken" placeholder=" email address" class="form-control"  type="email">-->
<!--                                </div>-->
<!--                                <span class="text-danger" id="emailSentError"></span>-->
<!--                            </div>-->
<!--                            <div class="form-group py-2">-->
<!--                                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Send Email" type="button" id="sendPassword">-->
<!--                            </div>-->
<!---->
<!--                            <span class="text-success" id="resetPassSuccess"></span>-->
<!--                        </form>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Section: /Send Email -->

<script src="assets/js/resetPassword.js"></script>
