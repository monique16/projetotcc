<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if (isset($_POST['btnSalvar'])) {
    $nome_funcionario = $_POST['nome_funcionario'];
    $cpf =  $_POST['cpf'];
    $email = $_POST['email'];
    $senha_funcionario = $_POST['senha_funcionario'];
    $funcao = $_POST['funcao'];
    $turno = $_POST['turno'];

    $sql = "INSERT INTO funcionarios (nome_funcionario, cpf, email, senha_funcionario, funcao, turno)
            VALUES ('$nome_funcionario', '$cpf', '$email', '$senha_funcionario', '$funcao', '$turno')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Funcionário cadastrado com sucesso.') </script>";
        header("Location: listaFuncionario.php");
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
    <title>Login</title>
</head>
<?php include('menu.php'); ?>
<div class="main-login">
    <div class='left-login'>
        <img src="imagens/teaching-animate.svg" class="left-login-image" alt="Cell Animado">
    </div>

    <form method="post">
        <div class="right-login">
            <div class="card-login">
                <div class="row">

                    <h2> CADASTRAR FUNCIONARIOS </h2>

                    <div class="textfield">
                        <b>Nome: </b><input class='form-control' type="text" name="nome_funcionario" />
                    </div>
                    <div class="textfield">
                        <b>CPF: </b><input class='form-control' type="text" name="cpf" />
                    </div>
                    <div class="textfield">
                        <b>Email: </b><input class='form-control' type="email" name="email" />
                    </div>
                    <div class="textfield">
                        <b>Senha: </b><input class='form-control' type="password" name="senha_funcionario" />
                    </div>
                    <div class="textfield col-6">
                        <b>Função:</b>
                        <input  type="text" name="funcao" class="form-select"/>
                        <!--<select>
                            <option selected></option>
                            <option value="Diretor(a)">Diretor(a)</option>
                            <option value="Vice-Diretor(a)">Vice-Diretor(a)</option>
                            <option value="Secretário(a)">Secretário(a)</option>
                            <option value="Professor(a)">Professor(a)</option>
                            <option value="Outro...">Outro...</option>
                        </select>-->
                    </div>
                    <div class="textfield col-6">
                        <b>Turno:</b>
                        <input  type="text" name="turno" class="form-select"/>
                        <!--<select type="text" name="turno" class="form-select">
                            <option selected></option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Integral">Integral</option>
                        </select>-->
                    </div>
                    <div class="form-group">
                        <input class='btn-login' type="submit" value="Enviar" name="btnSalvar" />
                        <input class='btn-login' type="reset" value="Limpar campos" />
                    </div>
    </form>
</div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>