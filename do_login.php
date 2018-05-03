<?php
session_start();

$user = $_POST['usuario'];
$pw = $_POST['senha'];

function autenticar ($a, $b){

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
}

autenticar($user, $pw);
?>