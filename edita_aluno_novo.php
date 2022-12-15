<?php
include('conexao.php');
$codigo = $_GET['cod'];
$sql = "SELECT * FROM alunos WHERE cod_aluno='$codigo'";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Editar Aluno</title>
</head>

<body>
    <?php include('menu.php'); ?>
    <div class="main-login">
        <div class='left-login'>
            <img src="imagens/editcrono.svg" class="left-login-image" alt="Cell Animado">
        </div>
        <form action="edita_cardapio.php" method="post" enctype="multipart/form-data">
            <div class="right-login">
                <div class="card-login">
                    <div class="row">
                        <h2> EDITAR CARDAPIO </h2>
                        <input type="text" style="visibility:hidden" name="cod_cardapio" id="cod_aluno" value="<?php echo $codigo ?>" />

                            <div class="textfield">
                                <b>Nome:</b> <input class='form-control' type="text" name="nome_aluno" value="<?php echo $linha['nome_aluno'] ?>" />
                            </div>
                            <div class="textfield col-7">
                                <b>Email:</b> <input class='form-control' type="email" name="email" value="<?php echo $linha['email'] ?>" />
                            </div>
                            <div class="textfield col-5">
                                <b>Senha:</b> <input class='form-control' type="password" name="senha_aluno" value="<?php echo $linha['senha_aluno'] ?>" />
                            </div>
                            <div class="textfield col-4">
                                <b>CPF:</b> <input class='form-control' type="text" name="cpf" value="<?php echo $linha['cpf'] ?>" />
                            </div>
                            <div class="textfield col-4">
                                <b>Matricula:</b> <input class='form-control' type="text" name="matricula" value="<?php echo $linha['matricula'] ?>" />
                            </div>
                            <div class="textfield col-4">
                                <b>Data de nascimento:</b> <input class='form-control' type="date" name="data_nascimento" value="<?php echo $linha['data_nascimento'] ?>" />
                            </div>
                            <div class="textfield col-6">
                                <b>Série:</b>
                                <select class="form-control" type="text" name="serie" class="form-select" value="<?php echo $linha['serie'] ?>">
                                    <option selected><?php echo $linha['serie'] ?></option>
                                    <option value="Infantil I">Infantil I</option>
                                    <option value="Infantil II">Infantil II</option>
                                    <option value="Infantil III">Infantil III</option>
                                    <option value="1° Ano">1° Ano</option>
                                    <option value="2° Ano">2° Ano</option>
                                    <option value="3° Ano">3° Ano</option>
                                    <option value="4° Ano">4° Ano</option>
                                    <option value="5° Ano">5° Ano</option>
                                    <option value="6° Ano">6° Ano</option>
                                    <option value="7° Ano">7° Ano</option>
                                    <option value="8° Ano">8° Ano</option>
                                    <option value="9° Ano">9° Ano</option>
                                </select>
                            </div>
                            <div class="textfield col-6">
                                <b>Turno:</b>
                                <select class="form-control" type="text" name="turno" class="form-select" value="<?php echo $linha['turno'] ?>">
                                    <option selected><?php echo $linha['turno'] ?></option>
                                    <option value="Matutino">Matutino</option>
                                    <option value="Vespertino">Vespertino</option>
                                    <option value="Integral">Integral</option>
                                </select>
                            </div>

                            <div class="textfield col-4">
                                <b>Data de ingresso:</b> <input class='form-control' type="date" name="data_ingresso" value="<?php echo $linha['data_ingresso'] ?>" />
                            </div>
                            <div class="textfield col-8">
                                <b>Foto:</b> <input class='form-control' type="file" name="foto_aluno" value="<?php echo $linha['foto_aluno'] ?>" />
                            </div>
                            <div class="textfield">
                                <b>Recado:</b> <input class='form-control' type="text" name="recado" value="" />
                            </div>

                            <div class="form-group">
                                <input class='btn-login' type="submit" value="Salvar dados" name="btnSalvar" />
                                <input class='btn-login' type="reset" value="Limpar campos" />
                            </div>
                    </div>
                </div>
            </div>
        </form>

</body>

</html>