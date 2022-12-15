<?php
include('conexao.php');
include('menu.php');


//if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
// header("location: index.php");
//}



$sql = "SELECT * FROM cronograma";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt">

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
  <title>Cronograma</title>
</head>


<body>

  <div class="cronograma" id="cronograma">
    <h2 class="title text-center mb-5">Cronograma</h2>
    <div class="container text-center">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="infantil-i-tab" data-bs-toggle="tab" data-bs-target="#infantil-i" type="button" role="tab" aria-controls="infantil-i" aria-selected="true">Infantil I</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="infantil-ii-tab" data-bs-toggle="tab" data-bs-target="#infantil-ii" type="button" role="tab" aria-controls="infantil-ii" aria-selected="false">Infantil II</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="infantil-iii-tab" data-bs-toggle="tab" data-bs-target="#infantil-iii" type="button" role="tab" aria-controls="infantil-iii" aria-selected="false">Infantil III</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="primeiro-tab" data-bs-toggle="tab" data-bs-target="#primeiro" type="button" role="tab" aria-controls="primeiro" aria-selected="false">1° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="segundo-tab" data-bs-toggle="tab" data-bs-target="#segundo" type="button" role="tab" aria-controls="segundo" aria-selected="false">2° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="terceiro-tab" data-bs-toggle="tab" data-bs-target="#terceiro" type="button" role="tab" aria-controls="terceiro" aria-selected="false">3° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="quarto-tab" data-bs-toggle="tab" data-bs-target="#quarto" type="button" role="tab" aria-controls="quarto" aria-selected="false">4° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="quinto-tab" data-bs-toggle="tab" data-bs-target="#quinto" type="button" role="tab" aria-controls="quinto" aria-selected="false">5° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="sexto-tab" data-bs-toggle="tab" data-bs-target="#sexto" type="button" role="tab" aria-controls="sexto" aria-selected="false">6° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="setimo-tab" data-bs-toggle="tab" data-bs-target="#setimo" type="button" role="tab" aria-controls="setimo" aria-selected="false">7° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="oitavo-tab" data-bs-toggle="tab" data-bs-target="#oitavo" type="button" role="tab" aria-controls="oitavo" aria-selected="false">8° ano</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="nono-tab" data-bs-toggle="tab" data-bs-target="#nono" type="button" role="tab" aria-controls="nono" aria-selected="false">9° ano</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="infantil-i" role="tabpanel" aria-labelledby="infantil-i-tab">

          <div id="cardapio">
            <div class="container-fluid">
              <div class="row">
                <div class="col-1"></div>
                <!--      <div class="row row-cols-5 d-grid gap-4 d-md-flex"> -->
                <div class="col-2">
                  <button type="button" style="width: 90%; font-size: 14pt;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2 " disabled>
                    Segunda-Feira
                </div>
                <div class="col-2">
                  <button type="button" style="width: 90%; font-size: 14pt;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
                    Terça-Feira
                  </button>
                </div>
                <div class="col-2">
                  <button type="button" style="width: 90%; font-size: 14pt;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
                    Quarta-Feira
                  </button>
                </div>
                <div class="col-2">
                  <button type="button" style="width: 90%; font-size: 14pt;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
                    Quinta-Feira
                  </button>
                </div>
                <div class="col-2">
                  <button type="button" style="width: 90%; font-size: 14pt;" class="btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" disabled>
                    Sexta-Feira
                  </button>
                </div>
                <!--  </div> -->
                <div class="col-1"></div>

                <div class="hora row container">
                  <?php while ($dados = mysqli_fetch_array($query)) { ?>
                    <div class="cronograma row container">
                      <div class="grade" style="margin-top: 20px;">

                        <?php if ($_SESSION["funcionario"]) { ?>
                          <a colspan="2" class="text-center btn btn-primary" style="color:black;" href='editaCronograma.php?cod_cronograma=<?php echo $dados['cod_cronograma'] ?>'>Editar</a>
                        <?php } ?>

                        <button type="button" class="btn button-primay btn-primary" disabled> <?php echo $dados['horario_cronograma'] ?></button>
                        <a type="text" class="col-2 title btn grid" disabled> <?php echo $dados['disciplina_seg'] ?></a>
                        <a type="text" class="col-2 title btn grid" disabled> <?php echo $dados['disciplina_terc'] ?></a>
                        <a type="text" class="col-2 title btn grid" disabled> <?php echo $dados['disciplina_quar'] ?></a>
                        <a type="text" class="col-2 title btn grid" disabled> <?php echo $dados['disciplina_quin'] ?></a>
                        <a type="text" class="col-2 title btn grid" disabled> <?php echo $dados['disciplina_sext'] ?></a>
                      </div>
                    </div>
                  <?php } ?>

                </div>

              </div>



              <div class="tab-pane fade" id="infantil-iii" role="tabpanel" aria-labelledby="infantil-ii-tab">Cronograma Infantil III</div>
              <div class="tab-pane fade" id="primeiro" role="tabpanel" aria-labelledby="primeiro-tab">Cronograma 1° ano</div>
              <div class="tab-pane fade" id="segundo" role="tabpanel" aria-labelledby="segundo-tab">Cronograma 2° ano</div>
              <div class="tab-pane fade" id="terceiro" role="tabpanel" aria-labelledby="terceiro-tab">Cronograma 3° ano</div>
              <div class="tab-pane fade" id="quarto" role="tabpanel" aria-labelledby="quarto-tab">Cronograma 4° ano</div>
              <div class="tab-pane fade" id="quinto" role="tabpanel" aria-labelledby="quinto-tab">Cronograma 5° ano</div>
              <div class="tab-pane fade" id="sexto" role="tabpanel" aria-labelledby="sexto-tab">Cronograma 6° ano</div>
              <div class="tab-pane fade" id="setimo" role="tabpanel" aria-labelledby="setimo-tab">Cronograma 7° ano</div>
              <div class="tab-pane fade" id="oitavo" role="tabpanel" aria-labelledby="oitavo-tab">Cronograma 8° ano</div>
              <div class="tab-pane fade" id="nono" role="tabpanel" aria-labelledby="nono-tab">Cronograma 9° ano</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="dieta" class="block" style="margin-top: -170px;">
    <div class="container">
      <div class="row">
        <div class="col-md-5 text-center align-self-center order-md-1 order-2">
          <img src="imagens/lição.svg" class="img-fluid" style="margin-top: 20px; margin-bottom: 20px; width:400px; height: 400px;" />
        </div>
        <div style="text-align:justify" class="col-md-6 align-self-center mb-md-0 mb-4 order-md-2 order-1">
          <h1 class="title" style="font-size:30pt;">Fique de olho nas </h1>
          <h1 class="title" style="font-size:30pt; color:#FF7100;">matérias e lições de casa</h1>
          <h1 class="title" style="font-size:30pt;">do dia! </h1>
          <p style="font-size:14pt;"> Os pais devem sempre ser os primeiros a ensinar os seus filhos, especialmente quando o assunto é a lição de casa. Cada tarefa deve ser vista como uma oportunidade única de aprendizagem da criança em um ambiente diferente da escola.
          </p>
        </div>
      </div>
    </div>
  </div>
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