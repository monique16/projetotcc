
<?php
include('menu.php');
$sql = "SELECT * FROM usuario";
$query = mysqli_query($conn, $sql);
?>
<div id="lista">
    <div class='container'>
        <h3 class='p-3'>Alunos cadastrados</h3>

        <a href="cadastraAluno.php" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Cadastrar novo</a>

        <table class='table table-hover'>
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Turno</td>
                <td>Recado</td>
                <td>Data de nascimento</td>
                <td>Data de ingresso</td>
                <td>Foto</td>
            </tr>

            <?php while ($dados = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><img src="imageview.php?cod_usuario=<?php echo $dados['usuario'] ?>" width="150" height="150"></td>
                    <td><?php echo $dados['cod_usuario'] ?></td>
                    <td><?php echo $dados['nome_usuario'] ?></td>
                    <td><?php echo $dados['cpf'] ?></td>
                    <td><?php echo $dados['email'] ?></td>
                    <td><?php echo $dados['senha'] ?></td>
                    <td><?php echo $dados['turno'] ?></td>
                    <td><?php echo $dados['recado'] ?></td>
                    <td><?php echo $dados['data_nascimento'] ?></td>
                    <td><?php echo $dados['data_ingresso'] ?></td>
                    <td><img src="imageview.php?cod_usuario=<?php echo $dados['usuario'] ?>" width="150" height="150"></td>
                    <td colspan="2" class="text-center"><a class='btn btn-info btn-sm' href='editaAluno.php?cod_usuario=<?php echo $dados['cod_usuario'] ?>'><i class="fa-solid fa-pencil"></i></a>
                    <a class='btn btn-danger btn-sm' href='#' onclick='confirmar("<?php echo $dados['cod_usuario'] ?>")'><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiAluno.php?cod_usuario=' + cod;
    }
</script>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>