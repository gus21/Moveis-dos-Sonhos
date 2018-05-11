<?php
include 'cabecario.php';
?>
<body id="loginBackground">

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo"><em>Cadastrar</em></div>
		<!-- Main Form -->
		<div class="login-form-1">
			<!-- <form action="form.php" id="login-form" class="text-left" method="POST"> -->
				<form action="add_user.php" id="login-form" class="text-left" method="POST">
					<div class="login-form-main-message"></div>
					<div class="main-login-form">
						<div class="login-group">
							<!--Gambiarra pra não auto_preencher os campos do form-->
							<input type="text" name="usuario" style="display:none">
							<input type="password"  name="senha" style="display:none">
							<input type="email"  name="email" style="display:none">
							<!-- fim da Gambiarra-->
							<div class="form-group">
								<label for="lg_password" class="sr-only">Email</label>
								<input type="email" class="form-control" id="lg_password" autocomplete="off" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="lg_username" class="sr-only">Login</label>
								<input type="text" class="form-control" id="lg_username" autocomplete="off" name="usuario" placeholder="Login" required>
							</div>
							<div class="form-group">
								<label for="lg_password" class="sr-only">Senha</label>
								<input type="password" class="form-control" id="lg_password" autocomplete="off" name="senha" placeholder="Senha" required>
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

</body>
</html>