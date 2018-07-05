<?php 
session_start();
require_once 'conexao.php';

$carrinho = $_SESSION['user']['carrinho'];
//echo "<pre>".var_dump($carrinho)."</pre>";
$sql= "SELECT * FROM moveis WHERE ";

foreach ($carrinho as $key => $vaule) {
	$sql .= "id =".$vaule;

	if (!($key < sizeof($carrinho))) {
		$sql .= " AND";
	}
}

echo $sql;
$stmt = $pdo->prepare($sql);

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);

 ?>

<div class="container">  
	
  <?php foreach ($result as $valores) : ?>
    <div class="produto">
    	<a href="produtos_detalhes.php?id=<?=$valores['mov_id']?>">
      <?php echo "<img class=\"img\" src=\"".$valores[2]."\">"; ?>
  		</a>
       <center>
       	<span class="detalhes-produto" id= "desc-pro-nome"> <?php echo $valores[1] ?> </span>
       </center>
      <!-- <span class="detalhes-produto" id= "desc-pro-descricao"> <?php /*echo $line['DESCRICAO']*/ ?> </span> -->
      <center>
      	<span class="detalhes-produto" id= "desc-pro-preco"> <?php echo "R$".$valores[3] ?> </span>
      </center>
      <!-- <span class="detalhes-produto" id= "desc-pro-estoque"> <?php /*echo $line['ESTOQUE']*/ ?> </span> -->
    </div>
  <?php endforeach?> 
</div>

