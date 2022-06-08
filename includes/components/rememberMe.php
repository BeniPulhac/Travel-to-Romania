<?php
$email = $_POST['email'];

setrawcookie('remember_me', $email, time() + 86400 * 30, '/');