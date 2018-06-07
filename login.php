<?php
	include 'cabecario.php';
?>

<body id="loginBackground">

	<!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="text-center" style="padding:50px 0">
		<div class="logo"><em>Login</em></div>
			<?php if(isset($_SESSION['error'])):?>
			<center><span class="error-login"> Usuário ou senha Incorretos </span></center> 
			<?php unset($_SESSION['error']); ?>
			<?php  endif;?>
			<?php if(isset($_SESSION['sucess-cadastro'])):?>
			<center><span class="sucess-cadastro"> Cadastro Realizado com Sucesso </span></center> 
			<?php unset($_SESSION['sucess-cadastro']); ?>
			<?php  endif;?>
			<?php if (isset($_SESSION['deleted'])): ?>
			<center><span class="sucess-cadastro"> Usuário removido com sucesso </span></center> 
			<?php
			unset($_SESSION['deleted']);
			endif
			?>
			<?php if (isset($_SESSION['error_delete'])): ?>
			<center><span class="error-login"> Erro ao tentar deletar usuário. </span></center> 
			<?php
			unset($_SESSION['error_delete']);
			endif
			?>
		<!-- Main Form -->
		<div class="login-form-1">
			<form action="do_login.php" id="login-form" class="text-left" method="POST">
				<!--Gambiarra pra não auto_preencher os campos do form-->
				<input type="text" name="usuario" style="display:none">
				<input type="password"  name="senha" style="display:none">
				<!-- fim da Gambiarra-->

				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Login</label>
							<input type="text" class="form-control" id="lg_username" name="usuario" placeholder="Login">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Senha</label>
							<input type="password" class="form-control" id="lg_password" name="senha" placeholder="Senha">
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