<?php include 'cabecario.php'; 

if($_SESSION['user-role']=='admin'){

    session_start();

    require_once 'conexao.php';

    $id = $_GET['id'];
    $role= $_SESSION['user-role'];

    $stmt = $pdo->prepare("SELECT * FROM users");

    $stmt->execute();

    $result = $stmt->fetchAll();
    ?>

    <center>
        <?php if (isset($_SESSION['error_delete'])): ?>
            <center><span class="error-login"> Erro ao tentar deletar usuário. </span></center> 
            <?php
            unset($_SESSION['error_delete']);
        endif;
        ?>
        <?php if (isset($_SESSION['deleted'])): ?>
            <center><span class="sucess-cadastro"> Usuário removido com sucesso </span></center> 
            <?php
            unset($_SESSION['deleted']);
        endif;?>
        <table id="users_table">
            <tr>
                <th>Nome</th>
                <th>Email </th>
                <th>Ações</th>
            </tr>  
            <?php foreach($result[0] as $rows)?>
            <td><?=$rows['usr_nome']?></td>
            <td><?=$rows['usr_email']?></td>    
            <td width="20%">
                <center>
                    <a href='delete_user.php?id=<?=$rows['usr_id']?>&flag=admin'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Usuário'></i></a>
                    <a href='edit_user.php?id=<?=$rows['usr_id']?>&flag=admin'><i class='fa fa-2x fa-pencil sr-icons' title='Editar Usuário'></i></a>
                </center>
            </td>
        </tr>
    </table> 
</center>
<?php }else{
    echo "<center><br><br><br><h1>É NECESSÁRIO PERMISSÃO DE ADMININSTRADOR</h1></center>";
} ?>

<?php include 'rodape.php'; ?>