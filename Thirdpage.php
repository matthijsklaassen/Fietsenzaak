<?php 
include("ConnectionDatabase.php");


$fietsenq = "SELECT COUNT(Framenummer) FROM Fiets";
$leverancierq = "SELECT COUNT(TL_nummer) FROM Toeleverancier";
$verkoopq = "SELECT COUNT(Verkoopnummer) FROM Verkoop";
$klantq = "SELECT COUNT(Klantmummer) FROM Klant";

if ($conn->query($fietsenq) === TRUE) {
    echo "Information 'fiets' succesfully retrieved";
} else {
    echo "Error: " . $fietsenq . "<br>" . $conn->error;
}

$conn->close();
if ($conn->query($leverancierq) === TRUE) {
    echo "Information 'toeleverancier' succesfully retrieved";
} else {
    echo "Error: " . $leverancierq . "<br>" . $conn->error;
}
$conn->close();

if ($conn->query($verkoopq) === TRUE) {
    echo "Information 'verkoop' succesfully retrieved";
} else {
    echo "Error: " . $verkoopq . "<br>" . $conn->error;
}
$conn->close();

if ($conn->query($klantq) === TRUE) {
    echo "Information 'klant' succesfully retrieved";
} else {
    echo "Error: " . $klantq . "<br>" . $conn->error;
}
$conn->close();
?>

<HTML>
    
