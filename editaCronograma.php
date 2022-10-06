
<?php
include('conexao.php');


$cod = $_GET['cod_cronograma'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $dia_cronograma = $_POST['dia_cronograma'];
    $horario_cronograma =  $_POST['horario_cronograma'];
    $disciplina = $_POST['disciplina'];

    $sql = "UPDATE cronograma SET 
                dia_cronograma='$dia_cronograma',
                horario_cronograma='$horario_cronograma',
                disciplina='$disciplina',

            WHERE cod_cronograma='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: cronograma.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM cronograma WHERE cod_cronograma=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

</body>