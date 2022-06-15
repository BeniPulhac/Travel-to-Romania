//  Variables
const blurReset = document.getElementById('resetPwdBlur');
const changePasswordTab = document.getElementById('changePasswordTab');
const changePasswordBtn = document.getElementById('changePasswordBtn');
const selectorInput = document.getElementById('selectorInput');
const tokenInput = document.getElementById('tokenInput');
const passwordChange = document.getElementById('passwordChange');
const passwordChangeError = document.getElementById('passwordChangeError');
const passwordChange2 = document.getElementById('passwordChange2');
const passwordChange2Error = document.getElementById('passwordChange2Error');
const resetPwdResponse = document.getElementById('resetPwdResponse');


//  Events
if(changePasswordTab) {
    changePasswordBtn.addEventListener('click', () => {
        resetPassword();
    }, false);
}


//  Ajax
function resetPassword() {
    let form = new FormData();
    form.append('selector', selectorInput.value);
    form.append('token', tokenInput.value);
    form.append('passwordChange', passwordChange.value);
    form.append('passwordChange2', passwordChange2.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/resetPassword.backend.php', true);

    xhr.onload = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = xhr.responseText;
            response = JSON.parse(response);
            emptyFieldsResetPwd();

            if(typeof response == 'object') {
                for(keys in response) {
                    displayErrorsResetPwd(response);

                    setTimeout(function () {
                        if(response.status == 'Success') {
                            if(!changePasswordTab.classList.contains('hide-element')) {
                                changePasswordTab.classList.toggle('hide-element');
                                blurReset.classList.toggle('blur');
                            }
                        }
                    }, 3000);

                }
            } else if(typeof response == 'string') {
                 sendTokenToView();
            }
        }
    }
    xhr.send(form);
}

function sendTokenToView() {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../resetPassword.php', true);
    xhr.send();
}


//  Functions
function emptyFieldsResetPwd() {
    passwordChangeError.innerText = '';
    passwordChange2Error.innerText = '';
    resetPwdResponse.innerText = '';
}

function displayErrorsResetPwd(response) {
    if(response.passwordChange != '') {
        passwordChangeError.innerText = response.passwordChange;
    }

    if(response.passwordChange2 != '') {
        passwordChange2Error.innerText = response.passwordChange2;
    }

    if(response.passwordMatch != '') {
        passwordChange2Error.innerText = response.passwordMatch;
    }

    if(response.token != '') {
        passwordChange2Error.innerText = '';
        passwordChange.innerText = response.token;
    }

    if(response.status != '') {
        emptyFieldsResetPwd();
        resetPwdResponse.innerText = response.status;
    }
}