<?php
  session_start();
    require('db.conn/db.conn.php');
    require('db.conn/db.connFietsKlant.php');
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
  body{
    background-color: rgb(81, 206, 223);
  }
.titel{
    margin-left: 500px;
}
.klusBekijken{
    position: relative;
    height: 200px;
    overflow: auto;
    display: flex;
    color: white;
    flex-direction:column;
    width: auto;
    margin-top:25px;
    background-color: rgb(128, 0, 0);
    
  padding: 6px;
  box-shadow: 5px 10px 5px 5px #888888;
    
}
td{
  
  border-bottom:black 1px solid;
  
}
}
</style>
<div>
				
				
				<a href="loguit.php" class="btn btn-secondary"><i class="fas fa-sign-out-alt"></i>Loguit</a>
			</div>
		</nav>
		<div class="content">
			
			<p>Welkom terug, <?=$_SESSION['name']?>!</p>
		</div>
      <div class='titel'>
      <h1 >KlantPortaal</h1>
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
   </tr>
  <tbody>
   <?php foreach($database_gegevensKlus as $data):?>
  <tr>
    <td><?php echo $data["id"]?></td>
    <td><?php echo $data["titel"]?></td>
    <td><?php echo $data["datum"]?></td>
    <td><?php echo $data["tijdstip"]?></td>
    <td><?php echo $data["opmerkingen"]?></td>
    <td><?php echo $data["kosten"]?></td>
  </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>
</div>
<br>


<div class='klusBekijken'>
   <h2>Mijn fietsen</h2>

<table class="table">

  <tr class="table-striped">
  
    <th>ID</th>
    <th>Klant_ID</th>
    <th>Reparatie_ID</th>
    <th>Merk</th>
    <th>Model</th>
    <th>Type</th>
    <th>Kleur</th>
    <th>Soort rem</th>
    <th>Email</th>
   
  </tr>
  <tbody>
   <?php foreach($database_gegevensM as $data):?>
  <tr>
    <td><?php echo $data["id"]?></td>
    <td><?php echo $data["klanten_id"]?></td>
    <td><?php echo $data["reparatie_id"]?></td>
    <td><?php echo $data["merk"]?></td>
    <td><?php echo $data["model"]?></td>
    <td><?php echo $data["type"]?></td>
    <td><?php echo $data["kleur"]?></td>
    <td><?php echo $data["soortRem"]?></td>
    <td><?php echo $data["email"]?></td>
     </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>
</div>

</body>
