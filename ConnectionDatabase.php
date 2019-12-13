<?php
$servername = "https://auth-db307.hostinger.com/db_structure.php?server=1&db=u392629804_groep1";
$username = "u392629804_usergroep1";
$password = 'RwW$o1lQ';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //function die print de waarde en beindigt het script, het is dus een echo die het ook beeindigd
}
echo "Connected successfully";
?>

