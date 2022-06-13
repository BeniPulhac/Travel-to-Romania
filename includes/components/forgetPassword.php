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
} else if($count == 0) {
    $errors['emailError'] = '*No account with this email';
} else {
//    echo json_encode('Email sent. Check your email');
    $check = true;
    sendEmailToken($email, $conn);
}

if($check === false) {
    echo json_encode($errors);
}

//  Function
function sendEmailToken($email, $conn) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $expires = date('U') + 1800;
    $url = "https://l_pulhac.internship.rankingcoach.com/resetPassword.php?selector=" . $selector . "&token=" . bin2hex($token) . "&validate=" . $expires;


    //If we have token already, delete it
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo json_encode('There was an error at delete from database!');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }

    //Insert data in db
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo json_encode('There was an error at insert into database!');
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }


    mysqli_stmt_close($stmt);
    //Close Connection
    $conn->close();

    $to = $email;

    $subject = 'Reset your password';

    $message = '<p>We received a password reset request. The link to reset your password is below. If you didn\'t make this request, you can ignore this email</p>';
    $message .= '<br>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . 'Reset Password' . '</a></p>';

    $headers = "From: Travel to Romania <beny.liviu19@gmail.com>\r\n";
    $headers .= "Replay-To: beny.liviu19@gmail.com\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1';

    mail($to, $subject, $message, $headers);
    echo json_encode('Email sent. Check your email');
//    header("Location: ../../resetPassword.php?reset=success");
}



