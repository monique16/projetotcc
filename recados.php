<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Agenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <?php include('menu.php'); ?>


</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Minha Agenda</h1>
      </div>
    </div>
    <div id="novoEvento" class="row my-2 mx-1 py-2 border rounded d-none">
      <div class="col-12">
        <form action="">
          <div class="row">
            <div class="col-12">
              <h2>Novo Evento</h2>
            </div>
          </div>
          <div class="row g-3">
            <div class="col-12">
              <label for="nomeEvento" class="form-label">Nome do Evento</label>
              <input type="text" name="nomeEvento" id="nomeEvento" class="form-control">
            </div>
            <div class="col-12">
              <label for="dataEvento" class="form-label">Data do Evento</label>
              <input type="datetime-local" name="dataEvento" id="dataEvento" class="form-control">
            </div>
            <div class="col-6"><button type="button" class="btn btn-danger w-100" id="buttonCancelar">Cancelar</button></div>
            <div class="col-6"><button type="submit" class="btn btn-primary w-100">Salvar</button></div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2>
          Eventos
        </h2>
      </div>
      <div class="col-auto">
        <button type="button" class="btn btn-success" id="buttonNovoEvento">Novo Evento</button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <th scope="col">Data</th>
            <th scope="col">Evento</th>
            <th scope="col">Ações</th>
          </thead>
          <tbody>
            <td colspan="3">Nenhum evento</td>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script src="js/agenda.js"></script>

</body>
</html>