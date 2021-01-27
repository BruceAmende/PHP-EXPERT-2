<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
$database_lokatie     = 'localhost';
$database_naam        = 'snellejelle';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "INSERT INTO klanten ( `voornaam`,`achternaam`, `email`, `telefoonnummer`, `wachtwoord`, `postcode`, `adres`, `geboortedatum` ) VALUES ('$_GET[voornaam]','$_GET[achternaam]','$_GET[email]','$_GET[tel]','$_GET[wachtwoord]','$_GET[postcode]','$_GET[adres]','$_GET[datum]' )  ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Met succes geregistreerd</h1>
<a href="..\login.php" class="btn btn-light">Log nu in!</a>