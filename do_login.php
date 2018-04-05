<?php
session_start();

$user = $_POST['usuario'];
$pw = $_POST['senha'];

function autenticar ($a, $b){

	$dados = file('usuario-senha.txt');

	for ($i=0; $i <sizeof($dados); $i++) { 
		$dados[$i] = trim($dados[$i]); 
	}
	
	$usePw = $a."-".$b;

	$aut = in_array($usePw, $dados);

	if ($aut == true) {
		$_SESSION['user'] = $a;
		header("location:index.php");
	}else{
		header("location:login.php");
	}
}

autenticar($user, $pw);
?>