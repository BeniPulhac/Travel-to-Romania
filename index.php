<?php
session_start();
setcookie('testing', 'test', time() - 3600, "/");
$toggleCookies = ['isCookies' => ''];
setrawcookie('bannerCookies', json_encode($toggleCookies), time() + 86400 * 30, "/");


//--------------------- Load the main page ---------------------
include 'views/home.php';
//-------------------- /Load the main page ---------------------


//--------------------- Testing ---------------------



//-------------------- /Testing ---------------------
