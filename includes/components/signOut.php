<?php
session_start();
session_destroy();
setrawcookie('remember_me', '', time() - 86400, '/');