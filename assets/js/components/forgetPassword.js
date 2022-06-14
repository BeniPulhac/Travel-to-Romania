//  Variables
//Send email
const emailSentToken = document.getElementById('emailSentToken');
const emailSentError = document.getElementById('emailSentError');
const resetPassSuccess = document.getElementById('resetPassSuccess');

//  Events
if(sendEmailTab) {
    sendPassword.addEventListener('click', () => {
        sendEmailAJAX();
    });
}

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
            if(response == 'Email sent. Check your email') {
                resetPassSuccess.classList.add('text-success');
                resetPassSuccess.classList.remove('text-danger');
                resetPassSuccess.innerHTML = response;

            } else {
                resetPassSuccess.classList.remove('text-success');
                resetPassSuccess.classList.add('text-danger');
                resetPassSuccess.innerHTML = response;
            }
        }
    }

    xhr.send(myForm);
}

//  Functions
