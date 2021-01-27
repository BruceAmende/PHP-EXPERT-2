<?php
    
    include('include/header.php');
    require 'db.conn/db.conn.php';





$sql = "SELECT * FROM reparatie WHERE id =:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


?>


<html>
<body>

<h2>Update reparatie</h2>

<form action="dbconnMedeport/dbconnUpdateKlus.php" method="get">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input  type="text"placeholder='Titel' name="titel" value="<?php echo $database_gegevens['titel']?>"><br>
        <br>
        <input type="date"placeholder='Datum' name="datum"value="<?php echo $database_gegevens['datum']?>"><br>
        <br>
        <input type="text"placeholder='Tijdstip' name="tijdstip"value="<?php echo $database_gegevens['tijdstip']?>"><br>
        <br>
        <input type="text"placeholder='Opmerkingen' name="opmerkingen"value="<?php echo $database_gegevens['opmerkingen']?>"><br>
        <br>
        <input type="text"placeholder='Kosten' name="kosten"value="<?php echo $database_gegevens['kosten']?>"><br>
        <br>
        <input type="text"placeholder='Email' name="email"value="<?php echo $database_gegevens['email']?>"><br>
        <br>
        <input type="submit" value='Update'>
</form>

</body>
</html>