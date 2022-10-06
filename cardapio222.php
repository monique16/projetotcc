
<!DOCTYPE html>
<html lang="pt">


    <head>
      <title>Click Escola</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <!-- CABEÇALHO -->
    <div id="header" style="margin-bottom: 20px;">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="colapse navbar-colapse"></div>
          <a class="navbar-brand" href="#">
            <img src="imagens/logon.png" class="img-fluid" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Navegação alternada">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="colapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"><i id="header-toggle" class="fa-solid fa-user"></i></a>
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
                <a class="nav-link ativo" aria-corrente="page" href="recados.php">Recados</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="cadastraAluno.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" expandida="falso">
                  Aluno
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="cadastraAluno.php">Cadastrar Aluno</a></li>
                  <li><a class="dropdown-item" href="listaAluno.php">Listar Aluno</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="cadastraFuncionario.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" expandida="falso">
                  Funcionário
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="cadastraFuncionario.php">Cadastrar Funcioário</a></li>
                  <li><a class="dropdown-item" href="listaFuncionario.php">Listar Funcionário</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
      </nav>

    </div>
    </div>
    <!-- //HEADER -->
</head>



<body>

  <div id="cardapio" class="block">

    <div class="container">
      <h2 class="title text-center">Cardápio Semanal</h2>
      <div class="container text-center">
        <div class="row row-cols-5">
          <button type="button" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>Segunda-feira</button>
          <button type="button" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>Terça-feira</button>
          <button type="button" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>Quarta-feira</button>
          <button type="button" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>Quinta-feira</button>
          <button type="button" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>Sexta-feira</button>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <button type="button" class="carda btn button-outline btn-outline button" disabled>café da manhã/tarde | 09h30 - 09h45 e 15h15 - 15h30</button>
  </div>

  <div class="container text-center">
    <div class="row row-cols-5">

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 1</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 2</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 3</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 4</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 5</p>
        </div>
      </div>
    </div>
  </div>


  <div class="text-center">
    <button type="button" class="carda2 btn button-outline btn-outline button" disabled>almoço | 11h45 - 13h00</button>
  </div>

  <div class="container text-center">
    <div class="row row-cols-5">

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 1</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 1</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 1</p>
        </div>
      </div>

      <div class="card" style="width: 12rem;">
        <div class="card-body">
          <p class="card-text">Refeição 1</p>
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

  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>