<html>
<?php
include('conexao.php');

$cod = $_GET['cod'];

if (isset($_POST['btnSalvar'])) { // Realiza a alteração no BD
    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $telefone = $_POST ['telefone'];
    $email = $_POST['email'];
    $responsavel_por = $_POST['responsavel_por'];
    $usuario = $_POST['usuario'];
    $cidade =  $_POST['cidade'];
    $bairro =  $_POST['bairro'];
    $rua =  $_POST['rua'];
    $cpf =  $_POST['cpf'];
    $parentesco =  $_POST['parentesco'];

    $sql = "UPDATE usuario SET 
                nome_usuario='$nome_usuario', 
                senha_usuario='$senha_usuario', 
                telefone='$telefone',
                email='$email',
                responsavel_por='$responsavel_por',
                usuario='$usuario',
                cidade='$cidade',
                bairro='$bairro',
                rua='$rua',
                cpf='$cpf',
                parentesco='$parentesco'
            WHERE cod_usuario='$cod'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaUsuarios.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM usuario WHERE cod_usuario=$cod";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<?php include('menu.php'); ?>
<div class='container'>
    <h3 class='p-3'>Alterar usuário</h3>

    <form method="post">
        <div class="form-group">
            Nome: <input class='form-control' type="text" name="nome_usuario" value="<?php echo $linha['nome_usuario'] ?>" />
        </div>
        <div class="form-group">
            Senha: <input class='form-control' type="password" name="senha_usuario" value="<?php echo $linha['senha_usuario'] ?>" />
        </div>
        <div class="form-group">
            Telefone: <input class='form-control' type="text" name="telefone" value="<?php echo $linha['telefone'] ?>" />
        </div>
        <div class="form-group">
            Email: <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
        </div>
        <div class="form-group">
            Responsavel_por: <input class='form-control' type="text" name="responsavel_por" value="<?php echo $linha['responsavel_por'] ?>" />
        </div>
        <div class="form-group">
            Usuário: <input class='form-control' type="text" name="usuario" value="<?php echo $linha['usuario'] ?>" />
        </div>
        <div class="form-group">
            Cidade: <input class='form-control' type="text" name="cidade" value="<?php echo $linha['cidade'] ?>" />
        </div>
        <div class="form-group">
            Bairro: <input class='form-control' type="text" name="bairro" value="<?php echo $linha['bairro'] ?>" />
        </div>
        <div class="form-group">
            Rua: <input class='form-control' type="text" name="rua" value="<?php echo $linha['rua'] ?>" />
        </div>
        <div class="form-group">
            CPF: <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
        </div>
        <div class="col-sm-3">
                    <b>Parentesco</b>
                    <label class="visually-hidden" for="specificSizeSelect"></label>
                    <select class="form-control" type="text" id="specificSizeSelect" name="parentesco" value="<?php echo $linha['parentesco'] ?>" >
                    <option selected>Filho (a)</option>
                    <option value="1">Irmão (a)</option>
                    <option value="2">Neto (a)</option>
                    <option value="3">Sobrinho (a)</option>
                    </select>
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

</html>