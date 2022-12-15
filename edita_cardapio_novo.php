<?php 
include('conexao.php');
    $codigo = $_GET['cod'];
    $sql = "SELECT * FROM cardapio WHERE cod_cardapio='$codigo'";
    $rs = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Editar Cardápio</title>
</head>
<body>
<?php include('menu.php'); ?>
    <div class="main-login">
        <div class='left-login'>
            <img src="imagens/editcrono.svg" class="left-login-image" alt="Cell Animado">
        </div>
<form action="edita_cardapio.php" method="post" enctype="multipart/form-data">
    <div class="right-login">
        <div class="card-login">
            <div class="row">
                <h2> EDITAR CARDAPIO </h2>
                <input type="text" style="visibility:hidden" name="cod_cardapio" id="cod_cardapio" value="<?php echo $codigo?>"/>

                <div class="textfield">
                    <b>Nome:</b> <input class='form-control' type="text" name="alimento" value="<?php echo $linha['alimento'] ?>" />
                </div>

                <div class="textfield">
                    <b>Foto:</b> <input class='form-control' type="file" name="fileToUpload" value="">
                </div>
                <div class="form-group">
                    <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
                    <input class='btn-login' type="reset" value="Limpar campos" />
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>