<?php 
session_start();

$use=$_POST['Usuario'];
$pw=$_POST['pass'];


$fileUser=fopen('usuarios.txt', 'w+');

$filePass=fopen('senhas.txt', 'w+');



fwrite($fileUser, $use);
fclose($fileUser);

fwrite($filePass, $pw);
fclose($filePass);

if ($use != null) {
	header('location: entrar.php');
}else{
	header('location: cadastro.php');
}

 ?>