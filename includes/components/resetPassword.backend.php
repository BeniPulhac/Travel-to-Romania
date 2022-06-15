<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$userid = $_POST['selector'];
$token = $_POST['token'];
$token = bin2hex($token);
$passwordChange = $_POST['passwordChange'];
$passwordChange2 = $_POST['passwordChange2'];

//  To prevent from mysqli injection
$passwordChange = stripcslashes($passwordChange);
$passwordChange = mysqli_real_escape_string($conn, $passwordChange);
$passwordChange2 = stripcslashes($passwordChange2);
$passwordChange2 = mysqli_real_escape_string($conn, $passwordChange2);


//  Arrays
$errors = [
    'passwordChange' => '',
    'passwordChange2' => '',
    'passwordMatch' => '',
    'token' => '',
    'status' => '',
];

$passwords = [$passwordChange, $passwordChange2];


//  Error handling switch
switch ($passwords) {
    case $passwordChange == '' && $passwordChange2 == '':
        $errors['passwordChange'] = '*Password is required';
        $errors['passwordChange2'] = '*Retype password is required.';
        break;

    case strlen($passwordChange) < 8 :
        $errors['passwordChange'] = '*Password should be at least 8 characters long.';
        break;

    case !preg_match('@[A-Z]@', $passwordChange) :
        $errors['passwordChange'] = '*Should include at least 1 uppercase letter';
        break;

    case !preg_match('@[a-z]@', $passwordChange) :
        $errors['passwordChange'] = '*Should include at least 1 lowercase letter';
        break;

    case !preg_match('@[0-9]@', $passwordChange) :
        $errors['passwordChange'] = '*Should include at least 1 number';
        break;

    case !preg_match("/[\!'^£$%&*()}{@#~?><>,|=_+¬-]/", $passwordChange) :
        $errors['passwordChange'] = '*Should include at least 1 special character';
        break;

    case $passwordChange !== $passwordChange2 :
        $errors['passwordMatch'] = '*Passwords do not match';
        break;

    default :
        $sql = "SELECT * FROM reset WHERE userid = '$userid'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            if($userid === $row['userid']) {
                if($row['resetExpires'] < date('U') ) {
                    $errors['token'] = '*Token expired';

                    $sql2 = "DELETE FROM reset WHERE userid = '$userid'";
                    $result2 = mysqli_query($conn, $sql2);
                } else {
                    $id = $row['userid'];
                    $passwordChange = md5($passwordChange);
                    $passwordChange2 = md5($passwordChange2);

                    $sql3 = "UPDATE users SET password = '$passwordChange' WHERE id = '$userid'";
                    $result3 = mysqli_query($conn, $sql3);
                    $errors['status'] = 'Success';

                    //If we change the password we delete the token
                    $sql4 = "DELETE FROM reset WHERE userid = '$userid'";
                    $result4 = mysqli_query($conn, $sql4);
                }
            } else {
                $errors['token'] = '*Token used is not for this user';
            }
        } else {
            $errors['passwordChange'] = '*There is no token in database for this user';
        }
}


//  Send data back to JS
echo json_encode($errors);
mysqli_close($conn);