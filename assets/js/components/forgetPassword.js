//  Variables
//Send email
const emailSentToken = document.getElementById('emailSentToken');
const emailSentError = document.getElementById('emailSentError');
const resetPassSuccess = document.getElementById('resetPassSuccess');

//Change password
const passwordChange = document.getElementById('passwordChange');
const passwordChangeRetype = document.getElementById('passwordChangeRetype');

//  Events
sendPassword.addEventListener('click', () => {
   sendEmailAJAX();
});

//  Ajax
function sendEmailAJAX() {
    let myForm = new FormData();
    myForm.append(emailSentToken.name, emailSentToken.value);


    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/forgetPassword.php', true);

    xhr.onload = function () {
        let response = xhr.responseText;
        response = JSON.parse(response);
        emailSentError.innerHTML = '';

        if(typeof response == 'object') {
            resetPassSuccess.innerHTML = '';
            emailSentError.innerText = response.emailError;
        } else if(typeof response == 'string') {
            resetPassSuccess.innerHTML = response;
        }
    }

    xhr.send(myForm);
}

//  Functions
