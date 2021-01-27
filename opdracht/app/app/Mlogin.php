<?php
    
    
    ?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Medewerker Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/login.css" rel="stylesheet">
	</head>
	<body>
	<style>
		.tekstB{
			display:flex;
		}
	</style>
		<div class="login">
			<h1>Medewerker Login</h1>
			<form action="Mlogin.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Email" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" minlength="8" name="password" placeholder="Wachtwoord" id="password" required>
				<input type="submit" value="Login">
			</form>
               
		</div>
	</body>
</html>

<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'snellejelle';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {
	
	exit('Vul uw gebruikersnaam en wachtwoord in!');
}

if ($stmt = $con->prepare('SELECT id, wachtwoord FROM medewerkers WHERE email = ?')) {
	
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
      
        if ($_POST['password'] === $password) {
           
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: indexM.php');
        } else {
            
            echo 'Verkeerde gebruikersnaam en/of wachtwoord!';
        }
    } else {
        
        echo 'Verkeerde gebruikersnaam en/of wachtwoord!';
    }


	$stmt->close();
}
?>