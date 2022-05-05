
//----------------------Sign in----------------------
//-----------------Display/Close Form-----------------

const btn = document.getElementById('showForm');
const goToRegister = document.getElementById('goToRegister');
const myLogIn = document.getElementById('myLogIn');

goToRegister.addEventListener('click', () => {
    const form = document.getElementById('formContent');

    if(getComputedStyle(form).display === 'block') {
        form.style.display = 'none';
        btnRegister.click();
        // myLogIn.reset();
        emailErrorSignIn.innerText = '';
        passwordErrorSignIn.innerText = '';
        sendSignIn.innerText = '';
    }
});

btn.addEventListener('click', () => {
    const form = document.getElementById('formContent');

    if (getComputedStyle(form).display === 'none') {
        form.style.display = 'block';
        document.getElementById('testBlur').classList.add('blur');
    } else {
        form.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myLogIn.reset();
        emailErrorSignIn.innerText = '';
        passwordErrorSignIn.innerText = '';
        sendSignIn.innerText = '';
    }
})

// -----------------Close Form-----------------
const btnClose = document.getElementById('closeForm');

btnClose.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContent');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myLogIn.reset();
        emailErrorSignIn.innerText = '';
        passwordErrorSignIn.innerText = '';
        sendSignIn.innerText = '';
    }
})

//----------------------Register-----------------------
//-----------------Display/Close Form-----------------
const btnRegister = document.getElementById('showRegister');
const goToLogIn = document.getElementById('goToLogIn');

goToLogIn.addEventListener('click', () => {
    const form = document.getElementById('formContentRegister');

   if(getComputedStyle(form).display === 'block') {
       form.style.display = 'none';
       btn.click();
   }
});

btnRegister.addEventListener('click', () => {
    const form = document.getElementById('formContentRegister');

    if (getComputedStyle(form).display === 'none') {
        form.style.display = 'block';
        document.getElementById('testBlur').classList.add('blur');
    } else {
        form.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
    }
})

//---------------------Close Form---------------------

const btnCloseRegister = document.getElementById('closeFormRegister');

btnCloseRegister.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContentRegister');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
    }
})



//----------------------------------------------------------------------
//---------------------------Take input---------------------------
//---------------------------Sign in---------------------------

const submitBtnSignIn = document.getElementById('submitBtnSignIn');
const emailSignIn = document.getElementById('emailSignIn');
const emailErrorSignIn = document.getElementById('emailErrorSignIn');
const passwordSignIn = document.getElementById('passwordSignIn');
const passwordErrorSignIn = document.getElementById('passwordErrorSignIn');
const sendSignIn = document.getElementById('sendSignIn');

submitBtnSignIn.addEventListener('click', function () {
   submitForm();
});

function submitForm () {
    let formDataSignIn = new FormData();
    formDataSignIn.append('emailSignIn', emailSignIn.value);
    formDataSignIn.append('passwordSignIn', passwordSignIn.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../includes/signInFormData.php', true);
    xhr.send(formDataSignIn);

    xhr.onload = function () {
        let responseSignIn = JSON.parse(xhr.responseText);

        let statusSignIn = true;
        for (keys in responseSignIn) {
            if (responseSignIn[keys].isErrorSignIn === true) {
                statusSignIn = false;
                checkForErrors(responseSignIn);
                sendSignIn.innerText = '';

                if(responseSignIn[keys].errorMsgSignIn.isPasswordError === true) {

                    for (index in responseSignIn[keys].errorMsgSignIn) {
                        passwordErrorSignIn.innerText = '';
                        checkPasswordForErrors(responseSignIn[keys].errorMsgSignIn);
                    }
                }
            }
        }

        if (statusSignIn === true) {
            emailErrorSignIn.innerText = '';
            passwordErrorSignIn.innerText = '';
            sendSignIn.innerText = 'Success';
        }
    }
}

function checkForErrors(errors) {
    if(errors.emailSignIn) {
        emailErrorSignIn.innerText = errors.emailSignIn.errorMsgSignIn;
    }
}

function checkPasswordForErrors(passError) {
    if(passError.customError) {

        passwordErrorSignIn.innerText = passError.customError;

    } else if(passError.uppercase) {

        passwordErrorSignIn.innerText = passError.uppercase;

    } else if(passError.lowercase) {

        passwordErrorSignIn.innerText = passError.lowercase;

    } else if(passError.number) {

        passwordErrorSignIn.innerText = passError.number;

    }

    // else if(passError.specialChars) {
    //
    //     passwordErrorSignIn.innerText = passError.specialChars;
    //
    // }
}



//------------------------------Register------------------------------
