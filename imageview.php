<?php

include('conexao.php');


if (isset($_GET['cod_usuario'])) {
$sql = "SELECT foto_aluno FROM usuario WHERE cod_usuario = {$_GET['cod_usuario']}";
$stmt = mysqli_query($conn, $sql);

$res = mysqli_fetch_array($stmt);
header("Content-type: image/jpg");
echo $res['foto_aluno'];
}
?>