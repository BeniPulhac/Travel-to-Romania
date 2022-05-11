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
//$verificationFirstNameRegister = false;
//$verificationLastNameRegister = false;
//$verificationEmailRegister = false;
//$verificationPasswordRegister = false;
//$verificationSamePasswordRegister = false;


//$responseRegister = [
//    'firstNameRegister' => [
//        'isErrorRegister' => false,
//        'errorMsgRegister' => '',
//    ],
//
//    'lastNameRegister' => [
//        'isErrorRegister' => false,
//        'errorMsgRegister' => '',
//    ],
//
//    'emailRegister' => [
//        'isErrorRegister' => false,
//        'errorMsgRegister' => '',
//    ],
//
//    'passwordRegister' => [
//        'isErrorRegister' => false,
//        'errorMsgRegister' => [
//            'isPasswordError' => false,
//            'customError' => '',
//            'uppercase' => '',
//            'lowercase' => '',
//            'number' => '',
//            'specialChars' => '',
//        ]
//    ],
//
//    'samePasswordRegister' => [
//        'isErrorRegister' => false,
//        'errorMsgRegister' => '',
//    ]
//];

$errorsArray =array();

if(empty($firstNameRegister)) {
    $errorsArray['firstNameRegister'] = '*First name is required';
//    $responseRegister['firstNameRegister']['isErrorRegister'] = true;
//    $responseRegister['firstNameRegister']['errorMsgRegister'] = '*First name is required';
} else {
    $uppercaseRegister = preg_match('@[A-Z]@', $firstNameRegister);
    $lowercaseRegister = preg_match('@[a-z]@', $firstNameRegister);

    if(!($uppercaseRegister || $lowercaseRegister)) {
        $errorsArray['firstNameRegister'] = '*Use only A-Z lower and uppercase letters';
        //Success
//        $verificationFirstNameRegister = true;
    }
//    else {
//        $responseRegister['firstNameRegister']['isErrorRegister'] = true;
//        $responseRegister['firstNameRegister']['errorMsgRegister'] = '*Use only A-Z lower and uppercase letters';
//    }
}

if(empty($lastNameRegister)) {
//    $responseRegister['lastNameRegister']['isErrorRegister'] = true;
//    $responseRegister['lastNameRegister']['errorMsgRegister'] = '*Last name is required';
    $errorsArray['lastNameRegister'] = '*Last name is required';
} else {
    $uppercaseRegisterLastName = preg_match('@[A-Z]@', $lastNameRegister);
    $lowercaseRegisterLastName = preg_match('@[a-z]@', $lastNameRegister);

    if(!($uppercaseRegisterLastName || $lowercaseRegisterLastName)) {
        $errorsArray['lastNameRegister'] = '*Use only A-Z lower and uppercase letters';

        //Success
//        $verificationLastNameRegister = true;
    }
//    else {
//        $responseRegister['lastNameRegister']['isErrorRegister'] = true;
//        $responseRegister['lastNameRegister']['errorMsgRegister'] = '*Use only A-Z lower and uppercase letters';
//    }
}


if(empty($emailRegister)) {

//    $responseRegister['emailRegister']['isErrorRegister'] = true;
//    $responseRegister['emailRegister']['errorMsgRegister'] = '*Email is required';
    $errorsArray['emailRegister'] = '*Email is required';
} else {

    if(!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
//        $responseRegister['emailRegister']['isErrorRegister'] = true;
//        $responseRegister['emailRegister']['errorMsgRegister'] = '*Invalid email format';
        $errorsArray['emailRegister'] = '*Invalid email format';
    }
//    else {
//
//        if($verificationEmailRegister === false) {
//            //Success
//            $verificationEmailRegister = true;
//        }
//    }
}


if(empty($passwordRegister)) {

//    $responseRegister['passwordRegister']['isErrorRegister'] = true;
//    $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
    $errorsArray['passwordRegister'] = '*Password is required';
//    $responseSignIn['passwordSignIn']['errorMsgSignIn']['customError'] = '*Password is required' . "\r\n" . "*Should be at least 8 characters in length and at least one lower case letter". "\r\n" . '*Should include at least one upper case letter ' . "\r\n" . '*Should include at least one number' . "\r\n";
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

//    if(!$uppercase) {
//        $responseRegister['passwordRegister']['isErrorRegister'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
//        $responseSignIn['passwordRegister']['errorMsgRegister']['uppercase'] = '*Should include at least one upper case letter ' . "\r\n";
//    } else if(!$lowercase || strlen($passwordRegister) < 8) {
//        $responseRegister['passwordRegister']['isErrorRegister'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['lowercase'] = "*Should be at least 8 characters in length and at least one lower case letter". "\r\n";
//    } else if(!$number) {
//        $responseRegister['passwordRegister']['isErrorRegister'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['number'] = '*Should include at least one number' . "\r\n";
//    } else if(!$specialChars) {
//        $responseRegister['passwordRegister']['isErrorRegister'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['isPasswordError'] = true;
//        $responseRegister['passwordRegister']['errorMsgRegister']['specialChars'] = '*Should include at least one special character' . "\r\n";
//    } else {
//        if($verificationPasswordRegister === false) {
//            //Success
//            $verificationPasswordRegister = true;
//        }
//    }
}


if(empty($samePasswordRegister)) {
//    $responseRegister['samePasswordRegister']['isErrorRegister'] = true;
//    $responseRegister['samePasswordRegister']['errorMsgRegister'] = '*Retype password is required';
    $errorsArray['samePasswordRegister'] = '*Retype password is required.';
} else {
    if($passwordRegister !== $samePasswordRegister) {

//        $responseRegister['samePasswordRegister']['isErrorRegister'] = true;
//        $responseRegister['samePasswordRegister']['errorMsgRegister'] = 'Passwords not the same';
        $errorsArray['samePasswordRegister'] = '*Passwords do not match.';
    }
//    else {
//        if($verificationSamePasswordRegister === false) {
//            //SUCCESS
//            $verificationSamePasswordRegister = true;
//        }
//
//    }
}

if($_POST['testCheckMark'] == 'false') {
    $errorsArray['testCheckMark'] = '*Check is required';
}


////Insert values into DB
//$sql = "INSERT INTO users (first_name, last_name, email, password)
//VALUES ('$firstNameRegister', '$lastNameRegister', '$emailRegister', '$passwordRegister')";
////mysqli_query($conn, $sql);


//Send data back to FE
//if($verificationFirstNameRegister && $verificationLastNameRegister && $verificationEmailRegister  && $verificationPasswordRegister && $verificationSamePasswordRegister) {
//    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br />" . $conn->error;
//    }
//} else {
//    echo json_encode($responseRegister);
//}

if (!empty($errorsArray)) {
    echo json_encode($errorsArray);
} else {
    //create user in DB
    if (true) {

    } else {
        $errorsArray['sqlError'] = "Internal server error.";
    }
}
//else {
//
//}

//Close Connection
//$conn->close();