
//----------------------Sign in----------------------
//-----------------Display/Close Form-----------------

const btn = document.getElementById('showForm');
const goToRegister = document.getElementById('goToRegister');
const myLogIn = document.getElementById('myLogIn');

goToRegister.addEventListener('click', () => {
    const form = document.getElementById('formContent');

    if(getComputedStyle(form).display === 'block') {
        form.style.display = 'none';
        btnRegister.click();
        // myLogIn.reset();
        emailErrorSignIn.innerText = '';
        passwordErrorSignIn.innerText = '';
        sendSignIn.innerText = '';

    }
});

btn.addEventListener('click', () => {
    const form = document.getElementById('formContent');
    const formRegister = document.getElementById('formContentRegister');

    if (getComputedStyle(form).display === 'none') {
        if(getComputedStyle(formRegister).display === 'block') {
            formRegister.style.display = 'none';
            document.getElementById('testBlur').classList.remove('blur');
            // myFormRegister.reset();
            firstNameRegisterError.innerText = '';
            lasttNameRegisterError.innerText = '';
            emailErrorRegister.innerText = '';
            passwordErrorRegister.innerText = '';
            samePasswordRegisterError.innerText = '';
            sendRegister.innerText = '';
        } else {
            form.style.display = 'block';
            document.getElementById('testBlur').classList.add('blur');
        }

    } else {
        form.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myLogIn.reset();
        emailErrorSignIn.innerText = '';
        passwordErrorSignIn.innerText = '';
        sendSignIn.innerText = '';
    }
})

// -----------------Close Form-----------------
const btnClose = document.getElementById('closeForm');

btnClose.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContent');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myLogIn.reset();
        emailErrorSignIn.innerText = '';
        passwordErrorSignIn.innerText = '';
        sendSignIn.innerText = '';
    }
})

//----------------------Register-----------------------
//-----------------Display/Close Form-----------------
const btnRegister = document.getElementById('showRegister');
const goToLogIn = document.getElementById('goToLogIn');

goToLogIn.addEventListener('click', () => {
    const form = document.getElementById('formContentRegister');

   if(getComputedStyle(form).display === 'block') {
       form.style.display = 'none';
       btn.click();
       // myFormRegister.reset();
       firstNameRegisterError.innerText = '';
       lasttNameRegisterError.innerText = '';
       emailErrorRegister.innerText = '';
       passwordErrorRegister.innerText = '';
       samePasswordRegisterError.innerText = '';
       sendRegister.innerText = '';
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
        firstNameRegisterError.innerText = '';
        lasttNameRegisterError.innerText = '';
        emailErrorRegister.innerText = '';
        passwordErrorRegister.innerText = '';
        samePasswordRegisterError.innerText = '';
        sendRegister.innerText = '';
    }
})

//---------------------Close Form---------------------

const btnCloseRegister = document.getElementById('closeFormRegister');

btnCloseRegister.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContentRegister');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
        // myFormRegister.reset();
        firstNameRegisterError.innerText = '';
        lasttNameRegisterError.innerText = '';
        emailErrorRegister.innerText = '';
        passwordErrorRegister.innerText = '';
        samePasswordRegisterError.innerText = '';
        sendRegister.innerText = '';
    }
})

