<?php
require "db.conn/db.conn.php";
session_start();

if (isset($_GET['maakRep'])) {

    $sql = "INSERT INTO reparatie ( titel, datum, tijdstip, opmerkingen, kosten, klant_id, fiets_id) VALUES (:titel, :datum , :tijdstip, :opmerkingen, :kosten ,:klant_id, :fiets_id )";
    $statement = $db_conn->prepare($sql);
    $statement->bindParam(":titel", $_GET['titel']);
    $statement->bindParam(":datum", $_GET["datum"]);
    $statement->bindParam(":tijdstip", $_GET['tijdstip']);
    $statement->bindParam(":opmerkingen", $_GET['opmerkingen']);
    $statement->bindParam(":kosten", $_GET['kosten']);
    $statement->bindParam(":klant_id", $_GET['klant_id']);
    $statement->bindParam(":fiets_id", $_GET['fiets_id']);
    var_dump($statement->execute());
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Reparatie Aanvraag</title>
</head>

<body>

    <div class='login'>
        <h1>Vraag een reparatie aan</h1>

        <form action="reparatie_create.php" method="get">
            <br>
            <input type="text" placeholder='Titel' name="titel" class="form-control" required><br>
            <br>
            <p>Voor welke datum wilt u een afspraak:</p>
            <input type="date" placeholder='Datum' name="datum" class="form-control"><br>
            <br>
            <input type="text" placeholder='Tijdstip' name="tijdstip" class="form-control" required><br>
            <br>
            <input type="text" placeholder=' Aanvullende omerkingen' name="opmerkingen" class="form-control">
            <br>
            <input type="hidden" placeholder='Kosten' name="kosten" class="form-control"><br>
            <br>
            <input type="number" placeholder='KlantId' name="klant_id" value=""><br>
            <br>
            <input type="number" placeholder='FietsId' name="fiets_id" value=""><br>
            <br>
            <br>
            <input type="submit" value='Aanvragen' name="maakRep" class="form-control">
        </form>
    </div>

</body>

</html>