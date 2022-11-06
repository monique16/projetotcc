<?php
include('menu.php');
include('conexao.php'); // importa o arquivo de conexao com o BD
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/


if (isset($_POST['btnSalvar'])) {
    $horario_cronograma =  $_POST['horario_cronograma'];
    $disciplina_seg = $_POST ['disciplina_seg'];
    $disciplina_terc = $_POST ['disciplina_terc'];
    $disciplina_quar = $_POST ['disciplina_quar'];
    $disciplina_quin = $_POST ['disciplina_quin'];
    $disciplina_sext = $_POST ['disciplina_sext'];


    $sql = "INSERT INTO cronograma (horario_cronograma, disciplina_seg, disciplina_terc, disciplina_quar, disciplina_quin, disciplina_sext)
            VALUES ('$horario_cronograma', '$disciplina_seg', '$disciplina_terc', '$disciplina_quar', '$disciplina_quin', '$disciplina_sext')";
echo $sql;  
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Cronograma cadastrado com sucesso.') </script>";
        header("Location: cronograma.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mb-4 mt-4 title text-center">
                <h1>Cronograma</h1>
            </div>
        </div>

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
                        <div class="col-6"><button type="button" class="btn btn-danger w-100" id="buttonCancelar">Cancelar</button></div>
                        <div class="col-6"><input type="submit" name="btnSalvar" class="btn btn-primary w-100" value="Salvar"></div>
                    </div>
                </form>
            </div>
    </div>
    <div>
        <footer class="footer mt-auto py-3">
            <div class="container fluid">
                <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
            </div>
        </footer>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>
