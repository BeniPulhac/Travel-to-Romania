<?php
$servername = "internship.rankingcoach.com:13306";
$username = "l.pulhac";
$password = "ZQAWsZfTuw4PboJ";
$dbname = "l_pulhac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//--------------------------------------------------------------------------------------------------------
$formDataSignIn = $_POST;
$emailSignIn = $_POST['emailSignIn'];
$passwordSignIn = $_POST['passwordSignIn'];

//to prevent from mysqli injection
$emailSignIn = stripcslashes($emailSignIn);
$passwordSignIn = stripcslashes($passwordSignIn);
$emailSignIn = mysqli_real_escape_string($conn, $emailSignIn);
$passwordSignIn = mysqli_real_escape_string($conn, $passwordSignIn);

$errorsSignIn = array();


//------------------------------------------------Sign in------------------------------------------------

if(empty($emailSignIn)) {
    $errorsSignIn['emailSignIn'] = '*Email is required';
}

if(empty($passwordSignIn)) {
    $errorsSignIn['passwordSignIn'] = '*Password is required';
}

//Search in DB
$selectData = "SELECT * FROM users WHERE email = '$emailSignIn' AND password = '$passwordSignIn'";
$select = mysqli_query($conn, $selectData);
$row = mysqli_fetch_array($select, MYSQLI_ASSOC);
$count = mysqli_num_rows($select);
if($count == 1) {
    echo json_encode('Login successful');
} else {
    $errorsSignIn['emailSignIn'] = '*This email is not in the database';
    $errorsSignIn['passwordSignIn'] = '*This password is not in the database';

    echo json_encode($errorsSignIn);
}

//var_dump($selectData);
//
//if(!empty($errorsSignIn)) {
//    echo json_encode($errorsSignIn);
//} else {
//    echo json_encode('Success');
//}


//Close Connection
$conn->close();
