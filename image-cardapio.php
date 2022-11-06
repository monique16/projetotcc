<?php

include('conexao.php');


if (isset($_GET['cod_cardapio'])) {
$sql = "SELECT foto_alimento FROM cardapio WHERE cod_cardapio = {$_GET['cod_cardapio']}";
$stmt = mysqli_query($conn, $sql);

$res = mysqli_fetch_array($stmt);
header("Content-type: image/jpg");
echo $res['foto_alimento'];
}
?>