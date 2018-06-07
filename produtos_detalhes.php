<?php include 'cabecario.php'; ?>

<?php
$l=$_GET['l'];
$file_produtos=array_map('str_getcsv', file('produtos.csv'));
$head=array_shift($file_produtos);
$dados=array();
foreach ($file_produtos as $key) {
	$dados[]=array_combine($head, $key);
}
?>

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                        	<?php echo "<img src=\"".$dados[$l]['IMG']."\">"; ?>
                       	</div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3>
                        	<div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nome</div>
                        </h3>
                        <hr>
                    <h4><?php echo strtoupper($dados[$l]['NOME']); ?></h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                        	<div class="panel-title"><span class="glyphicon glyphicon-comment"></span>&nbsp;Descriçao</div>
                        </h3>
                        <hr>
                        <h4>
							<?php echo strtoupper($dados[$l]['DESCRICAO']); ?>
                        </h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                        	<div class="panel-title"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;Valor</div>
                        </h3>
                        <hr>
                        <h2>
                        	<?php echo strtoupper($dados[$l]['PRECO']); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'rodape.php'; ?>