<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/projetoCss.css">
</head>
<body>
		<?php
	include 'cabecario.php';
	?>

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo"><em>Cadastrar</em></div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="produtoCadastrar.php" id="login-form" class="text-left" method="POST">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<input type="text" class="form-control" id="lg_username" name="produto" placeholder="Nome do produto" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="lg_password" name="descricao" placeholder="Descriçao" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="lg_password" name="preco" placeholder="Preço" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="lg_password" name="estoque" placeholder="Estoque" required>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>	
<?php 
	
	include 'rodape.php';
	?>	
</body>
</html>