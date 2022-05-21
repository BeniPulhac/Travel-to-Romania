//  Variables
const txtHint = document.getElementById('txtHint');
const insertCityList = document.getElementById('insertCityList');

//  Function

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
                // response = JSON.parse(response);
                console.log(typeof response);

                if(typeof response == 'object') {
                    console.log('Im object');
                   for(key in response) {
                        console.log('working');

                   }
                } else {
                    if(typeof response == 'string') {

                        const myArray = response.split(", ");

                        insertCityList.innerHTML = '';
                        for(let i = 0; i < myArray.length; i++) {
                            creatCityList(myArray[i]);
                        }
                        // txtHint.innerText = 'No hotels in this city';
                    }
                }
            }
        }
    }
}

function creatCityList(response) {
    // insertCityList.innerHTML = '';
    //
    const aLink = document.createElement('a');
    aLink.setAttribute('class', 'list-group-item list-group-item-action d-flex gap-3 py-3 list-content');
    aLink.setAttribute('aria-current', 'true');
    insertCityList.appendChild(aLink);

    //
    const element = document.createElement('div');
    element.setAttribute('class', 'gap-2 w-100 justify-content-between');
    aLink.appendChild(element);

    //
    const cityName = document.createElement('h6');
    cityName.innerHTML = response;
    element.appendChild(cityName);
}
