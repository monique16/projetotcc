<?php
include('conexao.php');

/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

include('menu.php');
$sql = "SELECT * FROM alunos";
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
    <title>Lista de Usuários</title>
</head>
<body>
<div class="main-box">
    <div class="card-eventos" style="padding-bottom: 200px;">
        <h3 class="title" style="margin-top:40px; margin-bottom:60px;">Alunos cadastrados</h3>


        <div class="list container">
        <?php while ($dados = mysqli_fetch_array($query)) { ?>
        <div class="box"> 
        
                    <a><?php echo $dados['nome_aluno'] ?></a>
                    <img height="80" width="80" src="imageview/<?php echo $dados['foto_aluno'] ?>"> 
                    <p class="user-turma"><?php echo $dados['serie'] ?></p>
                    <p class="user-serie"><?php echo $dados['matricula'] ?></p>
                    <p class="user-serie"><?php echo $dados['data_nascimento'] ?></p>
                </div>

            <?php } ?>
            <a href="cadastraAluno.php" style="margin-right: 50px ;" class="btn button-primay btn-primary  lister">Cadastrar novo</a>

            </div>
    </div>
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiAluno.php?cod_aluno=' + cod;
    }
</script>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>