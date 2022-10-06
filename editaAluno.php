<?php
include('conexao.php');

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
    header("location: login.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) */
    exit;
}

$cod = $_GET['matricula'];

if (isset($_POST['btnSalvar'])) {
    $nome_usuario = $_POST['nome_usuario'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha_usuario =  $_POST['senha_usuario'];
    $turno =  $_POST['matricula'];
    $recado = $_POST['recado'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_ingresso = $_POST['data_ingresso'];
    $foto_usuario = $_POST['foto_aluno'];
    $sql = "UPDATE usuario SET 
                nome_usuario='$nome_usuario', 
                cpf='$cpf',
                email='$email',
                senha_usuario='$senha_usuario',
                turno='$turno',
                recado='$recado'
                data_nascimento='$data_nascimento'
                data_ingresso='$data_ingresso'
                foto_aluno='foto_aluno'

            WHERE cod_usuario='$cod'";

mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaAluno.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }

}
$sql = "SELECT * FROM usuario WHERE usuario=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar Aluno</h3>
    <form method="post">
        <div class="form-group" enctype="multipart/form-data">
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
            Turno: <input class='form-control' type="text" name="turno" value="<?php echo $linha['turno'] ?>" />
        </div>
        <div class="form-group">
            Recado: <input class='form-control' type="text" name="recado" value="<?php echo $linha['recado'] ?>" />
        </div>
        <div class="form-group">
            Data de nasciemento: <input class='form-control' type="date" name="data_nasciemento" value="<?php echo $linha['data_nasciemento'] ?>" />
        </div>
        <div class="form-group">
            Data de ingresso: <input class='form-control' type="date" name="data_ingresso" value="<?php echo $linha['data_ingresso'] ?>" />
        </div>
        <b>Foto:</b>
            <label for="formFile" class="form-label"></label>
             <input class="form-control" type="file" id="formFile" name="foto">
            </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>

    <div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>
