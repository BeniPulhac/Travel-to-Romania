const submitBtn = document.getElementById('submitBtn');
const form = document.getElementById('reviewForm');
const name = document.getElementById('name');
const nameError = document.getElementById('nameError');
const email = document.getElementById('email');
const emailError = document.getElementById('emailError');
const rate = document.getElementById('rate');
const rateError = document.getElementById('rateError');
const review = document.getElementById('review');



submitBtn.addEventListener('click', function () {
    checkName();
    checkEmail();
    checkRate();
    checkReview();
});


// function getFile(str) {
//     if(str.length == 0) {
//         document.getElementById('nameError').innerHTML = "";
//         return;
//     } else {
//         let xhr = new XMLHttpRequest();
//         xhr.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById('nameError').innerHTML = this.responseText;
//             }
//         };
//         xhr.open("POST", 'views/components/reviewFormData/php' + str, true);
//         xhr.send();
//     }
// }



function checkName() {
    // const nameValue = name.value;
    // const emailValue = email.value;
    // const rateValue = rate.value;
    // const reviewValue = review.value;

    if(name.value === '') {
        nameError.innerText = '*Name is required';
    } else if(name.value.match("^[a-zA-Z-' ]")) {
        //transfer the input to php?
        nameError.innerText = '';
        console.log('Name sent');
        name.value = '';

        } else {
        nameError.innerText = '*Only letters and white space allowed';

        }
}

function checkEmail () {
    if (email.value === '') {
        emailError.innerText = '*Email is required';
    } else if (email.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        emailError.innerText = '';
        console.log('Email sent');
        email.value = '';
    } else {
        emailError.innerText = 'Invalid email format';
    }
}

function checkRate () {
    if(rate.value === '') {
        rateError.innerText = 'Rate is required'
    } else {
        rateError.innerText = '';
        console.log('Rate sent');
        rate.value = '';
    }
}

function checkReview () {
    if(review.value) {
        console.log('Comment sent');
        review.value = '';
    }
}

//Validate the value
// function validate() {
//     name.value.trim();
//     name.value.replace(new RegExp("\\\\", "g"), "");
//     // name.value = "";
//
//     return name.value;
// }