//  Events
forgetPassword.addEventListener('click', function() {
    if(sendEmailTab.classList.contains('hide-element')) {
        formSignIn.classList.toggle('hide-element');
        sendEmailTab.classList.toggle('hide-element');
    }
}, false);


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
    offCanvasMenu.click();
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
    } else if(!sendEmailTab.classList.toggle('hide-element')) {
        emptyErrorsSignIn();
        emptyErrorsRegister();
        sendEmailTab.classList.toggle('hide-element');
        blur.classList.toggle('blur');
    }
}

//
const popups = [...document.getElementsByClassName('popup')];

window.addEventListener('click', ({ target }) => {
    const popup = target.closest('.popup');
    const clickedOnClosedPopup = popup && !popup.classList.contains('show');

    popups.forEach(p => p.classList.remove('show'));

    if (clickedOnClosedPopup) popup.classList.add('show');
});


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