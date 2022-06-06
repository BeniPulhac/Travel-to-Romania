<?php
$toggleCookies = ['isCookies' => 'No'];
setrawcookie('bannerCookies', json_encode($toggleCookies), time() + 3600, "/");
//$cookiesAccept = json_decode($_COOKIE['bannerCookies']);
//$cookiesAccept->isCookies = 'No';

