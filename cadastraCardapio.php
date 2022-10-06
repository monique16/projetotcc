
<?php
include('conexao.php'); // importa o arquivo de conexao com o BD


if (isset($_POST['btnSalvar'])) {
    $dia_cardapio = $_POST['dia_cardapio'];
    $horario_cardapio =  $_POST['horario_cardapio'];
    $alimento = $_POST ['alimento'];

    $sql = "INSERT INTO cardapio (dia_cardapio, horario_cardapio, alimento, usuario_cod_usuario)
            VALUES ('$dia_cardapio', '$horario_cardapio', '$alimento', 10)";
echo $sql;  
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Recado cadastrado com sucesso.') </script>";
        header("Location: cardapio.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
