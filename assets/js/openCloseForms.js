//  Events
forgetPassword.addEventListener('click', function() {
    if(sendEmailTab.classList.contains('hide-element')) {
        formSignIn.classList.toggle('hide-element');
        sendEmailTab.classList.toggle('hide-element');
    }
}, false);

// sendPassword.addEventListener('click', function() {
//     if(!sendEmailTab.classList.contains('hide-element')) {
//         sendEmailTab.classList.toggle('hide-element');
//         blur.classList.toggle('blur');
//     }
// }, false);

//  Functions
//  Toggle SignIn - Register
function toggleSignInRegister() {
    if(formRegister.classList.contains('hide-element')) {
        emptyErrorsSignIn();
        emptyErrorsRegister();
        formRegister.classList.toggle('hide-element');
        formSignIn.classList.toggle('hide-element');
    } else {
        emptyErrorsSignIn();
        emptyErrorsRegister();
        formSignIn.classList.toggle('hide-element');
        formRegister.classList.toggle('hide-element');
    }
}

//  Close Forms
function closeForms() {
    if(!formSignIn.classList.contains('hide-element')) {
        emptyErrorsSignIn();
        emptyErrorsRegister();
        formSignIn.classList.toggle('hide-element');
        blur.classList.toggle('blur');
    } else if(!formRegister.classList.contains('hide-element')) {
        emptyErrorsSignIn();
        emptyErrorsRegister();
        formRegister.classList.toggle('hide-element');
        blur.classList.toggle('blur');
    }
}

//  Forget Password
// function forgetPassword() {
//     if(sendEmailTab.classList.contains('hide-element')) {
//         sendEmailTab.classList.toggle('hide-element');
//     }
// }

//  Clear Forms
function emptyErrorsSignIn() {
    emailSignIn.value = '';
    emailSignInError.innerText = '';
    passwordSignIn.value = '';
    passwordSignInError.innerText = '';
    sendSignIn.innerText = '';
}

function emptyErrorsRegister() {
    firstNameRegister.value = '';
    firstNameRegisterError.innerText = '';
    lastNameRegister.value = '';
    lastNameRegisterError.innerText = '';
    emailRegister.value = '';
    emailRegisterError.innerText = '';
    passwordRegister.value = '';
    passwordRegisterError.innerText = '';
    samePasswordRegister.value = '';
    samePasswordRegisterError.innerText = '';
    testCheckMark.checked = false;
    testCheckMarkError.innerText = '';
    sendRegister.innerText = '';
}