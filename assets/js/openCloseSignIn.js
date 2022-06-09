
//----------------------Sign in----------------------
//-----------------Display/Close Form-----------------

const btn = document.getElementById('showForm');
const goToRegister = document.getElementById('goToRegister');
const myLogIn = document.getElementById('myLogIn');
const formContent = document.getElementById('formContent');
const forgetPassword = document.getElementById('forgetPassword');
const sendEmailTab = document.getElementById('sendEmailTab');
const sendPassword = document.getElementById('sendPassword');
const changePasswordTab = document.getElementById('changePasswordTab');
const changePasswordBtn = document.getElementById('changePasswordBtn');
const btnRegister = document.getElementById('showRegister');
const goToLogIn = document.getElementById('goToLogIn');

goToRegister.addEventListener('click', () => {
    const form = document.getElementById('formContent');

    if(getComputedStyle(form).display === 'block') {
        form.style.display = 'none';
        btnRegister.click();
        // myLogIn.reset();
        emptyErrorsSignIn();
    }
});

function showForm() {
    const form = document.getElementById('formContent');
    const formRegister = document.getElementById('formContentRegister');

    if (getComputedStyle(form).display === 'none') {
        if(getComputedStyle(formRegister).display === 'block') {
            formRegister.style.display = 'none';
            document.getElementById('testBlur').classList.remove('blur');
            // myFormRegister.reset();
            emptyErrorsRegister();
        } else {
            form.style.display = 'block';
            document.getElementById('testBlur').classList.add('blur');
        }

    } else {
        form.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myLogIn.reset();
        emptyErrorsSignIn();
    }
}

if(btn) {
    btn.addEventListener('click', () => {
        const form = document.getElementById('formContent');
        const formRegister = document.getElementById('formContentRegister');

        if (getComputedStyle(form).display === 'none') {
            if(getComputedStyle(formRegister).display === 'block') {
                formRegister.style.display = 'none';
                document.getElementById('testBlur').classList.remove('blur');
                // myFormRegister.reset();
                emptyErrorsRegister();
            } else {
                form.style.display = 'block';
                document.getElementById('testBlur').classList.add('blur');
            }

        } else {
            form.style.display = 'none';
            document.getElementById('testBlur').classList.remove('blur');
            // myLogIn.reset();
            emptyErrorsSignIn();
        }
    });
}


// -----------------Close Form-----------------
const btnClose = document.getElementById('closeForm');

btnClose.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContent');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myLogIn.reset();
        emptyErrorsSignIn();
    }
});

//----------------------Send Password-----------------------
forgetPassword.addEventListener('click', () => {
    formContent.style.display = 'none';
    sendEmailTab.style.display = 'block';
    // sendPassword.addEventListener('click', ()=>{
    //     setTimeout(function () {
    //         sendEmailTab.style.display = 'none';
    //         document.getElementById('testBlur').classList.remove('blur');
    //     }, 3000);
    // });
});

//----------------------Change Password-----------------------
changePasswordBtn.addEventListener('click', ()=> {
    if(changePasswordTab.style.display == 'block') {
        changePasswordTab.style.display = 'none'
        document.getElementById('testBlur').classList.remove('blur');
    }
});

//----------------------Register-----------------------
//-----------------Display/Close Form-----------------


goToLogIn.addEventListener('click', () => {
    const form = document.getElementById('formContentRegister');

   if(getComputedStyle(form).display === 'block') {
       form.style.display = 'none';
       btn.click();
       // myFormRegister.reset();
       emptyErrorsRegister();
   }
});

btnRegister.addEventListener('click', () => {
    const formRegister = document.getElementById('formContentRegister');

    if (getComputedStyle(formRegister).display === 'none') {
        formRegister.style.display = 'block';
        document.getElementById('testBlur').classList.add('blur');
    } else {
        formRegister.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myFormRegister.reset();
        emptyErrorsRegister();
    }
});

//---------------------Close Form---------------------

const btnCloseRegister = document.getElementById('closeFormRegister');

btnCloseRegister.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContentRegister');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myFormRegister.reset();
        emptyErrorsRegister();
    }
});

function emptyErrorsSignIn() {
    emailSignIn.value = '';
    emailSignInError.innerText = '';
    passwordSignIn.value = '';
    passwordSignInError.innerText = '';
    sendSignIn.innerText = '';
}

function emptyErrorsRegister() {
    firstNameRegister.value = '';
    firstNameRegisterError.innerText = '';
    lastNameRegister.value = '';
    lastNameRegisterError.innerText = '';
    emailRegister.value = '';
    emailRegisterError.innerText = '';
    passwordRegister.value = '';
    passwordRegisterError.innerText = '';
    samePasswordRegister.value = '';
    samePasswordRegisterError.innerText = '';
    testCheckMark.checked = false;
    testCheckMarkError.innerText = '';
    sendRegister.innerText = '';
}