// ---------------------------------Hotels API---------------------------------
const button = document.getElementById('searchButton');
const infoContainer = document.getElementById('cardInfo');

button.addEventListener('click', function () {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://raw.githubusercontent.com/BeniPulhac/API/main/hotelsAPI.json?token=GHSAT0AAAAAABUAKNOAPAW244LJJ6FDXFNOYTJY2IQ');
    ourRequest.onload = function () {
        var ourData = JSON.parse(ourRequest.responseText);
        // renderHtml(ourData);
        console.log(ourData);
        // infoContainer.insertAdjacentHTML('beforeend', ourData[1].name);
    };

    ourRequest.send();
});



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


