
<?php
include('conexao.php'); // importa o arquivo de conexao com o BD

?>

<?php include('menu.php'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col mb-4 mt-4 title text-center">
                <h1>Recados</h1>
            </div>
        </div>

            <div class="col-12">
                <form action="cadastraRecado.php" id="formNovoRecado" method="POST">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="nomeRecado" class="form-label">Nome do Recado</label>
                            <input type="text" name="nomeRecado" id="nomeRecado" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="dataRecado" class="form-label">Data do Recado</label>
                            <input type="date" name="dataRecado" id="dataRecado" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="horaRecado" class="form-label">Hora do Recado</label>
                            <input type="time" name="horaRecado" id="horaRecado" class="form-control">
                        </div>
                        <div class="col-12">
                            <div id="mensagemErro" class="alert alert-danger d-none" role="alert">
                                Mensagem de Erro!
                            </div>
                        </div>
                        <div class="col-6"><button type="button" class="btn btn-danger w-100" id="buttonCancelar">Cancelar</button></div>
                        <div class="col-6"><input type="submit" name="btnSalvar" class="btn btn-primary w-100" value="Salvar"></div>
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