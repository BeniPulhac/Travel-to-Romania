<?php

$formDataSignIn = $_POST;
$emailSignIn = $_POST['emailSignIn'];
$passwordSignIn = $_POST['passwordSignIn'];
$verificationEmail = false;
$verificationPassword = false;

$responseSignIn = [
    'emailSignIn' => [
        'isErrorSignIn' => false,
        'errorMsgSignIn' => '',
    ],
    'passwordSignIn' => [
        'isErrorSignIn' => false,
        'errorMsgSignIn' => [
            'isPasswordError' => false,
            'customError' => '',
            'uppercase' => '',
            'lowercase' => '',
            'number' => '',
            'specialChars' => '',
        ]
    ]
];

//------------------------------------------------Sign in------------------------------------------------

if(empty($emailSignIn)) {

    $responseSignIn['emailSignIn']['isErrorSignIn'] = true;
    $responseSignIn['emailSignIn']['errorMsgSignIn'] = '*Email is required';
} else {
    //Need verification from database....is there a username with this email?
    if($verificationEmail === false) {
//            $emailSignIn = testInput($emailSignIn);
            $verificationEmail = true;
        }
}


if(empty($passwordSignIn)) {

    $responseSignIn['passwordSignIn']['isErrorSignIn'] = true;
    $responseSignIn['passwordSignIn']['errorMsgSignIn']['isPasswordError'] = true;
    $responseSignIn['passwordSignIn']['errorMsgSignIn']['customError'] = '*Password is required testing'. "\r\n";

} else {
    //Need verification....is the password correct?
    if($verificationPassword === false) {
//      $passwordSignIn = testInput($passwordSignIn);
        $verificationPassword = true;
    }
}


//
//function testInput($passwordSignIn) {
//    $passwordSignIn = trim($passwordSignIn);
//    $passwordSignIn = stripslashes($passwordSignIn);
//    $passwordSignIn = htmlspecialchars($passwordSignIn);
//    return $passwordSignIn;
//}


//Send data back to FE
if($verificationEmail && $verificationPassword) {
    $success = 'Success';
    echo json_encode($success);
} else {
    echo json_encode($responseSignIn);
}

