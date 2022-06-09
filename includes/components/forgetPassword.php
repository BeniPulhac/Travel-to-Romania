<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$email = $_POST['emailSentToken'];

//  Prevent mysqli injection
$email = stripcslashes($email);
$email = mysqli_real_escape_string($conn, $email);

//  Errors array
$errors = ['emailError' => ''];

//  Search DB
$select = "SELECT email FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

//  Errors handling
$check = false;
if(empty($email)) {
    $errors['emailError'] = '*Email is required';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['emailError'] = '*Invalid email format';
} else if($count !== 1) {
    $errors['emailError'] = '*No account with this email';
} else {
    echo json_encode('Email sent. Check your email');
    $check = true;
    sendEmailToken($email);
}

if($check === false) {
    echo json_encode($errors);
}

//  Function
function sendEmailToken($email) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $change = false;

    $to = $email;
    $subject = 'Email Verification';
    $message = "<a href = 'https://l_pulhac.internship.rankingcoach.com/includes/components/verifyEmail.php?token=' . $token . ',' . ''>Register Account</a>";
    $headers = 'MIME-Version: 1.0';
    $headers .= 'Content-type: text/html; charset=iso-8859-1';
    $headers .= 'From: Travel to Romania <travelToRomania@example.com>';
    mail($to, $subject, $message, $headers);
}



//Close Connection
$conn->close();