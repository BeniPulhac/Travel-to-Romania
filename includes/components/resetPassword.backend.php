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


//  Errors
$errors = [
    'passwordChange' => '',
    'passwordChange2' => '',
    'passwordMatch' => '',
    'token' => '',
    'status' => '',
];

//  Handle password Errors
//if(empty($passwordChange)) {
//    $errors['passwordChange'] = '*Password is required';
//} else {
//    $sql = "SELECT * FROM reset WHERE userid = '$userid'";
//    $result = mysqli_query($conn, $sql);
//
//    if(mysqli_num_rows($result) > 0) {
//        $row = mysqli_fetch_assoc($result);
//
//        if($userid === $row['userid']) {
//            if($row['resetExpires'] < date('U') ) {
//                $errors['token'] = '*Token expired';
//                $sql2 = "DELETE FROM reset WHERE userid = '$userid'";
//                $result2 = mysqli_query($conn, $sql2);
//            } else {
//                $email = $row['resetEmail'];
//                $passwordChange = md5($passwordChange);
//                $sql3 = "UPDATE users SET password = '$passwordChange' WHERE email = '$email'";
//                $result3 = mysqli_query($conn, $sql3);
//                $errors['status'] = 'Success';
//            }
//        } else {
//            $errors['token'] = '*Token used is not for this password';
//        }
//    } else {
//        $errors['passwordChange'] = '*There is no token in database for this password';
//    }
//}
//
//if(empty($passwordChange2)) {
//    $errors['passwordChange2'] = '*Retype password is required.';
//} elseif($passwordChange !== $passwordChange2) {
//    $errors['passwordMatch'] = '*Passwords do not match';
//}
//
//echo json_encode($errors);
//mysqli_close($conn);

//  Error handling switch

switch ($passwordChange) {
    case '' :
        $errors['passwordChange'] = '*Password is required';
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

                    $sql3 = "UPDATE users SET password = '$passwordChange' WHERE id = '$userid'";   //if not put the right password at the right email use $id instead
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

if(empty($passwordChange2)) {
    $errors['passwordChange2'] = '*Retype password is required.';
} elseif($passwordChange !== $passwordChange2) {
    $errors['passwordMatch'] = '*Passwords do not match';
}

echo json_encode($errors);
mysqli_close($conn);