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
			<td id="tdcabecario">
				<div class="container">
					<div class="search">
						
						<input type="text" class="form-control input-sm" maxlength="64" placeholder="Busca" />
						<button type="submit" class="btn btn-primary btn-sm">Busca</button>
					</div>
				</div>
			</td>
			<td id="tdcabecario"><p>
				<?php if(isset($_SESSION['user'])) : ?>
					<h3 id="a">
						<?php echo "Olá, ". $_SESSION['user']; ?>
					</h3>
				<?php endif ?>
				<?php if (!isset($_SESSION['user'])) :?>
					<a href="login.php" id="a"><h3>Entrar</h3></a>
				<?php endif ?>
			</p>
			
		</td>
		<td id="tdcabecario">
			<?php if (!isset($_SESSION['user'])) :?>
				<a href="cadastro.php" id="a"><h3>Cadastrar</h3></a>
			<?php endif ?>
		</td>
		<?php if (isset($_SESSION['user'])) :?>
			<td id="tdcabecario">
				<a href="sair.php" id="a">
					<center><span class="glyphicon glyphicon-log-out" id="glyphicon"></span><center>
					</a>
				</td>
		<?php endif ?>
			
		<td id="tdcabecario">
			<a href="produtos.php" id="a"><h3>Produtos</h3></a>
		</td>
		</tr>
	</table>

</body>
</html>