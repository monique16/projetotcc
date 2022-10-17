<?php

include('conexao.php');


if (isset($_GET['cod_evento'])) {
$sql = "SELECT foto_evento FROM eventos WHERE cod_evento = {$_GET['cod_evento']}";
$stmt = mysqli_query($conn, $sql);

$res = mysqli_fetch_array($stmt);
header("Content-type: image/jpg");
echo $res['foto_evento'];
}
?>