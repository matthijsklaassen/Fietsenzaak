<?php 
include("ConnectionDatabase.php");


$fietsenq = SELECT COUNT(Framenummer) FROM Fiets;
$leverancierq = SELECT COUNT(TL_nummer) FROM Toeleverancier;
$verkoopq = SELECT COUNT(Verkoopnummer) FROM Verkoop;
$klantq = SELECT COUNT(Klantmummer) FROM Klant;

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

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        
        <link href="CSSFILE.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        
        <title>Formulier</title>
        
    </head>
    
    <body>

        <!-- Menubalk -->
        <div id="menubalk">
          <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Formulier_toeleverancier.php">Formulier</a></li>
            <li><a class="active" href="Aantallen.php">Aantallen</a></li>
          </ul>
        </div>
            
        <h1> Aantallen </h1>
        <hr>
        <p>
            Op deze pagina is het aantal leveranciers, fietsen op voorraad, klanten en orders te zien.
        </p><br>
        
        //tabel maken
        <table>
        <tr>
            <th>Aantal fietsen</th>
            <th>"$fietsenq"</th>
        </tr>
        <tr>
            <th>Aantal leveranciers</th>
            <th>"$leverancierq"</th>
        </tr>
        <tr>
            <th>Aantal orders</th>
            <th>"$verkoopq"</th>
        </tr>
        <tr>
            <th>Aantal klanten</th>
            <th>"$klantq"</th>
        </tr>
        </table>
    </body> 
</html>
