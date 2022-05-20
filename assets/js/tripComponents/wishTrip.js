//  Variables
//wishTrip page
const tripStart = document.getElementById('tripStart');
const tripEnd = document.getElementById('tripEnd');
const headInputSubmit = document.getElementById('headInputSubmit');
const testReset = document.getElementById('testReset');
const resetThisFrom = document.getElementById('resetThisFrom');

//  Events
headInputSubmit.addEventListener('click', function() {
    // submitDates();
    location.href = '../../../views/tripComponents/tripStart.php';
});

testReset.addEventListener('click', function() {
    tripStart.value = '';
    tripEnd.value = '';
});

//  Functions
function submitDates() {
    let inputValue = new FormData();
    inputValue.append('tripStart', tripStart.value);
    inputValue.append('tripEnd', tripEnd.value);

    let xhr = new XMLHttpRequest();
    xhr.open('GET', '')
}