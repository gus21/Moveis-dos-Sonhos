
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Quem Somos</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
	body{margin-top:20px;
	background-image: url("https://trello-backgrounds.s3.amazonaws.com/SharedBackground/2560x1707/31e2b1391c87caa9f06c1f6f30cd0a17/photo-1520858362407-812e1188b1eb");
	}
	ul.notes li {
		margin: 10px 40px 50px 0px;
		float: left;
	}

	ul.notes li, ul.tag-list li {
		list-style: none;
	}

	ul.notes li div small {
		position: absolute;
		top: 5px;
		right: 5px;
		font-size: 10px;
	}

	div.rotate-1 {
		-webkit-transform: rotate(-6deg);
		-o-transform: rotate(-6deg);
		-moz-transform: rotate(-6deg);
	}

	div.rotate-2 {
		-o-transform: rotate(4deg);
		-webkit-transform: rotate(4deg);
		-moz-transform: rotate(4deg);
		position: relative;
		top: 5px;
	}

	.lazur-bg {
		background-color: #23c6c8;
		color: #ffffff;
	}

	.red-bg {
		background-color: #ed5565;
		color: #ffffff;
	}

	.navy-bg {
		background-color: #1ab394;
		color: #ffffff;
	}

	.yellow-bg {
		background-color: #f8ac59;
		color: #ffffff;
	}
	.green-bg {
		background-color: green;
		color: #ffffff;
	}
	.yellow2-bg{
		background-color:#ffff00;
		color: #ffff33;
	}
	.laranja-bg{
		background-color: #ff6600;
		color: #ff6600;
	}
	img{
	width: 100%;

	}
	#centro{
		position: relative;
		top:30px;
		font-size: 17px;
	}

	ul.notes li div {
		text-decoration: none;
		color: #000;
		display: block;
		position: relative;
		top:35px;
		height: 220px;
		width: 240px;
		padding: 0.5em;
		-moz-box-shadow: 5px 5px 7px #212121;
		-webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
		box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
		-moz-transition: -moz-transform 0.15s linear;
		-o-transition: -o-transform 0.15s linear;
		-webkit-transition: -webkit-transform 0.15s linear;
		font-size:17px;
	}


</style>

</head>
<body>
	<?php
	include 'cabecario.php';
	?>

	<div class="container bootstrap snippet">

		<div class="row">
			<ul class="notes">
				<li>
					<div class="rotate-1 lazur-bg">
						<h3>Abrão Henrique</h3>
						<p id="centro">E-mail: abraaotsurugi@gmail.com</p>
						<p id="centro">WhatsAPP: 9 8353-4766</p>
					</div>
				</li>   
				<li>
					<div class="rotate-2 red-bg">
						<h3>Gustavo dos Santos</h3>
						<p id="centro"> E-mail: gustavostsmo7@gmail.com</p>
						<p id="centro"> WhatsAPP: 9 9163-8882</p>
					</div>
				</li>    
				<li>
					<div class="rotate-1 yellow-bg">
						<h3>Gustavo Dantas</h3>
						<p id="centro"> E-mail: gustavodantas@gmail.com </p>
						<p id="centro"> WhatsAPP: 9 8210-5039</p>
					</div>

				</li>  
				<li>
					<div class="rotate-2 laranja-bg">
						<h3>Luiz Carlos</h3>
						<p id="centro"> E-mail: luizcarlosjr1999@gmail.com </p>
						<p id="centro"> WhatsAPP: 9 7912-5318</p>
					</div>
				</li>  
				<li>
					<div class="rotate-1 yellow2-bg">
						<h3>Tuanno Danyllo</h3>
						<p id="centro"> E-mail: tuannodanyllo26@gmail.com</p>
						<p id="centro"> WhatsAPP: 9 9808-2117 </p>
					</div>
				</li>  
				<li>
					<div class="rotate-2 green-bg">
						<h3>Digital Service</h3>
						<p id="centro"> E-mail: servicodigital003@gmail.com</p>
						<p id="centro"> WhatsAPP: 9 9808-2117 </p>
					</div>
				</li> 	
						
			</ul>  
		</div>
	</div>
	</body>

	<?php 
	
	include 'rodape.php';
	?>	
</body>
</html>
