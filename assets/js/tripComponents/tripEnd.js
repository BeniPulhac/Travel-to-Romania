const tripSubmitDates = document.getElementById('tripSubmitDates');
const tripEndTripId = document.getElementById('tripEndTripId');

tripSubmitDates.addEventListener('click', () => {
   console.log('ceva')
   location.href = '../../../views/tripComponents/tripTouristAttraction.php?tripId=' + tripEndTripId.value;
});
