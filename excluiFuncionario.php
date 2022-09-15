<?php

include('conexao.php');

$cod_funcionario = $_GET['cod_funcionario'];

$sql = "DELETE FROM funcionario WHERE cod_funcionario=$cod_funcionario";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaFuncionario.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

