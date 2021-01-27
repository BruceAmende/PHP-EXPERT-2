<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
$database_lokatie     = 'localhost';
$database_naam        = 'snellejelle';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "INSERT INTO fiets ( `klanten_id`, `reparatie_id`, `merk`, `model`, `type`, `kleur`, `soortRem`, `email`) VALUES ('$_GET[klanten_id]','$_GET[reparatie_id]','$_GET[merk]','$_GET[model]','$_GET[type]','$_GET[kleur]','$_GET[soortRem]' ,'$_GET[email]')  ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Met succes fiets geregistreerd</h1>
<a href="..\indexM.php" class="btn btn-light">terug</a>