<?php
require "db.conn/db.conn.php";

if (isset($_GET['maakFiets'])) {

    $sql = "INSERT INTO fietsen ( klant_id, merk, model, type, kleur, soortRem) VALUES (:klant_id, :merk, :model , :type, :kleur, :soortRem )";
    $statement = $db_conn->prepare($sql);
    $statement->bindParam(":klant_id", $_GET['klant_id']);
    $statement->bindParam(":merk", $_GET['merk']);
    $statement->bindParam(":model", $_GET["model"]);
    $statement->bindParam(":type", $_GET['type']);
    $statement->bindParam(":kleur", $_GET['kleur']);
    $statement->bindParam(":soortRem", $_GET['soortRem']);
    var_dump($statement->execute());
}
?>

<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="css/login.css" rel="stylesheet">
</head>
<title>Fiets toevoegen</title>

<body>
    <style>

    </style>
    <div class='login'>
        <h1>Fiets toevoegen</h1>

        <form action="fiets_create.php" method="get">

            <br>
            <input type="number" placeholder='Klant ID' name="klant_id" required><br>
            <br>
            <input type="text" placeholder='Merk' name="merk"><br>
            <br>
            <input type="text" placeholder='Model' name="model">
            <br>
            <input type="text" placeholder='Type' name="type"><br>
            <br>
            <input type="text" placeholder='Kleur' name="kleur"><br>
            <br>
            <input type="text" placeholder='Soort rem' name="soortRem"><br>
            <br>
            <input type="submit" value='Aanvragen' name="maakFiets" class="form-control">
            <a href="indexM.php" class="btn btn-light">Terug</a>
        </form>
    </div>

</body>

</html>