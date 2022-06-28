const cityHeaderHidden = document.getElementById('cityHeaderHidden')
const tripStartNext = document.getElementById('tripStartNext')
const cityInput = document.getElementById('cityInput')
const hotelInput = document.getElementById('hotelInput')
const tripHotelsBack = document.getElementById('tripHotelsBack')
const tripHotelsNext = document.getElementById('tripHotelsNext')

if(cityHeaderHidden) {
    if(tripStartNext) {
        tripStartNext.addEventListener('click', () => {
            location.href = '../../../views/tripComponents/tripHotels.php?tripId=' + tripId.value
        }, true)
    }

    if(tripHotelsBack) {
        tripHotelsBack.addEventListener('click', () => {
            location.href = '../../../views/tripComponents/tripStart.php?tripId=' + tripId.value
        }, true)
    }

    if(tripHotelsNext) {
        tripHotelsNext.addEventListener('click', () => {
            location.href = '../../../views/tripComponents/tripRestaurants.php?tripId=' + tripId.value
        }, true)
    }
} else {
    if (cityInput) {
        cityInput.setAttribute('placeholder', 'Insert City here')
    }

    if (hotelInput) {
        hotelInput.setAttribute('placeholder', 'Insert Hotel here')
    }
}
