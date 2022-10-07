<?php

include('conexao.php');

$cod_aluno = $_GET['cod_aluno'];

$sql = "DELETE FROM alunos WHERE cod_aluno=$cod_aluno";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaAluno.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

