<html>
<?php
include('conexao.php');

include('menu.php');
$sql = "SELECT * FROM usuario";
$query = mysqli_query($conn, $sql);
?>

<div id="lista">
    <div class='container'>
        <h3 class='p-3 title text-center'>Usuários cadastrados</h3>

        <a href="cadastraUsuario.php" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Cadastrar novo</a>

        <table class='table table-hover'>
            <tr>
                <td><b>ID</b></td>
                <td><b>Nome</b></td>
                <td><b>Telefone</b></td>
                <td><b>Email</b></td>
                <td><b>Responsável por</b></td>
                <td><b>Cidade</b></td>
                <td><b>Bairro</b></td>
                <td><b>Rua</b></td>
                <td><b>CPF</b></td>
                <td><b>Parentesco</b></td></b>
            </tr>

            <?php while ($dados = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $dados['cod_usuario'] ?></td>
                    <td><?php echo $dados['nome_usuario'] ?></td>
                    <td><?php echo $dados['telefone'] ?></td>
                    <td><?php echo $dados['email'] ?></td>
                    <td><?php echo $dados['responsavel_por'] ?></td>
                    <td><?php echo $dados['cidade'] ?></td>
                    <td><?php echo $dados['bairro'] ?></td>
                    <td><?php echo $dados['rua'] ?></td>
                    <td><?php echo $dados['cpf'] ?></td>
                    <td><?php echo $dados['parentesco'] ?></td>
                    <td colspan="2" class="text-center"><a class='btn btn-info btn-sm' href='editaUsuario.php?cod=<?php echo $dados['cod_usuario'] ?>'><i class="fa-solid fa-pencil"></i></a>
                    <a class='btn btn-danger btn-sm' href='#' onclick='confirmar("<?php echo $dados['cod_usuario'] ?>")'><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'excluiUsuario.php?cod_usuario=' + cod;
    }
</script>


<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>