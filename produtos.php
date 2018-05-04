<?php include 'cabecario.php';?>


<?php
$rows   = array_map('str_getcsv', file('produtos.csv'));
$header = array_shift($rows);
$csv    = array();
foreach($rows as $row) {
  $csv[] = array_combine($header, $row);
}
?>
<div class="container">  
	<?php if(isset($_SESSION['sucess-produto'])):?>
		<center><span class="sucess-produto"> Produto Cadastrado com Sucesso </span></center> 
		<?php unset($_SESSION['sucess-produto']); ?>
	<?php  endif;?>
  <?php foreach ($csv as $line) : ?>
    <div class="produto">
      <?php echo "<img class=\"img\" src=\"".$line['IMG']."\">"; ?>
       <center>
       	<span class="detalhes-produto" id= "desc-pro-nome"> <?php echo $line['NOME'] ?> </span>
       </center>
      <!-- <span class="detalhes-produto" id= "desc-pro-descricao"> <?php /*echo $line['DESCRICAO']*/ ?> </span> -->
      <center>
      	<span class="detalhes-produto" id= "desc-pro-preco"> <?php echo "R$".$line['PRECO'] ?> </span>
      </center>
      <!-- <span class="detalhes-produto" id= "desc-pro-estoque"> <?php /*echo $line['ESTOQUE']*/ ?> </span> -->
    </div>
  <?php endforeach?> 
</div>
<?php include 'rodape.php'; ?>  