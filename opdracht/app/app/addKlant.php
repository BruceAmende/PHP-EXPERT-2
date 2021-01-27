

<html>
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/login.css" rel="stylesheet"></head>
        <title>Klant toevoegen</title>
<body>
<style>
   
</style>
<div class='login'>
<h1>Klant toevoegen</h1>

<form   action="db.conn/db.connInsert.php" method="get">
        
        <br>
        <input  type="text"placeholder='Voor & Achternaam' name="naam" required><br>
        
        
        <br>
        <input type="text"placeholder='Email' name="email"><br>
        <br>
        <input type="password" minlength="8" placeholder='Wachtwoord' name="wachtwoord" required><br>
        <br>
        
        <input type="date"placeholder='Geboortedatum' name="datum">
        <label for="datum">Geboortedatum</label>
        <br>
        
        
        <input type="text"placeholder='Adres' name="adres"><br>
        <br>
        <input type="text"placeholder='Postcode' name="postcode"><br>
        <br>
        <input type="text"placeholder='Stad' name="stad"><br>
        <br>
        <input type="text"placeholder='Telefoonnummer' name="tel"><br>
        <br>
        <input type="submit" value='Voeg toe'>
        <a href="indexM.php" class="btn btn-light">Terug</a>
</form>
</div>

</body>
</html>