<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>

</head>

<body>

<?php
	include 'cabe.php';
 ?>	


<div>
  <form action="formu.php" method="POST">
    <input type="text" name="Usuario" placeholder="Usuario" required title="Nome de Usuario"><p>
    <input type="password" name="pass" placeholder="Senha" required ><p>
    <input type="submit" value="Entrar" >
  </form>
</div>

<?php
	include 'rod.php';
?>

</body>
</html>