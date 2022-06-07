<?php

$toggleCookies = json_decode($_COOKIE['bannerCookies']);
$toggleCookies->isCookies = 'No';
setrawcookie('bannerCookies', json_encode($toggleCookies), time() + 3600, "/");
