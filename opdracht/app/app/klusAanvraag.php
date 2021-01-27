

<html>
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/login.css" rel="stylesheet"></head>
        <title>Reparatie aanvraag</title>
<body>
<style>
   
</style>
<div class='login'>
<h1>Vraag een reparatie aan</h1>

<form   action="db.conn/db.connKlus.php" method="get">
         <br>
        <input  type="text"placeholder='Titel' name="titel" required><br>
        <br>
        <input type="date"placeholder='Datum' name="datum"><br>
        <br>
        <input type="text"  placeholder='Tijdstip' name="tijdstip" required><br>
        <br>
         <input type="text"placeholder='Opmerkingen' name="opmerkingen">
        <br>
        <input type="text"placeholder='Kosten' name="kosten"><br>
        <br>
        <input type="text"placeholder='Email klant' name="email"><br>
        <br>
        <br>
        <input type="submit" value='Aanvragen'>
</form>
</div>

</body>
</html>