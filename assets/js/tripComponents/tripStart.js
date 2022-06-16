//  Variables
const txtHint = document.getElementById('txtHint');
const insertCityList = document.getElementById('insertCityList');
const cityPopup = document.getElementById('cityPopup');
// let getElement = document.getElementById('getElement');
let counting = 0;

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


                if(typeof response == 'object') {
                   for(key in response) {
                        console.log('working');
                   }
                } else {
                    if(typeof response == 'string') {

                        const myArray = response.split(", ");

                        insertCityList.innerHTML = '';
                        for(let i = 0; i < myArray.length; i++) {
                            creatCityList(myArray[i]);
                            clickListElement(myArray[i], counting);

                            // console.log(counting);
                        }
                        counting = 0;
                        // txtHint.innerText = 'No hotels in this city';
                    }
                }
            }
        }
    }
}



function creatCityList(response) {
    counting++;
    //
    const aLink = document.createElement('button');
    aLink.setAttribute('class', 'list-group-item list-group-item-action d-flex gap-3 py-3 list-content cursor-pointer');
    aLink.setAttribute('aria-current', 'true');
    aLink.setAttribute('id', 'getElement' + counting); //in loc de id sa folosesc un onclick="function(numele orasului)"
    aLink.setAttribute('type', 'button');
    insertCityList.appendChild(aLink);

    //
    const element = document.createElement('div');
    element.setAttribute('class', 'gap-2 w-100 justify-content-between');
    aLink.appendChild(element);

    //
    const cityName = document.createElement('h6');
    cityName.innerHTML = response;
    // cityName.innerHTML = '<p>New text!</p>';
    element.appendChild(cityName);

}

function clickListElement(myArray, counting) {
    // console.log(myArray);
    // console.log(counting);

    for(i = 0; i < counting; i++) {
        // getElement = document.getElementById('getElement' + counting);
        let testSomething = 'getElement' + counting;

        testSomething.addEventListener
        // console.log(testSomething);


        let getElement = document.getElementById('getElement' + counting);

        getElement.addEventListener('click', function() {
            creatCityPopup(myArray);
        });
    }
}

function creatCityPopup(myArray) {

    cityPopup.innerHTML = '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">\n' +
        '            Launch static backdrop modal\n' +
        '        </button>\n' +
        '\n' +
        '        \n' +
        '        <div class="modal fade modal-dialog modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">\n' +
        '            <div class="modal-dialog">\n' +
        '                <div class="modal-content">\n' +
        '                    <div class="modal-header">\n' +
        '                        <h5 class="modal-title" id="staticBackdropLabel">' +  myArray + '</h5>\n' +
        '                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\n' +
        '                    </div>\n' +
        '                    <div class="modal-body">\n' +
        '                        ...\n' +
        '                    </div>\n' +
        '                    <div class="modal-footer">\n' +
        '                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>\n' +
        '                        <button type="button" class="btn btn-primary">Understood</button>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>';
}

