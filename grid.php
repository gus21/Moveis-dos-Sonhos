<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/grid.css">
<!------ Include the above in your HEAD tag ---------->
<?php
$stmt = $pdo->prepare("SELECT * FROM moveis order by mov_id DESC LIMIT 4");
$stmt->execute();
?>

<!-- mobile showcase -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <?php while($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="showcase-block">
                            <div class="display-logo">
                               <h4><?php echo strtoupper($result['mov_nome']); ?></h4>
                               <h2><?php echo strtoupper($result['mov_preco']); ?></h2><h2>
                            </div>
                            <div class="showcase-img">
                              <a href="produtos_detalhes.php?id=<?=$result['mov_id']?>">
                               <?php echo "<img class='img_moveis' src=\"".$result['mov_img']."\">"; ?>
                              </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo">
                           <h4><?php echo strtoupper($result['mov_nome']) ?></h4>
                           <h2><?php echo strtoupper($result['mov_preco']); ?></h2>
                        </div>
                        <div class="showcase-img">
                           <?php echo "<img src=\"".$result['mov_img']."\">"; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo">
                           <h4><?php echo strtoupper($result['mov_nome']) ?></h4>
                           <h2><?php echo strtoupper($result['mov_preco']); ?></h2>
                        </div>
                        <div class="showcase-img">
                           <?php echo "<img src=\"".$result['mov_img']."\">"; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="showcase-block">
                        <div class="display-logo">
                           <h4><?php echo strtoupper($result['mov_nome']) ?></h4>
                           <h2><?php echo strtoupper($result['mov_preco']); ?></h2>
                        </div>
                        <div class="showcase-img">
                           <?php echo "<img src=\"".$result['mov_img']."\">"; ?>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
