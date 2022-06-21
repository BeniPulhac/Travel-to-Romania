//  Variables
const insertCityList = document.getElementById('insertCityList');
const modalFooterOk = document.getElementById('modalFooterOk');
const cityPopupTitle = document.getElementById('cityPopupTitle');
const cityStartDate = document.getElementById('cityStartDate');
const cityEndDate = document.getElementById('cityEndDate');
const cityDateFirst = document.getElementById('cityDateFirst');
const cityDateLast = document.getElementById('cityDateLast');
const modalBodyErrors = document.getElementById('modalBodyErrors');
let count = 0;

//  Events
modalFooterOk.addEventListener('click', () => {
    cityPopupBackend();
}, false);

//  Ajax
function showHint(str) {
    if(str.length === 0) {
        insertCityList.innerHTML = '';
    } else {
        if(str.length >= 1) {
            let xhr = new XMLHttpRequest();
            xhr.open('GET', '../../../includes/tripComponents/tripStartBackend.php?q=' + str);
            xhr.send();
            xhr.onload = function() {

                let response = xhr.responseText;
                response = JSON.parse(response);


                if(typeof response == 'object') {
                   let cities = response.city.split(", ");
                    insertCityList.innerHTML = '';

                   for(keys in cities) {
                       creatCityList(cities[keys], count);
                    }
                }
            }
        }
    }
}

function cityPopupBackend() {
    modalBodyErrors.innerHTML = '';
    let formData = new FormData();
    formData.append('cityPopupTitle', cityPopupTitle.innerHTML);
    formData.append('cityDateFirst', cityDateFirst.value);
    formData.append('cityDateLast', cityDateLast.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../includes/tripComponents/cityDate.php', true);
    xhr.onload = function () {
        let response = xhr.responseText;
        response = JSON.parse(response);


        if(typeof response == 'object') {
            modalBodyErrors.innerHTML = response['tripDay'];
        } else if(typeof response == 'string') {

        }
    }
    xhr.send(formData);
}


//  Functions
function cityPopupDates(count) {
    //take the name of the city
    let cityName = document.getElementById('myPopup'+count).innerHTML;
    //format dates
    let changeStart = cityStartDate.value.split("-");
    let startDate = changeStart[2] + '-' + changeStart[1] + '-' + changeStart[0];
    let changeEnd = cityEndDate.value.split("-");
    let endDate = changeEnd[2] + '-' + changeEnd[1] + '-' + changeEnd[0];

    //set min-max to the calendar
    cityDateFirst.setAttribute('min', startDate);
    cityDateFirst.setAttribute('max', endDate);
    cityDateLast.setAttribute('min', startDate);
    cityDateLast.setAttribute('max', endDate);

    //set last day to be after first day
    cityDateFirst.onchange = () => {
        cityDateLast.setAttribute('min', cityDateFirst.value);
        if(cityDateLast.value < cityDateFirst.value) {
            cityDateLast.value = '';
        }
    }

    //display the name of the city
    cityPopupTitle.innerHTML = cityName;
}

function creatCityList(response) {
    count++
    //creat button
    const aLink = document.createElement('button');
    aLink.setAttribute('class', 'list-group-item list-group-item-action d-flex gap-3 py-3 list-content cursor-pointer ');
    aLink.setAttribute('aria-current', 'true');
    aLink.setAttribute('onclick', 'cityPopupDates('+count+')');
    aLink.setAttribute('type', 'button');
    aLink.setAttribute('data-bs-toggle', 'modal');
    aLink.setAttribute('data-bs-target', '#staticBackdrop');
    insertCityList.appendChild(aLink);

    //creat div
    const element = document.createElement('div');
    element.setAttribute('class', 'gap-2 w-100 justify-content-between ');
    aLink.appendChild(element);

    //creat h6
    const cityName = document.createElement('h6');
    cityName.setAttribute('class', 'popup');
    cityName.setAttribute('id', 'myPopup'+count);
    cityName.innerHTML = response;
    element.appendChild(cityName);
}
