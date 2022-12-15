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
    <title>Cadastrar Eventos</title>
</head>
<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if (isset($_POST['btnEnviar'])) {
    $target_dir = "image-evento/";
    $name = $_FILES['foto_evento']['name'];

    $ext = strtolower(substr($name, -4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo

    $target_file = $target_dir . $new_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $nome_evento = $_POST['nome_evento'];
    $foto_evento = $target_file;

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto_evento"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["foto_evento"]["tmp_name"], $target_file)) {
            // echo "O arquivo " . htmlspecialchars(basename($_FILES["foto_aluno"]["name"])) . " foi enviado com sucesso.";

            // echo " $target_file";


            $sql = "INSERT INTO eventos (nome_evento, foto_evento)
                VALUES ('$nome_evento','$new_name')";

            mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('Funcionário cadastrado com sucesso.') </script>";
                header("Location: eventos.php");
            } else {
                echo "<script> alert('Ocorreu algum erro.') </script>";
            }
        }
    }
}
?>

<?php include('menu.php'); ?>
<div class="main-login">
    <div class='left-login'>
        <img src="imagens/personal-data-animate.svg" style="margin-top: 0px" class="left-login-image" alt="Cell Animado">
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="right-login">
            <div class="card-login">
                <div class="row">

                    <h2> CADASTRAR EVENTOS </h2>

                    <div class="textfield">
                        <b>Evento</b>
                        <select class="textfield" type="text" name="nome_evento" class="form-select">
                            <option selected></option>
                            <option value="Festa Junina">Festa Junina</option>
                            <option value="Festa da Família">Festa da Família</option>
                            <option value="Dias Especiais">Dias especiais</option>
                            <option value="Passeio">Passeios</option>
                            <option value="FASE">FASE</option>
                            <option value="Nossos Alunos">Nossos alunos</option>
                            <option value="Nossos Funcionários">Nossos funcionários</option>
                            <option value="Atividades Escolares">Atividades Escolares</option>
                            <option value="Outros">Outros</option>

                        </select>
                    </div>

                    <div class="textfield mb-4">
                        <b>Foto:</b>
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" name="foto_evento">
                    </div>

                    <div class="form-group">
                        <input class='btn-login' type="submit" value="Enviar" name="btnEnviar" />
                        <input class='btn-login' type="reset" value="Limpar campos" />
                    </div>
    </form>
</div>

</body>

</html>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>