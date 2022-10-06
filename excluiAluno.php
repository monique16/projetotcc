<?php

include('conexao.php');
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
    header("location: login.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) */
    exit;
}

$matricula = $_GET['cod_usuario'];

$sql = "DELETE FROM usuario WHERE cod_usuario=$cod_usuario";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaAluno.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

