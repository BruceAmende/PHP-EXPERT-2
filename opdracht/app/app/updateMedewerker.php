<?php
    
    include('include/header.php');
    require 'db.conn/db.conn.php';
    require 'db.conn/db.connM.php';




$sql = "SELECT * FROM fiets WHERE id =:id";
$statement = $db_conn->prepare($sql); 
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


?>


<html>
<body>

<h2>Update fiets</h2>

<form action="dbconnMedeport/dbconnUpdateMedewerker.php" method="get">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input  type="text"placeholder='KlantID' name="klanten_id" value="<?php echo $database_gegevens['klanten_id']?>"><br>
        <br>
        <input  type="text"placeholder='ReparatieID' name="reparatie_id" value="<?php echo $database_gegevens['reparatie_id']?>"><br>
        <br>
        <input  type="text"placeholder='Merk' name="merk" value="<?php echo $database_gegevens['merk']?>"><br>
        <br>
        <input type="text"placeholder='Model' name="model"value="<?php echo $database_gegevens['model']?>"><br>
        <br>
        <input type="text"placeholder='Type' name="type"value="<?php echo $database_gegevens['type']?>"><br>
        <br>
        <input type="text"placeholder='Kleur' name="kleur"value="<?php echo $database_gegevens['kleur']?>"><br>
        <br>
        <input type="text"placeholder='Soort rem' name="soortRem"value="<?php echo $database_gegevens['soortRem']?>"><br>
        <br>
        <input type="submit" value='Update'>
</form>

</body>
</html>