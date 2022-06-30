//  Ajax
function showHintRestaurants(str, cityName, startDate, endDate) {
    let insertRestaurantCard = document.getElementById('insertRestaurantCard' + cityName);
    insertRestaurantCard.innerText = '';

    let formData = new FormData();
        if(str == 'empty') {
            formData.append('cityName', cityName);
        } else {
            formData.append('InputString', str);
            formData.append('cityName', cityName);
        }

        let xhr = new XMLHttpRequest();
        xhr.open("POST", '../../../includes/tripComponents/tripRestaurantBackend.php');
        xhr.onload = function () {
            let response = xhr.responseText;
            response = JSON.parse(response);

            if (typeof response == 'object') {
                for (let index in response) {
                    creatRestaurantCard(insertRestaurantCard, response[index], startDate, endDate);
                }
            } else if (typeof response == 'string') {
                for (let i = 0; i < response.length; i++) {
                    // txtHint.innerText = 'No restaurants in this city';
                }
            }
        }
        xhr.send(formData);
}

function saveRestaurantAjax(tripId, cityName) {
    const cityPopupTitleHotel = document.getElementById('cityPopupTitle' + cityName).innerText;
    const cityDateFirst = document.getElementById('cityDateFirst'+ cityName).value;
    const cityDateLast = document.getElementById('cityDateLast' + cityName).value;

    let formData = new FormData();
    formData.append('tripId', tripId);
    formData.append('cityName', cityName);
    formData.append('hotelName', cityPopupTitleHotel);
    formData.append('startDate', cityDateFirst);
    formData.append('endDate', cityDateLast);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../includes/tripComponents/saveRestaurantDB.php', true);
    xhr.onload = function () {
        location.reload();
    }
    xhr.send(formData);
}

function deleteRestaurantAjax (hotelId, tripId) {
    let formData = new FormData();
    formData.append('hotelId', hotelId);
    formData.append('tripId', tripId);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../includes/tripComponents/deleteRestaurantsHeader.backend.php', true);
    xhr.onload = function () {
        location.reload();
    }
    xhr.send(formData);
}

//  Functions
function creatRestaurantCard(insertRestaurantCard, response, startDate, endDate) {
    let name = response[2];
    let cityName = response[5];

    //
    const container = document.createElement('div')
    container.setAttribute('class', 'container');
    insertRestaurantCard.appendChild(container);

    //
    const card = document.createElement('div');
    card.setAttribute('class', 'card-custom card ');
    container.appendChild(card);

    //
    const aLink = document.createElement('a');
    aLink.setAttribute('class', 'card-custom-a');
    aLink.setAttribute('type', 'button');
    aLink.setAttribute('onclick', 'modalRestaurant("' + name + '","' + cityName + '", "' + startDate + '", "' + endDate + '")');
    aLink.setAttribute('data-bs-toggle', 'modal');
    aLink.setAttribute('data-bs-target', '#staticBackdrop' + cityName);
    card.appendChild(aLink);


    //
    const divImg = document.createElement('div');
    divImg.setAttribute('class', 'card-img card-imageDiv-custom');
    aLink.appendChild(divImg);

    //
    const img = document.createElement('img');
    img.setAttribute('class', 'card-img-top card-image-custom');
    // img.style.backgroundImage = 'url("'+  response[13] +'")';
    img.setAttribute('src', response[13]);
    img.setAttribute('alt', 'Card Image Hotel');
    divImg.appendChild(img);

    //
    const cardBody = document.createElement('div');
    cardBody.setAttribute('class', 'card-body d-flex flex-column body-custom');
    aLink.appendChild(cardBody);

    //
    const cardName = document.createElement('h5');
    cardName.setAttribute('class', 'card-title');
    cardName.innerHTML = response[2];
    cardBody.appendChild(cardName);

    //
    const firstSpan = document.createElement('span');
    firstSpan.setAttribute('class', 'card-text');
    firstSpan.innerHTML = 'Rating: ' + response[11];
    cardBody.appendChild(firstSpan);

    //
    const secondSpan = document.createElement('span');
    secondSpan.setAttribute('class', 'card-text');
    secondSpan.innerHTML = 'Phone: ' + response[10];
    cardBody.appendChild(secondSpan);

    //
    const thirdSpan = document.createElement('span');
    thirdSpan.setAttribute('class', 'card-text');
    thirdSpan.innerHTML = 'Address: ' + response[6];
    cardBody.appendChild(thirdSpan);

    //
    const cardFooter = document.createElement('div');
    cardFooter.setAttribute('class', 'card-footer ');
    aLink.appendChild(cardFooter);

    //
    const cardFooterText = document.createElement('p');
    cardFooterText.setAttribute('class', 'card-text');
    cardFooter.appendChild(cardFooterText);

    //
    const cardTextMuted = document.createElement('small');
    cardTextMuted.setAttribute('class', 'text-muted d-flex justify-content-between');
    cardFooterText.appendChild(cardTextMuted);

    //
    const cardFooterSpan = document.createElement('span');
    cardTextMuted.appendChild(cardFooterSpan);


    //
    const cardFooterEyeIcon = document.createElement('i');
    cardFooterEyeIcon.setAttribute('class', 'fas fa-eye pe-1');
    cardFooterSpan.appendChild(cardFooterEyeIcon);
    // cardFooterSpan.innerHTML = response[12];

    //
    const spanEyeText = document.createElement('span')
    spanEyeText.innerText = response[12];
    cardFooterSpan.appendChild(spanEyeText);

    //
    const cardFooterSpan2 = document.createElement('span');
    cardTextMuted.appendChild(cardFooterSpan2);

    //
    const cardFooterCalendarIcon = document.createElement('i');
    cardFooterCalendarIcon.setAttribute('class', 'fas fa-calendar-alt pe-1');
    cardFooterSpan2.appendChild(cardFooterCalendarIcon);
//     cardFooterSpan2.innerHTML = response.date;

    const spanCalendarText = document.createElement('span');
    // spanCalendarText.innerText = response['date'];
    cardFooterSpan2.appendChild(spanCalendarText);
}

function modalRestaurant (name, cityName, startDate, endDate) {
    const cityPopupTitle = document.getElementById('cityPopupTitle' + cityName);
    const cityStartDate = document.getElementById('cityStartDate' + cityName).value;
    const cityEndDate = document.getElementById('cityEndDate' + cityName).value;
    const cityDateFirst = document.getElementById('cityDateFirst'+ cityName);
    const cityDateLast = document.getElementById('cityDateLast' + cityName);


    // let changeStart = cityStartDate.split("-");
    // let startDate = changeStart[2] + '-' + changeStart[1] + '-' + changeStart[0];
    // let changeEnd = cityEndDate.split("-");
    // let endDate = changeEnd[2] + '-' + changeEnd[1] + '-' + changeEnd[0];

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

    cityPopupTitle.innerHTML = name;
}