<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/projetoCss.css">
	<link rel="stylesheet" type="text/css" href="css/produtosForm.css">
</head>
<body>
	<?php
	include 'cabecario.php';
	?>

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo"><em>Cadastrar</em></div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form action="produtoCadastrar.php" id="login-form" class="text-left" method="POST">
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
							<input type="number" class="form-control" id="lg_password" name="estoque" placeholder="Estoque" required>
						</div>
						<div>
							<div class="col-md-6">
								<div class="form-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" id="imgInp">
										</span>
									</span>
									<input type="text" class="form-control" readonly>
								</div>
								<img id='img-upload'/>
							</div>
						</div>
					</div>
					<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
				</div>
			</form>
		</div>
		<!-- end:Main Form -->
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
	});</script>
</body>
</html>