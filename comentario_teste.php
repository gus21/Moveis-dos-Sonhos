<?php
require_once 'conexao.php';

?>
<form action="adicionar_comentario.php" id="login-form" class="text-left" method="POST">
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
 <div class="form-group">
  <label for="comment">comentario:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div> 