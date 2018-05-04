<?php 
session_start();

$use=$_POST['usuario'];
$pw=$_POST['senha'];
$email=$_POST['email'];

//essa funçao verifica se o usuario ja existe
function existente($a,$b)
{	//abre o arquivo csv e executa varios comandos
	$file_array=array_map('str_getcsv', file('usuario-senha.csv'));

 	$header = array_shift($file_array);
 	$csv=array();

 	foreach ($file_array as $indeice) {

 	$csv[]= array_combine($header, $indeice);
 	}
 	$aut=false;
 	//nesse laço testa se o usuario existe
 	for ($i=0; $i <sizeof($csv) ; $i++) { 
 		$use_aut=array_search($a, $csv[$i]);
 		$email_aut=array_search($b, $csv[$i]);
 		if ($use_aut || $email_aut) {
 			$aut=true;
 		}
 	}
 	return $aut;
	
}
//essa funçao cadastra o usuario caso ele nao exista
function cadastrar($a,$b,$c)
{	//abre o arquivo csv e escreve o nome do usuario a senha e o email
	$file_user='usuario-senha.csv';
	$data = file($file_user);
	$nome_user=$a.','.$b.','.$c."\n";
	array_push($data, $nome_user);
	$data_str=implode('', $data);
	file_put_contents($file_user, $data_str);
	$_SESSION['sucess-cadastro']=1;
	header('location:login.php');
}


$aut= existente($use,$email);

if ($aut == false) {
	cadastrar($use,$pw,$email);
}elseif($aut == true){
	header('location:cadastro.php');
}



?>