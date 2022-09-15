<?php

include('conexao.php');

if (isset($_GET['matricula'])) {
$sql = "SELECT foto_aluno FROM aluno WHERE matricula = {$_GET['matricula']}";
$stmt = mysqli_query($conn, $sql);

$res = mysqli_fetch_array($stmt);
header("Content-type: image/jpg");
echo $res['foto_aluno'];
}