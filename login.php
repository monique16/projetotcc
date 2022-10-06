<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>

    <div class="main-login">
        
            <div class="left-login">
                <img src="imagens/cell_animated.svg" class="left-login-image" alt="Cell Animado"></div>

                <form method="post" action="config_login.php">
                <div class="right-login">
                    <div class="card-login">

                        <h1>LOGIN</h1>
                
                        <div class="textfield <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="username" placeholder="Usuário">
                        </div>
                    
                        <div class="textfield <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label for="senha">Senha</label>
                            <input type="password" name="password" placeholder="Senha">
                        </div>

                        <input type="submit" class="btn-login" value="Login">
                        <span class="pws-lost"><a href="recuperacao_senha.php">Esqueceu sua Senha?</a></span>

                    </div>
                </div>
        </form>
    </div>
</body>
</html>