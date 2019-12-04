<?php
$servername = "groep1.wtt-informatica.com";
$username = "u392629804_usergroep1";
$password = 'RwW$o1lQ';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

