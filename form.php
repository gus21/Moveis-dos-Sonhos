<?php 
session_start();

$use=$_POST['usuario'];
$pw=$_POST['senha'];


$fileUser=fopen('usuarios.txt', 'w+');

$filePass=fopen('senhas.txt', 'w+');



fwrite($fileUser, $use);
fclose($fileUser);

fwrite($filePass, $pw);
fclose($filePass);

if ($use != null) {
	header('location: login.php');
}else{
	header('location: cadastro.php');
}

?>