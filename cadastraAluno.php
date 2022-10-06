<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if (isset($_POST['btnSalvar'])) {
    $nome_usuario = $_POST['nome_usuario'];
    $cpf =  $_POST['cpf'];
    $email = $_POST ['email'];
    $senha_usuario = $_POST['senha_usuario'];
    $turno = $_POST['turno'];
    $matricula = $_POST['matricula'];
    $recado = $_POST['recado'];
    $serie = $_POST['serie'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_ingresso = $_POST['data_ingresso'];

    $foto_aluno = $_FILES["foto_aluno"];
    $tamanho = 1000000;
    
    $error = array();
    // Verifica se o arquivo é uma imagem
    if (!preg_match("/^image\/(pjpeg|jpeg|jpg|png|gif|bmp)$/", $foto_aluno["type"])) {
        $error[1] = "Isso não é uma imagem.";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if ($foto_aluno["size"] > $tamanho) {
        $error[2] = "A imagem deve ter no máximo " . $tamanho . " bytes";
    }
    
    if (is_uploaded_file($foto_aluno['tmp_name'])) {
        $imgData = addslashes(file_get_contents($foto_aluno['tmp_name']));
        $imageProperties = getimageSize($foto_aluno['tmp_name']);
    
        echo $imageProperties['mime'];
    
        $imgtype = $imageProperties['mime'];
        $foto = $imgData;
    }

    $sql = "INSERT INTO usuario (nome_usuario, cpf, email, senha_usuario, turno, matricula, recado, serie, data_nascimento, data_ingresso foto_aluno,)
            VALUES ('$nome_usuario', '$cpf', '$email', '$senha_usuario', '$turno', '$matricula', '$recado', '$serie', '$data_nascimento', '$data_ingresso', '$foto_aluno',)";

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
        <img src="imagens/sign-up-animate.svg" style="margin-top: 0px"class="left-login-image" alt="Cell Animado"></div>

            <form method="post">
            <div class="right-login">
                <div  class="card-login">
                    <div class="row">

                    <h2> CADASTRAR ALUNOS </h2>

                    <div class="textfield">
                        <b>Nome: </b><input class='form-control' type="text" name="nome_usuario" />
                    </div>
                    <div class="textfield col-7">
                        <b>Email: </b><input class='form-control' type="email" name="email" />
                    </div>
                    <div class="textfield col-5">
                        <b>Senha: </b><input class='form-control' type="password" name="senha_usuario" />
                    </div>
                    <div class="textfield col-4">
                        <b>CPF: </b><input class='form-control' type="text" name="cpf" />
                    </div>
                    <div class="textfield col-4">
                        <b>Matrícula: </b><input class='form-control' type="text" name="matricula" />
                    </div>
                    <div class="textfield col-4">
                        <b>Data de nascimento: </b><input class='form-control' type="date" name="data_nascimento" />
                    </div>  
                    <div class="textfield col-6">
                    <b>Turno:</b>
                        <select type="text" name="turno" class="form-select">
                        <option selected></option>
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Integral</option>
                            </select>
                        </div>
                    <div class="textfield col-6">
                        <b>Série:</b>
                    <select type="text" name="serie" class="form-select">
                    <option selected></option>
                        <option value="1">Infantil I</option>
                        <option value="2">Infantil II</option>
                        <option value="3">Infantil III</option>
                        <option value="4">1° Ano</option>
                        <option value="5">2° Ano</option>
                        <option value="6">3° Ano</option>
                        <option value="7">4° Ano</option>
                        <option value="7">5° Ano</option>
                        <option value="8">6° Ano</option>
                        <option value="9">7° Ano</option>
                        <option value="10">8° Ano</option>
                        <option value="11">9° Ano</option>
                        </select>
                    </div>
                    <div class="textfield col-4">
                        <b>Data de ingresso: </b><input class='form-control' type="date" name="data_ingresso" />
                    </div>
                    <div class="textfield col-8 mb-4" >
                    <b>Foto:</b>
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="formFile" name="foto_aluno">
                    </div>                  
                    <div class="textfield mb-3">
                        <b>Recado: </b>
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <input class="form-control" id="exampleFormControlTextarea1" type="text" name="recado" rows="3">
                    </div>
                    <div class="form-group">
                        <input class='btn-login' type="submit" value="Enviar" name="btnSalvar" />
                        <input class='btn-login' type="reset" value="Limpar campos" />
                    </div>
                    </form>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>