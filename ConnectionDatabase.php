<?php
$servername = "remotemysql.com";
$username = "uryRmFfURn";
$password = "GN3VEONVDx";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //function die print de waarde en beindigt het script, het is dus een echo die het ook beeindigd
}
echo "Connected successfully";
?>

