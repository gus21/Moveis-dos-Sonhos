<?php 
session_start();

$use=$_POST['usuario'];
$pw=$_POST['senha'];


$dados = $use."-".$pw."\n";
//abre o arquivo para escrita
$file = fopen("usuario-senha.txt", 'a+');
//abre o arquivo em um array
$arrayUser = file("usuario-senha.txt");

$testUser = in_array($dados, $arrayUser);
//testa se o usuario ja existe
if ($testUser == true) {
	header("location:cadastro.php");
}else{

	fwrite($file, $dados);
	fclose($file);
	header("location:login.php");
	
}



?>