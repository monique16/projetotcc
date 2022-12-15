<?php
include('conexao.php');

/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

include('menu.php');
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM alunos WHERE cod_aluno LIKE '%$data%' or nome_aluno LIKE '%$data%' or email LIKE '%$data%' ORDER BY cod_aluno DESC";
} else {
    $sql = "SELECT * FROM alunos";
}
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anônimo">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anônimo"></script>
  <!-- FONT AWESONME -->
  <script src="https://kit.fontawesome.com/74e138c6b6.js" crossorigin="anônimo"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/principal.css" />
  <link rel="stylesheet" href="css/listagem.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" tipo="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="shortcut icon" href="imagens/logon.png">
  <title>Eventos</title>


<body>
    <div class="main-box">
        <div class="card-eventos" style="padding-bottom: 200px;">

            <h2 class="title text-center mb-5"> Alunos cadastrados</h2>

            <div class="box-search">
                <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
                <button onclick="searchData()" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <div class="list container">

                <?php while ($dados = mysqli_fetch_array($query)) { ?>
                    <a class="div_user" nome_user="<?= $dados['nome_aluno'] ?>" id="div_<?= $dados['cod_aluno'] ?>">
                        <div class="col-2" style="margin-right: 30px; margin-left: 30px;">


                            <div class="box">

                                <li style="margin-left: 190px; margin-top: -25px; margin-bottom: -10px;" class="nav-link active" data-bs-toggle="modal" data-bs-target="#modal_<?= $dados['cod_aluno'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </li>

                                <a style="color:#ff7100;"><?php echo $dados['nome_aluno'] ?></a>
                                <img height="80" width="80" src="imageview/<?php echo $dados['foto_aluno'] ?>">
                                <p class="user-turma"><?php echo $dados['serie'] ?></p>
                                <p class="user-serie"><?php echo $dados['matricula'] ?></p>
                                <p class="user-serie"><?php echo $dados['data_nascimento'] ?></p>
                            </div>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" style="padding-left:100px; border-radius: 15px;" id="modal_<?= $dados['cod_aluno'] ?>" tabindex="-1" aria-labelledby="<?= $dados['cod_aluno'] ?>label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title title" style="font-size: 26pt; color:white;" id="<?= $dados['cod_aluno'] ?>label">FICHA</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="main-box">
                                            <div class="card-profile">
                                                <div class="contour">
                                                    <div class="col-12" style="margin-right: 90px;">

                                                        <div class="caixa">
                                                            <div class="container-main">
                                                                <div class="container-left">

                                                                    <img height="80" width="80" src="imageview/<?php echo $dados['foto_aluno'] ?>">
                                                                    <div class="campo title p-2 mb-2"><b>Nome:</b>&ensp;<p><?php echo $dados['nome_aluno'] ?></p></div>
                                                                </div>
                                                                <div class="container-right">
                                                                    <div class="campo title mt-3"><b>E-mail:</b>&ensp;<p><?php echo $dados['email'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>Senha:</b>&ensp;<p><?php echo $dados['senha_aluno'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>CPF:</b>&ensp;<p><?php echo $dados['cpf'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>Série:</b>&ensp;<p><?php echo $dados['serie'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>Matrícula:</b>&ensp;<p><?php echo $dados['matricula'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>Turno:</b>&ensp;<p><?php echo $dados['turno'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>Data de ingresso:</b>&ensp;<p><?php echo $dados['data_ingresso'] ?></p>
                                                                    </div>
                                                                    <div class="campo title "><b>Data de Nascimento:</b>&ensp;<p><?php echo $dados['data_nascimento'] ?></p>
                                                                    </div>
                                                                    <div class="campo title"><b>Recado:</b>&ensp;<p><?php echo $dados['recado'] ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer" style="margin-top: 35px;">
                                        <a class='btn button-primay btn-primary button  mb-md-0 mt-0' style="color: white; margin-right: 10px;" href='editaAluno.php?cod_aluno=<?php echo $dados['cod_aluno'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg> editar</a>
                                        <a class='btn button-primay btn-primary button  mb-md-0 mt-0' style="color: white;" href='excluiAluno.php?cod_aluno=<?php echo $dados['cod_aluno'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg> excluir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>

                <a colspan="2" class="text-center" style="color: black; background-color: transparent; margin-top: 140px; margin-left: 100px;" href="cadastraAluno.php"><svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                    </svg></a>
            </div>
        </div>
    </div>
    <script>
        function confirmar(cod) {
            if (confirm('Você realmente deseja excluir esta linha?'))
                location.href = 'excluiAluno.php?cod_aluno=' + cod;
        }
    </script>

</body>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'listaAluno.php?search=' + search.value;
    }
</script>
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