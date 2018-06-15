<?php
session_start();
require_once 'conexao.php';

$user = $_POST['usuario'];
$pw = md5($_POST['senha']);

/*function autenticar ($a, $b){

	$file_array=array_map('str_getcsv', file('usuario-senha.csv'));

	$header = array_shift($file_array);

	$csv=array();

	foreach ($file_array as $indeice) {

		$csv[]= array_combine($header, $indeice);
	}

	$aut=false;

	for ($i=0; $i <sizeof($csv) ; $i++) { 
		$use_aut=array_search($a, $csv[$i]);
		$pw_aut=array_search($b, $csv[$i]);
		if ($use_aut && $pw_aut) {
			$aut=true;
		}
	}

	if ($aut == true) {
		$_SESSION['user']=$a;
		header("location:index.php");
	}else{
		$_SESSION['error']=1;
		header("location:login.php");
	}
}*/
// autenticar($user, $pw);
$sql = "SELECT usr_roles.`rol_nome` AS role FROM users 
INNER JOIN usr_roles ON users.`usr_rol_id`= usr_roles.`rol_id` 
WHERE usr_nome = '$user' AND usr_senha = '$pw'";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
$rows = $stmt->fetchAll();

if ($rows) {
	$_SESSION['user'] = $user;
	$_SESSION['user-role'] = $rows[0]['role'];
	header("location:index.php");

}else{
	$_SESSION['error'] = 1;
	header("location:login.php");
}
?>