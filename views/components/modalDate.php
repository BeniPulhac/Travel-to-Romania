<?php
$startDate ?? null;
$endDate ?? null;
?>


<div class="modal fade modal-dialog modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cityPopupTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center align-self-center text-center">
                <form method="post" class="">
                    <input type="hidden" name="cityStartDate" id="cityStartDate" value="<?php echo $startDate; ?>">
                    <input type="hidden" name="cityEndDate" id="cityEndDate" value="<?php echo $endDate; ?>">
                    <label for="cityDate" class="fw-bold pe-2">First day in this city</label>
                    <input type="date" id="cityDateFirst" name="cityDateFirst" class="my-1">
                    <label for="cityDate" class="fw-bold pe-2">Last day in this city</label>
                    <input type="date" id="cityDateLast" name="cityDateLast" class="my-1">
                </form>
                <span id="modalBodyErrors" class="text-danger"></span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-success border-3" id="modalFooterOk">Save</button>
            </div>
        </div>
    </div>
</div>
