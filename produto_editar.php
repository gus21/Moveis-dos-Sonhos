<?php 
include 'cabecario.php';

require_once 'conexao.php';

$id=$_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE usr_id = ?");

$stmt->execute(array($id));
 ?>
 
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