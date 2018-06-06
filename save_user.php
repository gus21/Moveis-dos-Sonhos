<?php
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$id = $_GET['id'];

require_once('conexao.php');
$stmt = $pdo->prepare("UPDATE users SET  usr_nome = ?, usr_senha = ?, usr_email = ? WHERE usr_id = ?");
$stmt->execute(array($nome,$senha,$email,$id));
if($stmt){
	$_SESSION['user'] = $nome;
	header('location: user.php');
}else{
	$pdo->errorInfo();
}

?>