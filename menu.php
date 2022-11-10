<?php
session_start();

/*if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
}*/

?>

<!doctype html>
<html lang="pt-br">

<head>
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
</head>

<body>
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
                        <li class="nav-link active" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i id="header-toggle" class="fa-solid fa-user"></i>
                        </li>  

                        <li class="nav-item">
                            <a class="nav-link active" aria-corrente="page" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-corrente="page" href="cardapio.php">Cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cronograma.php">Cronograma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-corrente="page" href="eventos.php">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-corrente="page" href="recados.php">Recados</a>
                        </li>
                        <?php
                        if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){

                         if ($_SESSION["funcionario"] === true) { ?>
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
                                <a class="nav-link dropdown-toggle active" href="cadastraFuncionario.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" expandida="falso">
                                    Funcionário
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="cadastraFuncionario.php">Cadastrar Funcioário</a></li>
                                    <li><a class="dropdown-item" href="listaFuncionario.php">Listar Funcioário</a></li>
                                </ul>
                            </li>
                        <?php }} ?>
                        

                        <li class="nav-item">
                            <a href="logout.php" class="nav-link active" aria-current="page"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>     Sair</a>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>

    </div>

    <!-- //HEADER -->

</html>