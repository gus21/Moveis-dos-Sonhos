<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/projetoCss.css">

</head>
<body id="loginBackground">
	<?php
	include 'cabecario.php';
	?>

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo"><em>Cadastrar</em></div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="form.php" id="login-form" class="text-left" method="POST">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<!--Gambiarra pra não auto_preencher os campos do form-->
					<input type="text" name="usuario" style="display:none">
					<input type="password"  name="senha" style="display:none">
					<input type="email"  name="email" style="display:none">
					<!-- fim da Gambiarra-->
					<div class="form-group">
						<label for="lg_password" class="sr-only">Email</label>
						<input type="email" class="form-control" id="lg_password" autocomplete="off" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="lg_username" class="sr-only">Login</label>
						<input type="text" class="form-control" id="lg_username" autocomplete="off" name="usuario" placeholder="Login" required>
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Senha</label>
						<input type="password" class="form-control" id="lg_password" autocomplete="off" name="senha" placeholder="Senha" required>
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