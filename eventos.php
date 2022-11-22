<?php
include('conexao.php');
include('menu.php');
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>

<!DOCTYPE html>
<html lang="pt-BR">


<head>
  <title>Click Escola</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Meta tags necessárias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anônimo"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anônimo">
  <!-- FONT AWESONME -->
  <script src="https://kit.fontawesome.com/74e138c6b6.js" crossorigin="anônimo"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/tela-evento.css" />
  <link rel="stylesheet" href="css/principal.css" />
</head>
<body>



<?php
$sql = "SELECT * FROM eventos";
$query = mysqli_query($conn, $sql);
?>

<div id="cardapio">
  <div class="container-fluid">
    <h2 class="title text-center ">Eventos</h2>
  <div class="main-box">
    <div class="card-eventos">
     <!-- <p class="subtitle">"Ninguém te ensinará mais sobre fotografia do que uma criança.
        Fotografar crianças é momento, é movimento, é agora. <b class="junction-hidde-works"> A vida também é assim."</b>
        <br><b class="junction-show-works"> A vida também é assim."</b>-->
      </p>

      <div class="event container">
        <?php while ($dados = mysqli_fetch_array($query)) { ?>
          <div class="row">
            <div class="col-4">

              <div class="element-item">
                <p href="image-evento" class="popup-link"></p>
                <?php if($_SESSION["funcionario"] === true){?>
                <b class='btn button-primay btn-primary button  mb-md-0 mt-0' href='excluiEvento.php?cod_evento=<?php echo $dados['cod_evento'] ?>'>Excluir</b>
                <?php } ?> 

                <img style="height: 280px; width: 280px;" src="image-evento/<?php echo $dados['foto_evento'] ?>">
                <span class="emphasis-name"> <?php echo $dados['nome_evento'] ?></span>
              </div>

            </div>
          </div>
        <?php } ?>
        <?php if ($_SESSION["funcionario"] === true) { ?>

        <a colspan="2" class="text-center" style="color: black; background-color: transparent;" href='cadastraEventos.php'><svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg></a>
        <?php } ?>

      </div>
    </div>
  </div>

</body>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiEvento.php?cod_evento=' + cod;
    }
</script>

<div id="dieta" class="block">
  <div class="container">
    <div class="row">
      <div class="col-md-5 text-center align-self-center order-md-1 order-2">
        <img src="imagens/dieta.svg" class="img-fluid" style="margin-top: 20px; margin-bottom: 20px;" />
      </div>
      <div style="text-align:justify" class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
          <h1 style="font-size:30pt;">CONHEÇA A</h1>
          <h1 style="font-size:30pt; color:#FF7100;">ALIMENTAÇÃO ESCOLAR</h1>
          <h4 class="subtitle">saiba mais como funciona o cardapio escolar dos alunos</h4>
        <p> A escola conta com a modalidade de Ensino Regular,
          a qual hoje atende 217 alunos, e diversas comunidades, distribuídos do Infantil V ao 9° ano.
        </p>
      </div>
    </div>
  </div>
</div>

<div>
  <footer class="footer mt-auto py-3">
    <div class="container fluid">
      <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
    </div>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>