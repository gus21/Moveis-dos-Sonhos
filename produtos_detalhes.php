<?php include 'cabecario.php'; ?>

<?php
$id=$_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM moveis");

$stmt->execute();

$result = $stmt->fetchAll();

?>

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
            <?php foreach ($result as $key) : ?>
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <?php echo "<img src=\"".$key[2]."\">"; ?>
                        </div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nome</div>
                        </h3>
                        <hr>
                    <h4><?php echo strtoupper($key[1]); ?></h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-comment"></span>&nbsp;Descriçao</div>
                        </h3>
                        <hr>
                        <h4>
                            <?php echo strtoupper($key[6]); ?>
                        </h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;Valor</div>
                        </h3>
                        <hr>
                        <h2>
                            <?php echo strtoupper($key[3]); ?>
                        </h2>
                    </div>
                </div>
               <?php endforeach ?> 
            </div>
        </div>
    </div>
</div>

<?php include 'rodape.php'; ?>