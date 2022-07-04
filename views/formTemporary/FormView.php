
<!-------------------------------Course 11: PHP MVC------------------------------->

<div class="container d-flex justify-content-center my-5 pt-5">

    <form>
        <div class="form-outline mb-4 text-center text-success" id="formSuccess">
            <!-- Success -->
        </div>
        <!-- Name input -->
        <div class="form-outline mb-4 d-flex flex-column">
            <input type="text" id="subjectForm" name="subjectForm" class="form-control" />
            <label class="form-label" for="subjectForm">Subject</label>
            <span class="text-danger" id="subjectFormError"></span>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4 d-flex flex-column">
            <input type="email" id="emailForm" name="emailForm" class="form-control" />
            <label class="form-label" for="emailForm">Email address</label>
            <span class="text-danger" id="emailFormError"></span>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4 d-flex flex-column">
            <textarea class="form-control" id="textAreaForm" name="textAreaForm" rows="4"></textarea>
            <label class="form-label" for="textAreaForm">Message</label>
            <span class="text-danger" id="textAreaFormError"></span>
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4" id="submitForm" onclick="formHandling()">Send</button>
    </form>
</div>

<script src="../../assets/js/components/contactForm.js"></script>
