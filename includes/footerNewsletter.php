<?php
$servername = "internship.rankingcoach.com:13306";
$username = "l.pulhac";
$password = "ZQAWsZfTuw4PboJ";
$dbname = "l_pulhac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$newsletter = $_POST;
$newsletterEmail = $_POST['newsletterEmail'];
//var_dump($newsletterEmail);
//to prevent from mysqli injection
$newsletterEmail = stripcslashes($newsletterEmail);
$newsletterEmail = mysqli_real_escape_string($conn, $newsletterEmail);

$sql = "INSERT INTO newsletter (email) VALUES ('$newsletterEmail')";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1) {
    echo json_encode('Emailed saved in DB');
} else {
    echo json_encode('Email already in DB');
}

//Close Connection
$conn->close();