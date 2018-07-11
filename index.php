<?php 
	include 'cabecario.php';
?>
<body id="indexBackground:snow">
<?php
	include 'carrosel.php';
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
	include 'grid.php';
?>

<?php 
	include 'rodape2.php';
?>
</body>