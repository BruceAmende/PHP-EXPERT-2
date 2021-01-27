

<html>
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/login.css" rel="stylesheet"></head>
        <title>Klusaanvraag</title>
<body>
<style>
   
</style>
<div class='login'>
<h1>Vraag een klus aan</h1>

<form   action="dbconnMedeport/dbconnKlusM.php" method="get">
         <br>
        <input  type="text"placeholder='Naam' name="naam" required><br>
        <br>
        <input type="text"placeholder='Type klus (Bijv:Dak)' name="type"><br>
        <br>
        <input type="text"  placeholder='Geschatte duur (Bijv:2uur)' name="duur" required><br>
        <br>
         <input type="text"placeholder='Omschrijf wat er gedaan moet worden' name="omschrijving">
        <br>
        <input type="text"placeholder='Omvang (Bijv:Groot of Middelgroot)' name="grootte"><br>
        <br>
        <input type="text"placeholder='Locatie' name="locatie"><br>
        <br>
        <input type="date"placeholder='Datum' name="datum"><br>
        <br>
        <input type="text"placeholder='Email' name="email"><br>
        <br>
        <input type="submit" value='Aanvragen'>
</form>
</div>

</body>
</html>