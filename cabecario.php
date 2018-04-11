<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Móveis dos Sonhos</title>
	<link rel="stylesheet" type="text/css" href="css/teste.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php session_start(); ?>
	<table id="tabelacabecario">
		<tr>
			<th id="thcabecario">
				<h1>
					<a href="index.php" id="a">Móveis dos Sonhos</a>
				</h1>
			</th>
			<td id="tdcabecario"><p>
				<?php if(isset($_SESSION['user'])) : ?>
					<?php echo "Olá, ". $_SESSION['user']; ?>
				<?php endif ?>
				<?php if (!isset($_SESSION['user'])) :?>
					<a href="login.php" id="a"><h3>Entrar</h3></a>
				<?php endif ?>
			</p>
			
		</td>
		<td id="tdcabecario">
			<a href="cadastro.php" id="a"><h3>Cadastrar</h3></a>
		</td>			
		<td id="tdcabecario">
			<a href="produtos.php" id="a"><h3>Produtos</h3></a>
		</td>
		<?php if (isset($_SESSION['user'])) :?>
			<td id="tdcabecario">
				<a href="sair.php" id="a">
					<center><span id="glyphicon glyphicon-log-out" ></span><center>
					</a>
				</td>
		<?php endif ?>
		</tr>
	</table>

<div id="rodape">
        
    <table>
		<tr>
			<td id="tdcabecario">
				<a href="quemSomos.php" id="a">
					<h4>Quem Somos</h4>
				</a>
			</td>

			<td id="tdcabecario">
				<a href="sobre.php" id="a"><h3>Sobre</h3></a>
			</td>
		</tr>
	</table>	
</div>	

</body>
</html>