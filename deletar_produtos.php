<?php
session_start();
require_once 'conexao.php';
$id = $_GET['id'];
$flag = $_GET['flag'];

$sql = "DELETE FROM moveis WHERE mov_id = '$id'";
$stmt = $pdo->prepare($sql);
if($flag=='admin') {
	$_SESSION['deleted'] = true;
	$stmt->execute();
	header('location: produtos.php');

} else {
	$_SESSION['error_delete'] = false;
	header('location: produtos.php');
	
}
?>