<?php 
	include 'cabecario.php';
?>
		
<?php
	$rows   = array_map('str_getcsv', file('produtos.csv'));
	$header = array_shift($rows);
	$csv    = array();
	foreach($rows as $row) {
			$csv[] = array_combine($header, $row);
	}
		foreach($csv as $line) {
		echo $line['NOME'].' | '.$line['DESCRICAO'].' | '.$line['PRECO'].' | '.$line['ESTOQUE'].'<br/>';
	}

?>

<?php 
	include 'rodape.php';
?>