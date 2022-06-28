<?php
$conn = $GLOBALS['conn'];
$userId = $userId ?? null;

$sql = "SELECT * FROM trips WHERE userid='$userId'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>