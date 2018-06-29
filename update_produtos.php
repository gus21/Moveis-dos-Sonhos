<?php 
session_start();
$nome = $_POST['nome'];
$id = $_GET['id'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];
$descricao = $_POST['descricao'];

require_once('conexao.php');
$stmt = $pdo->prepare("UPDATE moveis SET  usr_nome = :nome, usr_preco = :preco, usr_categoria = :categoria, usr_estoque = :estoque, usr_descricao = :descricao WHERE usr_id = :id");
$stmt->BindParam(":nome",$nome);
$stmt->BindParam(":id",$id);
$stmt->BindParam(":preco",$preco);
$stmt->BindParam(":categoria",$categoria);
$stmt->BindParam(":estoque",$estoque);
$stmt->BindParam(":descricao",$descricao);

$resultado = $stmt->execute();
if (isset($resultado)) {	
	header('location:produtos.php');
}else{
	$pdo->errorInfo();
}

?>


