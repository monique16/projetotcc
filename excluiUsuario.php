<?php

include('conexao.php');

$cod_usuario = $_GET['cod_usuario'];

$sql = "DELETE FROM usuario WHERE cod_usuario=$cod_usuario";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaUsuarios.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

