<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="css/carrosel.css">
<!------ Include the above in your HEAD tag ---------->
<?php
require_once 'conexao.php';

if(isset($_GET['busca'])){
  $busca = $_GET['busca']; 
  echo $busca;
  $stmt = $pdo->prepare("SELECT * FROM moveis WHERE mov_nome");

  $stmt->execute();

  $result = $stmt->fetchAll();

}else{
  $stmt = $pdo->prepare("SELECT * FROM moveis");

  $stmt->execute();

  $result = $stmt->fetchAll();
}

?>


<div class="container" >
  <div class="row">
    <div id="myCarousel" class="carousel  slide">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <center>
        <div class="carousel-inner">
          <div class="active item" style="height: 400px !important;"> 

          <img src="img/img_carrossel/super.png">

         </div>

         <?php foreach ($result as $valores) : ?>

          <div class="item" style="height: 400px !important;"> 
            <a href="produtos_detalhes.php?id=<?=$valores['mov_id']?>">
             <?php echo "<img src=\"".$valores['mov_img']."\">"; ?>
           </a>
         </div>


       <?php endforeach?> 
     </div>
   </center>

   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
</div>

