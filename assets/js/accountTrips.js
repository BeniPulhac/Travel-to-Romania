//  Variables
const sessionId = document.getElementById('sessionId');
const trips = document.getElementById('trips');
const accountTrips = document.getElementById('accountTrips');

//  Events
trips.addEventListener('click', () => {
   tripsAjax();
})

//  Ajax
function tripsAjax() {
   let formData = new FormData();
   formData.append('userId', sessionId.value);

   let xhr = new XMLHttpRequest();
   xhr.open('POST', '../../includes/components/accountTrips.php', true);
   xhr.onload = function () {
      let response = xhr.responseText;
      response = JSON.parse(response);

      if(response.Success == 'No') {
         location.href = '../../views/wishTrip.php';
      } else {
         creatTripElements(response);
      }
   }
   xhr.send(formData);
}

// Functions
function creatTripElements(response) {
   const h1 = document.createElement('h1');
   h1.innerText = response.id;
   accountTrips.appendChild(h1);
}