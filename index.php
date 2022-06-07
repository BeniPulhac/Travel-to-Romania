<?php
//setrawcookie('remember_me', 'beny.liviu19@gmail.com', time() + 8640 * 30, "/");die;
session_start();
include 'dataBase.php';
$conn = $GLOBALS['conn'];

if(!isset($_SESSION['userid']) && isset($_COOKIE['remember_me'])) {
    $sql = "SELECT * FROM users WHERE email = '" . $_COOKIE['remember_me'] . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $_SESSION['email'] = $row['email'];
    $_SESSION['userid'] = $row['id'];

}
//setcookie('testing', 'test', time() - 3600, "/");


//--------------------- Load the main page ---------------------
include 'views/home.php';
//-------------------- /Load the main page ---------------------


