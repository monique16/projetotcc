<?php
include('conexao.php');
//if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $cod_cardapio = $_POST['cod_cardapio'];
    echo "cardapio:" . $cod_cardapio;
            $alimento = $_POST['alimento'];
            echo"Alimento: ".$alimento;
            $foto_alimento = $_POST['foto_alimento'];
            echo"Foto: ".$foto_alimento;
            if ($foto_alimento == "") {
                $sql = "UPDATE cardapio SET 
                        alimento='$alimento'
                    WHERE cod_cardapio='$cod'";
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
            mysqli_query($conn, $sql);

            if (mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('Cardápio alterado com sucesso.') </script>";
                header("Location: cardapio.php");
            } else {
                echo "<script> alert('Ocorreu algum erro.') </script>";
            }
        }
  //  }

    ?>
 <html>
    <body>
    <input class='form-control' type="file" name="foto_alimento" value="<?php echo $foto_alimento ?>" />
    </body>
 </html>