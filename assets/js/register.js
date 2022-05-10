//------------------------------Register------------------------------

const submitBtnRegister = document.getElementById('submitBtnRegister');
//First Name
const firstNameRegister = document.getElementById('firstNameRegister');
const firstNameRegisterError = document.getElementById('firstNameRegisterError');
//Last Name
const lastNameRegister = document.getElementById('lastNameRegister');
const lasttNameRegisterError = document.getElementById('lastNameRegisterError');
//Email
const emailRegister = document.getElementById('emailRegister');
const emailErrorRegister = document.getElementById('emailRegisterError');
//Password
const passwordRegister = document.getElementById('passwordRegister');
const passwordErrorRegister = document.getElementById('passwordRegisterError');
//Repeat Password
const samePasswordRegister = document.getElementById('samePasswordRegister');
const samePasswordRegisterError = document.getElementById('samePasswordRegisterError');
const sendRegister = document.getElementById('sendRegister');

submitBtnRegister.addEventListener('click', function () {
   submitFormRegister();
});

function submitFormRegister() {
    let formDataRegister = new FormData();
    formDataRegister.append('firstNameRegister', firstNameRegister.value);
    formDataRegister.append('lastNameRegister', lastNameRegister.value);
    formDataRegister.append('emailRegister', emailRegister.value);
    formDataRegister.append('passwordRegister', passwordRegister.value);
    formDataRegister.append('samePasswordRegister', samePasswordRegister.value);

    let file = new XMLHttpRequest();
    file.open('POST', '../includes/registerFormData.php', true);
    file.send(formDataRegister);

    file.onload = function() {
        let responseRegister = JSON.parse(file.responseText);

        let statusRegister = true;
        passwordErrorRegister.innerText = '';

        for (keys in responseRegister) {
            if (responseRegister[keys].isErrorRegister === true) {
                statusRegister = false;
                firstNameRegisterError.innerText = responseRegister.firstNameRegister.errorMsgRegister;
                lasttNameRegisterError.innerText = responseRegister.lastNameRegister.errorMsgRegister;
                emailErrorRegister.innerText = responseRegister.emailRegister.errorMsgRegister;

                sendRegister.innerText = '';

                if (responseRegister[keys].errorMsgRegister.isPasswordError === true) {
                    for(index in responseRegister[keys].errorMsgRegister) {
                        passwordErrorRegister.innerText = '';
                        checkPasswordForErrors(responseRegister[keys].errorMsgRegister);
                    }
                }
            }

            samePasswordRegisterError.innerText = responseRegister.samePasswordRegister.errorMsgRegister;
            if (statusRegister === true) {
                firstNameRegisterError.innerText = '';
                lasttNameRegisterError.innerText = '';
                emailErrorRegister.innerText = '';
                passwordErrorRegister.innerText = '';
                samePasswordRegisterError.innerText = '';
                sendRegister.innerText = 'Success';
            }
        }

        // if (statusRegister === true) {
        //     firstNameRegisterError.innerText = '';
        //     lasttNameRegisterError.innerText = '';
        //     emailErrorRegister.innerText = '';
        //     passwordErrorRegister.innerText = '';
        //     samePasswordRegisterError.innerText = '';
        //     sendRegister.innerText = 'Success';
        // }
    }
}

function checkPasswordForErrors(errors) {

    if(errors.customError) {

        passwordErrorRegister.innerText = errors.customError;


    } else if(errors.uppercase) {

        passwordErrorRegister.innerText = errors.uppercase;

    } else if(errors.lowercase) {

        passwordErrorRegister.innerText = errors.lowercase;

    } else if(errors.number) {

        passwordErrorRegister.innerText = errors.number;

    }
}

