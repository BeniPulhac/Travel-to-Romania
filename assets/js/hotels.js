// ---------------------------------Hotels API---------------------------------
const button = document.getElementById('searchButton');
const infoContainer = document.getElementById('cardInfo');

button.addEventListener('click', function () {
    let filter = document.getElementById('search').value;
    loadData(filter);
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
                if (i == 20) {
                    break;
                }
                myFile.push(ourData[key]);
                i++;
            }

            for (i = 0; i < myFile.length; i++) {
                if (filter) {
                    if(myFile[i].name.includes(filter) || myFile[i].query.includes(filter)) {
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
    console.log(myFile);
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


// const button = document.getElementById('searchButton');
// const infoContainer = document.getElementById('cardInfo');
//
// button.addEventListener('click', function () {
//     var ourRequest = new XMLHttpRequest();
//     ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');
//     ourRequest.onload = function () {
//         var ourData = JSON.parse(ourRequest.responseText);
//          // renderHtml(ourData);
//         console.log(ourData[1].name);
//         infoContainer.insertAdjacentHTML('beforeend', ourData[1].name);
//     };
//
//     ourRequest.send();
// });
//
//
//
//
// function renderHtml(data) {
//     let htmlString = "";
//
//     // data.forEach(element => console.log(element.name));
//
//     for(i = 0; i < data.length; i++) {
//         htmlString += '<p>' + data[i].name + ' is a ' + data[i].species + '.</p>';
//     }
//
//     infoContainer.insertAdjacentHTML('beforeend', htmlString);
// }


