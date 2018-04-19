<?php 
session_start();

$produto=$_POST['produto'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$estoque=$_POST['estoque'];

//cadastra produtos 
function cadastrar($a,$b,$c,$d)
{
	$file_user='produtos.csv';
	$data = file($file_user);
	$nome_user=$a.','.$b.','.$c.','.$d."\n";
	array_push($data, $nome_user);
	$data_str=implode('', $data);
	file_put_contents($file_user, $data_str);

	header('location:index.php');
}

cadastrar($produto,$descricao,$preco,$estoque);

 ?>