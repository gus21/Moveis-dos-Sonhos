<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
	
</head>

<body>

	<?php
	include 'cabecario.php';
	?>	
	
	
		<h2 class="tx">Criando uma conta</h2>
	

	<div id="form">
		<form action="formu.php" method="POST">
			<input type="text" name="Usuario" placeholder="Usuario" required title="Nome de Usuario" class="c"><p>
				<input type="password" name="pass" placeholder="Senha" required class="c"><p>
					<input type="submit" value="Criar" class="b">
				</form>
			</div>


			<?php
			include 'rodape.php';
			?>

		</body>
		</html>