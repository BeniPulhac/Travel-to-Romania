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
            response = JSON.parse(response);
            tripDatesEmptyFields();

            if(typeof response == 'object') {
                if(response.Success == true) {
                    tripDatesEmptyFields();
                    window.location.href = '../../../views/tripComponents/tripStart.php?tripId=' + response.project_id;
                } else {
                    tripDates(response);
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
        tripSubmitDatesError.innerText = response['tripCheck'];
    }
}

function tripDatesEmptyFields() {
    tripStartError.innerText = '';
    tripEndError.innerText = '';
}
