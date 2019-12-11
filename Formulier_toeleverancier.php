<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
        	<li><a class="active" href="Formulier_toeleverancier.php">Formulier</a></li>
        	<li><a href="Aantallen.php">Aantallen</a></li>
          </ul>
        </div>
            
        <h1> Toeleverancier </h1>
        <hr>
        <p>
            Op deze pagina is het mogelijk om de database aan te passen. 
            Door middel van onderstaand formulier kunnen nieuwe toeleveranciers worden ingevoerd.
        </p>

        <form method="post" action="">
	        <label>Naam</label>
 	        <input type="text" name="TI_naam" value="<?php echo "$naam" ?>">
             
	        <label>Adres</label>
        	<input type="text" name="TI_onderwerp" value="<?php echo "$adres" ?>">

	        <label>Email</label>
	        <input type="text" name="TI_email" value="<?php echo "$email" ?>">

            	<label>Bankrekeningnummer</label>
	        <input type="text" name="TI_bankrekeningnummer" value="<?php echo "$bankrekeningnummer"?>">
            
            <br>
        	<input type="submit" name="verzenden" value="Verzenden">
        </form>             
    </body> 
</html>

<?php 
include("ConnectionDatabase.php");

if(isset($_POST['verzenden'])) {
    $naam = $_POST['TI_naam'];
    $adres = $_POST['TI_adres'];
    $email = $_POST['TI_email'];
    $bankrekeningnummer = $_POST['TI_bankrekeningnummer'];
	
echo "<br><br><br>"; "Naam: " . $naam . "<br>";
    echo "Adres: " . $adres . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Bankrekeningnummer: " . $bankrekeningnummer . "<br>";
    echo "<br><br><br>";
}   

else {
    $naam = "";
    $adres = "";
    $email = "";
    $bankrekeningnummer = "";
    }

$sql = "INSERT INTO Toeleverancier (Naam, Adres, Email, Bankrekeningnummer)
VALUES ("$naam", "$adres", "$email", "$bankrekeningnummer")"

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
