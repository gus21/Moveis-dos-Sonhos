<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="css/projetoCss.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>


	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
	<script type="text/javascript">
		(function( $ ) {

    //Function to animate slider captions 
    function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
			$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#sg-carousel'),
	$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  

	
})(jQuery);	
</script>
</head>

<body>
	
	<?php 
	
	include 'cabecario.php';
	?>

	<div class="container-fluid" >
		<div class="row">
			<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel" style="position: relative; top: -20">
			<!-- 	<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1" class=""></li>
				<li data-target="#carousel" data-slide-to="2" class=""></li>
				<li data-target="#carousel" data-slide-to="3" class=""></li>
			</ol> -->
				<!-- Carousel items -->
				<div class="carousel-inner carousel-zoom">
					<div class="item active"><img id="img1" class="img-responsive" src="img/produtos/cadeira-de-balanço.jpg" alt="">
						<div class="carousel-caption">
							<!-- <h1  data-animation="animated zoomInLeft" class="cap-txt ">We are amazing</h1>
							<p data-animation="animated bounceInDown">Get start your next awesome project</p>
							<button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="Send"><span>Send</span></button> -->
						</div>
					</div>
					<div class="item"><img id="img2" class="img-responsive" src="img/produtos/mesa-jantar-vidro.jpg" alt="">
						<div class="carousel-caption">
							<!-- <h1 data-animation="animated zoomInLeft" class="cap-txt">We are smart developers</h1>
							<p data-animation="animated bounceInDown">Get start your next awesome project</p>
							<button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="Send"><span>Send</span></button> -->
						</div>
					</div>
					<div class="item"><img id="img3" class="img-responsive" src="img/produtos/poltrona-executiva.png" alt="">
						<!-- <div class="carousel-caption animated slideInLeft">
							<h1 data-animation="animated zoomInLeft" class="cap-txt">We are innovative</h1>
							<p data-animation="animated bounceInDown">Get start your next awesome project</p>
							<button data-animation="animated bounceInUp" class="button button--tamaya button--border-thick" data-text="Send"><span>Send</span></button>
						</div> -->
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
					<a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
				</div> 
			</div>
		</div>
	</div>

	<?php 
	
	include 'rodape.php';
	?>

</body>
</html>
