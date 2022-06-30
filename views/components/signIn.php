<link rel="stylesheet" href="../../assets/css/bootstrap.css">
<!-- Section: Sign in -->
<section class="sign-up-custom text-center text-lg-start hide-element" id="formSignIn">
    <div class="container py-4 d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="cascading-right-custom radius-pop-up">
                <div class="card-body p-5 shadow-5 text-center">
                    <div class="closing d-flex justify-content-end">
                        <button type="button" class="btn" onclick="closeForms()">
                            <i class='fa fa-close fa-xl'></i>
                        </button>
                    </div>

                    <div class="title">
                        <h2 class="fw-bold mb-5">Sign In</h2>
                    </div>

                    <form id="myLogIn" action="" method="post">

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="emailSignIn" class="form-control" placeholder="Email address">
                            <span class="d-flex text-start text-danger" id="emailSignInError"> </span>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="passwordSignIn" class="form-control" placeholder="Password">
                            <span class=" d-flex text-start text-danger" id="passwordSignInError"> </span>
                            <span class="d-flex text-start text-danger" id="searchDB"></span>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex align-items-center mb-4 ">
                            <div>
                                <input class="form-check-input me-2" type="checkbox" id="signInCheck" name="signInCheck">
                                <label class="form-check-label" for="signInCheck">
                                    Remember Me
                                </label>
                            </div>

                            <!-- Simple link -->
                            <div class="col ms-auto text-end">
                                <button type="button" class="btn btn-link" id="forgetPassword" name="forgetPassword">Forgot password?</button>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="button" id="submitBtnSignIn" class="btn btn-primary btn-block mb-4">
                            Sign In
                        </button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                        <span class="d-flex justify-content-center text-success" id="sendSignIn"></span>
                        <!-- Go to Register -->
                        <p class="text-center mt-5 mb-0">You don't have an account?
                            <a type="button" onclick="toggleSignInRegister()" class="fw-bold text-body"><u>Register</u></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: Sign in -->

<!-- Section: Send Email -->
<section class="sign-up-custom text-center text-lg-start hide-element" id="sendEmailTab">
    <div class="container py-4 d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="cascading-right-custom radius-pop-up">

                <div class="card-body p-5 shadow-5 text-center">

                    <div class="closing d-flex justify-content-end">
                        <button type="button" class="btn" onclick="closeForms()">
                            <i class='fa fa-close fa-xl'></i>
                        </button>
                    </div>
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

                                <span class="text-success" id="resetPassSuccess"></span>
<!--                            <input type="hidden" class="hide" name="token" id="token" value="">-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: /Send Email -->

<!-- Section: Register -->
<section class="sign-up-custom text-center text-lg-start hide-element"  id="formRegister">
    <div class="container py-4 d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="cascading-right-custom radius-pop-up">
                <div class="card-body p-5 shadow-5 text-center">
                    <div class="closing d-flex justify-content-end">
                        <button type="button" class="btn" onclick="closeForms()">
                            <i class='fa fa-close fa-xl'></i>
                        </button>
                    </div>

                    <div class="title">
                        <h2 class="fw-bold mb-5">Creat an account</h2>
                    </div>

                    <form id="myFormRegister" action="../../includes/registerFormData.php" method="post">

                        <!-- Name input -->
                        <div class="row">
                            <div class="form-outline col-lg-6 mb-4">
                                <input type="text" id="firstNameRegister" class="form-control" placeholder="First name">
                                <span class="d-flex text-start text-danger" id="firstNameRegisterError"> </span>
                            </div>

                            <div class="form-outline col-lg-6 mb-4">
                                <input type="text" id="lastNameRegister" class="form-control" placeholder="Last name">
                                <span class="d-flex text-start text-danger" id="lastNameRegisterError"> </span>
                            </div>
                        </div>


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="emailRegister" class="form-control" placeholder="Email address">
                            <span class="d-flex text-start text-danger" id="emailRegisterError"> </span>
                        </div>

                        <!-- Password input -->
                        <div class="row">
                            <div class="form-outline  mb-4">
                                <input type="password" id="passwordRegister" class="form-control" placeholder="Password">
                                <span class="d-flex text-start text-danger" id="passwordRegisterError"> </span>
                            </div>

                            <div class="form-outline  mb-4">
                                <input type="password" id="samePasswordRegister" class="form-control" placeholder="Repeat your password">
                                <span class="d-flex text-start text-danger" id="samePasswordRegisterError"> </span>
                            </div>
                        </div>


                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4 ">
                            <div>
                                <label class="form-check-label" for="testCheckMark">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="testCheckMark">
                                    I agree all statements in Terms of service
                                </label>
                                <span class="d-flex text-start text-danger" id="testCheckMarkError"> </span>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="button" id="submitBtnRegister" class="btn btn-primary btn-block">
                            Register
                        </button>

                        <span class="d-flex justify-content-center text-success" id="sendRegister"></span>

                        <!-- Go to Log in -->
                        <p class="text-center mt-5 mb-0">Have already an account?
                            <a type="button" onclick="toggleSignInRegister()" class="fw-bold text-body"><u>Login here</u></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Section: Register -->

<script src="../../assets/js/signIn.js"></script>
<script src="../../assets/js/register.js"></script>
<script src="../../assets/js/components/forgetPassword.js"></script>