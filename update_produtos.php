<?php 
session_start();
$nome = $_POST['nome'];
$id = $_POST['id'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$estoque = $_POST['estoque'];
$descricao = $_POST['descricao'];

require_once('conexao.php');
$stmt = $pdo->prepare("UPDATE moveis SET  mov_nome = '$nome', mov_preco = '$preco', mov_categoria = '$categoria', mov_estoque = '$estoque', mov_descricao = '$descricao' WHERE mov_id = '$id'");
/*$stmt->BindParam(":nome",$nome);
$stmt->BindParam(":id",$id);
$stmt->BindParam(":preco",$preco);
$stmt->BindParam(":categoria",$categoria);
$stmt->BindParam(":estoque",$estoque);
$stmt->BindParam(":descricao",$descricao);
*/
//$resultado = $stmt->execute();
if ($stmt->execute()) {	
	header('location:produtos.php');
}else{
	$pdo->errorInfo();
}

?>


