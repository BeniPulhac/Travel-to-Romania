const button = document.getElementById('searchButton');
const infoContainer = document.getElementById('cardInfo');

button.addEventListener('click', function () {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');
    ourRequest.onload = function () {
        var ourData = JSON.parse(ourRequest.responseText);
         renderHtml(ourData);
    };

    ourRequest.send();
});


function renderHtml(data) {
    let htmlString = "";

    for(i = 0; i < data.length; i++) {
        htmlString += '<p>' + data[i].name + ' is a ' + data[i].species + '.</p>';
    }

    infoContainer.insertAdjacentHTML('beforeend', htmlString);
}