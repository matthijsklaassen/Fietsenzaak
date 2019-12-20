<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        
        <link href="CSSFILE.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        
        <title>Dropdownlijst</title>
        
    </head>
    
    <body>

        <!-- Menubalk -->
        <div id="menubalk">
          <ul>
            <li><a href="Home.php">Home</a></li>
        	<li><a href="Formulier_toeleverancier.php">Formulier</a></li>
            <li><a class="active" href="Dropdownlijst.php">Aantallen</a></li>
        	<li><a href="Aantallen.php">Aantallen</a></li>
          </ul>
        </div>
            
        <h1> Dropdownlijst </h1>
        <hr>
        <p>
            Op deze pagina is het mogelijk PK's aan elkaar te koppelen met dropdownlijstjes. 
        </p>

      
                      
    </body> 
</html>

<?php
//eerste dropdownlijst
$sql="SELECT klantnummer FROM klant";
$klantnummers = array();
$klantnummers=$con->query($sql);

echo "<p>";
echo "<select name="Klantnummers">";
for ($i = 0; i < count($klantnummers); i++) {
  echo "<option value = "$klantnummers[i]">$klantenummers[i]</option>";
  }
echo "</select>";
echo "</p>";

if(isset($_POST['formSubmit'])){
    $selectedKlantnummer = $_POST['Klantnummers'];
}

//tweede dropdownlijst
$sql="SELECT framenummer FROM fiets";
$framenummers = array();
$framenummers=$con->query($sql);

echo "<p>";
echo "<select name="Framenummers">";

for ($i = 0; i < count($framenummers); i++) {
  echo "<option value = "$framenummers[i]">$framenummers[i]</option>";
  }
echo "</select>";
echo "</p>";

if(isset($_POST['formSubmit'])){
    $selectedFramenummer = $_POST['Framenummers'];
}

//ophalen verkoopnummer
$sql3="SELECT LAST Verkoopnummer FROM Verkoop";
$opgehaaldVerkoopnummer=$con->query($sql3);
$verkoopnummer = $opgehaaldVerkoopnummer + 1;

//toevoegquery
$sql4 = "INSERT INTO Verkoop (Verkoopnummer, Klantnummer, Framenummer)
		VALUES ("$verkoopnummer", "$selectedKlantnummer", "$selectedFramenummer")"
		if ($conn->query($sql4) === TRUE) {
    			echo "New record created successfully";
		} 
		else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
?> 

