<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $cod_cardapio = $_POST['cod_cardapio'];
    echo "cardapio:" . $cod_cardapio;
            $alimento = $_POST['alimento'];
            echo"Alimento: ".$alimento;
            $foto_alimento = $_POST['foto_alimento'];
            echo"Foto: ".$foto_alimento;
            if ($foto_alimento == "") {
                $sql = "UPDATE cardapio SET 
                        alimento='$alimento'
                    WHERE cod_cardapio='$cod_cardapio'";
            } else {
                $target_dir = "image-cardapio/";
                $name = $_FILES['foto_alimento']['name'];
            
                $ext = strtolower(substr($name, -4)); //Pegando extensão do arquivo
                $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
                $target_file = $target_dir . $new_name;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $alimento = $_POST['alimento'];
                $foto_alimento = $target_file;
            
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["foto_alimento"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
            
                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }
            
                // Check file size
                //  if ($_FILES["foto_evento"]["size"] > 500000) {
                //    echo "Sorry, your file is too large.";
                //   $uploadOk = 0;
                // }
            
                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
            
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    // echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["foto_alimento"]["tmp_name"], $target_file)) {
                        // echo "O arquivo " . htmlspecialchars(basename($_FILES["foto_aluno"]["name"])) . " foi enviado com sucesso.";
            
                        // echo " $target_file";
                $sql = "UPDATE cardapio SET 
                alimento='$alimento',
                foto_alimento='$foto_alimento'
                 WHERE cod_cardapio='$cod'";
            }
                }
            }
            mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('Cardápio alterado com sucesso.') </script>";
                header("Location: cardapio.php");
            } else {
                echo "<script> alert('Ocorreu algum erro.') </script>";
            }
        
    
    }
if (!isset($_POST['btnSalvar'])) { 
    $cod = $_GET['cod'];
    echo $cod;
    $sql = "SELECT * FROM cardapio WHERE cod_cardapio=$cod";
    $rs = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_array($rs);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
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

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="right-login">
                <div class="card-login">
                    <div class="row">
                        <h2> EDITAR CARDAPIO </h2>
                        <input type="text" style="visibility:hidden" name="cod_cardapio" id="cod_cardapio" value="<?php echo $cod?>"/>

                        <div class="textfield">
                            <b>Nome:</b> <input class='form-control' type="text" name="alimento" value="<?php echo $linha['alimento'] ?>" />
                        </div>

                        <div class="textfield">
                            <b>Foto:</b> <input class='form-control' type="file" name="foto_alimento" />
                        </div>
                        <div class="form-group">
                            <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
                            <input class='btn-login' type="reset" value="Limpar campos" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>