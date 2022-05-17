<?php
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
$passwordSignIn = md5($passwordSignIn);

//------------------------------------------------Sign in------------------------------------------------

//Search in DB
$selectData = "SELECT * FROM users WHERE email = '$emailSignIn' AND password = '$passwordSignIn'";
$select = mysqli_query($conn, $selectData);
$row = mysqli_fetch_array($select, MYSQLI_ASSOC);
//var_dump($passwordSignIn);die;
$count = mysqli_num_rows($select);

if($count == 1) {
    echo json_encode('Login successful');
} else {


    if(empty($emailSignIn)) {
        $errorsSignIn['emailSignIn'] = '*Email is required';
    } else {
        $errorsSignIn['emailSignIn'] = '*This email is not in the database';
    }

    if(empty($passwordSignIn)) {
        $errorsSignIn['passwordSignIn'] = '*Password is required';
    } else {
        $errorsSignIn['passwordSignIn'] = '*This password is not in the database';
    }

    echo json_encode($errorsSignIn);
}


//Close Connection
$conn->close();
