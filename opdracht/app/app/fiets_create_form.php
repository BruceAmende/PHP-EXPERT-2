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
            <input type="number" placeholder='Merk' name="merk"><br>
            <br>
            <input type="text" placeholder='Model' name="model">
            <br>
            <input type="text" placeholder='Type' name="type"><br>
            <br>
            <input type="text" placeholder='Kleur' name="kleur"><br>
            <br>
            <input type="text" placeholder='Soort rem' name="soortRem"><br>
            <br>
            <input type="submit" value='Voeg toe'>
            <a href="indexM.php" class="btn btn-light">Terug</a>
        </form>
    </div>

</body>

</html>