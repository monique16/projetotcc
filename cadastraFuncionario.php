<html>
<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

if (isset($_POST['btnSalvar'])) {
    $nome_funcionario = $_POST['nome_funcionario'];
    $funcao =  $_POST['funcao'];
    $contato = $_POST ['contato'];
    $email_funcionario = $_POST['email_funcionario'];
    $senha_funcionario = $_POST['senha_funcionario'];
    $usuario = $_POST['usuario'];

    $sql = "INSERT INTO funcionario (nome_funcionario, funcao, contato, email_funcionario, senha_funcionario, usuario)
            VALUES ('$nome_funcionario', '$funcao', '$contato', '$email_funcionario', '$senha_funcionario', '$usuario')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Funcionário cadastrado com sucesso.') </script>";
        header("Location: listaFuncionario.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
?>
<?php include('menu.php'); ?>
    <div id="cadastros">
        <div class='container'>
            <h3 class='p-3'>Cadastrar Funcionário</h3>

            <form method="post">
                <div class="form-group">
                    <b>Nome: </b><input class='form-control' type="text" name="nome_funcionario" />
                </div>
                <div class="form-group">
                    <b>Senha: </b><input class='form-control' type="password" name="senha_funcionario" />
                </div>
                <div class="form-group">
                    <b>Contato: </b><input class='form-control' type="text" name="contato" />
                </div>
                <div class="form-group">
                    <b>Email: </b><input class='form-control' type="email" name="email_funcionario" />
                </div>
                <div class="form-group">
                    Usuário: <input class='form-control' type="text" name="usuario" />
                </div>
                <div class="form-group">
                    <b>Função: </b><input class='form-control' type="text" name="funcao" />
                </div>
                <div class="form-group">
                    <input class='btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2' type="submit" value="Enviar" name="btnSalvar" />
                    <input class='btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2' type="reset" value="Limpar campos" />
                </div>
            </form>
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