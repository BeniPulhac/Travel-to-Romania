//  Variables
const formSignIn = document.getElementById('formSignIn');
const formRegister = document.getElementById('formRegister');
const sendEmailTab = document.getElementById('sendEmailTab');
const forgetPassword = document.getElementById('forgetPassword');
const sendPassword = document.getElementById('sendPassword');
const blur = document.getElementById('testBlur');

//  Functions
function showSignIn() {
    if (formSignIn.classList.contains('hide-element')) {
        formSignIn.classList.toggle('hide-element');
        blur.classList.toggle('blur');
    } else {
        formSignIn.classList.toggle('hide-element');
        blur.classList.toggle('blur');
    }
}

