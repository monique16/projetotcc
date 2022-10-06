
<?php
include('conexao.php');


include('menu.php');
$sql = "SELECT * FROM usuario";
$query = mysqli_query($conn, $sql);
?>
<div id="lista">
    <div class='container'>
        <h3 class='p-3'>Funcionários cadastrados</h3>

        <a href="cadastraFuncionario.php" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Cadastrar novo</a>

        <table class='table table-hover'>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Função</td>
                <td>Turno</td>
            </tr>

            <?php while ($dados = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $dados['cod_usuario'] ?></td>
                    <td><?php echo $dados['nome_usuario'] ?></td>
                    <td><?php echo $dados['cpf'] ?></td>
                    <td><?php echo $dados['email'] ?></td>
                    <td><?php echo $dados['senha_usuario'] ?></td>
                    <td><?php echo $dados['funcao'] ?></td>
                    <td><?php echo $dados['turno'] ?></td>
                    <td colspan="2" class="text-center"><a class='btn btn-info btn-sm' href='editaFuncionario.php?cod_usuario=<?php echo $dados['cod_usuario'] ?>'><i class="fa-solid fa-pencil"></i></a>
                    <a class='btn btn-danger btn-sm' href='#' onclick='confirmar("<?php echo $dados['cod_usuario'] ?>")'><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiFuncionario.php?cod_usuario=' + cod;
    }
</script>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>