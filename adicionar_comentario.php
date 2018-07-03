<?php
require_once 'conexao.php';

session_start();
$nome=$_POST['nome'];
$textarea=$_POST['textarea'];
$bom=$_POST['bom'];
$ruim=$_POST['ruim'];

$sql = "INSERT INTO comments (nome, textarea, bom, ruim) VALUES (:nome, :textarea, :bom, :ruim)";

$stmt = $pdo->prepare( $sql );
$stmt->bindParam( ':mov_nome', $nome );
$stmt->bindParam( ':mov_img', $textarea );
$stmt->bindParam( ':mov_preco', $bom );
$stmt->bindParam( ':mov_categoria', $ruim );

$result = $stmt->execute();
if (!$result) {
	var_dump($stmt->errorInfo());
	exit;
}else{
	$_SESSION['sucess-produto']=1;
	header('location:produtos.php');
}

 ?>
