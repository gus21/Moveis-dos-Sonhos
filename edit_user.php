<?php
include 'cabecario.php';
$id = $_GET['id'];

require_once 'conexao.php';

$id = $_GET['id'];
$role= $_SESSION['user-role'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE usr_id = ?");

$stmt->execute(array($id));

$result = $stmt->fetchAll();

$email = $result[0][1];
$nome = $result[0][2];
$usr_id= $result[0][0];
?>

<body id="loginBackground">

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo"><em><?= $_SESSION['user']?></em><br>
			<small style="font-size: 12px; opacity: 0.8;"><?=$role?></small></div>
		<!-- Main Form -->
		<div class="login-form-1">
			<!-- <form action="form.php" id="login-form" class="text-left" method="POST"> -->

			<form action="save_user.php?id=<?= $usr_id ?>" method="POST">
				<label>Nome</label><br>
				<input type="text" name="nome" value="<?=$nome?>"><br>
				<label>Nova Senha</label><br>
				<input type="password" name="senha"><br>
				<label>Email</label><br>
				<input type="email" name="email" value="<?=$email?>"> <br> <br>
				<input type="hidden" name="role" value="<?=$role?>">
				<input type="submit" class="button btn-primary" value="Salvar">
			</form>					

		</div>
	</div>	
		
	<?php 
		include 'rodape.php';
	?>	

	</body>

<!--<?php
/*if($stmt->execute()) {
	$_SESSION['deleted'] = true;
	header('location: sair.php');
} else {
	$_SESSION['error_delete'] = false;
	header('location: user.php');
}*/
?>-->