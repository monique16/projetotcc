<?php
include('conexao.php');
$codigo = $_POST['cod_aluno'];
echo "codigo: " . $codigo;
$nome_aluno = $_POST['nome_aluno'];
$cpf =  $_POST['cpf'];
$email = $_POST['email'];
$senha_aluno = $_POST['senha_aluno'];
$turno = $_POST['turno'];
$matricula = $_POST['matricula'];
$foto_aluno = basename($_FILES["fileToUpload"]["name"]);
$serie = $_POST['serie'];
$recado = $_POST['recado'];
$data_nascimento = $_POST['data_nascimento'];
$data_ingresso = $_POST['data_ingresso'];

$target_dir = "imageview/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
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
    WHERE cod_aluno='$codigo'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Aparelho editado com sucesso.') </script>";
        header("Location: listaAluno.php?cod=".$codigo);
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
// if everything is ok, try to upload file
} else {
    $sql = "UPDATE cardapio SET 
        nome_aluno='$nome_aluno',
        cpf='$cpf',
        email='$email',
        senha_aluno='$senha_aluno',
        turno='$turno',
        matricula='$matricula',
        foto_aluno='$target_file',
        serie='$serie',
        recado='$recado',
        data_nascimento='$data_nascimento',
        data_ingresso='$data_ingresso' 
    WHERE cod_aluno='$codigo'";
echo $sql;
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('Aparelho editado com sucesso.') </script>";
    header("Location: listaAluno.php?cod=".$codigo);
    } else {
    echo "<script> alert('Ocorreu algum erro.') </script>";
    }
   
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
