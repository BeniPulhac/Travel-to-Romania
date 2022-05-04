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
            nameError.innerText = '';
            emailError.innerText = '';
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
