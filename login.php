<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/entrar.css">
</head>
<body>

	<?php
	include 'cabecario.php';
	?>

	<center>
		<h2>Fazer Login</h2>
	</center>
	
	<div id="form">
		<form action="do_login.php" method="POST">
			<input type="text" name="Usuario" placeholder="Usuario" required title="Nome de Usuario" class="c"><p>
				<input type="password" name="senha" placeholder="Senha" required class="c"><p>
					<input type="submit" value="Entrar" class="b">
				</form>
			</div>
			
			<?php
			include 'rodape.php';
			?>
		</body>
		</html>