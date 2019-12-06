<?php 
include("ConnectionDatabase.php");


$fietsenq = "SELECT COUNT(Framenummer) FROM Fiets";
$leverancierq = "SELECT COUNT(TL_nummer) FROM Fiets";
$verkoopq = "SELECT COUNT(Verkoopnummer) FROM Verkoop";
$klantq = "SELECT COUNT(Klantmummer) FROM Klant";



?>
