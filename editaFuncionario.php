
<?php
include('conexao.php');

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
    header("location: login.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) */
    exit;
}

$cod = $_GET['cod_usuario'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $nome_usuario = $_POST['nome_usuario'];
    $cpf =  $_POST['cpf'];
    $email = $_POST['email'];
    $senha_usuario = $_POST['senha_usuario'];
    $funcao = $_POST['funcao'];
    $turno = $_POST['turno'];
   

    $sql = "UPDATE usuario SET 
                nome_usuario='$nome_usuario',
                cpf='$cpf',
                email='$email',
                senha_usuario='$senha_usuario',
                funcao='$funcao',
                turno='$turno'
            WHERE cod_usuario='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaFuncionario.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM usuario WHERE cod_usuario=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar usuário</h3>

    <form method="post">
        <div class="form-group">
            Nome: <input class='form-control' type="text" name="nome_usuario" value="<?php echo $linha['nome_usuario'] ?>" />
        </div>
        <div class="form-group">
            CPF: <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
        </div>
        <div class="form-group">
            Email: <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
        </div>
        <div class="form-group">
            Senha: <input class='form-control' type="password" name="senha_usuario" value="<?php echo $linha['senha_usuario'] ?>" />
        </div>
        <div class="form-group">
            Função: <input class='form-control' type="text" name="funcao" value="<?php echo $linha['funcao'] ?>" />
        </div>
        <div class="form-group">
            Turno: <input class='form-control' type="text" name="turno" value="<?php echo $linha['turno'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>

<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

</body>
