<?php
include('conexao.php');
include('menu.php');


//if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
//  header("location: index.php");
//}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anônimo">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anônimo"></script>
  <!-- FONT AWESONME -->
  <script src="https://kit.fontawesome.com/74e138c6b6.js" crossorigin="anônimo"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/principal.css" />
  <link rel="stylesheet" tipo="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="shortcut icon" href="imagens/logon.png">
  <title>Cardapio</title>
</head>
<body>


<?php
$sql = "SELECT * FROM cardapio";
$query = mysqli_query($conn, $sql);
?>

<div id="cardapio">
  <div class="container-fluid">
    <h2 class="title text-center mb-5">Cardápio Semanal</h2>
    <div class="row">
      <div class="col-1"></div>
      <!--      <div class="row row-cols-5 d-grid gap-4 d-md-flex"> -->
      <div class="col-2">
        <button type="button" style="width: 90%;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2 " disabled>
          Segunda-Feira
      </div>
      <div class="col-2">
        <button type="button" style="width: 90%;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
          Terça-Feira
        </button>
      </div>
      <div class="col-2">
        <button type="button" style="width: 90%;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
          Quarta-Feira
        </button>
      </div>
      <div class="col-2">
        <button type="button" style="width: 90%;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
          Quinta-Feira
        </button>
      </div>
      <div class="col-2">
        <button type="button" style="width: 90%;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
          Sexta-Feira
        </button>
      </div>
      <!--  </div> -->
      <div class="col-1"></div>
    </div>


    <div class="text-center">
      <button class="carda" type="button" style="background-color:white; margin-right:40px;" class="btn button-outline btn-outline button" disabled>café da manhã | 09h30 - 09h45 </button>
      <button class="carda" type="button" style="background-color:white; margin-left:10px;" class="btn button-outline btn-outline button" disabled>café da tarde | 15h15 - 15h30</button>
    </div>
    <div class="row align-items-center">
      <div class="col-1"></div>
      <?php while ($dados = mysqli_fetch_array($query)) { ?>
        <div class="col-2">
          <div class="card" style="width: 90%;">
            <?php if ($_SESSION["funcionario"] === true) { ?>
              <a colspan="2" class="text-center"><a class='btn button-primay btn-primary button  mb-md-0 mt-0' href='edita_cardapio_novo.php?cod=<?php echo $dados['cod_cardapio'] ?>'>Editar</a>
              <?php } ?>
              <td> <img class="card-img-top" height="200" width="200" src="./<?php echo $dados['foto_alimento'] ?>"> </td>

              <div class="card-body">
                <p class="card-text title"><b><?php echo $dados['alimento'] ?></b></p>
              </div>
          </div>
        </div>
      <?php } ?>
      <div class="col-1"></div>
    </div>


  </div>
</div>

<div id="dieta" class="block" style="margin-top: 130px;">
  <div class="container">
    <div class="row">
      <div class="col-md-5 text-center align-self-center order-md-1 order-2">
        <img src="imagens/dieta.svg" class="img-fluid" style="margin-top: 20px; margin-bottom: 20px;" />
      </div>
      <div style="text-align:justify" class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
        <h1 style="font-size:30pt;">CONHEÇA A</h1>
        <h1 style="font-size:30pt; color:#FF7100;">ALIMENTAÇÃO ESCOLAR</h1>
        <h4 class="subtitle">saiba mais como funciona o cardapio escolar dos alunos</h4>
        <p> A escola conta com a modalidade de Ensino Regular,
          a qual hoje atende 217 alunos, e diversas comunidades, distribuídos do Infantil V ao 9° ano.
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  function confirmar(cod) {
    if (confirm('Você realmente deseja excluir esta linha?'))
      location.href = 'excluiCardapio.php?cod_cadapio=' + cod;
  }
</script>

</tbody>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


</html>