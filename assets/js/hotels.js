// ---------------------------------Hotels API---------------------------------
const button = document.getElementById('searchButton');
const infoContainer = document.getElementById('cardInfo');
const inputSearch = document.getElementById('search');

button.addEventListener('click', function () {
    let filter = document.getElementById('search').value;
    loadData(filter);
});

inputSearch.addEventListener('keypress', function (event) {
    if(event.key === 'Enter') {
        event.preventDefault();
        button.click();
    }
});

function loadData(filter) {
    document.getElementById('insertCard').innerHTML = '';
    var ourRequest = new XMLHttpRequest();

    ourRequest.open('GET', 'assets/json/hotelsTesting.json', true);
    ourRequest.onload = function () {
        if(ourRequest.status == 200){
            var ourData = JSON.parse(ourRequest.responseText);
            var myFile = [];
            var i = 0;
            for (var key in ourData) {
                if (i == 40) {
                    break;
                }
                myFile.push(ourData[key]);
                i++;
            }

            for (i = 0; i < myFile.length; i++) {
                if (filter) {
                    // console.log("First if working");
                    let theInput = filter.toUpperCase();
                    let theNameObject = myFile[i].name.toUpperCase();
                        theNameObject = theNameObject.normalize('NFKD').replace(/[^\w]/g, '');
                    let theQueryObject = myFile[i].query.toUpperCase();
                        theQueryObject = theQueryObject.normalize('NFKD').replace(/[^\w]/g, '');

                    if(theNameObject.includes(theInput) || theQueryObject.includes(theInput)) {
                        creatCard(myFile[i]);
                    }
                } else {
                    creatCard(myFile[i]);
                }
            }
        }
    };
    ourRequest.send();
}


function creatCard(myFile) {
    // console.log(myFile);
    // console.log('working');

    const card = document.createElement('div');
    card.setAttribute('class', 'col d-flex justify-content-center');
    card.setAttribute('id', 'alignCard');
    // card.textContent = 'Working';
    const insertCard = document.getElementById('insertCard');
    insertCard.appendChild(card);

    //
    const ctnCard = document.createElement('div');
    ctnCard.setAttribute('class', 'card-custom card text-dark bg-light mb-3 h-100');
    ctnCard.setAttribute('id', 'cardContent');
    // ctnCard.textContent = 'Working';
    card.appendChild(ctnCard);

    //
    const image = document.createElement('div');
    image.setAttribute('class', 'card-image-custom card-img-top ');
    image.style.backgroundImage = 'url("'+ myFile.photo +'")';
    // image.setAttribute('src', myFile.photo);
    // image.setAttribute('alt', 'Hotel Icon');
    ctnCard.appendChild(image);

    //
    const cardBody = document.createElement('div');
    cardBody.setAttribute('class', 'card-body d-flex flex-column justify-content-lg-between');
    cardBody.setAttribute('id', 'cardBody');
    // cardBody.innerHTML = 'Working';
    ctnCard.appendChild(cardBody);

    //
    const cardTitle = document.createElement('h5');
    cardTitle.setAttribute('class', 'card-title');
    cardTitle.setAttribute('id', 'cardInfo');
    cardTitle.innerHTML = myFile.name;
    cardBody.appendChild(cardTitle);

    //
    const firstSpan = document.createElement('span');
    firstSpan.setAttribute('class', 'card-text');
    firstSpan.innerHTML = 'Rating: ' + myFile.rating;
    cardBody.appendChild(firstSpan);

    //
    const secondSpan = document.createElement('span');
    secondSpan.setAttribute('class', 'card-text');
    secondSpan.innerHTML = 'Phone: ' + myFile.phone;
    cardBody.appendChild(secondSpan);

    //
    const thirdSpan = document.createElement('span');
    thirdSpan.setAttribute('class', 'card-text');
    thirdSpan.innerHTML = 'Address: ' + myFile.full_address;
    cardBody.appendChild(thirdSpan);

    //
    const btn = document.createElement('a');
    btn.setAttribute('class', 'card-btn-custom btn btn-primary');
    btn.innerHTML = "Hotel's site";

    if(myFile.site) {
        btn.setAttribute('href', myFile.site);
        cardBody.appendChild(btn);
    }

    //
    const cardFooter = document.createElement('div');
    cardFooter.setAttribute('class', 'card-footer');
    ctnCard.appendChild(cardFooter);

    //
    const cardFooterText = document.createElement('small');
    cardFooterText.setAttribute('class', 'text-muted');
    cardFooterText.innerHTML = myFile.latitude +  ', ' + myFile.longitude;
    cardFooter.appendChild(cardFooterText);
}



// ---------------------------------/Hotels API---------------------------------



