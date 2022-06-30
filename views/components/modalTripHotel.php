<?php
$startDate ?? null;
$endDate ?? null;
$cityName = $city->name ?? null;
$trip_id ?? null;
?>


<div class="modal fade modal-dialog modal-dialog-centered" id="staticBackdrop<?= $cityName ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cityPopupTitle<?= $cityName ?>"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center align-self-center text-center">
                <form method="post" class="d-flex flex-column">
                    <input type="hidden" name="cityStartDate" id="cityStartDate<?= $cityName ?>" value="<?php echo $startDate; ?>">
                    <input type="hidden" name="cityEndDate" id="cityEndDate<?= $cityName ?>" value="<?php echo $endDate; ?>">
                    <div>
                        <label for="cityDate" class="fw-bold pe-2">Check in</label>
                        <input type="date" id="cityDateFirst<?= $cityName ?>" name="cityDateFirst" class="my-1">
                    </div>
                    <div>
                        <label for="cityDate" class="fw-bold pe-2">Check out</label>
                        <input type="date" id="cityDateLast<?= $cityName ?>" name="cityDateLast" class="my-1">
                    </div>
                </form>
                <span id="modalBodyErrors<?= $cityName ?>" class="text-danger"></span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="modalFooterOk<?= $cityName ?>" class="btn btn-outline-success border-3" onclick="saveHotelAjax('<?= $trip_id?>', '<?= $cityName?>')">Save</button>
            </div>
        </div>
    </div>
</div>
