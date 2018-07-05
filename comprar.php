<?php 
session_start();
/*
require_once 'conexao.php';

$stmt = $pdo->prepare("SELECT * FROM moveis where mov_id = '$id'");

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

*/
//$nome = $_SESSION['user'];
$id=$_GET['id'];

//$quantidade=$_POST['quant'];

//$nome = $result['mov_nome'];

//$preco = $result['mov_preco'];

$_SESSION['user']['carrinho'][] = $id;

header("location:carrinho_mostar.php");

 ?>