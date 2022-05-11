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
if(mysqli_num_rows($select)) {
    $errorsArray['emailSignIn'] = '*This email is not in the database';
    $errorsArray['passwordSignIn'] = '*This password is not in the database';
} else {
    if(!empty($errorsSignIn)) {
        echo json_encode($errorsSignIn);
    }
}


//Close Connection
$conn->close();
