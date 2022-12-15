<?php
include('conexao.php');
$codigo = $_POST['cod_cardapio'];
echo "codigo: " . $codigo;
$alimento = $_POST['alimento'];
$foto_alimento = basename($_FILES["fileToUpload"]["name"]);

$target_dir = "image-cardapio/";
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
    $sql = "UPDATE cardapio SET 
    alimento='$alimento' 
    WHERE cod_cardapio='$codigo'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Aparelho editado com sucesso.') </script>";
        header("Location: cardapio.php?cod=".$codigo);
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
// if everything is ok, try to upload file
} else {
    $sql = "UPDATE cardapio SET 
    alimento='$alimento', 
    foto_alimento='$target_file' 
    WHERE cod_cardapio='$codigo'";
echo $sql;
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('Aparelho editado com sucesso.') </script>";
    header("Location: cardapio.php?cod=".$codigo);
    } else {
    echo "<script> alert('Ocorreu algum erro.') </script>";
    }
   
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
