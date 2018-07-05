<?php
include 'cabecario.php';
$id = $_GET['id'];

require_once 'conexao.php';

$role= $_SESSION['user-role'];

$stmt = $pdo->prepare("SELECT * FROM moveis WHERE mov_id = ?");

$stmt->execute(array($id));

$result = $stmt->fetchAll();

$nome = $result[0][1];
$img = $result[0][2];
$preco= $result[0][3];
$categoria= $result[0][4];
$estoque= $result[0][5];
$descricao= $result[0][6];

?>

<body id="loginBackground">	
	<div class="text-center" style="padding:30px 0">
		<small style="font-size: 12px; opacity: 0.8;"></small></div>
		<center>
			<div class="login-form-1">	
				<form action="update_produtos.php" method="POST">
					<label>Nome</label><br>
					<input type="text" name="nome" value="<?=$nome?>"><br>
					<label>descriçao</label><br>
					<input type="text" name="descricao" value="<?=$descricao?>"><br>
					<label>preco</label><br>
					<input type="text" name="preco" value="<?=$preco?>"><br>
					<label>categoria</label><br>
					<input type="text" name="categoria" value="<?=$categoria?>"><br>
					<label>estoque</label><br>
					<input type="hidden" name="id" value="<?=$id?>">
					<input type="number" name="estoque" value="<?=$estoque?>"><br>
					<label>img</label><br>
					<input type="text" name="img" value="<?=$img?>"><br>
					<input type="submit" class="button btn-primary" value="Salvar">
				</form>	
			</center>				

		</div>
	</div>	

	<?php 
	include 'rodape.php';
	?>	

</body>


