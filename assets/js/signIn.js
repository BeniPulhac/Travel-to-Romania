
//----------------------Sign in----------------------
//-----------------Display/Close Form-----------------

const btn = document.getElementById('showForm');
const goToRegister = document.getElementById('goToRegister');

goToRegister.addEventListener('click', () => {
    const form = document.getElementById('formContent');

    if(getComputedStyle(form).display === 'block') {
        form.style.display = 'none';
        btnRegister.click();
    }
});

btn.addEventListener('click', () => {
    const form = document.getElementById('formContent');

    if (getComputedStyle(form).display === 'none') {
        form.style.display = 'block';
        document.getElementById('testBlur').classList.add('blur');
    } else {
        form.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
    }
})

// -----------------Close Form-----------------
const btnClose = document.getElementById('closeForm');

btnClose.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContent');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
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
   }
});

btnRegister.addEventListener('click', () => {
    const form = document.getElementById('formContentRegister');

    if (getComputedStyle(form).display === 'none') {
        form.style.display = 'block';
        document.getElementById('testBlur').classList.add('blur');
    } else {
        form.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
    }
})

//---------------------Close Form---------------------

const btnCloseRegister = document.getElementById('closeFormRegister');

btnCloseRegister.addEventListener('click', () => {
    const toCloseForm = document.getElementById('formContentRegister');

    if(toCloseForm.style.display === 'block') {
        toCloseForm.style.display = 'none';
        document.getElementById('testBlur').classList.remove('blur');
    }
})



//----------------------------------------------------------------------
//---------------------------Take input---------------------------
//---------------------------Sign in---------------------------

const submitBtnS = document.getElementById('submitBtnS');
const emailS = document.getElementById('emailS');
const emailErrorS = document.getElementById('emailErrorS');
const passwordS = document.getElementById('passwordS');
const passwordErrorS = document.getElementById('passwordErrorS');

submitBtnS.addEventListener('click', function () {
   submitForm();
});

function submitForm () {

}