<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

/*session_start();

if(!isset($_SESSION["funcionario"]) || $_SESSION["funcionario"] === false){
    header("location: index.php");
    exit;
}*/

if (isset($_POST['btnSalvar'])) {

  $target_dir = "imageview/";
  $name = $_FILES['foto_funcionario']['name'];

  $ext = strtolower(substr($name, -4)); //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo

  $target_file = $target_dir . $new_name;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $nome_funcionario = $_POST['nome_funcionario'];
  $cpf =  $_POST['cpf'];
  $email = $_POST['email'];
  $senha_funcionario = $_POST['senha_funcionario'];
  $funcao = $_POST['funcao'];
  $turno = $_POST['turno'];
  $foto_funcionario = $target_file;

  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto_funcionario"]["tmp_name"]);
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
  //  if ($_FILES["foto_funcionario"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["foto_funcionario"]["tmp_name"], $target_file)) {
      // echo "O arquivo " . htmlspecialchars(basename($_FILES["foto_funcionario"]["name"])) . " foi enviado com sucesso.";

      // echo " $target_file";

    }
  }

  $sql = "INSERT INTO funcionarios (nome_funcionario, cpf, email, senha_funcionario, funcao, turno, foto_funcionario)
            VALUES ('$nome_funcionario', '$cpf', '$email', '$senha_funcionario', '$funcao', '$turno', '$new_name')";

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
  <link rel="shortcut icon" href="imagens/logon.png">
  <title>Cadastrar Funcionários</title>
</head>
<body>
<?php include('menu.php'); ?>
<div class="main-login">
  <div class='left-login'>
    <img style="width: 650px; height: 650px;" src="imagens/professora.svg" class="left-login-image" alt="Cell Animado">
  </div>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <div class="right-login">
      <div class="card-login">
        <div class="row">

          <h2> CADASTRAR FUNCIONARIOS </h2>

          <div class="textfield">
            <b>Nome: </b><input class='form-control' type="text" name="nome_funcionario" />
          </div>
          <div class="textfield col-7">
            <b>Email: </b><input class='form-control' type="email" name="email" />
          </div>
          <div class="textfield col-5">
            <b>Senha: </b><input class='form-control' type="password" name="senha_funcionario" />
          </div>
          <div class="textfield col-4">
            <b>CPF: </b><input class='form-control' type="text" name="cpf" />
          </div>
          <div class="textfield col-8 mb-4">
            <b>Foto:</b>
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" name="foto_funcionario">
          </div>
          <div class="textfield col-6">
            <b>Função:</b>
            <select class="textfield" type="text" name="funcao" class="form-select">
              <option selected></option>
              <option value="Diretor(a)">Diretor(a)</option>
              <option value="Vice-Diretor(a)">Vice-Diretor(a)</option>
              <option value="Gestor(a)">Gestor(a)</option>
              <option value="Secretario(a)">Secretario(a)</option>
              <option value="Professor(a)">Professor(a)</option>
              <option value="Outro">Outro</option>
            </select>
          </div>
          <div class="textfield col-6">
            <b>Turno:</b>
            <select class="textfield" type="text" name="turno" class="form-select">
              <option selected></option>
              <option value="Matutino">Matutino</option>
              <option value="Vespertino">Vespertino</option>
              <option value="Integral">Integral</option>
            </select>
          </div>
          <div class="form-group">
            <input class='btn-login' type="submit" value="Enviar" name="btnSalvar" />
            <input class='btn-login' type="reset" value="Limpar campos" />
          </div>
  </form>

</div>





</body>

</html>