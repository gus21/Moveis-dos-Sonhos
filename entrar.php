<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>entrar</title>

</head>

<body>
	
	<?php 
		include 'cabe.php';

		session_start();

		if (!isset($_SESSION['user'])) {
			header('location: login.php');
		}

		echo "Ola, ". $_SESSION['user'].", voce estar logado";
 
	?>

	
	<?php
	include 'rod.php'
	?>
	
</body>
</html>