<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "./imagens/alunos/";
    $foto_aluno = $target_dir . basename($_FILES["foto_aluno"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($foto_aluno,PATHINFO_EXTENSION));
    $nome_aluno = $_POST['nome_aluno'];
    $cpf =  $_POST['cpf'];
    $email = $_POST ['email'];
    $senha_aluno = $_POST['senha_aluno'];
    $turno = $_POST['turno'];
    $matricula = $_POST['matricula'];
    $recado = $_POST['recado'];
    //$foto_aluno = $_FILES['foto_aluno'];
    $serie = $_POST['serie'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_ingresso = $_POST['data_ingresso'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto_aluno"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  //verifica e faz o uplod d imgem
  // Check if file already exists
if (file_exists($foto_aluno)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["foto_aluno"]["size"] > 500000) {
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
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["foto_aluno"]["tmp_name"], $foto_aluno)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["foto_aluno"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

    $sql = "INSERT INTO alunos (nome_aluno, cpf, email, senha_aluno, turno, matricula, recado, foto_aluno, serie, data_nascimento, data_ingresso)
            VALUES ('$nome_aluno', '$cpf', '$email', '$senha_aluno', '$turno', '$matricula', '$recado', '$foto_aluno', '$serie', '$data_nascimento', '$data_ingresso')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Funcionário cadastrado com sucesso.') </script>";
        header("Location: listaAluno.php");
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
    <title>Login</title>
</head>
<?php include('menu.php'); ?>
    <div class="main-login">
        <div class='left-login'>
        <img src="imagens/personal-data-animate.svg" style="margin-top: 0px"class="left-login-image" alt="Cell Animado"></div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="right-login">
                <div  class="card-login">
                    <div class="row">

                    <h2> CADASTRAR ALUNOS </h2>

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
                        <input  type="text" name="turno" class="form-select"/>
                        <option selected></option>
                        <!--<select>
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Integral</option>
                            </select>-->
                        </div>
                        
                    <div class="textfield col-6">
                        <b>Série:</b>
                        <input  type="text" name="serie" class="form-select"/>
                    <!--<select>
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
                        </select>-->
                    </div>
                    <div class="textfield col-4">
                        <b>Data de ingresso: </b><input class='form-control' type="date" name="data_ingresso" />
                    </div>
                    <div class="textfield col-8 mb-4" >
                    <b>Foto:</b>
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" id="foto_aluno" name="foto_aluno">
                    </div>                  
                    <div class="textfield mb-3">
                        <b>Recado: </b>
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <input class="form-control" id="exampleFormControlTextarea1" type="text" name="recado" rows="3">
                    </div>
                    <div class="form-group">
                        <input class='btn-login' type="submit" value="Enviar" name="btnSalvar" />
                        <input class='btn-login' type="reset" value="Limpar campos" />
                    </div>
                    </form>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>