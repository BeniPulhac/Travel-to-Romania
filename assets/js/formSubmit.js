

const submitBtn = document.getElementById('submitBtn');
const form = document.getElementById('reviewForm');
const name = document.getElementById('name');
const nameError = document.getElementById('nameError');
const email = document.getElementById('email');
const emailError = document.getElementById('emailError');
const rate = document.getElementById('rate');
const rateError = document.getElementById('rateError');
const review = document.getElementById('review');
const success = document.getElementById('success');



submitBtn.addEventListener('click', function () {
    submitForm();
    // checkName();
    // checkEmail();
    // checkRate();
    // checkReview();
});

function submitForm () {
    var formDataObj = new FormData();
    formDataObj.append('name', name.value);
    formDataObj.append('email', email.value);
    formDataObj.append('rate', rate.value);
    formDataObj.append('review', review.value);

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", '../includes/reviewFormData.php', true);
    xmlhttp.send(formDataObj);

    xmlhttp.onload = function() {
       let response = JSON.parse(xmlhttp.responseText);

       var successStatus = true;
        for (key in response) {
            if(response[key].isError === true){
                successStatus = false;
                checkError(response);
            }
        }

        if (successStatus == true){
            success.innerText = 'Form Sent';
        }
    }
}

function checkError(error) {

    //Check name errors
    if(error.name) {
        nameError.innerText = error.name.errorMessage;
    }

    //Check email erros
    if(error.email) {
        emailError.innerText = error.email.errorMessage;
    }
}


//------------------------------------------------------------------

// function checkName() {
//
//     if(name.value === '') {
//         nameError.innerText = '*Name is required';
//     } else if(name.value.match("^[a-zA-Z-' ]")) {
//         //transfer the input to php?
//         nameError.innerText = '';
//         console.log('Name sent');
//         name.value = '';
//
//         } else {
//         nameError.innerText = '*Only letters and white space allowed';
//
//         }
// }
//
// function checkEmail () {
//     if (email.value === '') {
//         emailError.innerText = '*Email is required';
//     } else if (email.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
//         emailError.innerText = '';
//         console.log('Email sent');
//         email.value = '';
//     } else {
//         emailError.innerText = 'Invalid email format';
//     }
// }
//
// function checkRate () {
//     if(rate.value === '') {
//         rateError.innerText = 'Rate is required'
//     } else {
//         rateError.innerText = '';
//         console.log('Rate sent');
//         rate.value = '';
//     }
// }
//
// function checkReview () {
//     if(review.value) {
//         console.log('Comment sent');
//         review.value = '';
//     }
// }

