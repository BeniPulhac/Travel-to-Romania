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

                <div class="d-flex align-content-start flex-wrap" id="cityHeaderInsert">
                    <?php foreach ($cities as $city) :  ?>
                        <button class="p-2 text-white btn btn-dark btn-outline-success border-5 element-custom m-1" type="button" onclick="deleteCityAjax();">
                            <div>
                                <i class="fa-solid fa-city"></i>
                                <span>City: <?php echo $city->name?></span>
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
                            </div>
                        </button>
                    <?php endforeach; ?>
                    <!--                        Insert city Header-->
                </div>

                <div class="head-input-places">

                </div>
            </div>
        </div>
    </div>
</header>