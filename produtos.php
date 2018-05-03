<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/produtos.css">
		
	<title>Produtos</title>
</head>

<?php include 'cabecario.php';?>

<body>
	
	<?php
  $rows   = array_map('str_getcsv', file('produtos.csv'));
    $header = array_shift($rows);
    $csv    = array();
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);
    }
?>
<div class="container">
	<div class="row">
	   <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">		
        <div class="produto">
            <?php foreach ($csv as $line) : ?>
            <tr>
                <td>
                <?php echo $line['NOME']; ?>
                </td>
            </tr>
             </div>  
                <?php endforeach?> 
      	     <div class="row">
      			<div class="col-md-6 col-sm-6">	
      	         </div>
      			   <div class="col-md-6 col-sm-6">  
      		        </div>
      			</div>
    		</span>
  		    </div>
  	     </div> 
    </div>
</div>
</html>
<?php include 'rodape.php'; ?>  
</body>