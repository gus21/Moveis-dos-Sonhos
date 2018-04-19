<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Móveis dos Sonhos</title>
	<link rel="stylesheet" type="text/css" href="css/projetoCss.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/	bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="test.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/produtos.css">




</head>
<body>
	<script type="text/javascript" src="js/wz_tooltip.js"></script>
	<?php session_start(); ?>

	<header>
		<nav>
			<?php if(isset($_SESSION['user'])) : ?>
				<span><?php echo "Olá, ". $_SESSION['user']; ?></span>
			<?php endif ?>
			<div id="logo">
				<span>Móveis dos Sonhos</span>
			</div>
			<?php if (!isset($_SESSION['user'])) :?>
				<div class="options">
					<a href="cadastro.php" class="link-header" ><span  onmouseover="tip(Cadastre-se)" id="botao-cadastro" class="glyphicon glyphicon-log-in"></span></a>
				</div>
			<?php endif ?>
			<div class="options">
				<a href="produtos.php" class="link-header"><span id= "botao-produtos" class="glyphicon glyphicon-tags"></span></a>
			</div>
		</nav>
		
	</header>
	<section>