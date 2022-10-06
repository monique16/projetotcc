<?php

include('conexao.php');
$cod_cronograma = $_GET['cod_cronograma'];

$sql = "DELETE FROM cronograma WHERE cod_cronograma=$cod_cronograma";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: cronograma.php");   
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
