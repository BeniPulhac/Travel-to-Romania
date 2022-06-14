//  Variables
const emailSentToken2 = document.getElementById('emailSentToken2');
const emailSentError2 = document.getElementById('emailSentError2');
const resetPassSuccess2 = document.getElementById('resetPassSuccess2');

//  Events
if (sendEmailTab2) {
    sendPassword2.addEventListener('click', () => {
        sendEmailAjax2();
    });
}

//  Ajax
function sendEmailAjax2() {
    let myForm = new FormData();
    myForm.append(emailSentToken2.name, emailSentToken2.value);


    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/forgetPassword.php', true);

    xhr.onload = function () {
        let response = xhr.responseText;
        response = JSON.parse(response);
        emailSentError2.innerHTML = '';

        if(typeof response == 'object') {
            resetPassSuccess2.innerHTML = '';
            emailSentError2.innerText = response.emailError;
        } else if(typeof response == 'string') {
            if(response == 'Email sent. Check your email') {
                resetPassSuccess2.classList.add('text-success');
                resetPassSuccess2.classList.remove('text-danger');
                resetPassSuccess2.innerHTML = response;

            } else {
                resetPassSuccess2.classList.remove('text-success');
                resetPassSuccess2.classList.add('text-danger');
                resetPassSuccess2.innerHTML = response;
            }
        }
    }

    xhr.send(myForm);
}