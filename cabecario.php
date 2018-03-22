<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Móveis dos Sonhos</title>
	<link rel="stylesheet" type="text/css" href="css/styleIndex.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<table>
		<tr>
			<th>
				<h1>
					<a href="index.php">Móveis dos Sonhos</a>
				</h1>
			</th>
			<td><p><?php 
			session_start();
			if(isset($_SESSION['user'])){
				echo "Olá, ". $_SESSION['user'];
			}
			?>  </p>
	</td>

	<td>
		<a href="login.php"><h3>Entrar</h3></a>
	</td>
	<td>
		<a href="cadastro.php"><h3>Cadastrar</h3></a>
	</td>			
	<td>
		<a href="sobre.php"><h3>Sobre</h3></a>
	</td>
	<td>
		<a href="sobre.php"><h3>Sobre</h3></a>
	</td>
	<td><a href="sair.php">
          <span class="glyphicon glyphicon-log-out" style="width: 40px; height: auto; margin-left: 10px;"></span>
        </a></td>
</tr>
</table>	

</body>
</html>