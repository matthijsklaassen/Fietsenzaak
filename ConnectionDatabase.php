<?php
$db = new PDO ('mysql:host=https://auth-db307.hostinger.com/db_routines.php?db=u392629804_groep1;dbname=u392629804_groep1', 'u392629804_usergroep1', 'RwW$o1lQ');

?>

<?php
$servername = "groep1.wtt-informatica.com";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

