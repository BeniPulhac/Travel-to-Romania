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
const emailRegisterError = document.getElementById('emailRegisterError');
//Password
const passwordRegister = document.getElementById('passwordRegister');
const passwordRegisterError = document.getElementById('passwordRegisterError');
//Repeat Password
const samePasswordRegister = document.getElementById('samePasswordRegister');
const samePasswordRegisterError = document.getElementById('samePasswordRegisterError');
//Check Mark
const testCheckMark = document.getElementById('testCheckMark');
const testCheckMarkError = document.getElementById('testCheckMarkError');

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
    formDataRegister.append('testCheckMark', testCheckMark.checked);

    let file = new XMLHttpRequest();
    file.open('POST', '../includes/registerFormData.php', true);
    file.send(formDataRegister);

    file.onload = function() {
        let responseRegister = file.responseText;
        responseRegister = JSON.parse(responseRegister);
        // errors
        if (typeof responseRegister == 'object') {
            emptyFields();
            for (error in responseRegister) {
                displayErrorMessage(error, responseRegister[error]);
            }
        } else if(typeof responseRegister == 'string') {

        }
        // let responseRegister = JSON.parse(file.responseText);
        //
        // checkingBackEnd(responseRegister);

        // let statusRegister = true;
        // passwordErrorRegister.innerText = '';
        //
        // for (keys in responseRegister) {
        //     if (responseRegister[keys].isErrorRegister === true) {
        //         statusRegister = false;
        //         firstNameRegisterError.innerText = responseRegister.firstNameRegister.errorMsgRegister;
        //         lasttNameRegisterError.innerText = responseRegister.lastNameRegister.errorMsgRegister;
        //         emailErrorRegister.innerText = responseRegister.emailRegister.errorMsgRegister;
        //         samePasswordRegisterError.innerText = responseRegister.samePasswordRegister.errorMsgRegister;
        //         sendRegister.innerText = '';
        //
        //         if (responseRegister[keys].errorMsgRegister.isPasswordError === true) {
        //             for(index in responseRegister[keys].errorMsgRegister) {
        //                 passwordErrorRegister.innerText = '';
        //                 testCheckMarkError.innerText = '';
        //                 checkPasswordForErrors(responseRegister[keys].errorMsgRegister);
        //             }
        //         }
        //     }
        //
        //     // samePasswordRegisterError.innerText = responseRegister.samePasswordRegister.errorMsgRegister;
        //     // if (statusRegister === true) {
        //     //     // emptyFields();
        //     //     // firstNameRegisterError.innerText = '';
        //     //     // lasttNameRegisterError.innerText = '';
        //     //     // emailErrorRegister.innerText = '';
        //     //     // passwordErrorRegister.innerText = '';
        //     //     // samePasswordRegisterError.innerText = '';
        //     //     // testCheckMarkError.innerText = '';
        //     //     if(testCheckMark.checked) {
        //     //         // testCheckMarkError.innerText = '';
        //     //         firstNameRegisterError.innerText = '';
        //     //         lasttNameRegisterError.innerText = '';
        //     //         emailErrorRegister.innerText = '';
        //     //         passwordErrorRegister.innerText = '';
        //     //         samePasswordRegisterError.innerText = '';
        //     //         testCheckMarkError.innerText = '';
        //     //
        //     //         sendRegister.innerText = 'Success';
        //     //     } else {
        //     //         testCheckMarkError.innerText = 'You need to check first';
        //     //     }
        //     //
        //     // }
        //
        //     // samePasswordRegisterError.innerText = '';
        //     // if(responseRegister.samePasswordRegister.isErrorRegister === true) {
        //     //     // samePasswordRegisterError.innerText = responseRegister.samePasswordRegister.errorMsgRegister;
        //     // }
        // }
        // if (statusRegister === true) {
        //     // emptyFields();
        //     // firstNameRegisterError.innerText = '';
        //     // lasttNameRegisterError.innerText = '';
        //     // emailErrorRegister.innerText = '';
        //     // passwordErrorRegister.innerText = '';
        //     // samePasswordRegisterError.innerText = '';
        //     // testCheckMarkError.innerText = '';
        //     if(testCheckMark.checked) {
        //         // testCheckMarkError.innerText = '';
        //         firstNameRegisterError.innerText = '';
        //         lasttNameRegisterError.innerText = '';
        //         emailErrorRegister.innerText = '';
        //         passwordErrorRegister.innerText = '';
        //         samePasswordRegisterError.innerText = '';
        //         testCheckMarkError.innerText = '';
        //
        //         sendRegister.innerText = 'Success';
        //     } else {
        //         testCheckMarkError.innerText = 'You need to check first';
        //     }
        //
        // }
    }
}

function displayErrorMessage(id, errorMessage) {
    var errorElement = document.getElementById(id + 'Error');
    errorElement.innerText = errorMessage;
}

function checkingBackEnd(responseRegister) {
// console.log(typeof (responseRegister));

    if(responseRegister !== '') {
        // console.log('The array is empty i should not be here');
        for(keys in responseRegister) {
            if(responseRegister[keys] === firstNameRegister) {
                firstNameRegisterError = '';
                console.log('The array is empty i should not be here');
            } else {
                console.log('Im in the else case');
                firstNameRegisterError.innerHTML = responseRegister.firstNameRegister;
            }

            lasttNameRegisterError.innerHTML = responseRegister.lastNameRegister;
            emailErrorRegister.innerHTML = responseRegister.emailRegister;
            passwordErrorRegister.innerHTML = responseRegister.passwordRegister;
            samePasswordRegisterError.innerHTML = responseRegister.samePasswordRegister;
        }
    }

}


// function checkPasswordForErrors(errors) {
//     if(errors.customError) {
//
//         passwordErrorRegister.innerText = errors.customError;
//
//     } else if(errors.uppercase) {
//
//         passwordErrorRegister.innerText = errors.uppercase;
//
//     } else if(errors.lowercase) {
//
//         passwordErrorRegister.innerText = errors.lowercase;
//
//     } else if(errors.number) {
//
//         passwordErrorRegister.innerText = errors.number;
//
//     }
// }

function emptyFields() {
    firstNameRegisterError.innerText = '';
    lasttNameRegisterError.innerText = '';
    emailRegisterError.innerText = '';
    passwordRegisterError.innerText = '';
    samePasswordRegisterError.innerText = '';
    testCheckMarkError.innerText = '';
}