<link rel="stylesheet" href="assets/css/bootstrap.css">
<div class="blur">
    <?php
    include 'views/home.php';
    ?>
</div>

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

<!-- Section: Change password -->
<section class="sign-up-custom text-center text-lg-start d-block" id="changePasswordTab">
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
                                    <input id="passwordChange" name="password" placeholder="New password" class="form-control py-2 my-2"  type="password">
                                    <input id="passwordChangeRetype" name="passwordRetype" placeholder="Retype password" class="form-control py-2 my-2"  type="password">
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="button" id="changePasswordBtn">
                            </div>

                            <span class="text-success" id="resetPassSuccess"></span>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: /Change password -->

<script src="assets/js/openCloseSignIn.js"></script>
<script src="assets/js/signIn.js"></script>
<script src="/assets/js/register.js"></script>
<script src="assets/js/components/forgetPassword.js"></script>