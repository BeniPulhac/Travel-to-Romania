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