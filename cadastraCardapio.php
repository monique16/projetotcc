<?php
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="imagens/logon.png">
    <title>Cadastrar Cardápio</title>
</head>


    <?php
    include('conexao.php'); // importa o arquivo de conexao com o BD


    if (isset($_POST['btnSalvar'])) {
        $target_dir = "image-cardapio/";
        $name = $_FILES['foto_alimento']['name'];
echo $name;
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


                $sql = "INSERT INTO cardapio ( alimento, foto_alimento)
            VALUES ('$alimento', '$new_name')";

                mysqli_query($conn, $sql);

                if (mysqli_affected_rows($conn) > 0) {
                    echo "<script> alert('Recado cadastrado com sucesso.') </script>";
                    header("Location: cadastraCardapio.php");
                } else {
                    echo "<script> alert('Ocorreu algum erro.') </script>";
                }
            }
        }
    }
    ?>
</head>

<?php include('menu.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col mb-4 mt-4 title text-center">
                <h1>Cardapios</h1>
            </div>
        </div>

        <div class="col-12">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

                <div class="row g-3">
                    <div class="col-6">
                        <label for="alimento" class="form-label">Lanche do dia</label>
                        <input type="text" name="alimento" id="alimento" class="form-control">
                    </div>
                    <div class="textfield col-8 mb-4">
                        <b>Foto:</b>
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" name="foto_alimento">
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


    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>