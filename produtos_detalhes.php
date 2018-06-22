<?php include 'cabecario.php'; ?>

<?php
$id=$_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM moveis where mov_id = '$id'");

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <?php echo "<img src=\"".$result['mov_img']."\">"; ?>
                        </div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nome</div>
                        </h3>
                        <hr>
                    <h4><?php echo strtoupper($result['mov_nome']) ?></h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-comment"></span>&nbsp;Descriçao</div>
                        </h3>
                        <hr>
                        <h4>
                            <?php echo strtoupper($result['mov_descricao']); ?>
                        </h4>
                    </div>
                    <div class="panel panel-default text-center">
                        <h3>
                            <div class="panel-title"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;Valor</div>
                        </h3>
                        <hr>
                        <h2>
                            <?php echo strtoupper($result['mov_preco']); ?>
                        </h2>
                    </div>
                    <div>
                        <a href="edit_produto.php?id=<?=$id?>&flag=<?=$_SESSION['user']?>">Edit
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                         <a href="deletar_produtos.php?id=<?=$id?>&flag=<?=$_SESSION['user']?>">Delete<span class="glyphicon glyphicon-trash"></span>
                         </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'rodape.php'; ?>