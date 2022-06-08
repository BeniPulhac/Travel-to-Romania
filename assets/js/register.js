//------------------------------Register------------------------------
//  Variables
const submitBtnRegister = document.getElementById('submitBtnRegister');
//First Name
const firstNameRegister = document.getElementById('firstNameRegister');
const firstNameRegisterError = document.getElementById('firstNameRegisterError');
//Last Name
const lastNameRegister = document.getElementById('lastNameRegister');
const lastNameRegisterError = document.getElementById('lastNameRegisterError');
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

//  Events
submitBtnRegister.addEventListener('click', function () {
   submitFormRegister();
});

//  Ajax
function submitFormRegister() {
    let formDataRegister = new FormData();
    formDataRegister.append('firstNameRegister', firstNameRegister.value);
    formDataRegister.append('lastNameRegister', lastNameRegister.value);
    formDataRegister.append('emailRegister', emailRegister.value);
    formDataRegister.append('passwordRegister', passwordRegister.value);
    formDataRegister.append('samePasswordRegister', samePasswordRegister.value);
    formDataRegister.append('testCheckMark', testCheckMark.checked);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/registerFormData.php', true);
    xhr.send(formDataRegister);

    xhr.onload = function() {
        let responseRegister = xhr.responseText;
        responseRegister = JSON.parse(responseRegister);
        emptyFields();

        // errors
        if (typeof responseRegister == 'object') {
            sendRegister.innerText = '';
            for (error in responseRegister) {
                displayErrorMessage(error, responseRegister[error]);
            }
        } else if(typeof responseRegister == 'string') {

                sendRegister.innerText = 'Success';
                setTimeout(emptyFieldsRegisterValue, 3000);

        }
    }
}

//  Functions
function displayErrorMessage(id, errorMessage) {
    let errorElement = document.getElementById(id + 'Error');
    errorElement.innerText = errorMessage;
}

function emptyFields() {
    firstNameRegisterError.innerText = '';
    lastNameRegisterError.innerText = '';
    emailRegisterError.innerText = '';
    passwordRegisterError.innerText = '';
    samePasswordRegisterError.innerText = '';
    testCheckMarkError.innerText = '';
}

function emptyFieldsRegisterValue() {
    firstNameRegister.value = '';
    lastNameRegister.value = '';
    emailRegister.value = '';
    passwordRegister.value = '';
    samePasswordRegister.value = '';
    testCheckMark.checked = 0;
    sendRegister.innerText = '';
}
