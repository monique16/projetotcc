
<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_cronograma'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $horario_cronograma =  $_POST['horario_cronograma'];
    $disciplina_seg = $_POST['disciplina_seg'];
    $disciplina_terc = $_POST['disciplina_terc'];
    $disciplina_quar = $_POST['disciplina_quar'];
    $disciplina_quin = $_POST['disciplina_quin'];
    $disciplina_sext = $_POST['disciplina_sext'];

    $sql = "UPDATE cronograma SET 
                horario_cronograma='$horario_cronograma',
                disciplina_seg='$disciplina_seg',
                disciplina_terc='$disciplina_terc',
                disciplina_quar='$disciplina_quar',
                disciplina_quin='$disciplina_quin',
                disciplina_sext='$disciplina_sext'
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

<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Click Escola</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Meta tags necessárias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anônimo"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anônimo">
    <!-- FONT AWESONME -->
    <script src="https://kit.fontawesome.com/74e138c6b6.js" crossorigin="anônimo"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/principal.css" />
    <link rel="stylesheet" href="css/cadastro.css" />
    <link rel="stylesheet" tipo="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<div class="main-login">
    <div class='left-login'>
        <img src="imagens/edita.svg" class="left-login-image" alt="Cell Animado">
    </div>

    <form method="post">
        <div class="right-login">
            <div class="card-login">
                <div class="row">
                    <h2> EDITAR CADASTRO </h2>

                    <div class="col-12">
                <form action="cadastraCronograma.php" id="formNovoCronograma" method="POST">
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="horario_cronograma" class="form-label">Hora das aulas</label>
                            <input type="time" name="horario_cronograma" id="horario_cronograma" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="disciplina_seg" class="form-label">Segunda-feira</label>
                            <input type="text" name="disciplina_seg" id="disciplina_seg" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="disciplina_terc" class="form-label">Terça-feira</label>
                            <input type="text" name="disciplina_terc" id="disciplina_terc" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="disciplina_quar" class="form-label">Quarta-feira</label>
                            <input type="text" name="disciplina_quar" id="disciplina_quar" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="disciplina_quin" class="form-label">Quinta-feira</label>
                            <input type="text" name="disciplina_quin" id="disciplina_quin" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="disciplina_sext" class="form-label">Sexta-feira</label>
                            <input type="text" name="disciplina_sext" id="disciplina_sext" class="form-control">
                        </div>
                        <div class="col-12">
                            <div id="mensagemErro" class="alert alert-danger d-none" role="alert">
                                Mensagem de Erro!
                            </div>
                        </div>
<div class="form-group">
        <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
        <input class='btn-login' type="reset" value="Limpar campos" />
    </div>
                    </form>
                </div>
            </div>
        </div>
    
<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

</body>