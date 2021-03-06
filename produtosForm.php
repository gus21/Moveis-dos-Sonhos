<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/projetoCss.css">
	<link rel="stylesheet" type="text/css" href="css/produtosForm.css">
</head>
<body id="loginBackground">
	<?php
	include 'cabecario.php';
	?>

<body id="loginBackground">
	
	<div class="text-center">
		<div class="logo"><em>Cadastrar</em></div>
		
		<div class="login-form-1">
			<form action="produtoCadastrar.php" id="login-form" class="text-left" method="POST" enctype="multipart/form-data">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<input type="text" class="form-control" id="lg_username" name="produto" placeholder="Nome do produto" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="lg_descrip" name="descricao" placeholder="Descriçao" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="lg_price" name="preco" placeholder="Preço" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="lg_price" name="categoria" placeholder="Categoria" required>
						</div>
						
						<div class="form-group">
							<input type="number" class="form-control" id="lg_price" name="estoque" placeholder="estoque" required>
						</div>
						<div class="form-group">
							<input type="file" class="form-control" id="imgInp" required name="arquivo">
							<input type="text" class="form-control" readonly>
							<img id='img-upload'/>
						</div>
					</div>
					<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
			</form>
		</div>
	</div>
	
	<?php 
	include 'rodape.php';
	?>	
	<script type="text/javascript" >
		$(document).ready( function() {
			$(document).on('change', '.btn-file :file', function() {
				var input = $(this),
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
				input.trigger('fileselect', [label]);
			});

			$('.btn-file :file').on('fileselect', function(event, label) {

				var input = $(this).parents('.input-group').find(':text'),
				log = label;

				if( input.length ) {
					input.val(log);
				} else {
					if( log ) alert(log);
				}

			});
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#img-upload').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#imgInp").change(function(){
				readURL(this);
			}); 	
		});
	</script>
</body>
</html>



