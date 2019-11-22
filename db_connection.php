<?php

function OpenCon()
 {
 $dbhost = "localhost"; // is the host where your server is running it is usually localhost.
 $dbuser = "root"; //is the username i.e. root and $dbpass will be the password which is the same that you used to access your phpmyadmin.
 $dbpass = "1234";
 $db = "example"; //is de naam van de database
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
