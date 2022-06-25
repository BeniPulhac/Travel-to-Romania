//  Variables
const sessionId = document.getElementById('sessionId');
const trips = document.getElementById('trips');
const accountTrips = document.getElementById('accountTrips');
let count = 0;

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
         for(let elements in response) {
            creatTripElements(response[elements]);
            // console.log(response[elements])
         }

      }
   }
   xhr.send(formData);
}

// Functions
function creatTripElements(elements) {
   count++;
   let start = Date.parse(elements.start_date);
   let end = Date.parse(elements.end_date);
   start = new Date(start).toLocaleDateString();
   end = new Date(end).toLocaleDateString();

   const accountTripsBtn = document.createElement('button');
   accountTripsBtn.setAttribute('type', 'button');
   accountTripsBtn.setAttribute('class', 'btn btn-success m-2');
   accountTripsBtn.setAttribute('data-bs-toggle', 'collapse');
   accountTripsBtn.setAttribute('data-bs-target', '#tripCollapse' + count);
   accountTripsBtn.innerText = "Trip: " + count;
   accountTrips.appendChild(accountTripsBtn);

   const accountTripsContent = document.createElement('div');
   accountTripsContent.setAttribute('id', 'tripCollapse' + count);
   accountTripsContent.setAttribute('class', 'collapse ps-5 py-2');
   accountTrips.appendChild(accountTripsContent);

   const accountTripBtn = document.createElement('button');
   accountTripBtn.setAttribute('type', 'button');
   accountTripBtn.setAttribute('class', 'btn btn-outline-success m-1');
   accountTripBtn.setAttribute('data-bs-toggle', 'collapse');
   accountTripBtn.setAttribute('data-bs-target', '#accountDate' + count);
   accountTripBtn.innerText = 'Trip Dates';
   accountTripsContent.appendChild(accountTripBtn);

   const accountTripContent = document.createElement('div');
   accountTripContent.setAttribute('id', 'accountDate' + count);
   accountTripContent.setAttribute('class', 'collapse ps-5 py-2');
   accountTripsContent.appendChild(accountTripContent);

   const tripContent = document.createElement('div')
   tripContent.setAttribute('class', 'd-flex flex-column');
   accountTripContent.appendChild(tripContent);

   const startDisplayDay = document.createElement('span')
   startDisplayDay.innerHTML = '<b> ' + 'Your trip stars on:' + '</b>' + ' ' + start;
   tripContent.appendChild(startDisplayDay);

   const endDisplayDay = document.createElement('span')
   endDisplayDay.innerHTML = '<b> ' + 'Your trip ends on:' + '</b>' + ' ' + end;
   tripContent.appendChild(endDisplayDay);

   const accountCityBtn = document.createElement('button');
   accountCityBtn.setAttribute('type', 'button');
   accountCityBtn.setAttribute('class', 'btn btn-outline-success m-1');
   accountCityBtn.setAttribute('data-bs-toggle', 'collapse');
   accountCityBtn.setAttribute('data-bs-target', '#accountCity' + count);
   accountCityBtn.innerHTML = 'City';
   accountTripsContent.appendChild(accountCityBtn);

   const accountCityContent = document.createElement('div');
   accountCityContent.setAttribute('id', 'accountCity' + count);
   accountCityContent.setAttribute('class', 'collapse ps-5 py-2');
   accountTripsContent.appendChild(accountCityContent);

   const cityContent = document.createElement('div');
   cityContent.setAttribute('class', 'd-flex flex-column');
   cityContent.setAttribute('id', 'insertCityName')
   accountCityContent.appendChild(cityContent);

   let city = JSON.parse(elements.city)
   for (let key in city) {
      const spanTest = document.createElement('span')
      spanTest.innerHTML = city[key].name;
      cityContent.appendChild(spanTest);
   }



}



