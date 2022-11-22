<?php

include('conexao.php');

$cod_evento = $_GET['cod_evento'];

$sql = "DELETE FROM eventos WHERE cod_evento=$cod_evento";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: eventos.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

?>