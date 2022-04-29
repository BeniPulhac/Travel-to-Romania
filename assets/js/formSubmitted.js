
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

// -----------------Show Input-----------------

// function myFunction () {
//     var contactForm = document.getElementById('myLogIn');
//     var text = "";
//     var i;
//
//     for (i = 0; i < contactForm.length - 1; i++) {
//             text = text + contactForm.elements[i].value + '\n';
//     }
//
//     if(text != 0){
//         alert(text);
//     } else {
//         alert('Form Empty');
//     }
// }


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