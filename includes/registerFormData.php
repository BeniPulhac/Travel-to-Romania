<?php
include '../dataBase.php';

//------------------------------------------------Register------------------------------------------------

$conn = $GLOBALS['conn'];
$formDataRegister = $_POST;
$firstNameRegister = $_POST['firstNameRegister'];
$lastNameRegister = $_POST['lastNameRegister'];
$emailRegister = $_POST['emailRegister'];
$passwordRegister = $_POST['passwordRegister'];
$samePasswordRegister = $_POST['samePasswordRegister'];
$encryptedPassword = md5($passwordRegister);


$errorsArray = array();

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
    $specialChars = preg_match("/[\!'^£$%&*()}{@#~?><>,|=_+¬-]/", $passwordRegister);

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


//Check if we already have the email in DB
$selectEmail = "SELECT * FROM users WHERE email = '$emailRegister'";
$select = mysqli_query($conn, $selectEmail);
if(mysqli_num_rows($select)) {
    $errorsArray['emailRegister'] = '*This email address is already used!';
}

if (!empty($errorsArray)) {
    //Send the errors to the FE
    echo json_encode($errorsArray);
} else {
    $token = md5($emailRegister).rand(10,9999);
//    $time = date('Y-m-d, H:i:s', time());

        //Create user in DB
        $sql = "INSERT INTO users (first_name, last_name, email, password, email_verification)
                VALUES ('$firstNameRegister', '$lastNameRegister', '$emailRegister', '$encryptedPassword', '$token')";

    if ($conn->query($sql) === TRUE) {
        $to = $emailRegister;
        $subject = 'Email Verification';
        $message = "<a href = 'https://l_pulhac.internship.rankingcoach.com/includes/components/verifyEmail.php?token=$token'>Register Account</a>";
        $headers = "From: Travel to Romania <beny.liviu19@gmail.com>\r\n";
        $headers .= "Replay-To: beny.liviu19@gmail.com\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1';
        mail($to, $subject, $message, $headers);

        //If we send the data to the DB we show to FE success response
        echo json_encode("New record created successfully");
    } else {
        //Show the server error
        echo "Error: " . $sql . "<br />" . $conn->error;
    }
}


//Close Connection
$conn->close();