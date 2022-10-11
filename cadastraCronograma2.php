<?php include('menu.php');

/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col mb-4 mt-4 title text-center">
                <h1>Cronograma</h1>
            </div>
        </div>

            <div class="col-12">
                <form action="cadastraCronograma.php" id="formNovoCronograma" method="POST">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="dia_cronograma" class="form-label">Dia da Semana</label>
                            <input type="text" name="dia_cronograma" id="dia_cronograma" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="horario_cronograma" class="form-label">Hora das aulas</label>
                            <input type="time" name="horario_cronograma" id="horario_cronograma" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="disciplina" class="form-label">Matérias do dia</label>
                            <input type="text" name="disciplina" id="disciplina" class="form-control">
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
