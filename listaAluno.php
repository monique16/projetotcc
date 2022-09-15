<html>
<?php
include('conexao.php');

include('menu.php');
$sql = "SELECT * FROM aluno";
$query = mysqli_query($conn, $sql);
?>
<div id="lista">
    <div class='container'>
        <h3 class='p-3'>Alunos cadastrados</h3>

        <a href="cadastraAluno.php" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Cadastrar novo</a>

        <table class='table table-hover'>
            <tr>
                <td>Matricula</td>
                <td>Nome</td>
                <td>Recado</td>
                <td>Data de nascimento</td>
                <td>Série</td>
                <td>Foto</td>
                <td>Turno</td>
                <td>Data de ingresso</td>
            </tr>

            <?php while ($dados = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $dados['matricula'] ?></td>
                    <td><?php echo $dados['nome_aluno'] ?></td>
                    <td><?php echo $dados['recado_aluno'] ?></td>
                    <td><?php echo $dados['Data_Nascimento'] ?></td>
                    <td><?php echo $dados['serie'] ?></td>
                    <td><img src="imageview.php?matricula=<?php echo $dados['matricula'] ?>" width="150" height="150"></td>
                    <td><?php echo $dados['turno'] ?></td>
                    <td><?php echo $dados['data_ingresso'] ?></td>
                    <td colspan="2" class="text-center"><a class='btn btn-info btn-sm' href='editaAluno.php?matricula=<?php echo $dados['matricula'] ?>'><i class="fa-solid fa-pencil"></i></a>
                    <a class='btn btn-danger btn-sm' href='#' onclick='confirmar("<?php echo $dados['matricula'] ?>")'><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiAluno.php?matricula=' + cod;
    }
</script>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>