<?php
session_start();

//if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
//  header("location: index.php");
//}
/* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Click Escola</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<header>
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
  <link rel="stylesheet" href="css/principal.css" />
  <link rel="stylesheet" tipo="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <title>Clique Escola</title>

  <body>
    <!-- CABEÇALHO -->
    <div id="header" style="margin-bottom: 20px;">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="colapse navbar-colapse"></div>
          <a class="navbar-brand" href="#">
            <img src="imagens/logon.png" class="img-fluid" />
          </a>
          <div class="colapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-current="page"><i id="header-toggle" class="fa-solid fa-user"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link ativo" aria-corrente="page" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ativo" aria-corrente="page" href="cardapio.php">Cardápio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cronograma.php">Cronograma</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ativo" aria-corrente="page" href="eventos.php">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-corrente="page" href="recados.php">Recados</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="cadastraAluno.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Aluno
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cadastraAluno.php">Cadastrar Aluno</a></li>
                  <li><a class="dropdown-item" href="listaAluno.php">Listar Aluno</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="cadastraFuncionario.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Funcionário
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="cadastraFuncionario.php">Cadastrar Funcioário</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
      </nav>

    </div>
    </div>
    <!-- //HEADER -->
</header>


<!-- MENU LATERAL --->
<div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

      <img style="margin-left: 60px" class="rounded-circle mt-3 mb-3" height="200" width="200" src="imageview/<?php echo $_SESSION['foto_aluno'] ?>">
      <br>
      <div style="margin-right: 40px">
  
      <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-face-smile"></i> <b>Nome:</b>
        <?php echo $_SESSION['nome'] ?></div>

      <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-star"></i></i> <b>Data de Nascimento:</b>
          <?php echo $_SESSION['data_nascimento'] ?></div>

      <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-file"></i> <b>CPF:</b>
        <?php echo $_SESSION['cpf'] ?></div>

      <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-envelope"></i> <b>E-mail:</b>
        <?php echo $_SESSION['email'] ?></div>

      <?php
      if ($_SESSION["funcionario"]) { ?>
        <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-user-tie"></i> <b>Função:</b>
          <?php echo $_SESSION['funcao'] ?></div>
      <?php
      };
      ?>
      <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-sun"></i> <b>Turno:</b>
        <?php echo $_SESSION['turno'] ?></div>


      <?php
      if (!$_SESSION["funcionario"]) { ?>
        <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-balloon"></i> <b>N° Matrícula:</b>
          <?php echo $_SESSION['matricula'] ?></div>

        <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-folder-open"></i> <b>Série:</b>
          <?php echo $_SESSION['serie'] ?></div>

        <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-circle-user"></i> <b>Data de ingresso:</b>
          <?php echo $_SESSION['data_ingresso'] ?></div>

        <div class="rounded-3 p-2 mb-2" style="background-color:rgb(170, 170, 170)"> <i class="fa-regular fa-message"></i> <b>Recado:</b>
          <?php echo $_SESSION['recado'] ?></div>

      <?php
      };
      ?>
      </div>
    </div>
  </div>
</div>
</div>



<!-- MENU LATERAL --->


<!-- CARROSSEL -->


<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/banner.png" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption" style="margin-bottom: 70px;">
        <h3 style=" font-size: 40px;">CLICK ESCOLA</h3>
        <h4 class="mb-5"> Sistema de gestão escolar para responsáveis </h4>
        <a href="#sobre" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          Sobre a escola</a>
        <a href="#plataforma" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          Conheça a plataforma</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/banner.png" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption" style="margin-bottom: 70px;">
        <h3 style=" font-size: 40px;">CLICKSCHOOL</h3>
        <h4 class="mb-5"> Sistema de gestão escolar para responsáveis </h4>
        <a href="#sobre" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          Sobre a escola</a>
        <a href="#plataforma" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          Conheça a plataforma</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/banner.png" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption" style="margin-bottom: 70px;">
        <h3 style=" font-size: 40px;">CLICKSCHOOL</h3>
        <h4 class="mb-5"> Sistema de gestão escolar para responsáveis </h4>
        <a href="#sobre" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          Sobre a escola</a>
        <a href="#plataforma" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          Conheça a plataforma</a>
      </div>
    </div>
  </div>

  <div id="link"></div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
</div>

<!-- SOBRE A ESCOLA -->
<div id="sobre" class="block">
  <div class="container">
    <div class="row">
      <div class="col-md-5 text-center align-self-center order-md-1 order-2">
        <img src="imagens/logo.png" class="img-fluid" />
      </div>
      <div class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
        <h2 class="title">Escola de Educação Básica Antônio Stuart</h2>
        <h4 class="subtitle">Sombrio, Santa Catarina.</h4>
        <p> A escola conta com a modalidade de Ensino Regular,
          a qual hoje atende 217 alunos, e diversas comunidades, distribuídos do Infantil V ao 9° ano.
        </p>
        <a href="#rodape" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">
          entre em contato</a>
        <a href="estatuto.php" class="btn button-primay-outline btn-outline-primary button d-md-inline-block d-block">
          Estatuto</a>
      </div>
    </div>
  </div>
</div>

<!-- //SOBRE A ESCOLA -->

<!-- SOBRE A PLATAFORMA -->
<div id="plataforma" class="block">
  <div class="container">
    <h2 class="title text-center">Sobre a Plataforma</h2>
    <h5 class="subtitle text-center mb-4">A plataforma CLICKSCHOOL foi desenvolvida com objetivo de facilitar
      a comunicação entre professores e responsáveis, ademais possui as seguintes funções</h5>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaques">
          <div class="img-container mb-3">
            <img src="imagens/todos.jpg" class="img-fluid" />
          </div>
          <h5 class="text-uppercase">Ficha do Aluno</h5>
          <p class="mb-0">Possui um perfil de aluno individual de acordo ao usuário</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaques">
          <div class="img-container mb-3">
            <img src="imagens/todos.jpg" class="img-fluid" />
          </div>
          <h5 class="text-uppercase">Cronograma e Cardápio</h5>
          <p class="mb-0">Acesso as atividades de funcionamento escolar</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaques">
          <div class="img-container mb-3">
            <img src="imagens/todos.jpg" class="img-fluid" />
          </div>
          <h5 class="text-uppercase">Eventos</h5>
          <p class="mb-0">Possui um album de fotos com filtro para cada evento escolar</p>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <a href="#" class="destaques">
          <div class="img-container mb-3">
            <img src="imagens/todos.jpg" class="img-fluid" />
          </div>
          <h5 class="text-uppercase">Agenda de recados</h5>
          <p class="mb-0">Possui uma agenda de recados para facilitar o acesso a informção</p>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- // SOBRE A PLATAFORMA -->

<!-- FOOOTER -->
<a name="rodape"></a>
<div class="col-md-12">
  <h3 class="title text-center">Entre em contato conosco</h3>
</div>
<footer id="contact-area">
  <div class="container">
    <div class="row" id="rodape">
      <div class="col-md-4 contact-box">
        <i class="fas fa-phone"></i>
        <p><span class="contact-tile">Ligue para:</span> (48) 3533-5282</p>
        <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
      </div>
      <div class="col-md-4 contact-box">
        <i class="fas fa-envelope"></i>
        <p><span class="contact-tile">Envie um email:</span> eebmantoniostuart@hotmail.com</p>
      </div>
      <div class="col-md-4 contact-box">
        <i class="fas fa-map-marker-alt"></i>
        <p><span class="contact-tile">Venha nos visitar</span> <a href="https://goo.gl/maps/AB4CtzyTGD792J76A" target="_blank"></p>Retiro da União, Sombrio - SC</p>
      </div>
    </div>
    <div class="logo py-4">
      <div class="row">
        <div class="col-md-6 align-self-center text-md-left text-center">
          <img src="imagens/logon.png" class="img-fluid" />
        </div>
        <div class="col-md-6 align-self-center text-right">
          <ul>
            <li>
              <a href="https://www.facebook.com/profile.php?id=100073165999279" target="_blank"></p><i class="fa-brands fa-facebook"></i>
            </li>
            <li>
              <a href="https://www.instagram.com/eebm_antoniostuart/" target="_blank"></p><i class="fa-brands fa-instagram"></i>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCZDvcWAHsV_ld1NeR5fR1ig" target="_blank"></p><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</footer>
<!-- // FOOTER -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function() {

    $('#sidebarCollapse').on('click', function() {
      $('#sidebar').toggleClass('active');
    });

  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
      const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

      if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener('click', () => {
          nav.classList.toggle('show')
          toggle.classList.toggle('bx-x')
          bodypd.classList.toggle('body-pd')
          headerpd.classList.toggle('body-pd')
        })
      }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
      if (linkColor) {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
      }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

  });
</script>

</body>

</html>