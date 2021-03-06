<link rel="stylesheet" href="assets/css/bootstrap.css">
<div class="blur" id="resetPwdBlur">
    <?php
    include 'views/home.php';
    ?>
</div>

<?php

$userid = $_GET['userid'];
$token = $_GET['token'];
$validate = $_GET['validate'];

if(empty($userid) || empty($token)) {
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
                                            <input type="hidden" name="selector" value="<?php echo $userid ?>" id="selectorInput">
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

        <section class="sign-up-custom text-center text-lg-start" id="sendEmailTab2">
            <div class="container py-4 d-flex justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="cascading-right-custom radius-pop-up">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h3><i class="fa fa-lock"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="container panel-body">

                                <form id="SendTokenForm2" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group py-2 d-flex flex-column">
                                        <div class="input-group">
                                            <input id="emailSentToken2" name="emailSentToken" placeholder=" email address" class="form-control"  type="email">
                                        </div>
                                        <span class="text-danger" id="emailSentError2"></span>
                                    </div>
                                    <div class="form-group py-2">
                                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Send Email" type="button" id="sendPassword2" onclick="sendEmailAjax2()">
                                    </div>

                                    <span class="text-danger" id="resetPassSuccess2">*The token had expired, please introduce the email again for a new token</span>
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
<script src="assets/js/components/forgetPassword2.js"></script>
<script src="assets/js/resetPassword.js"></script>
