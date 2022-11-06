<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_cronograma'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $horario_cronograma = $_POST['horario_cronograma'];


    $sql = "UPDATE cronograma SET 
                horario_cronograma='$horario_cronograma'
            WHERE cod_cronograma='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: cronograma222.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
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
                            Hora: <input class='form-control' type="time" name="horario_cronograma" value="<?php echo $linha['horario_cronograma'] ?>" />
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

</html>