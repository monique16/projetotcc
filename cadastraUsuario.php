<html>

<head>

</head>

<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if (isset($_POST['btnSalvar'])) {
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
    
    $sql = "INSERT INTO usuario (nome_usuario, senha_usuario, telefone, email, responsavel_por, usuario, cidade, bairro, rua, cpf, parentesco)
            VALUES ('$nome_usuario', '$senha_usuario', '$telefone', '$email', '$responsavel_por', '$usuario', '$cidade', '$bairro', '$rua', '$cpf', '$parentesco')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
        header("Location: listaUsuarios.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
<?php include('menu.php'); ?>
    <div id="cadastros">
        <div class='container'>
            <h3 class='p-3 title text-center'>Cadastrar usuário</h3>

            <form method="post">
                <div class="form-group">
                    <b>Nome: </b><input class='form-control' type="text" name="nome_usuario" />
                </div>
                <div class="form-group">
                    <b>Senha: </b><input class='form-control' type="password" name="senha_usuario" />
                </div>
                <div class="form-group">
                    <b>Telefone: </b><input class='form-control' type="text" name="telefone" />
                </div>
                <div class="form-group">
                    <b>Email: </b><input class='form-control' type="email" name="email" />
                </div>
                <div class="form-group">
                    <b>Responsável por: </b><input class='form-control' type="text" name="responsavel_por" />
                </div>
                <div class="form-group">
                    <b>Usuário: </b><input class='form-control' type="text" name="usuario" />
                </div>
                <div class="form-group">
                    <b>Cidade: </b><input class='form-control' type="text" name="cidade" />
                </div>
                <div class="form-group">
                    <b>Bairro: </b><input class='form-control' type="text" name="bairro" />
                </div>
                <div class="form-group">
                    <b>Rua: </b><input class='form-control' type="text" name="rua" />
                </div>
                <div class="form-group">
                    <b>CPF: </b><input class='form-control' type="text" name="cpf" />
                </div>
                <div class="col-sm-3">
                    <b>Parentesco</b>
                    <label class="visually-hidden" for="specificSizeSelect"></label>
                    <select class="form-control" type="text" id="specificSizeSelect" name="parentesco">
                    <option selected>Filho (a)</option>
                    <option value="1">Irmão (a)</option>
                    <option value="2">Neto (a)</option>
                    <option value="3">Sobrinho (a)</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class='btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2' type="submit" value="Enviar" name="btnSalvar" />
                    <input class='btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2' type="reset" value="Limpar campos" />
                </div>
            </form>
            </div>
        </div>
    </div>

<div>
    <footer class="footer mt-auto py-3">
      <div class="container fluid">
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
      </div>
    </footer>
</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>