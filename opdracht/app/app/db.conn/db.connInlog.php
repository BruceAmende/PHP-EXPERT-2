<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'rijschooleasydrive';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {
	
	exit('Vul uw gebruikersnaam en wachtwoord in!');
}

if ($stmt = $con->prepare('SELECT id, wachtwoord FROM leden WHERE email = ?')) {
	
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
            header('Location: ../index.php');
        } else {
            
            echo 'Verkeerde gebruikersnaam en/of wachtwoord!';
        }
    } else {
        // Incorrect username
        echo 'Verkeerde gebruikersnaam en/of wachtwoord!';
    }


	$stmt->close();
}
?>