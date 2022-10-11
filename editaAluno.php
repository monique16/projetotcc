<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_aluno'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $nome_aluno = $_POST['nome_aluno'];
    $cpf =  $_POST['cpf'];
    $email = $_POST['email'];
    $senha_aluno = $_POST['senha_aluno'];
    $turno = $_POST['turno'];
    $matricula = $_POST['matricula'];
    $recado = $_POST['recado'];
    $foto_aluno = $_POST['foto_aluno'];
    $serie = $_POST['serie'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_ingresso = $_POST['data_ingresso'];

    $sql = "UPDATE alunos SET 
                nome_aluno='$nome_aluno',
                cpf='$cpf',
                email='$email',
                senha_aluno='$senha_aluno',
                turno='$turno'
                matricula='$matricula',
                recado='$recado',
                foto_aluno='$foto_aluno',
                serie='$serie',
                data_nascimento='$data_nascimento',
                data_ingresso='$data_ingresso',
            WHERE cod_aluno='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaAluno.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM alunos WHERE cod_aluno=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar usuário</h3>

    <form method="post">
        <div class="form-group">
            Nome: <input class='form-control' type="text" name="nome_aluno" value="<?php echo $linha['nome_aluno'] ?>" />
        </div>
        <div class="form-group">
            CPF: <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
        </div>
        <div class="form-group">
            Email: <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
        </div>
        <div class="form-group">
            Senha: <input class='form-control' type="password" name="senha_aluno" value="<?php echo $linha['senha_aluno'] ?>" />
        </div>
        <div class="form-group">
            Turno: <input class='form-control' type="text" name="turno" value="<?php echo $linha['turno'] ?>" />
        </div>
        <div class="form-group">
            Matricula: <input class='form-control' type="text" name="matricula" value="<?php echo $linha['matricula'] ?>" />
        </div>
        <div class="form-group">
            Recado: <input class='form-control' type="text" name="recado" value="<?php echo $linha['recado'] ?>" />
        </div>
        <div class="form-group">
            Foto: <input class='form-control' type="text" name="foto_aluno" value="<?php echo $linha['foto_aluno'] ?>" />
        </div>
        <div class="form-group">
            Série: <input class='form-control' type="text" name="serie" value="<?php echo $linha['serie'] ?>" />
        </div>
        <div class="form-group">
            Data de Nascimento: <input class='form-control' type="date" name="data_nascimento" value="<?php echo $linha['data_nascimento'] ?>" />
        </div>
        <div class="form-group">
            Data de Ingresso: <input class='form-control' type="date" name="data_ingresso" value="<?php echo $linha['data_ingresso'] ?>" />
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
