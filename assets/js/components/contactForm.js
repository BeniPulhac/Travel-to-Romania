//  Variables
const subjectForm = document.getElementById('subjectForm');
const subjectFormError = document.getElementById('subjectFormError');

const emailForm = document.getElementById('emailForm');
const emailFormError = document.getElementById('emailFormError');

const textAreaForm = document.getElementById('textAreaForm');
const textAreaFormError = document.getElementById('textAreaFormError');

const formSuccess = document.getElementById('formSuccess');
const submitForm = document.getElementById('submitForm');

//  Events
submitForm.addEventListener('click', function() {
    formHandling();
});


//  Functions
function formHandling() {
    let formData = new FormData();
    formData.append('subjectForm', subjectForm.value);
    formData.append('emailForm', emailForm.value);
    formData.append('textAreaForm', textAreaForm.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../views/formTemporary/formOutput.php', true);
    xhr.onload = function() {
        let response = xhr.responseText;
        response = JSON.parse(response);

        emptyFormFields();

        for(keys in response) {
            if(response['formCheck'] === false) {
                displayErrors(keys, response[keys]);
            } else {
                emptyFormFields();
                formSuccess.innerHTML = 'Success';
            }
        }


        // for(keys in response) {
        //
        //     if(response['formCheck'] === false) {
        //         delete response['formCheck'];
        //         displayErrors(keys, response[keys])
        //     } else {
        //         emptyFormFields();
        //         formSuccess.innerHTML = 'Success';
        //     }
        //
        // }

    }
    xhr.send(formData);
}

function emptyFormFields() {
    subjectFormError.innerHTML = '';
    emailFormError.innerHTML = '';
    textAreaFormError.innerHTML = '';

}

function displayErrors(id, errorMsg) {
    console.log(errorMsg['error']);
    let errorElement = document.getElementById(id + 'Error');
    errorElement.innerHTML = errorMsg['error'];
}
