<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Móveis dos Sonhos</title>
	<link rel="stylesheet" type="text/css" href="css/cabecario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php session_start(); ?>
	<table class="table">
		<tr>
			<th class="th">
				<h1>
					<a href="index.php" class="a">Móveis dos Sonhos</a>
				</h1>
			</th>
			<td class="td"><p>
			<?php if(isset($_SESSION['user'])) : ?>
				<?php echo "Olá, ". $_SESSION['user']; ?>
			<?php endif ?>
			<?php if (!isset($_SESSION['user'])) :?>
				<a href="login.php" class="a"><h3>Entrar</h3></a>
			<?php endif ?>
			 </p>
			
	</td>
	<td class="td">
		<a href="cadastro.php" class="a"><h3>Cadastrar</h3></a>
	</td>			
	<td class="td">
		<a href="sobre.php" class="a"><h3>Sobre</h3></a>
	</td>
	 <td class="td">
    	<a href="produtos.php" class="a"><h3>Produtos</h3></a>
    </td>
	<td class="td">
		<a href="sair.php" class="a">
          <span class="glyphicon glyphicon-log-out" style="width: 40%; height: auto; margin-left: 10%;"></span>
        </a>
    </td>
   
</tr>
</table>	

</body>
</html>