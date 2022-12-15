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
    $foto_aluno = $_POST['foto_aluno'];
    $serie = $_POST['serie'];
    $recado = $_POST['recado'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_ingresso = $_POST['data_ingresso'];
   
    if ($foto_aluno == "") {
        $sql = "UPDATE alunos SET 
                    nome_aluno='$nome_aluno',
                    cpf='$cpf',
                    email='$email',
                    senha_aluno='$senha_aluno',
                    turno='$turno',
                    matricula='$matricula',
                    serie='$serie',
                    recado='$recado',
                    data_nascimento='$data_nascimento',
                    data_ingresso='$data_ingresso'
                WHERE cod_aluno='$cod'";
    } else {
        $sql = "UPDATE alunos SET 
                    nome_aluno='$nome_aluno',
                    cpf='$cpf',
                    email='$email',
                    senha_aluno='$senha_aluno',
                    turno='$turno',
                    matricula='$matricula',
                    foto_aluno='$foto_aluno',
                    serie='$serie',
                    recado='$recado',
                    data_nascimento='$data_nascimento',
                    data_ingresso='$data_ingresso'
                WHERE cod_aluno='$cod'";
    }

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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Login</title>
</head>
<?php include('menu.php'); ?>
<div class="main-login">
    <div class='left-login'>
        <img src="imagens/edita.svg" class="left-login-image" alt="Cell Animado">
    </div>

    <form method="post">
        <div class="right-login">
            <div class="card-login">
                <div class="row">
                    <h2> EDITAR CADASTRO </h2>

    <form method="post">
        <div class="textfield">
            <b>Nome:</b> <input class='form-control' type="text" name="nome_aluno" value="<?php echo $linha['nome_aluno'] ?>" />
        </div>
        <div class="textfield col-7">
            <b>Email:</b> <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
        </div>
        <div class="textfield col-5">
            <b>Senha:</b> <input class='form-control' type="password" name="senha_aluno" value="<?php echo $linha['senha_aluno'] ?>" />
        </div>
        <div class="textfield col-4">
            <b>CPF:</b> <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
        </div>
        <div class="textfield col-4">
            <b>Matricula:</b> <input class='form-control' type="text" name="matricula" value="<?php echo $linha['matricula'] ?>" />
        </div>
        <div class="textfield col-4">
            <b>Data de nascimento:</b> <input class='form-control' type="date" name="data_nascimento" value="<?php echo $linha['data_nascimento'] ?>" />
        </div>
        <div class="textfield col-6">
                        <b>Série:</b>
                        <select class="form-control" type="text" name="serie" class="form-select" value="<?php echo $linha['serie'] ?>">
                    <option selected><?php echo $linha['serie'] ?></option>
                        <option value="Infantil I">Infantil I</option>
                        <option value="Infantil II">Infantil II</option>
                        <option value="Infantil III">Infantil III</option>
                        <option value="1° Ano">1° Ano</option>
                        <option value="2° Ano">2° Ano</option>
                        <option value="3° Ano">3° Ano</option>
                        <option value="4° Ano">4° Ano</option>
                        <option value="5° Ano">5° Ano</option>
                        <option value="6° Ano">6° Ano</option>
                        <option value="7° Ano">7° Ano</option>
                        <option value="8° Ano">8° Ano</option>
                        <option value="9° Ano">9° Ano</option>
                        </select>
                    </div>
        <div class="textfield col-6">
                    <b>Turno:</b>
                        <select class="form-control" type="text" name="turno" class="form-select" value="<?php echo $linha['turno'] ?>" >
                        <option selected><?php echo $linha['turno'] ?></option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Integral">Integral</option>
                          </select>
                        </div>
                    
        <div class="textfield col-4">
            <b>Data de ingresso:</b> <input class='form-control' type="date" name="data_ingresso" value="<?php echo $linha['data_ingresso'] ?>" />
        </div>
        <div class="textfield col-8">
            <b>Foto:</b> <input class='form-control' type="file" name="foto_aluno" value="<?php echo $linha['foto_aluno'] ?>" />
        </div>
        <div class="textfield">
            <b>Recado:</b> <input class='form-control' type="text" name="recado" value="<?php echo $linha['recado'] ?>" />
        </div>

        <div class="form-group">
            <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn-login' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>



</body>
