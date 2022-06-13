<link rel="stylesheet" href="../../assets/css/general.css">
<link rel="stylesheet" href="../../assets/css/main.css">

<?php
include '../../dataBase.php';

//  Make it so when the form user status is 0 he cant log in !!!!!!

$conn = $GLOBALS['conn'];

if(isset($_GET['token'])) {
    //Process Verification
    $token = $_GET['token'];

    $result = $conn->query("SELECT status, email_verification FROM users WHERE status = 0 AND email_verification = '$token' LIMIT 1");

    if($result->num_rows === 1) {
        //Validate the email
        $update = $conn->query("UPDATE users SET status = 1 WHERE email_verification = '$token' LIMIT 1");

        if($update) {
            echo "Your account has been verified. You may login.";
//            include '../../views/home.php';
        } else {
            echo $conn->error;
        }
    } else {
        echo "This account invalid or already verified";
    }
} else {
    die("Something went wrong");
}
