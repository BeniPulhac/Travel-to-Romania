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


//  Functions
function creatRestaurantCard(insertRestaurantCard, response, startDate, endDate) {

}