<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Móveis dos Sonhos</title>
	<link rel="stylesheet" type="text/css" href="css/projetoCss.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/	bootstrap.min.js"></script>
	<div class="menu">
    <div class="container-fluid">
   		<div>
			<ul class="nav navbar-nav navbar-right">
			<li class="li">
				<a href="index.php" class=" glyphicon glyphicon-home btn btn-primary btn-circle btn-lg" >
				</a>
			</li>
			<li class="li">
			 <h4>Moveis Dos Sonhos</h4>
			</li>
			<li class="li">
				<div class="container">
				<div class="search">
					<input type="text" class="form-control input-sm" maxlength="64" placeholder="Busca" />
					<button type="submit" class="btn btn-primary btn-sm">Busca</button>
					<button type="submit"><a href="produtosForm.php">C.produtos</button></a>
				</div>
			</div>
			</li>
				<li class="li">
				<?php if (!isset($_SESSION['user'])) :?>
					<a href="cadastro.php" class="a">
						<span class="glyphicon glyphicon-user">	
						</span>
						Cadastrar
					</a>
				<?php endif ?>
				</li>
				<li class="li">
				<?php if(isset($_SESSION['user'])) : ?>
					<h3 id="a">
						<?php echo "Olá, ". $_SESSION['user']; ?>
					</h3>
				<?php endif ?>
				<?php if (!isset($_SESSION['user'])) :?>
					<a href="login.php" class="a">
						<span class="glyphicon glyphicon-log-in"></span> 
							Entrar
					</a>
				<?php endif ?>
				</li>
				<li>
				<?php if (isset($_SESSION['user'])) :?>
					<a href="sair.php" class="a">
						Sair<span class="glyphicon glyphicon-log-out" id="glyphicon"></span>

					</a>
				<?php endif ?>

				</li>
				<li class="li">
				<a href="produtos.php" class="link-header a">
					<span id= "	botao-produtos" class="glyphicon glyphicon-tags">	</span>
					Produtos
				</a>
				</li>
			</ul>
		</div>
	</div>
</div>
	

</head>
