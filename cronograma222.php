<?php

?>

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

  <div class="container">
    <h2 class="title text-center mt-5 mb-5">Cronograma</h2>
    <div class="container text-center">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="infantil-i-tab" data-bs-toggle="tab" data-bs-target="#infantil-i" type="button" role="tab" aria-controls="infantil-i" aria-selected="true">Infantil I</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="infantil-ii-tab" data-bs-toggle="tab" data-bs-target="#infantil-ii" type="button" role="tab" aria-controls="infantil-ii" aria-selected="false">Infantil II</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="infantil-iii-tab" data-bs-toggle="tab" data-bs-target="#infantil-iii" type="button" role="tab" aria-controls="infantil-iii" aria-selected="false">Infantil III</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="primeiro-tab" data-bs-toggle="tab" data-bs-target="#primeiro" type="button" role="tab" aria-controls="primeiro" aria-selected="false">1° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="segundo-tab" data-bs-toggle="tab" data-bs-target="#segundo" type="button" role="tab" aria-controls="segundo" aria-selected="false">2° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="terceiro-tab" data-bs-toggle="tab" data-bs-target="#terceiro" type="button" role="tab" aria-controls="terceiro" aria-selected="false">3° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="quarto-tab" data-bs-toggle="tab" data-bs-target="#quarto" type="button" role="tab" aria-controls="quarto" aria-selected="false">4° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="quinto-tab" data-bs-toggle="tab" data-bs-target="#quinto" type="button" role="tab" aria-controls="quinto" aria-selected="false">5° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="sexto-tab" data-bs-toggle="tab" data-bs-target="#sexto" type="button" role="tab" aria-controls="sexto" aria-selected="false">6° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="setimo-tab" data-bs-toggle="tab" data-bs-target="#setimo" type="button" role="tab" aria-controls="setimo" aria-selected="false">7° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="oitavo-tab" data-bs-toggle="tab" data-bs-target="#oitavo" type="button" role="tab" aria-controls="oitavo" aria-selected="false">8° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="nono-tab" data-bs-toggle="tab" data-bs-target="#nono" type="button" role="tab" aria-controls="nono" aria-selected="false">9° ano</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="infantil-i" role="tabpanel" aria-labelledby="infantil-i-tab">Cronograma Infantil I

        </div>
        <div class="tab-pane fade" id="infantil-ii" role="tabpanel" aria-labelledby="infantil-ii-tab">Cronograma Infantil II</div>
        <div class="tab-pane fade" id="infantil-iii" role="tabpanel" aria-labelledby="infantil-ii-tab">Cronograma Infantil III</div>
        <div class="tab-pane fade" id="primeiro" role="tabpanel" aria-labelledby="primeiro-tab">Cronograma 1° ano</div>
        <div class="tab-pane fade" id="segundo" role="tabpanel" aria-labelledby="segundo-tab">Cronograma 2° ano</div>
        <div class="tab-pane fade" id="terceiro" role="tabpanel" aria-labelledby="terceiro-tab">Cronograma 3° ano</div>
        <div class="tab-pane fade" id="quarto" role="tabpanel" aria-labelledby="quarto-tab">Cronograma 4° ano</div>
        <div class="tab-pane fade" id="quinto" role="tabpanel" aria-labelledby="quinto-tab">Cronograma 5° ano</div>
        <div class="tab-pane fade" id="sexto" role="tabpanel" aria-labelledby="sexto-tab">Cronograma 6° ano</div>
        <div class="tab-pane fade" id="setimo" role="tabpanel" aria-labelledby="setimo-tab">Cronograma 7° ano</div>
        <div class="tab-pane fade" id="oitavo" role="tabpanel" aria-labelledby="oitavo-tab">Cronograma 8° ano</div>
        <div class="tab-pane fade" id="nono" role="tabpanel" aria-labelledby="nono-tab">Cronograma 9° ano</div>
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