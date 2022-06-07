<?php

    if(isset($_POST['action'])) {
        if($_POST['action'] == 'accept') {
            $toggleCookies = ['isCookies' => 'Yes'];
            setrawcookie('bannerCookies', json_encode($toggleCookies), time() + 86400 * 30, "/");
        } elseif($_POST['action'] == 'decline') {
            $toggleCookies = ['isCookies' => 'No'];
            setrawcookie('bannerCookies', json_encode($toggleCookies), time() + 86400, "/");
        }
    }

