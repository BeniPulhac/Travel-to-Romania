<?php
session_start();

include '../dataBase.php';

//--------------------------------------------------------------------------------------------------------
$conn = $GLOBALS['conn'];
$formDataSignIn = $_POST;
$emailSignIn = $_POST['emailSignIn'];
$passwordSignIn = $_POST['passwordSignIn'];


//to prevent from mysqli injection
$emailSignIn = stripcslashes($emailSignIn);
$passwordSignIn = stripcslashes($passwordSignIn);
$emailSignIn = mysqli_real_escape_string($conn, $emailSignIn);
$passwordSignIn = mysqli_real_escape_string($conn, $passwordSignIn);

$errorsSignIn = array();
$passwordSignInEncripted = md5($passwordSignIn);

//------------------------------------------------Sign in------------------------------------------------
//Search in DB
$selectData = "SELECT * FROM users WHERE email = '$emailSignIn' AND password = '$passwordSignInEncripted'";
$select = mysqli_query($conn, $selectData);
$row = mysqli_fetch_array($select, MYSQLI_ASSOC);


$count = mysqli_num_rows($select);


if($count == 1) {
    echo json_encode('Login successful');

    $_SESSION['userid'] = $row['id'];
    $_SESSION['email'] = $row['email'];

} else {

    if(empty($emailSignIn)) {
        $errorsSignIn['emailSignInEmpty'] = '*Email is required';
    } else {
        if(!filter_var($emailSignIn, FILTER_VALIDATE_EMAIL)) {
            $errorsSignIn['emailSignInValid'] = '*Invalid email format';
        }
    }

    if(empty($passwordSignIn)) {
        $errorsSignIn['passwordSignInEmpty'] = '*Password is required';
    }

    $errorsSignIn['emailSignIn'] = '*The email or password is not in the database';

    echo json_encode($errorsSignIn);
}

//Close Connection
$conn->close();
