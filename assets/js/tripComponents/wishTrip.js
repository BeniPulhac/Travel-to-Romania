//  Variables
//wishTrip page
const tripStart = document.getElementById('tripStart');
const tripStartError = document.getElementById('tripStartError');
const tripEnd = document.getElementById('tripEnd');
const tripEndError = document.getElementById('tripEndError');
const tripSubmitDates = document.getElementById('tripSubmitDates');
const resetTripDates = document.getElementById('resetTripDates');
const tripSubmitDatesError = document.getElementById('tripSubmitDatesError');

//  Events
tripSubmitDates.addEventListener('click', () => {
    tripSubmitDatesAjax();
}, false);


//  Ajax
function tripSubmitDatesAjax() {
    let formData = new FormData();
    formData.append('tripStart', tripStart.value);
    formData.append('tripEnd', tripEnd.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../includes/tripComponents/wishTrip.backend.php', true);

    xhr.onload = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = xhr.responseText;
            console.log(response);
            response = JSON.parse(response);
            tripDatesEmptyFields();

            if(typeof response == 'object') {
                tripDates(response);
            } else if(typeof response == 'string') {
                if(response === 'Success') {
                    window.location.href = '../../../views/tripComponents/tripStart.php';
                } else {
                    tripSubmitDatesError.innerText = response;
                }
            }

        }
    }
    xhr.send(formData);
}

//  Functions
function tripDates(response) {
    if(response['tripStart']) {
        tripStartError.innerText = response['tripStart'];
    }

    if(response['tripEnd']) {
        tripEndError.innerText = response['tripEnd'];
    }

    if(response['tripCheck']) {
        tripStartError.innerText = response['tripCheck'];
    }
}

function tripDatesEmptyFields() {
    tripStartError.innerText = '';
    tripEndError.innerText = '';
}
