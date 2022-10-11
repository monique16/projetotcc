<?php


require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor! Coloque um nome válido."; 
    } else{
        $username = trim($_POST["username"]);
    }
    

    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor! Coloque sua senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){

        /*Troque os dados referentes a tabelas, a final estamos usando o SElECT
        //Users pelo nome da sua tabela E username pela columa em questão // EX: username = User_name
        //NÃO TROQUE O :username */
        $sql = "SELECT * FROM alunos WHERE aluno = :username";
        echo"$sql";
        if($stmt = $pdo->prepare($sql)){
            
        $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
        /* Apartir de agora é necessário apenas trocar os nomes que estão entre [""] pelo que está no seu 
        //Banco de dados // SOMENTE NÃo TROQUE O LOGGEDIN */

            $param_username = trim($_POST["username"]);
            
            if($stmt->execute()){

                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["cod_aluno"];
                        $username = $row["nome_aluno"];
                        $hashed_password = $row["senha_aluno"];

                        if($password == $hashed_password){
                        echo"logou";
                            session_start();
                            

                            $_SESSION["loggedin"] = true;
                            $_SESSION["cod_aluno"] = $id;
                            $_SESSION["nome_aluno"] = $username;                            
                            echo "conexão ok!";

            /* Mesma coisa que antes coloque a pagina principal no lugar de welcome.php */
                            header("location: index.php");
                        } else{

                            $password_err = "Senha usada é inválida.";
                        }
                    }
                } else{

                    $username_err = "Nenhuma conta encontrada com esse nome.";
                }
            } else{
                echo "Oops! Alguma coisa deu errado. Por favor, tente de novo mais tarde.";
            }
        }

        unset($stmt);
    }
    
    unset($pdo);
}
?>