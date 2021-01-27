<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
    

$database_lokatie     = 'localhost';
$database_naam        = 'snellejelle';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);



$sql = "UPDATE fiets SET klanten_id= :klanten_id,reparatie_id=:reparatie_id,merk=:merk,model=:model,type=:type,kleur=:kleur,soortRem=:soortRem where id=:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(':klanten_id', $_GET['klanten_id']);
$statement->bindParam(':reparatie_id', $_GET['reparatie_id']);
$statement->bindParam(':merk', $_GET['merk']);
$statement->bindParam(':model', $_GET['model']);
$statement->bindParam(':type', $_GET['type']);
$statement->bindParam(':kleur', $_GET['kleur']);
$statement->bindParam(':soortRem', $_GET['soortRem']);
$statement->bindParam(':id', $_GET['id']);

$statement->execute();
// $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Fiets aangepast</h1>
<a href="..\indexM.php" class="btn btn-light">Terug</a>