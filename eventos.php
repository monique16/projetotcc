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



  <div class="main-box">
    <div class="card-eventos">
      <h2>Eventos</h2>
      <p class="subtitle">"Ninguém te ensinará mais sobre fotografia do que uma criança.
        Fotografar crianças é momento, é movimento, é agora. <b class="junction-hidde-works"> A vida também é assim."</b>
        <br><b class="junction-show-works"> A vida também é assim."</b>
      </p>

      <div class="button-group">
        <button type="button" class="active" data-filter="*" id="btn-all">Todos</button>
        <button type="button" data-filter=".junina">Festa Junina</button>
        <button type="button" data-filter=".jogos">Jogos Escolares</button>
        <button type="button" data-filter=".alunos">Nossos Alunos</button>
      </div>

      <div class="event container">
        <?php while ($dados = mysqli_fetch_array($query)) { ?>
          <div class="row">
            <div class="col-4">
              <div class="element-item">
                <a href="image-evento" class="popup-link"></a>
                <img style="height: 250px; width: 250px;" src="image-evento/<?php echo $dados['foto_evento'] ?>">
                <span class="emphasis-name"> <?php echo $dados['nome_evento'] ?></span>

                <!--<a class='btn btn-danger btn-sm' href='#' onclick='confirmar("<?php echo $dados['cod_evento'] ?>")'><i class="fa-solid fa-trash-can"></i></a></td>-->
              </div>
            </div>
          </div>
        <?php } ?>
        <?php if ($_SESSION["funcionario"] === true) { ?>

        <a colspan="2" class="text-center"><a class='btn' href='cadastraEventos.php'><i style="font-size:80px;" class="fa-solid fa-camera"></i></a>
        <?php } ?>

      </div>
    </div>
  </div>

</body>
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