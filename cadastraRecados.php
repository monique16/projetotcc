
<?php
include('conexao.php'); 
session_start();

if(isset($_SESSION["funcionario"]) || $_SESSION["funcionario"] === true){
    header("location: index.php");
}

if (isset($_POST['btnSalvar'])) {
    $nome_recado = $_POST['nomeRecado'];
    $data_recado =  $_POST['dataRecado'];
    $hora_recado = $_POST ['horaRecado'];

    $sql = "INSERT INTO recados (nome_recado, data_recado, hora_recado, usuario_cod_usuario)
            VALUES ('$nome_recado', '$data_recado', '$hora_recado', 10)";
echo $sql;  
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Recado cadastrado com sucesso.') </script>";
        header("Location: recados.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
