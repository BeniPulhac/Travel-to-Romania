//  Variables
const insertCityList = document.getElementById('insertCityList');
const modalFooterOk = document.getElementById('modalFooterOk');
const cityPopupTitle = document.getElementById('cityPopupTitle');
const cityStartDate = document.getElementById('cityStartDate');
const cityEndDate = document.getElementById('cityEndDate');
const cityDateFirst = document.getElementById('cityDateFirst');
const cityDateLast = document.getElementById('cityDateLast');
const modalBodyErrors = document.getElementById('modalBodyErrors');
const cityHeaderInsert = document.getElementById('cityHeaderInsert');
const tripId = document.getElementById('tripId');
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
    formData.append('tripId', tripId.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../includes/tripComponents/cityDate.php', true);
    xhr.onload = function () {
        let response = xhr.responseText;
        response = JSON.parse(response);


        if(typeof response == 'object') {
            modalBodyErrors.classList.add('text-danger');
            modalBodyErrors.classList.remove('text-success');
            modalBodyErrors.innerHTML = response['tripDay'];

            if(response.Success == 'Yes') {
                modalBodyErrors.classList.remove('text-danger');
                modalBodyErrors.classList.add('text-success');
                modalBodyErrors.innerHTML = 'Success';

                setTimeout(function () {
                    $('#staticBackdrop').modal('hide');
                    location.reload();
                }, 1000);
            }else if(response.Success == 'No') {
                modalBodyErrors.classList.add('text-danger');
                modalBodyErrors.classList.remove('text-success');
                modalBodyErrors.innerHTML = '*Cant add another city in the same day/s'
            }
        }
    }
    xhr.send(formData);
}

function deleteCityAjax(headerCount) {
    let cityHeaderStart = document.getElementById('cityHeaderStart'+headerCount).value;
    let cityHeaderEnd = document.getElementById('cityHeaderEnd'+headerCount).value;

    let formData = new FormData();
    formData.append('cityHeaderStart', cityHeaderStart);
    formData.append('cityHeaderEnd', cityHeaderEnd);
    formData.append('tripId', tripId.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../includes/tripComponents/deleteCityHeader.php', true);
    xhr.send(formData);
}

//  Functions
function cityPopupDates(count) {
    cityDateFirst.value = '';
    cityDateLast.value = '';
    modalBodyErrors.innerHTML = '';
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

function cityHeaderCreat() {
    const cityHeader = document.createElement('button');
    cityHeader.setAttribute('class', 'p-2 text-white btn btn-dark btn-outline-success border-5 element-custom m-1');
    cityHeader.setAttribute('type', 'button');
    cityHeader.setAttribute('onclick', 'deleteCityAjax()');
    cityHeaderInsert.appendChild(cityHeader);

    //
    const divCity = document.createElement('div');
    cityHeader.appendChild(divCity);

    //
    const cityIcon = document.createElement('i');
    cityIcon.setAttribute('class', 'fa-solid fa-city');
    divCity.appendChild(cityIcon);

    //
    const cityText = document.createElement('span');
    cityText.innerText = 'City: ';
    divCity.appendChild(cityText);

    //
    const cityName = document.createElement('span');
    cityName.setAttribute('id', 'cityHeaderName');
    cityName.innerText = cityPopupTitle.innerText;
    divCity.appendChild(cityName);

    //
    const divDays = document.createElement('div');
    cityHeader.appendChild(divDays);

    //
    const daysIcon = document.createElement('i');
    daysIcon.setAttribute('class', 'fas fa-calendar-alt');
    divDays.appendChild(daysIcon);

    //
    const daysText = document.createElement('span');
    daysText.innerText = 'Days: ';
    divDays.appendChild(daysText);

    //
    const cityStart = document.createElement('span');
    cityStart.setAttribute('id', 'headerStart');
    divDays.appendChild(cityStart);

    //
    const cityEnd = document.createElement('span');
    cityEnd.setAttribute('id', 'headerEnd');
    divDays.appendChild(cityEnd);
}
