<?php include('menu.php'); 
/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset_senha.css">
    <title>Cadastro de Aluno</title>
</head>

<body>
    
    <div class="box">
        
        <div class="form-box">
            
            <h2>Alterar Senha</h2>
            <form action="#">
                
                <div class="input-group w50">
                    <label for="senha"> Nova Senha</label>
                    <input type="password" id="senha" required>
                </div>
                <div class="input-group w50">
                    <label for="confirme.senha"> Confirme Senha</label>
                    <input type="password" id="confirme.senha" required>
                </div>
                <div class="input-group btn">
                    <input type="submit" class="btn-reset" value="Alterar!">
                </div>
            </form>
        </div>
        <div class="img-box">
            <img src="imagens/reset-password-animate.svg" class="img-box" alt="Imagem Singup ">
        </div>
    </div>
</body>
</html>