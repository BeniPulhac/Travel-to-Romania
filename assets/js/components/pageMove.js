const cityHeaderHidden = document.getElementById('cityHeaderHidden');
const hotelHeaderHidden = document.getElementById('hotelHeaderHidden');
const restaurantHeaderHidden = document.getElementById('restaurantHeaderHidden');
const attractionsHeaderHidden = document.getElementById('attractionsHeaderHidden');
const tripStartNext = document.getElementById('tripStartNext');
const cityInput = document.getElementById('cityInput');
const hotelInput = document.getElementById('hotelInput');
const restaurantInput = document.getElementById('restaurantInput');
const attractionsInput = document.getElementById('attractionsInput');
const tripHotelsBack = document.getElementById('tripHotelsBack');
const tripHotelsNext = document.getElementById('tripHotelsNext');
const tripRestaurantsBack = document.getElementById('tripRestaurantsBack');
const tripRestaurantsNext = document.getElementById('tripRestaurantsNext');
const tripAttractionsBack = document.getElementById('tripAttractionsBack');
const tripAttractionsNext = document.getElementById('tripAttractionsNext');

if(cityHeaderHidden) {
    if(tripStartNext) {
        tripStartNext.addEventListener('click', () => {
            location.href = '../../../views/tripComponents/tripHotels.php?tripId=' + tripId.value;
        }, true);
    }

        if (hotelHeaderHidden) {
            if(tripHotelsBack) {
                tripHotelsBack.addEventListener('click', () => {
                    location.href = '../../../views/tripComponents/tripStart.php?tripId=' + tripId.value;
                }, true);
            }

            if(tripHotelsNext) {
                tripHotelsNext.addEventListener('click', () => {
                    location.href = '../../../views/tripComponents/tripRestaurants.php?tripId=' + tripId.value;
                }, true);
            }

                if (restaurantHeaderHidden) {
                    if (tripRestaurantsBack) {
                        tripRestaurantsBack.addEventListener('click', () => {
                            location.href = '../../../views/tripComponents/tripHotels.php?tripId=' + tripId.value;
                        }, true);
                    }

                    if (tripRestaurantsNext) {
                        tripRestaurantsNext.addEventListener('click', () => {
                            location.href = '../../../views/tripComponents/tripTouristAttraction.php?tripId=' + tripId.value;
                        }, true);
                    }

                    if (attractionsHeaderHidden) {
                        if (tripAttractionsBack) {
                            tripAttractionsBack.addEventListener('click', () => {
                                location.href = '../../../views/tripComponents/tripRestaurants.php?tripId=' + tripId.value;
                            }, true);
                        }

                        if (tripAttractionsNext) {
                            tripAttractionsNext.addEventListener('click', () => {
                                location.href = '../../../views/tripComponents/tripEnd.php?tripId=' + tripId.value;
                            }, true);
                        }

                    } else {
                        if (attractionsInput) {
                            attractionsInput.setAttribute('placeholder', 'Insert Place to visit here');
                        }
                    }
                } else {
                    if (restaurantInput) {
                        restaurantInput.setAttribute('placeholder', 'Insert Restaurant here');
                    }
                }

        } else {
            if (hotelInput) {
                hotelInput.setAttribute('placeholder', 'Insert Hotel here');
            }
        }

} else {
    if (cityInput) {
        cityInput.setAttribute('placeholder', 'Insert City here');
    }
}
