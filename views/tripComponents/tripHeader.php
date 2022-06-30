<?php
$trip_id = $trip_id ?? null;
$startDate = $startDate ?? null;
$endDate = $endDate ?? null;
$cities = $cities ?? null;
?>
<header class="head">
    <div class="head-container">
        <div class="h-container-info py-5">
            <h1 class="text-white fw-bold">Your Trip</h1>
            <div class="head-input">
                <div class="head-input-date d-flex flex-row">
                    <span class="text-white fw-bold larger-text">Trip between: </span>
                    <input type="hidden" id="tripId" value="<?php echo $trip_id ?>">
                    <span class="text-white ps-2 align-self-center"><?php echo $startDate;  if(isset($endDate)) : echo " / " . $endDate; endif; ?></span>
                </div>
<!---->
                <?php if ($cities !== null) : ?>
                <div class="d-flex align-content-start flex-wrap border-top border-success py-2" id="cityHeaderInsert">
                    <?php
                    $count = 0;
                    foreach ($cities as $city) :
                        $count++;
                        ?>
                        <div class="p-2 text-white border border-5 border-success m-1" id="cityHeaderHidden">

                            <div>
                                <i class="fa-solid fa-city"></i>
                                <span>City: <?php echo $city->name?></span>
                                <button type="button" class="btn-close btn-close-white" onclick="deleteCityAjax(<?php echo $count ?>);" aria-label='Close'></button>

                            </div>

                            <div>
                                <i class="fas fa-calendar-alt"></i>
                                <?php
                                $city->start_date = strtotime($city->start_date);
                                $start = date("d", $city->start_date);
                                $city->end_date = strtotime($city->end_date);
                                $end = date("d", $city->end_date);
                                ?>
                                <span><?= $start . '-' . $end ?></span>
                                <input type="hidden" id="cityHeaderStart<?php echo $count ?>" value="<?php echo $start ?>">
                                <input type="hidden" id="cityHeaderEnd<?php echo $count ?>" value="<?php echo $end ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
<!---->
                <div class="d-flex align-content-start flex-wrap border-top border-success py-2" id="hotelHeaderInsert">
                    <?php include '../../includes/tripComponents/displayHotelsHeader.backend.php'; ?>
                    <?php $rowHotels = $row ?? null; ?>
                    <?php foreach ($rowHotels as $hotel) : ?>

                        <div class="p-2 text-white border border-5 border-success m-1" id="hotelHeaderHidden">
                            <form method="post">
                                <i class="fa-solid fa-hotel"></i>
                                <span>Hotel: <?= $hotel['name']; ?></span>
                                <button type="button" class="btn-close btn-close-white" onclick="deleteHotelAjax(<?= $hotel['id'] ?> , <?= $hotel['trip_id'] ?>)" aria-label="Delete Hotel"></button>
                            </form>

                            <div>
                                <i class="fas fa-calendar-alt"></i>
                                <?php $hotelStart = date("d",$hotel['start_date']) ?>
                                <?php $hotelEnd = date("d", $hotel['end_date']) ?>

                                <span><?= $hotelStart . '-' . $hotelEnd ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
<!---->
                <div class="d-flex align-content-start flex-wrap border-top border-success py-2" id="hotelHeaderInsert">
                    <?php include '../../includes/tripComponents/displayRestaurantsHeader.backend.php';?>
                    <?php $rowRestaurants = $row ?? null; ?>
                    <?php foreach ($rowRestaurants as $restaurant) : ?>

                    <div class="p-2 text-white border border-5 border-success m-1" id="restaurantHeaderHidden">
                        <form method="post">
                            <i class="fa-solid fa-utensils"></i>
                            <span>Hotel: <?= $restaurant['name']; ?></span>
                            <button type="button" class="btn-close btn-close-white" onclick="deleteRestaurantAjax(<?= $restaurant['id'] ?>, <?= $restaurant['trip_id'] ?>)" aria-label="Delete Restaurant"></button>
                        </form>

                        <div>
                            <i class="fas fa-calendar-alt"></i>
                            <?php $restaurantStart = date("d",$restaurant['start_date']) ?>
                            <?php $restaurantEnd = date("d", $restaurant['end_date']) ?>

                            <span><?= $restaurantStart . '-' . $restaurantEnd ?></span>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</header>