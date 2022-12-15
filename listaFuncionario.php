<?php
include('conexao.php');

/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

include('menu.php');
$sql = "SELECT * FROM funcionarios";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listagem.css">
    <link rel="stylesheet" href="css/tela-evento.css">
    <title>Lista de Funcionários</title>
</head>

<body>
    <div class="main-box">
        <div class="card-eventos" style="padding-bottom: 200px;">

            <h2 class="title text-center mb-5"> Funcionários cadastrados</h2>
            <div class="list container">
                <?php while ($dados = mysqli_fetch_array($query)) { ?>
                    <div class="col-2" style="margin-right: 30px; margin-left: 30px;">

                        <a class='btn button-primay btn-primary button  mb-md-0 mt-0' style="color: white; margin-right: 10px;" href='editaFuncionario.php?cod_funcionario=<?php echo $dados['cod_funcionario'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg></a>
                        <a class='btn button-primay btn-primary button  mb-md-0 mt-0' style="color: white;" href='excluiFuncionario.php?cod_funcionario=<?php echo $dados['cod_funcionario'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                            </svg></a>

                        <div class="box">

                            <a style="color:#ff7100;"><?php echo $dados['nome_funcionario'] ?></a>
                            <img height="80" width="80" src="imageview/<?php echo $dados['foto_funcionario'] ?>">
                            <p class="user-turma"><?php echo $dados['funcao'] ?></p>
                            <p class="user-serie"><?php echo $dados['turno'] ?></p>
                        </div>
                    </div>

                    <?php } ?>
                    <a  colspan="2" class="text-center" style="color: black; background-color: transparent; margin-top: 140px; margin-left: 100px;" href="cadastraFuncionario.php"><svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</svg></a>
                    </div>
            </div>
        </div>
        <script>
            function confirmar(cod) {
                if (confirm('Você realmente deseja excluir esta linha?'))
                    location.href = 'excluiFuncionario.php?cod_funcionario=' + cod;
            }
        </script>
</body>
</html>