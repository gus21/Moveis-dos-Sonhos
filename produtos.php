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
  <?php foreach ($csv as $line) : ?>
    <div class="produto">
      <?php echo "<img class=\"img\" src=\"".$line['IMG']."\">"; ?>
    </div>
  <?php endforeach?> 
</div>
<?php include 'rodape.php'; ?>  