<html>
<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if (isset($_POST['btnSalvar'])) {
    $nome_aluno = $_POST['nome_aluno'];
    /*$recado_aluno = $_POST['recado_aluno'];*/
    $serie = $_POST['serie'];
    $turno =  $_POST['turno'];
    $data_ingresso =  $_POST['data_ingresso'];
    $data_nascimento = $_POST ['data_nascimento'];

    $fotoAluno = $_FILES["foto_aluno"];
    $tamanho = 1000000;
    
    $error = array();
    // Verifica se o arquivo é uma imagem
    if (!preg_match("/^image\/(pjpeg|jpeg|jpg|png|gif|bmp)$/", $fotoAluno["type"])) {
        $error[1] = "Isso não é uma imagem.";
    }
    
    // Verifica se o tamanho da imagem é maior que o tamanho permitido
    if ($fotoAluno["size"] > $tamanho) {
        $error[2] = "A imagem deve ter no máximo " . $tamanho . " bytes";
    }
    
    if (is_uploaded_file($fotoAluno['tmp_name'])) {
        $imgData = addslashes(file_get_contents($fotoAluno['tmp_name']));
        $imageProperties = getimageSize($fotoAluno['tmp_name']);
    
        echo $imageProperties['mime'];
    
        $imgtype = $imageProperties['mime'];
        $foto = $imgData;
    }

    $sql = "INSERT INTO aluno (nome_aluno, serie, foto_aluno, turno, data_ingresso, Data_Nascimento)
            VALUES ('$nome_aluno', '$serie', '$foto', '$turno', '$data_ingresso', '$data_nascimento')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Aluno cadastrado com sucesso.') </script>";
        header("Location: listaAluno.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>

<?php include('menu.php'); ?>

    <div id="cadastros" class="block">
        <div class='container'>
            <h3 class='p-3'>Cadastrar Aluno</h3>

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <b>Nome: </b><input class='form-control' type="text" name="nome_aluno" />
                </div>
                <!--<div class="form-group">
                    <b>Recados: </b><input class='form-control' type="text" name="recado_aluno" />
                </div>-->
                <div class=" form-group col-sm-3">
                    <b>Série</b>
                    <select class="form-control" type="text"  name="serie">
                    <option value="1"> </option>
                    <option value="1">Infantil I</option>
                    <option value="2">Infantil II</option>
                    <option value="3">Infantil III</option>
                    <option value="4">Infantil IV</option>
                    <option value="5">Infantil V</option>
                    <option value="6">1° ano</option>
                    <option value="7">2° ano</option>
                    <option value="8">3° ano</option>
                    <option value="9">4° ano</option>
                    <option value="10">5° ano</option>
                    <option value="11">6° ano</option>
                    <option value="12">7° ano</option>
                    <option value="13">8° ano</option>
                    <option value="14">9° ano</option>
                    </select>
                </div>
                <div class="form-group">
                    <b>Foto: </b><input class='form-control' type="file" name="foto_aluno" />
                </div>
                <div class="form-group">
                    <b>Turno: </b><input class='form-control' type="text" name="turno" />
                    <div class=" form-group col-sm-3">
                    <b>Série</b>
                    <select class="form-control" type="checkbox"  name="serie">
                    <option value="1">Matutino</option>
                    <option value="2">Vespertino</option>
                    </select>
                </div>
                <div class="form-group">
                    <b>Data de ingresso: <b><input class='form-control' type="date" name="data_ingresso" />
                </div>
                <div class="form-group">
                    <b>Data de nascimento: </b><input class='form-control' type="date" name="data_nascimento" />
                </div>
                <div class="form-group">
                    <input class='btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2' type="submit" value="Enviar" name="btnSalvar" />
                    <input class='btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2' type="reset" value="Limpar campos" />
                </div>
            </form>
        </div>
    </div>

<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>