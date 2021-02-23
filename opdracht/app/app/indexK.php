<?php
session_start();

$email_klant = $_SESSION['name'];

require('db.conn/db.conn.php');
$sql = "SELECT * FROM klanten 
                JOIN fietsen ON fietsen.klant_id = klanten.id 
              
                WHERE email = :email";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":email", $email_klant);
$statement->execute();
$fietsenVanKlant = $statement->fetchAll(PDO::FETCH_ASSOC);


$sql = "SELECT *, reparatie.id AS reparatie_id, klanten.id AS klanten_id, fietsen.id AS fietsen_id FROM reparatie 
                JOIN klanten ON reparatie.klant_id = klanten.id 
                JOIN fietsen ON reparatie.fiets_id = fietsen.id
                where klanten.email = :email";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":email", $email_klant);
$statement->execute();
$reparatiesVanKlant = $statement->fetchAll(PDO::FETCH_ASSOC);

include('include/header.php');
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>KlantPortaal-Snelle Jelle</title>
</head>

<body>
    <style>
        body {
            background-color: rgb(81, 206, 223);
        }

        .titel {
            margin-left: 500px;
        }

        .klusBekijken {
            position: relative;
            height: 200px;
            overflow: auto;
            display: flex;
            color: white;
            flex-direction: column;
            width: auto;
            margin-top: 25px;
            background-color: rgb(128, 0, 0);
            padding: 6px;
            box-shadow: 5px 10px 5px 5px #888888;

        }

        td,
        th {
            border-bottom: black 1px solid;
            color: white;
        }
    </style>
    <div>
        <a href="loguit.php" class="btn btn-secondary"><i class="fas fa-sign-out-alt"></i>Loguit</a>
    </div>
    </nav>
    <div class="content">
        <p>Welkom terug, <?= $_SESSION['name'] ?>!</p>
    </div>
    <div class='titel'>
        <h1>KlantPortaal</h1>
    </div>

    <div class='klusBekijken'>
        <h2>Mijn reparaties</h2>

        <table class="table">

            <tr class="table-striped">
                <th>ID</th>
                <th>Titel</th>
                <th>Datum</th>
                <th>Tijdstip</th>
                <th>Opmerkingen</th>
                <th>Kosten</th>
                <th>FietsMerk</th>
                <th>FietsType</th>
            </tr>
            <tbody>
                <?php foreach ($reparatiesVanKlant as $data) : ?>
                    <tr>
                        <td><?php echo $data["reparatie_id"] ?></td>
                        <td><?php echo $data["titel"] ?></td>
                        <td><?php echo $data["datum"] ?></td>
                        <td><?php echo $data["tijdstip"] ?></td>
                        <td><?php echo $data["opmerkingen"] ?></td>
                        <td><?php echo $data["kosten"] ?></td>
                        <td><?php echo $data["merk"] ?></td>
                        <td><?php echo $data["type"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>



    <div class='klusBekijken'>
        <h2>Mijn fietsen</h2>

        <table class="table">

            <tr class="table-striped">

                <th>ID</th>
                <th>Achternaam</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Type</th>
                <th>Kleur</th>
                <th>Soort rem</th>

            </tr>
            <tbody>
                <?php foreach ($fietsenVanKlant as $data) : ?>
                    <tr>
                        <td><?php echo $data["id"] ?></td>
                        <td><?php echo $data["achternaam"] ?></td>
                        <td><?php echo $data["merk"] ?></td>
                        <td><?php echo $data["model"] ?></td>
                        <td><?php echo $data["type"] ?></td>
                        <td><?php echo $data["kleur"] ?></td>
                        <td><?php echo $data["soortRem"] ?></td>
                    </tr>
            </tbody>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>

</body>