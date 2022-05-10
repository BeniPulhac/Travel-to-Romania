<?php
//$servername = "internship.rankingcoach.com:13306";
//$username = "l.pulhac";
//$password = "ZQAWsZfTuw4PboJ";
//$dbname = "l_pulhac";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

//------------------------------------------------Register------------------------------------------------

$formDataRegister = $_POST;
$firstNameRegister = $_POST['firstNameRegister'];

$lastNameRegister = $_POST['lastNameRegister'];

$emailRegister = $_POST['emailRegister'];

$passwordRegister = $_POST['passwordRegister'];

$samePasswordRegister = $_POST['samePasswordRegister'];
$verificationFirstNameRegister = false;
$verificationLastNameRegister = false;
$verificationEmailRegister = false;
$verificationPasswordRegister = false;


$responseRegister = [
    'firstNameRegister' => [
        'isErrorRegister' => false,
        'errorMsgRegister' => '',
    ],

    'lastNameRegister' => [
        'isErrorRegister' => false,
        'errorMsgRegister' => '',
    ],

    'emailRegister' => [
        'isErrorRegister' => false,
        'errorMsgRegister' => '',
    ],

    'passwordRegister' => [
        'isErrorRegister' => false,
        'errorMsgRegister' => [
            'isPasswordError' => false,
            'customError' => '',
            'uppercase' => '',
            'lowercase' => '',
            'number' => '',
            'specialChars' => '',
        ]
    ],

    'samePasswordRegister' => [
        'isErrorRegister' => false,
        'errorMsgRegister' => '',
    ]
];

if(empty($firstNameRegister)) {
    $responseRegister['firstNameRegister']['isErrorRegister'] = true;
    $responseRegister['firstNameRegister']['errorMsgRegister'] = '*First name is required';
} else {
    $uppercaseRegister = preg_match('@[A-Z]@', $firstNameRegister);
    $lowercaseRegister = preg_match('@[a-z]@', $firstNameRegister);

    if($uppercaseRegister || $lowercaseRegister) {
        //Success
        $verificationFirstNameRegister = true;
    } else {
        $responseRegister['firstNameRegister']['isErrorRegister'] = true;
        $responseRegister['firstNameRegister']['errorMsgRegister'] = '*Use only A-Z lower and uppercase letters';
    }
}

if(empty($lastNameRegister)) {
    $responseRegister['lastNameRegister']['isErrorRegister'] = true;
    $responseRegister['lastNameRegister']['errorMsgRegister'] = '*Last name is required';
} else {
    $uppercaseRegisterLastName = preg_match('@[A-Z]@', $lastNameRegister);
    $lowercaseRegisterLastName = preg_match('@[a-z]@', $lastNameRegister);

    if($uppercaseRegisterLastName || $lowercaseRegisterLastName) {
        //Success
        $verificationLastNameRegister = true;
    } else {
        $responseRegister['lastNameRegister']['isErrorRegister'] = true;
        $responseRegister['lastNameRegister']['errorMsgRegister'] = '*Use only A-Z lower and uppercase letters';
    }
}


if(empty($emailRegister)) {

    $responseRegister['emailRegister']['isErrorRegister'] = true;
    $responseRegister['emailRegister']['errorMsgRegister'] = '*Email is required';
} else {

    if(!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
        $responseRegister['emailRegister']['isErrorRegister'] = true;
        $responseRegister['emailRegister']['errorMsgRegister'] = '*Invalid email format';
    } else {

        if($verificationEmailRegister === false) {
//            $emailSignIn = testInput($emailSignIn);
            $verificationEmailRegister = true;
        }
    }
}


if(empty($passwordRegister)) {

    $responseRegister['passwordRegister']['isErrorRegister'] = true;
    $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
    $responseRegister['passwordRegister']['errorMsgRegister']['customError'] = '*Password is required'. "\r\n";
//    $responseSignIn['passwordSignIn']['errorMsgSignIn']['customError'] = '*Password is required' . "\r\n" . "*Should be at least 8 characters in length and at least one lower case letter". "\r\n" . '*Should include at least one upper case letter ' . "\r\n" . '*Should include at least one number' . "\r\n";
} else {

    $uppercase = preg_match('@[A-Z]@', $passwordRegister);
    $lowercase = preg_match('@[a-z]@', $passwordRegister);
    $number    = preg_match('@[0-9]@', $passwordRegister);
    $specialChars = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $passwordRegister);

    if(!$uppercase) {
        $responseRegister['passwordRegister']['isErrorRegister'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
        $responseSignIn['passwordRegister']['errorMsgRegister']['uppercase'] = '*Should include at least one upper case letter ' . "\r\n";
    } else if(!$lowercase || strlen($passwordRegister) < 8) {
        $responseRegister['passwordRegister']['isErrorRegister'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['lowercase'] = "*Should be at least 8 characters in length and at least one lower case letter". "\r\n";
    } else if(!$number) {
        $responseRegister['passwordRegister']['isErrorRegister'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['number'] = '*Should include at least one number' . "\r\n";
    } else if(!$specialChars) {
        $responseRegister['passwordRegister']['isErrorRegister'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
        $responseRegister['passwordRegister']['errorMsgRegister']['specialChars'] = '*Should include at least one special character' . "\r\n";
    } else {
        if($verificationPasswordRegister === false) {
//                $passwordSignIn = testInput($passwordSignIn);
            $verificationPasswordRegister = true;
        }
    }
}


if(empty($samePasswordRegister)) {
    $responseRegister['samePasswordRegister']['isErrorRegister'] = true;
    $responseRegister['samePasswordRegister']['errorMsgRegister'] = '*Retype password is required';
} else {
    if($passwordRegister !== $samePasswordRegister) {

        $responseRegister['samePasswordRegister']['isErrorRegister'] = true;
        $responseRegister['samePasswordRegister']['errorMsgRegister'] = 'Passwords not the same';
    } else {
        //SUCCESS
    }
}

//$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('Dennis', 'Strati', 'd.stratinski@rankingcoach.com', 'asd123Q@')";
//mysqli_query($conn, $sql);

//Send data back to FE
if($verificationFirstNameRegister && $verificationLastNameRegister && $verificationEmailRegister  && $verificationPasswordRegister) {
    $successRegister = 'Success';
    echo json_encode($successRegister);
} else {
    echo json_encode($responseRegister);
}