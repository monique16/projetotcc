<?php

include('conexao.php');

$matricula = $_GET['matricula'];

$sql = "DELETE FROM aluno WHERE matricula=$matricula";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: listaAluno.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

