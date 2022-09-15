<html>

<?php
include('conexao.php');

$cod = $_GET['matricula'];

if (isset($_POST['btnSalvar'])) {
    $nome_aluno = $_POST['nome_aluno'];
    $serie = $_POST['serie'];
    $foto_aluno = $_POST['foto_aluno'];
    $turno =  $_POST['turno'];
    $data_ingresso =  $_POST['data_ingresso'];
    $data_nascimento = $_POST['Data_Nascimento'];
    $sql = "UPDATE aluno SET 
                nome_aluno='$nome_aluno', 
                serie='$serie',
                foto_aluno='$foto_aluno',
                turno='$turno',
                data_ingresso='$data_ingresso',
                Data_Nascimento='$data_nascimento'
            WHERE matricula='$cod'";

mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaAluno.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }

}
$sql = "SELECT * FROM aluno WHERE matricula=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar Aluno</h3>
    <form method="post">
        <div class="form-group" enctype="multipart/form-data">
            Nome: <input class='form-control' type="text" name="nome_aluno" value="<?php echo $linha['nome_aluno'] ?>" />
        </div>
        <div class="form-group">
            Serie: <input class='form-control' type="text" name="serie" value="<?php echo $linha['serie'] ?>" />
        </div>
        <div class="form-group">
            Foto: <input class='form-control' type="file" name="foto_aluno" value="<?php echo $linha['foto_aluno'] ?>" />
        </div>
        <div class="form-group">
            Turno: <input class='form-control' type="text" name="turno" value="<?php echo $linha['turno'] ?>" />
        </div>
        <div class="form-group">
            Data de ingresso: <input class='form-control' type="date" name="data_ingresso" value="<?php echo $linha['data_ingresso'] ?>" />
        </div>
        <div class="form-group">
            Data de nascimento: <input class='form-control' type="date" name="Data_Nascimento" value="<?php echo $linha['Data_Nascimento'] ?>" />
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

</html>