<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_cronograma'];
$sql = "SELECT * FROM cronograma WHERE cod_cronograma=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Editar Cronograma</title>
</head>
<?php include('menu.php'); ?>
<div class="main-login">
    <div class='left-login'>
        <img src="imagens/editcrono.svg" class="left-login-image" alt="Cell Animado">
    </div>

    <form method="post" action="confirmaEdicao.php">
        <div class="right-login">
            <div class="card-login">
                <div class="row">
                    <h2> EDITAR CRONOGRAMA </h2>
                    <input type="text" style="visibility:hidden" name="cod" id="cod" value="<?php echo $cod?>">

                    <div class="row g-3">
                        <div class="textfield col-6">
                            <label for="horario_cronograma" class="form-label">Hora das aulas</label>
                            <input type="time" name="horario_cronograma" id="horario_cronograma" class="form-control" value="<?php echo $linha['horario_cronograma'] ?>">
                        </div>
                        <div class="textfield col-6">
                            <label for="disciplina_seg" class="form-label">Segunda-feira</label>
                            <input type="text" name="disciplina_seg" id="disciplina_seg" class="form-control" value="<?php echo $linha['disciplina_seg'] ?>">
                        </div>
                        <div class="textfield col-6">
                            <label for="disciplina_terc" class="form-label">Terça-feira</label>
                            <input type="text" name="disciplina_terc" id="disciplina_terc" class="form-control" value="<?php echo $linha['disciplina_terc'] ?>">
                        </div>
                        <div class="textfield col-6">
                            <label for="disciplina_quar" class="form-label">Quarta-feira</label>
                            <input type="text" name="disciplina_quar" id="disciplina_quar" class="form-control" value="<?php echo $linha['disciplina_quar'] ?>">
                        </div>
                        <div class="textfield col-6">
                            <label for="disciplina_quin" class="form-label">Quinta-feira</label>
                            <input type="text" name="disciplina_quin" id="disciplina_quin" class="form-control" value="<?php echo $linha['disciplina_quin'] ?>">
                        </div>
                        <div class="textfield col-6">
                            <label for="disciplina_sext" class="form-label">Sexta-feira</label>
                            <input type="text" name="disciplina_sext" id="disciplina_sext" class="form-control" value="<?php echo $linha['disciplina_sext'] ?>">
                        </div>
                        <div class="col-12">
                            <div id="mensagemErro" class="alert alert-danger d-none" role="alert">
                                Mensagem de Erro!
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-1"></div>
                            <input class='col-5 btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
                            <input class='col-5 btn-login' type="reset" value="Limpar campos" />
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



</body>

</html>