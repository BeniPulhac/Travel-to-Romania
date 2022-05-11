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

//include '../dataBase.php';

//------------------------------------------------Register------------------------------------------------

$formDataRegister = $_POST;
$firstNameRegister = $_POST['firstNameRegister'];
$lastNameRegister = $_POST['lastNameRegister'];
$emailRegister = $_POST['emailRegister'];
$passwordRegister = $_POST['passwordRegister'];
$samePasswordRegister = $_POST['samePasswordRegister'];

$errorsArray =array();

if(empty($firstNameRegister)) {
    $errorsArray['firstNameRegister'] = '*First name is required';
} else {
    $uppercaseRegister = preg_match('@[A-Z]@', $firstNameRegister);
    $lowercaseRegister = preg_match('@[a-z]@', $firstNameRegister);

    if(!($uppercaseRegister || $lowercaseRegister)) {
        $errorsArray['firstNameRegister'] = '*Use only A-Z lower and uppercase letters';

    }
}

if(empty($lastNameRegister)) {

    $errorsArray['lastNameRegister'] = '*Last name is required';
} else {
    $uppercaseRegisterLastName = preg_match('@[A-Z]@', $lastNameRegister);
    $lowercaseRegisterLastName = preg_match('@[a-z]@', $lastNameRegister);

    if(!($uppercaseRegisterLastName || $lowercaseRegisterLastName)) {
        $errorsArray['lastNameRegister'] = '*Use only A-Z lower and uppercase letters';
    }
}


if(empty($emailRegister)) {
    $errorsArray['emailRegister'] = '*Email is required';
} else {

    if(!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
        $errorsArray['emailRegister'] = '*Invalid email format';
    }
}


if(empty($passwordRegister)) {

    $errorsArray['passwordRegister'] = '*Password is required';

} elseif(strlen($passwordRegister) < 8) {

    $errorsArray['passwordRegister'] = '*Password should be at least 8 characters long.';

} else {
    $uppercase = preg_match('@[A-Z]@', $passwordRegister);
    $lowercase = preg_match('@[a-z]@', $passwordRegister);
    $number    = preg_match('@[0-9]@', $passwordRegister);
    $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $passwordRegister);

    if (!($uppercase && $lowercase && $number && $specialChars)) {
        $errorsArray['passwordRegister'] = '*Should include lowercase and uppercase letters, numbers and symbols.';
    }
}


if(empty($samePasswordRegister)) {
    $errorsArray['samePasswordRegister'] = '*Retype password is required.';
} else {
    if($passwordRegister !== $samePasswordRegister) {
        $errorsArray['samePasswordRegister'] = '*Passwords do not match.';
    }
}

if($_POST['testCheckMark'] == 'false') {
    $errorsArray['testCheckMark'] = '*Check is required';
}


if (!empty($errorsArray)) {
    echo json_encode($errorsArray);
} else {
    //create user in DB
    if (true) {

    } else {
        $errorsArray['sqlError'] = "Internal server error.";
    }
}

//Close Connection
//$conn->close();