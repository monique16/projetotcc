<?php

include('conexao.php');

$cod_cardapio = $_GET['cod_cardapio'];

$sql = "DELETE FROM cardapio WHERE cod_cardapio=$cod_cardapio";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: cardapio.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}

