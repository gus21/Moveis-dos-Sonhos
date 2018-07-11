<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" >    <?php
  $rows   = array_map('str_getcsv', file('produtos.csv'));
  $header = array_shift($rows);
  $csv    = array();
  foreach($rows as $row) {
    $csv[] = array_combine($header, $row);

  }
  ?>
  <div class="row">
    <div id="myCarousel" class="carousel  slide">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <center>
        <div class="carousel-inner">
          <div class="active item" style="height: 455px !important;"> 

           <img src="img/img_carrossel/" >

         </div>

         <?php foreach ($csv as $line => $valores) : ?>

          <div class="item" style="height: 455px !important;"> 
            <a href="produtos_detalhes.php?l=<?=$line?>">
             <?php echo "<img src=\"".$valores['IMG']."\">"; ?>
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


