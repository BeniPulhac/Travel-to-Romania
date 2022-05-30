//  Variables
const txtHint = document.getElementById('txtHint');
const insertHotelCard = document.getElementById('insertHotelCard');


//  Function

function showHintHotel(str) {
    insertHotelCard.innerHTML = '';
    if(str.length === 0) {
        txtHint.innerText = '';
    } else {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '../../../includes/tripComponents/tripHotelsBackend.php?q=' + str);
        xhr.send();
        xhr.onload = function() {

            let response = xhr.responseText;
            response = JSON.parse(response);

            console.log(response);
            txtHint.innerText = str;

            if(typeof response == 'object') {
                for(i = 0; i < response.length; i++) {

                    creatHotelCard(response[i]);
                }
            } else {
                if(typeof response == 'string') {
                    for(i = 0; i < response.length; i++) {
                        txtHint.innerText = 'No hotels in this city';
                    }
                }
            }
        }
    }

}

function creatHotelCard(response) {
// console.log(response);

    //
    const container = document.createElement('giv')
    container.setAttribute('class', 'container');
    insertHotelCard.appendChild(container);

    //
    const card = document.createElement('div');
    card.setAttribute('class', 'card-custom card ');
    container.appendChild(card);

    //
    const aLink = document.createElement('a');
    aLink.setAttribute('class', 'card-custom-a');
    if(response[3] != '') {
        aLink.setAttribute('href', response[3]); //Need to creat a pop up for this
        card.appendChild(aLink);
    } else {
        aLink.setAttribute('href', '#'); //Need to creat a pop up for this
        card.appendChild(aLink);
    }

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

