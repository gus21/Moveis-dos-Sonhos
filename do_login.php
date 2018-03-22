<?php
session_start();

$user = $_POST['Usuario'];
$pw = $_POST['senha'];

function autenticar ($a, $b){

	$pessoa = file('usuarios.txt');
	$palavra = file('senhas.txt');

	for ($i=0; $i <sizeof($pessoa); $i++) { 
		$pessoa[$i] = trim($pessoa[$i]); 
	}
	for ($i=0; $i <sizeof($palavra); $i++) { 
		$palavra[$i] = trim($palavra[$i]); 
	}

	$usu = array_search($a, $pessoa);

	$sen = array_search($b, $palavra);

	if ($usu === $sen) {
		return true;
	}else{
		return false;
	}
}

function autenticars ($a,$b){

	$pessoa = file('usuarios.txt');
	$palavra = file('senhas.txt');

	for ($i=0; $i <sizeof($pessoa); $i++) { 
		$pessoa[$i] = trim($pessoa[$i]); 
	}
	for ($i=0; $i <sizeof($palavra); $i++) { 
		$palavra[$i] = trim($palavra[$i]); 
	}

	$usu = in_array($a, $pessoa);

	$sen = in_array($b, $palavra);

	if ($usu == false && $sen == false) {
		return false;
	}elseif ($usu == true && $sen == true) {
		return true;
	}else{
		return false;
	}
	
}
	
$p = autenticar($user, $pw);

$s = autenticars($user, $pw);

if ($p == true && $s == true) {
	$_SESSION['user'] = $user;

	header('location: index.php');
}else{
	header('location: login.php');
}