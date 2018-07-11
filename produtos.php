<?php include 'cabecario.php';?>


<?php
require_once 'conexao.php';

if(isset($_GET['busca'])){
  $busca = $_GET['busca']; 
  $stmt = $pdo->prepare("SELECT * FROM moveis WHERE mov_nome LIKE '%$busca%'");

  $stmt->execute();

  $result = $stmt->fetchAll();

}else{
  $stmt = $pdo->prepare("SELECT * FROM moveis");

  $stmt->execute();

  $result = $stmt->fetchAll();
}
?>
<div class="container">  
	<?php if(isset($_SESSION['sucess-produto'])):?>
		<center><span class="sucess-produto"> Produto Cadastrado com Sucesso </span></center> 
		<?php unset($_SESSION['sucess-produto']); ?>
	<?php  endif;?>
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

<?php include 'rodape2.php'; ?>  


