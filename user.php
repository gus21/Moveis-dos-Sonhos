<?php
include 'cabecario.php';

$user = $_SESSION['user'];
$role = $_SESSION['user-role'];
$sql = "SELECT * FROM users WHERE usr_nome = '$user'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
// $rows = $pdo->fetchAll();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$id = $result['usr_id'];

$sql = "SELECT * FROM users WHERE usr_id = '$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();


?>
<body id="loginBackground">

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo"><em><?= $_SESSION['user']?></em></div>
		<!-- Main Form -->
		<div class="login-form-1">
			<!-- <form action="form.php" id="login-form" class="text-left" method="POST"> -->
			<table class="table table-striped">
				<?php
				while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
					$nome = $result['usr_nome'];
					$email = $result['usr_email'];
					?>
					<tr>
						<th>Nome: </th>
						<td><?= $nome ?></td>
					</tr>	
					<tr>
						<th>Email: </th>
						<td><?= $email ?></td>
					</tr>		
					<tr>
						<th>Função: </th>
						<td><?= $role ?></td>
					</tr>			
				<?php } ?>
			</table>
		</div>
		<div>
			<a class="button btn-primary" href="edit_user.php?id=<?= $id ?>">Editar</a>
			<a class="button btn-danger" href="delete_user.php?id=<?= $id ?>">Excluir</a>
		</div>
	</div>	
	<?php 
	
	include 'rodape.php';
	?>	

</body>
</html>