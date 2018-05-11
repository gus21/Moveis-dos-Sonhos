<?php
session_start();
require_once 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE usr_id = '$id'";
$stmt = $pdo->prepare($sql);
if($stmt->execute()) {
	$_SESSION['deleted'] = true;
	header('location: sair.php');
} else {
	$_SESSION['error_delete'] = false;
	header('location: user.php');
}
?>