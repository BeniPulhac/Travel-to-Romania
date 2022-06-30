<?php

$servername = "internship.rankingcoach.com:13306";
$username = "l.pulhac";
$password = "ZQAWsZfTuw4PboJ";
$dbname = "l_pulhac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8mb4');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$GLOBALS['conn'] = $conn;

