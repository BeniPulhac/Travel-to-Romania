<?php
//$toggleCookies = ['isCookies' => 'Yes'];
//setrawcookie('bannerCookies', json_encode($toggleCookies), time() + 3600, "/");
$cookiesAccept = json_decode($_COOKIE['bannerCookies']);
$cookiesAccept->isCookies = 'Yes';
setrawcookie('bannerCookies', json_encode($cookiesAccept), time() + 3600, "/");

