<?php

include('conexao.php');


if (isset($_GET['cod_aluno'])) {
$sql = "SELECT foto_aluno FROM alunos WHERE cod_aluno = {$_GET['cod_aluno']}";
$stmt = mysqli_query($conn, $sql);

$res = mysqli_fetch_array($stmt);
header("Content-type: image/jpg");
echo $res['foto_aluno'];
}
?>