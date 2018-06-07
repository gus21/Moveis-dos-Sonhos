<?php 
	include 'cabecario.php';
?>
<body id="indexBackground:snow">
	<?php
		include 'carrosel.php';
	?>
	<?php
		$rows   = array_map('str_getcsv', file('produtos.csv'));
		$header = array_shift($rows);
		$csv    = array();
		foreach($rows as $row) {
  		$csv[] = array_combine($header, $row);
		}
	?>
	<center>
		<div class="container-index">  
			<?php if(isset($_SESSION['sucess-produto'])):?>
			<center><span class="sucess-produto"> Produto Cadastrado com Sucesso </span></center> 
			<?php unset($_SESSION['sucess-produto']); ?>
			<?php  endif;?>
		</div>
	</center>

	<?php 
		include 'rodape.php';
	?>

</body>