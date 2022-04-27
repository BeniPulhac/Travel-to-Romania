const button = document.getElementById('searchButton');

button.addEventListener('click', function () {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');
    ourRequest.onload = function () {
        console.log(ourRequest.responseText);
        // var ourData = JSON.parse(ourRequest.responseText);
        // renderHTML(ourData);
    };

    ourRequest.send();
});
