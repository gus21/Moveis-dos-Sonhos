<?php 
session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM moveis WHERE id=:id";
$stmt = $connection->prepare($sql);
$stmt->execute([":id"=>$id]);
$person = $stmt->fetch(PDO::FETCH_OBJ);
if (isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['categoria']) && isset($_POST['estoque']) && isset($_POST['descricao'])) {
	
	$nome 	= $_POST['nome'];
	$preco 	= $_POST['preco'];
	$categoria 	= $_POST['categoria'];
	$estoque 	= $_POST['estoque'];
	$descricao 	= $_POST['descricao'];
	$sql = "UPDATE moveis SET nome = :nome , preco = :preco, categoria = :categoria, estoque = :estoque, descricao = :descicao  WHERE id = :id";
	$stmt = $connection->prepare($sql);
	if ($stmt->execute([':nome' => $nome , ':preco' => $preco , ':categoria' => $categoria, ':estoque' => $estoque, ':descricao' => $descricao ':id' => $id])) {
		header('location: produtos.php');
	}else{
		echo "Erro";
	}
}
?>


