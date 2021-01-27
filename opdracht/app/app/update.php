<?php
    
    include('include/header.php');
    require 'db.conn/db.conn.php';




$sql = "SELECT * FROM klanten WHERE id =:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


?>


<html>
<body>

<h2>Update klant: <?php echo  $database_gegevens['voornaam']?></h2>

<form action="db.conn/db.connUpdate.php" method="get">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input  type="text"placeholder='Voornaam' name="voornaam" value="<?php echo $database_gegevens['voornaam']?>"><br>
        <br>
        <input type="text"placeholder='Achternaam' name="achternaam"value="<?php echo $database_gegevens['achternaam']?>"><br>
        <br>
        <input type="email"placeholder='Email' name="email"value="<?php echo $database_gegevens['email']?>"><br>
        <br>
        <input type="text"placeholder='Telefoonnummer' name="telefoonnummer"value="<?php echo $database_gegevens['telefoonnummer']?>"><br>
        <br>
        <input type="text"placeholder='Wachtwoord' name="wachtwoord"value="<?php echo $database_gegevens['wachtwoord']?>"><br>
        <br>
        <input type="text"placeholder='Postcode' name="postcode"value="<?php echo $database_gegevens['postcode']?>"><br>
        <br>
        <input type="text"placeholder='Adres' name="adres"value="<?php echo $database_gegevens['adres']?>"><br>
        <br>
        <input type="date"placeholder='Geboortedatum' name="geboortedatum"value="<?php echo $database_gegevens['geboortedatum']?>"><br>
        <br>
        <input type="submit" value='Update'>
</form>

</body>
</html>