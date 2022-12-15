<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

if (isset($_POST['btnEnviar'])) {

  $target_dir = "imageview/";
  $name = $_FILES['foto_aluno']['name'];

  $ext = strtolower(substr($name, -4)); //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo

  $target_file = $target_dir . $new_name;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $nome_aluno = $_POST['nome_aluno'];
  $cpf =  $_POST['cpf'];
  $email = $_POST['email'];
  $senha_aluno = $_POST['senha_aluno'];
  $turno = $_POST['turno'];
  $matricula = $_POST['matricula'];
  $recado = $_POST['recado'];
  $foto_aluno = $target_file;
  $serie = $_POST['serie'];
  $data_nascimento = $_POST['data_nascimento'];
  $data_ingresso = $_POST['data_ingresso'];

  if (isset($_POST["btnEnviar"])) {
    $check = getimagesize($_FILES["foto_aluno"]["tmp_name"]);
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
  //  if ($_FILES["foto_aluno"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["foto_aluno"]["tmp_name"], $target_file)) {
      // echo "O arquivo " . htmlspecialchars(basename($_FILES["foto_aluno"]["name"])) . " foi enviado com sucesso.";

      // echo " $target_file";


      $sql = "INSERT INTO alunos (nome_aluno, cpf, email, senha_aluno, turno, matricula, recado, foto_aluno, serie, data_nascimento, data_ingresso)
            VALUES ('$nome_aluno', '$cpf', '$email', '$senha_aluno', '$turno', '$matricula', '$recado', '$new_name', '$serie', '$data_nascimento', '$data_ingresso')";

      mysqli_query($conn, $sql);

      if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Funcionário cadastrado com sucesso.') </script>";
        header("Location: listaAluno.php");
      } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anônimo">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anônimo"></script>
  <!-- FONT AWESONME -->
  <script src="https://kit.fontawesome.com/74e138c6b6.js" crossorigin="anônimo"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/principal.css" />
  <link rel="stylesheet" href="css/cadastro.css" />
  <link rel="stylesheet" tipo="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="shortcut icon" href="imagens/logon.png">
  <title>Eventos</title>
</head>
<?php include('menu.php'); ?>

<body>
  <div id="cadastro">

    <div class="main-login">

      <div class='left-login'>
        <img src="imagens/cadastro.svg" class="left-login-image" alt="Cell Animado">
      </div>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="right-login">
          <div class="card-login">
            <h2 class="title text-center mb-5">CADASTRAR ALUNOS</h2>

            <div class="row">

              <div class="textfield">
                <b>Nome: </b><input class='form-control' type="text" name="nome_aluno" />
              </div>
              <div class="textfield col-7">
                <b>Email: </b><input class='form-control' type="email" name="email" />
              </div>
              <div class="textfield col-5">
                <b>Senha: </b><input class='form-control' type="password" name="senha_aluno" />
              </div>
              <div class="textfield col-4">
                <b>CPF: </b><input class='form-control' type="text" name="cpf" />
              </div>
              <div class="textfield col-4">
                <b>Matrícula: </b><input class='form-control' type="text" name="matricula" />
              </div>
              <div class="textfield col-4">
                <b>Data de nascimento: </b><input class='form-control' type="date" name="data_nascimento" />
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

              <div class="textfield col-6">
                <b>Série:</b>
                <select class="textfield" type="text" name="serie" class="form-select">
                  <option selected></option>
                  <option value="Infantil I">Infantil I</option>
                  <option value="Infantil II">Infantil II</option>
                  <option value="Infantil III">Infantil III</option>
                  <option value="1° Ano">1° Ano</option>
                  <option value="2° Ano">2° Ano</option>
                  <option value="3° Ano">3° Ano</option>
                  <option value="4° Ano">4° Ano</option>
                  <option value="5° Ano">5° Ano</option>
                  <option value="6° Ano">6° Ano</option>
                  <option value="7° Ano">7° Ano</option>
                  <option value="8° Ano">8° Ano</option>
                  <option value="9° Ano">9° Ano</option>
                </select>
              </div>
              <div class="textfield col-4">
                <b>Data de ingresso: </b><input class='form-control' type="date" name="data_ingresso" />
              </div>
              <div class="textfield col-8 mb-4">
                <b>Foto:</b>
                <label for="formFile" class="form-label"></label>
                <input class="form-control" type="file" name="foto_aluno">
              </div>
              <div class="textfield mb-3">
                <b>Recado: </b>
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <input class="form-control" id="exampleFormControlTextarea1" type="text" name="recado" rows="3">
              </div>
              <div class="form-group">

                <input class='btn-login' type="submit" value="Enviar" name="btnEnviar" />
                <input class='btn-login' type="reset" value="Limpar campos" />
              </div>
      </form>

    </div>
  </div>



  <script>
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
      toastTrigger.addEventListener('click', () => {
        const toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
      })
    }
  </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</html>