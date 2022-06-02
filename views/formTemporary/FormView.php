
<!-------------------------------Course 11: PHP MVC------------------------------->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course 11: PHP MVC</title>

    <link rel="stylesheet" href="../../assets/css/general.css">
</head>
<body>
<div class="container d-flex justify-content-center my-5 pt-5">

    <form>

        <div class="form-outline mb-4 text-center text-success" id="formSuccess">
            <!-- Success -->
        </div>
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" id="subjectForm" name="subjectForm" class="form-control" />
            <label class="form-label" for="subjectForm">Subject</label>
            <span class="alert-danger" id="subjectFormError"></span>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="emailForm" name="emailForm" class="form-control" />
            <label class="form-label" for="emailForm">Email address</label>
            <span class="alert-danger" id="emailFormError"></span>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" id="textAreaForm" name="textAreaForm" rows="4"></textarea>
            <label class="form-label" for="textAreaForm">Message</label>
            <span class="alert-danger" id="textAreaFormError"></span>
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4" id="submitForm">Send</button>
    </form>
</div>


<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/components/contactForm.js"></script>
</body>
</html>