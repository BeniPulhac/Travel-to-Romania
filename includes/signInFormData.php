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

if(empty($emailSignIn)) {

    $responseSignIn['emailSignIn']['isErrorSignIn'] = true;
    $responseSignIn['emailSignIn']['errorMsgSignIn'] = '*Email is required';
} else {

    if(!filter_var($emailSignIn, FILTER_VALIDATE_EMAIL)) {
        $responseSignIn['emailSignIn']['isErrorSignIn'] = true;
        $responseSignIn['emailSignIn']['errorMsgSignIn'] = '*Invalid email format';
    } else {

        if($verificationEmail === false) {
            $emailSignIn = testInput($emailSignIn);
            $verificationEmail = true;
        }
    }
}



if(empty($passwordSignIn)) {

    $responseSignIn['passwordSignIn']['isErrorSignIn'] = true;
    $responseSignIn['passwordSignIn']['errorMsgSignIn']['isPasswordError'] = true;
    $responseSignIn['passwordSignIn']['errorMsgSignIn']['customError'] = '*Password is required' . "\r\n" . "*Should be at least 8 characters in length and at least one lower case letter". "\r\n" . '*Should include at least one upper case letter ' . "\r\n" . '*Should include at least one number' . "\r\n";
} else {

        $uppercase = preg_match('@[A-Z]@', $passwordSignIn);
        $lowercase = preg_match('@[a-z]@', $passwordSignIn);
        $number    = preg_match('@[0-9]@', $passwordSignIn);
        $specialChars = preg_match("/[\[^\'£$%^&*()}{@:\'#~?><>,;@\|\\-=\-_+\-¬\`\]]/", $passwordSignIn);

        if(!$uppercase) {
            $responseSignIn['passwordSignIn']['isErrorSignIn'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['isPasswordError'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['uppercase'] = '*Should include at least one upper case letter ' . "\r\n";
        } else if(!$lowercase || strlen($passwordSignIn) < 8) {
            $responseSignIn['passwordSignIn']['isErrorSignIn'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['isPasswordError'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['lowercase'] = "*Should be at least 8 characters in length and at least one lower case letter". "\r\n";
        } else if(!$number) {
            $responseSignIn['passwordSignIn']['isErrorSignIn'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['isPasswordError'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['number'] = '*Should include at least one number' . "\r\n";
        } else if(!$specialChars) {
            $responseSignIn['passwordSignIn']['isErrorSignIn'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['isPasswordError'] = true;
            $responseSignIn['passwordSignIn']['errorMsgSignIn']['specialChars'] = '*Should include at least one special character' . "\r\n";
        } else {
            if($verificationPassword === false) {
                $passwordSignIn = testInput($passwordSignIn);
                $verificationPassword = true;
            }

        }
}


//
function testInput($passwordSignIn) {
    $passwordSignIn = trim($passwordSignIn);
    $passwordSignIn = stripslashes($passwordSignIn);
    $passwordSignIn = htmlspecialchars($passwordSignIn);
    return $passwordSignIn;
}


//Send data back to FE
if($verificationEmail && $verificationPassword) {
    $success = 'Success';
    echo json_encode($success);
} else {
    echo json_encode($responseSignIn);
}

