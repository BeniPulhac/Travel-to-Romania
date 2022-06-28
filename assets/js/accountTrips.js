//  Variables
const sessionId = document.getElementById('sessionId');
const trips = document.getElementById('trips');
const accountTrips = document.getElementById('accountTrips');
let count1 = 0;

//  Events
// trips.addEventListener('click', () => {
//    tripsAjax();
// })

// modalFooterOk.addEventListener('click', () => {
//    accountCityEditAjax();
// }, false);

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

function accountCityEditAjax(id, number, choose) {
   console.log(id, number, choose);
   let formData = new FormData();
   formData.append('tripId', id);
   formData.append('cityIndex', number);
   formData.append('cityDate', 'choose');
alert('test');return
   let xhr = new XMLHttpRequest();
   xhr.open('POST', '../../includes/components/accountTripsEdit.php', true);
   xhr.onload = function () {

   }
   xhr.send(formData);
}

// Functions
function creatTripElements(elements) {
   count1++;
   let nr = -1;

   let startCeva = Date.parse(elements.start_date);
   let endCeva = Date.parse(elements.end_date);
   start = new Date(startCeva).toLocaleDateString();
   end = new Date(endCeva).toLocaleDateString();

   const accountTripsBtn = document.createElement('button');
   accountTripsBtn.setAttribute('type', 'button');
   accountTripsBtn.setAttribute('class', 'btn btn-success m-2');
   accountTripsBtn.setAttribute('data-bs-toggle', 'collapse');
   accountTripsBtn.setAttribute('data-bs-target', '#tripCollapse' + count1);
   accountTripsBtn.innerText = "Trip: " + count1;
   accountTrips.appendChild(accountTripsBtn);

   const accountTripsContent = document.createElement('div');
   accountTripsContent.setAttribute('id', 'tripCollapse' + count1);
   accountTripsContent.setAttribute('class', 'collapse ps-5 py-2');
   accountTrips.appendChild(accountTripsContent);

   const accountTripBtn = document.createElement('button');
   accountTripBtn.setAttribute('type', 'button');
   accountTripBtn.setAttribute('class', 'btn btn-outline-success m-1');
   // accountTripBtn.setAttribute('data-bs-toggle', 'collapse');
   // accountTripBtn.setAttribute('data-bs-target', '#accountDate' + count);
   accountTripBtn.innerText = 'Trip Dates';
   accountTripsContent.appendChild(accountTripBtn);

   const accountTripContent = document.createElement('div');
   // accountTripContent.setAttribute('id', 'accountDate' + count);
   accountTripContent.setAttribute('class', ' ps-5 py-2');
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
   // accountCityBtn.setAttribute('data-bs-toggle', 'collapse');
   // accountCityBtn.setAttribute('data-bs-target', '#accountCity' + count);
   accountCityBtn.innerHTML = 'City';
   accountTripsContent.appendChild(accountCityBtn);

   const accountCityContent = document.createElement('div');
   // accountCityContent.setAttribute('id', 'accountCity' + count);
   accountCityContent.setAttribute('class', ' ps-5 py-2');
   accountTripsContent.appendChild(accountCityContent);

   const cityContent = document.createElement('div');
   cityContent.setAttribute('class', 'd-flex flex-column');
   cityContent.setAttribute('id', 'insertCityName')
   accountCityContent.appendChild(cityContent);

   let city = JSON.parse(elements.city)
   for (let key in city) {
      nr++;

      let startCity = Date.parse(city[key].start_date);
      let endCity = Date.parse(city[key].end_date);
      startCity = new Date(startCity).toLocaleDateString();
      endCity = new Date(endCity).toLocaleDateString();

      const cityContentBtn = document.createElement('button');
      cityContentBtn.setAttribute('type', 'button');
      cityContentBtn.setAttribute('class', 'btn btn-outline-success m-1 me-auto');
      cityContentBtn.innerHTML = city[key].name;
      cityContent.appendChild(cityContentBtn);

      const cityContentDiv = document.createElement('div');
      cityContentDiv.setAttribute('class', ' ps-5 py-2 d-flex flex-column');
      cityContent.appendChild(cityContentDiv);

      const startDiv = document.createElement('div');
      startDiv.setAttribute('class', 'd-flex flex-row align-items-baseline');
      cityContentDiv.appendChild(startDiv);

      const cityContentStart = document.createElement('span')
      cityContentStart.setAttribute('id', 'cityContentStart' + count1);
      cityContentStart.innerHTML = '<b> ' + 'City visit starts on:' + '</b>' + ' ' + startCity;
      startDiv.appendChild(cityContentStart);

      const endDiv = document.createElement('div');
      endDiv.setAttribute('class', 'd-flex flex-row align-items-baseline');
      cityContentDiv.appendChild(endDiv);

      const cityContentEnd = document.createElement('span')
      cityContentEnd.setAttribute('id', 'cityContentEnd' + count1);
      cityContentEnd.innerHTML = '<b> ' + 'City visit ends on:' + '</b>' + ' ' + endCity;
      endDiv.appendChild(cityContentEnd);

      const endEdit = document.createElement('i');
      endEdit.setAttribute('class', 'btn fa-solid fa-pen-to-square align-self-start');
      endEdit.setAttribute('onclick', 'accountPopupDates('+ nr + ',' + startCeva + ',' + endCeva +')');
      endEdit.setAttribute('data-bs-toggle', 'modal');
      endEdit.setAttribute('data-bs-target', '#staticBackdrop');
      cityContentDiv.appendChild(endEdit);

   }
}

function accountPopupDates (nr, start , end) {
   cityDateFirst.value = '';
   cityDateLast.value = '';
   modalBodyErrors.innerHTML = '';

   let newStart = new Date(start).toLocaleDateString();
   let newEnd = new Date(end).toLocaleDateString();

   //format dates
   let changeStart = newStart.split("/");
   let startDate = changeStart[2] + '-' + changeStart[1] + '-' + changeStart[0];
   let changeEnd = newEnd.split("/");
   let endDate = changeEnd[2] + '-' + changeEnd[1] + '-' + changeEnd[0];

   //set min-max to the calendar
   cityDateFirst.setAttribute('min', startDate);
   cityDateFirst.setAttribute('max', endDate);
   cityDateLast.setAttribute('min', startDate);
   cityDateLast.setAttribute('max', endDate);

   //set last day to be after first day
   cityDateFirst.onchange = () => {
      cityDateLast.setAttribute('min', cityDateFirst.value);
      if(cityDateLast.value < cityDateFirst.value) {
         cityDateLast.value = '';
      }
   }
}

