<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_cardapio'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $alimento = $_POST['alimento'];
    $foto_alimento = $_POST['foto_alimento'];
    if ($foto_alimento == "") {
        $sql = "UPDATE cardapio SET 
                alimento='$alimento'
            WHERE cod_cardapio='$cod'";
    } else {
        $sql = "UPDATE cardapio SET 
        alimento='$alimento',
        foto_alimento='$foto_alimento'
         WHERE cod_cardapio='$cod'";
    }
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Cardápio alterado com sucesso.') </script>";
        header("Location: cardapio.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM cardapio WHERE cod_cardapio=$cod";
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
                    <h2> EDITAR CARDAPIO </h2>

    <div class="textfield">
        Nome: <input class='form-control' type="text" name="alimento" value="<?php echo $linha['alimento'] ?>" />
    </div>

    <div class="textfield col-8">
        Foto: <input class='form-control' type="file" name="foto_alimento" value="<?php echo $linha['foto_alimento'] ?>" />
    </div>
    <div class="form-group">
        <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
        <input class='btn-login' type="reset" value="Limpar campos" />
    </div>
</form>
</div>