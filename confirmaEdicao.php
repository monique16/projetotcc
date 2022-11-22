<?php

include('conexao.php');

//if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $cod = $_POST['cod'];
    echo $cod;
    $horario_cronograma =  $_POST['horario_cronograma'];
    $disciplina_seg = $_POST['disciplina_seg'];
    $disciplina_terc = $_POST['disciplina_terc'];
    $disciplina_quar = $_POST['disciplina_quar'];
    $disciplina_quin = $_POST['disciplina_quin'];
    $disciplina_sext = $_POST['disciplina_sext'];

    $sql = "UPDATE cronograma SET 
                horario_cronograma='$horario_cronograma',
                disciplina_seg='$disciplina_seg',
                disciplina_terc='$disciplina_terc',
                disciplina_quar='$disciplina_quar',
                disciplina_quin='$disciplina_quin',
                disciplina_sext='$disciplina_sext'
            WHERE cod_cronograma=$cod";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Cronograma alterado com sucesso.') </script>";
        header("Location: cronograma.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
//}

?>