<?php
$servername = "sql307.main-hosting.eu";
// $database = "u392629804_groep1";
// $username = "u392629804_usergroep1";
// $password = "RwW$o1lQ";
$username = "%";
$password = "GN3VEONVDx";

// Create connection
$conn = new mysqli($servername, $username, $password);
// $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //function die print de waarde en beindigt het script, het is dus een echo die het ook beeindigd
}
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
echo "Connected successfully";
?>

