<?php
include('conexao.php');


$cod = $_GET['cod_funcionario'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $nome_funcionario = $_POST['nome_funcionario'];
    $cpf =  $_POST['cpf'];
    $email = $_POST['email'];
    $senha_funcionario = $_POST['senha_funcionario'];
    $funcao = $_POST['funcao'];
    $turno = $_POST['turno'];
   

    $sql = "UPDATE funcionarios SET 
                nome_funcionario='$nome_funcionario',
                cpf='$cpf',
                email='$email',
                senha_funcionario='$senha_funcionario',
                funcao='$funcao',
                turno='$turno'
            WHERE cod_funcionario='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaFuncionario.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM funcionarios WHERE cod_funcionario=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar usuário</h3>

    <form method="post">
        <div class="form-group">
            Nome: <input class='form-control' type="text" name="nome_funcionario" value="<?php echo $linha['nome_funcionario'] ?>" />
        </div>
        <div class="form-group">
            CPF: <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
        </div>
        <div class="form-group">
            Email: <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
        </div>
        <div class="form-group">
            Senha: <input class='form-control' type="password" name="senha_funcionario" value="<?php echo $linha['senha_funcionario'] ?>" />
        </div>
        <div class="form-group">
            Função: <input class='form-control' type="text" name="funcao" value="<?php echo $linha['funcao'] ?>" />
        </div>
        <div class="form-group">
            Turno: <input class='form-control' type="text" name="turno" value="<?php echo $linha['turno'] ?>" />
        </div>
        <div class="form-group">
            <input class='btn btn-success' type="submit" value="Salvar dados" name="btnSalvar" />
            <input class='btn btn-info' type="reset" value="Limpar campos" />
        </div>
    </form>
</div>

<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

</body>
