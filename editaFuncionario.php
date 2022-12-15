<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_funcionario'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $nome_funcionario = $_POST['nome_funcionario'];
    $cpf =  $_POST['cpf'];
    $email = $_POST['email'];
    $senha_funcionario = $_POST['senha_funcionario'];
    $funcao = $_POST['funcao'];
    $turno = $_POST['turno'];


    $sql = "UPDATE funcionarios SET 
                nome_funcionario='$nome_funcionario',
                cpf='$cpf',
                email='$email',
                senha_funcionario='$senha_funcionario',
                funcao='$funcao',
                turno='$turno'
            WHERE cod_funcionario='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaFuncionario.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM funcionarios WHERE cod_funcionario=$cod";
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

                        <div class="textfield">
                            Nome: <input class='form-control' type="text" name="nome_funcionario" value="<?php echo $linha['nome_funcionario'] ?>" />
                        </div>
                        <div class="textfield">
                            CPF: <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
                        </div>
                        <div class="textfield">
                            Email: <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
                        </div>
                        <div class="textfield">
                            Senha: <input class='form-control' type="password" name="senha_funcionario" value="<?php echo $linha['senha_funcionario'] ?>" />
                        </div>
                        <div class="textfield">
                            Função: <input class='form-control' type="text" name="funcao" value="<?php echo $linha['funcao'] ?>" />
                        </div>
                        <div class="textfield">
                            Turno: <input class='form-control' type="text" name="turno" value="<?php echo $linha['turno'] ?>" />
                        </div>
                        <div class="form-group">
                            <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
                            <input class='btn-login' type="reset" value="Limpar campos" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    

</html>