

// function myFunction() {
//     var a = document.getElementById('myForm').elements[0].value;
//     var b = document.getElementById('myForm').elements[1].value;
//     var c = document.getElementById('myForm').elements[2].value;
//     var d = document.getElementById('myForm').elements[3].value;
//
//     if(a == 0 && b == 0 && c == 0 && d == 0){
//         alert('Form Empty');
//     }else {
//         document.getElementById('myForm').submit(alert(a + '\n' + b + '\n' + c + '\n' + d));
//     }
// }



// -----------------Display/Close Form-----------------

const btn = document.getElementById('showForm');


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

function myFunction () {
    var contactForm = document.getElementById('myForm');
    var text = "";
    var i;

    for (i = 0; i < contactForm.length - 1; i++) {
            text = text + contactForm.elements[i].value + '\n';
    }

    if(text != 0){
        alert(text);
    } else {
        alert('Form Empty');
    }
}
