<?php
session_start();
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Móveis dos Sonhos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/projetoCss.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/	bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/detalhes.css">
	<link rel="stylesheet" type="text/css" href="css/produtos.css">
</head>

	<div class="menu">
    <div class="container-fluid">
    	<div>
    		<ul class="nav navbar-nav navbar-left">
				<li class="li">
					<a href="index.php" class=" glyphicon glyphicon-home btn btn-primary btn-circle btn-lg" >
					</a>
				</li>
				<li class="li">
				 <h4>Moveis Dos Sonhos</h4>
				</li>
				<li class="li">
					
					<div class="search">
						<input type="text" class="form-control input-sm" maxlength="64" placeholder="Busca" />
						<button type="submit" class="btn btn-primary btn-sm">Busca</button>
					</div>
				
				</li> 
    			
    		</ul>
    	</div>
   		<div>
			<ul class="nav navbar-nav navbar-right">
				<li class="li">
				<?php if (!isset($_SESSION['user'])) :?>
					<a href="cadastro.php" class="a" style="padding-top: 22px;">
						<span class="glyphicon glyphicon-user">	
						</span>
						Cadastrar
					</a>
				<?php endif ?>
				</li>
				<li class="li">
				<?php if(isset($_SESSION['user'])) : ?>
					<a href="user.php" class="a" style="padding-top: 23px;">
					<span class="glyphicon glyphicon-user" id="botao-editar">&nbsp;<?= $_SESSION['user'] ?></span>
					</a>
					</a>
				<?php endif ?>
				<?php if (!isset($_SESSION['user'])) :?>
					<a href="login.php" class="a" style="padding-top: 22px;">
						<span class="glyphicon glyphicon-log-in"></span> 
							Entrar 
					</a>
				<?php endif ?>
				</li>
				<li class="li">
				<?php if (isset($_SESSION['user'])) :?>
					<a href="sair.php" class="a" style="padding-top: 24px;">
						Sair &nbsp;<span class="glyphicon glyphicon-log-out" id="botao-sair"></span>
					</a>
				<?php endif ?>

				</li>
				<li class="li">
				<a href="produtos.php" class="link-header a">
					<span class="glyphicon glyphicon-tags" id= "botao-produtos" >	</span>
					Produtos
				</a>
				</li>
				<li class="li">
					<?php if (isset($_SESSION['user'])) :?>
						<a href="produtosForm.php" class="a">
						<span class="glyphicon glyphicon-list" id="glyphicon"></span>
							Cadastrar Produtos
						</a>
					<?php endif ?>
				</li>
			</ul>
		</div>
	</div>
</div>
	


