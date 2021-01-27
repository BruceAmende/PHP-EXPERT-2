<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
    

$database_lokatie     = 'localhost';
$database_naam        = 'snellejelle';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);



$sql = "UPDATE klanten SET voornaam= :voornaam,achternaam=:achternaam,email=:email,telefoonnummer=:tel,wachtwoord=:ww,postcode=:postcode,adres=:adres,geboortedatum=:gdatum where id=:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(':voornaam', $_GET['voornaam']);
$statement->bindParam(':achternaam', $_GET['achternaam']);
$statement->bindParam(':email', $_GET['email']);
$statement->bindParam(':tel', $_GET['telefoonnummer']);
$statement->bindParam(':ww', $_GET['wachtwoord']);
$statement->bindParam(':postcode', $_GET['postcode']);
$statement->bindParam(':adres', $_GET['adres']);
$statement->bindParam(':gdatum', $_GET['geboortedatum']);
$statement->bindParam(':id', $_GET['id']);

$statement->execute();
// $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Klant aangepast</h1>
<a href="..\indexM.php" class="btn btn-light">Terug</a>

