//  Variables
const txtHint = document.getElementById('txtHint');
const insertCityList = document.getElementById('insertCityList');
const cityPopup = document.getElementById('cityPopup');
let count = 0;

//  Ajax
function showHint(str) {
    if(str.length === 0) {
        txtHint.innerText = '';
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

//  Functions
function creatCityList(response) {
    count++
    //
    const aLink = document.createElement('button');
    aLink.setAttribute('class', 'list-group-item list-group-item-action d-flex gap-3 py-3 list-content cursor-pointer ');
    aLink.setAttribute('aria-current', 'true');
    // aLink.setAttribute('onclick', 'creatCityPopup('+count+')');
    aLink.setAttribute('type', 'button');
    aLink.setAttribute('data-bs-toggle', 'modal');
    aLink.setAttribute('data-bs-target', '#staticBackdrop');
    insertCityList.appendChild(aLink);

    //
    const element = document.createElement('div');
    element.setAttribute('class', 'gap-2 w-100 justify-content-between ');
    aLink.appendChild(element);

    //
    const cityName = document.createElement('h6');
    cityName.setAttribute('class', 'popup');
    cityName.innerHTML = response;
    element.appendChild(cityName);

    //
    const span = document.createElement('span');
    span.setAttribute('class', 'popuptext');
    span.setAttribute('id', 'myPopup'+count);
    span.innerHTML = 'Hello';
    cityName.appendChild(span);
}

function creatCityPopup(count) {
    let popup = document.getElementById('myPopup' + count);
    popup.classList.toggle('show');
}

//  La click pe link trebuie facut un ajax request care face querry sa iau niste date din bd ca sa le afisez in popup, doaca totu ii ok apelez o functie care creaza popup-ul