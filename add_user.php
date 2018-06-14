<?php
require_once 'conexao.php';

var_dump($_POST);
$role = $_POST[]
$user  = $_POST['usuario'];
$pw    = md5($_POST['senha']);
$email = $_POST['email'];

$sql = "INSERT INTO users (usr_email, usr_nome, usr_senha) VALUES(:usr_email, :usr_nome, :usr_senha, :usr_rol_id)";

$stmt = $pdo->prepare( $sql );
$stmt->bindParam( ':usr_email', $email );
$stmt->bindParam( ':usr_nome', $user );
$stmt->bindParam( ':usr_senha', $pw );
$stmt->bindParam( ':usr_senha', $role );
$result = $stmt->execute();

if (!$result) {
	var_dump($stmt->errorInfo());
	exit;
}else{
	$_SESSION['sucess-cadastro']=1;
	/*header('location: login.php');*/
}
?>