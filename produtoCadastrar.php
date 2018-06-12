<?php 
session_start();

$produto=$_POST['produto'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$estoque=$_POST['estoque'];
$img = $_FILES['arquivo']['name'];

//cadastra produtos 
function cadastrar($a,$b,$c,$d,$e)
{
	$file_user='produtos.csv';
	$data = file($file_user);
	
	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

	$extensao = strrchr($e, '.');
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . $extensao;
		
		// Concatena a pasta com o nome
		$destino = 'img/produtos/'.$novoNome; 
		
		// tenta mover o arquivo para o destino
		@move_uploaded_file( $arquivo_tmp, $destino );
	
	$nome_user=$a.','.$b.','.$c.','.$d.','.$destino."\n";
	array_push($data, $nome_user);
	$data_str=implode('', $data);
	file_put_contents($file_user, $data_str);
	$_SESSION['sucess-produto']=1;
	header('location:produtos.php');
}
}

cadastrar($produto,$descricao,$preco,$estoque,$img);
$sql = "INSERT INTO moveis (mov_nome, mov_img, mov_preco, mov_estoque, mov_descricao, mov_categoria) "
 ?>