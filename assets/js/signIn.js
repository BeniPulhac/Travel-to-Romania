//---------------------------Take input---------------------------
//---------------------------Sign in---------------------------

const submitBtnSignIn = document.getElementById('submitBtnSignIn');
//Email
const emailSignIn = document.getElementById('emailSignIn');
const emailSignInError = document.getElementById('emailSignInError');
//Password
const passwordSignIn = document.getElementById('passwordSignIn');
const passwordSignInError = document.getElementById('passwordSignInError');
//success
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
        emptyFieldsSignIn();

        //errors
        if(typeof responseSignIn == 'object') {
            responseSignIn.innerText = '';

            for(index in responseSignIn) {
                emailSignInError.innerText = responseSignIn.emailSignIn;
                passwordSignInError.innerText = responseSignIn.passwordSignIn;
            }
        } else if(typeof responseSignIn == 'string') {
            sendSignIn.innerText = 'Success';
        }
    }
}


function emptyFieldsSignIn() {
    emailSignInError.innerText = '';
    passwordSignInError.innerText = '';
}
