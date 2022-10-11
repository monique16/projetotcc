<?php
include('conexao.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

$cod = $_GET['cod_cardapio'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $dia_cardapio = $_POST['dia_cardapio'];
    $horario_cardapio =  $_POST['horario_cardapio'];
    $alimento = $_POST['alimento'];
   
    $sql = "UPDATE cardapio SET 
                dia_cardapio='$dia_cardapio',
                horario_cardapio='$horario_cardapio',
                alimento='$alimento',
            WHERE cod_cardapio='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Cardápio alterado com sucesso.') </script>";
        header("Location: cardapio.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM cardapio WHERE cod_cardapio=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

</body>
