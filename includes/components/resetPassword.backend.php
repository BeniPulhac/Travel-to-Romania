<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$selector = $_POST['selector'];
$token = $_POST['token'];
$token = bin2hex($token);
$passwordChange = $_POST['passwordChange'];
$passwordChange2 = $_POST['passwordChange2'];

//to prevent from mysqli injection
$passwordChange = stripcslashes($passwordChange);
$passwordChange = mysqli_real_escape_string($conn, $passwordChange);
$passwordChange2 = stripcslashes($passwordChange2);
$passwordChange2 = mysqli_real_escape_string($conn, $passwordChange2);

//Errors
$errors = [
    'passwordChange' => '',
    'passwordChange2' => '',
    'passwordMatch' => '',
    'token' => '',
    'status' => '',
    'test1' => '',
    'test2' => ''
];

//Handle password Errors
if(empty($passwordChange)) {
    $errors['passwordChange'] = '*Password is required';
} else {
    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector = '$selector'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $errors['test1'] = $selector;
        $errors['test2'] = $row['pwdResetSelector'];
        if($selector === $row['pwdResetSelector']) {
            if($row['pwdResetExpires'] < date('U') ) {
                $errors['token'] = 'Token expired';
                $sql2 = "DELETE FROM pwdReset WHERE pwdResetSelector = '$selector'";
                $result2 = mysqli_query($conn, $sql2);
            } else {
                $email = $row['pwdResetEmail'];
                $passwordChange = md5($passwordChange);
                $sql3 = "UPDATE users SET password = '$passwordChange' WHERE email = '$email'";
                $result3 = mysqli_query($conn, $sql3);
                $errors['status'] = 'success';
            }
        } else {
            $errors['token'] = 'Token used is not for this password';
        }
    } else {
        $errors['passwordChange'] = 'There is no token in database for this password';
    }
}

if(empty($passwordChange2)) {
    $errors['passwordChange2'] = '*Retype password is required.';
} elseif($passwordChange !== $passwordChange2) {
    $errors['passwordMatch'] = '*Passwords do not match';
}

echo json_encode($errors);

mysqli_close($conn);