//  Variables
const formSignIn = document.getElementById('formSignIn');
const formRegister = document.getElementById('formRegister');
const sendEmailTab = document.getElementById('sendEmailTab');
const forgetPassword = document.getElementById('forgetPassword');
const sendPassword = document.getElementById('sendPassword');
const sendPassword2 = document.getElementById('sendPassword2');
// const blur = document.getElementById('testBlur');

const offCanvasMenu = document.getElementById('offCanvasMenu');

//  Events
function goToAccount() {
    location.href = "../../views/account.php";
}

//  Functions
function showSignIn() {
    offCanvasMenu.click();
    if (formSignIn.classList.contains('hide-element')) {
        formSignIn.classList.toggle('hide-element');
        blur.classList.toggle('blur');

        if(!sendEmailTab.classList.contains('hide-element')) {
            sendEmailTab.classList.toggle('hide-element');
            blur.classList.toggle('blur');
        }

        if(!formRegister.classList.contains('hide-element')) {
            formRegister.classList.toggle('hide-element');
            blur.classList.toggle('blur');
        }
    } else {
        formSignIn.classList.toggle('hide-element');
        blur.classList.toggle('blur');
    }
}

