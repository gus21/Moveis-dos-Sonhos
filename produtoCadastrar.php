<?php
require_once 'conexao.php';

session_start();

$produto=$_POST['produto'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$estoque=$_POST['estoque'];
$categoria=$_POST['categoria'];
$img = $_FILES['arquivo']['name'];


	
	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

	$extensao = strrchr($img, '.');
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . $extensao;
		
		// Concatena a pasta com o nome
		$destino = 'img/produtos/'.$novoNome; 
		
		// tenta mover o arquivo para o destino
		@move_uploaded_file( $arquivo_tmp, $destino );
	
}



$sql = "INSERT INTO moveis (mov_nome, mov_img, mov_preco, mov_estoque, mov_descricao, mov_categoria) VALUES (:mov_nome, :mov_img, :mov_preco, :mov_estoque, :mov_descricao, :mov_categoria)";

$stmt = $pdo->prepare( $sql );
$stmt->bindParam( ':mov_nome', $nome );
$stmt->bindParam( ':mov_img', $destino );
$stmt->bindParam( ':mov_preco', $preco );
$stmt->bindParam( ':mov_estoque', $estoque );
$stmt->bindParam( ':mov_descricao', $descricao );
$stmt->bindParam( ':mov_categoria', $categoria );




$result = $stmt->execute();
if (!$result) {
	var_dump($stmt->errorInfo());
	exit;
}else{
	$_SESSION['sucess-produto']=1;
	header('location:produtos.php');
}

 ?>