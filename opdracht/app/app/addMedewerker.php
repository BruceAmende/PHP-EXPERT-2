

<html>
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/login.css" rel="stylesheet"></head>
        <title>Fiets toevoegen</title>
<body>
<style>
   
</style>
<div class='login'>
<h1>Fiets toevoegen</h1>

<form   action="db.conn/db.connInsertMede.php" method="get">
        
        <br>
        <input  type="number"placeholder='Klant ID' name="klanten_id" required><br>
        <br>
        <input type="number"placeholder='Reperatie ID' name="reparatie_id"><br>
        <br>
        <input type="text"  placeholder='Merk' name="merk" required><br>
        <br>
        <input type="text"placeholder='Model' name="model">
         <br>
        <input type="text"placeholder='Type' name="type"><br>
        <br>
        <input type="text"placeholder='Kleur' name="kleur"><br>
        <br>
        <input type="text"placeholder='Soort rem' name="soortRem"><br>
        <br>
        <input type="text"placeholder='Email klant' name="email"><br>
        <br>
        <input type="submit" value='Voeg toe'>
        <a href="indexM.php" class="btn btn-light">Terug</a>
</form>
</div>

</body>
</html>