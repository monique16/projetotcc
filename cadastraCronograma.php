<?php
include('conexao.php'); // importa o arquivo de conexao com o BD
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/


if (isset($_POST['btnSalvar'])) {
    $dia_cronograma = $_POST['dia_cronograma'];
    $horario_cronograma =  $_POST['horario_cronograma'];
    $disciplina = $_POST ['disciplina'];

    $sql = "INSERT INTO cronograma (dia_cronograma, horario_cronograma, disciplina, usuario_cod_usuario)
            VALUES ('$dia_cronograma', '$horario_cronograma', '$disciplina', 8)";
echo $sql;  
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Cronograma cadastrado com sucesso.') </script>";
        header("Location: cronograma.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
