<?php


require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST['funcionario'])) {
        $funcionario = $_POST['funcionario'];
    }else{
        $funcionario = false;
    }

echo"funcionario: ".$funcionario;

    if(empty(trim($_POST["email"]))){
        $username_err = "Por favor! Coloque um email válido."; 
    } else{
        $username = trim($_POST["email"]);
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
        if($funcionario){
            $sql = "SELECT * FROM funcionarios WHERE email = :username";
            
            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
                /* Apartir de agora é necessário apenas trocar os nomes que estão entre [""] pelo que está no seu 
                //Banco de dados // SOMENTE NÃo TROQUE O LOGGEDIN */
        
                    $param_username = trim($_POST["email"]);
                    
                    if($stmt->execute()){
        
                        if($stmt->rowCount() == 1){
                            if($row = $stmt->fetch()){
                                $id = $row["cod_funcionario"];
                                $username = $row["email"];
                                $hashed_password = $row["senha_funcionario"];
                                $nome_funcionario = $row["nome_funcionario"];
                                $cpf = $row["cpf"];
                                $email = $row["email"];
                                $funcao = $row["funcao"];
                                $turno = $row["turno"];

                                if($password == $hashed_password){
                                    session_start();
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["cod"] = $id;
                                    $_SESSION["nome"] = $nome_funcionario;
                                    $_SESSION["cpf"] = $cpf;
                                    $_SESSION["email"] = $email; 
                                    $_SESSION["funcao"] = $funcao; 
                                    $_SESSION["turno"] = $turno;                       
                                    $_SESSION["funcionario"] = true;

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
        }else{
            $sql = "SELECT * FROM alunos WHERE email = :username";
            echo"$sql";
            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
                /* Apartir de agora é necessário apenas trocar os nomes que estão entre [""] pelo que está no seu 
                //Banco de dados // SOMENTE NÃo TROQUE O LOGGEDIN */
        
                    $param_username = trim($_POST["email"]);
                    
                    if($stmt->execute()){
        
                        if($stmt->rowCount() == 1){
                            if($row = $stmt->fetch()){
                                $id = $row["cod_aluno"];
                                $username = $row["email"];
                                $hashed_password = $row["senha_aluno"];
                                $nome_aluno = $row["nome_aluno"];
                                $cpf = $row["cpf"];
                                $email = $row["email"];
                                $turno = $row["turno"];
                                $matricula = $row["matricula"];
                                $recado = $row["recado"];
                                $turno = $row["turno"];
                                $foto_aluno = $row["foto_aluno"];
                                $serie = $row["serie"];
                                $data_ingresso = $row["data_ingresso"];
                                $data_nascimento = $row["data_nascimento"];
                        

                                    if($password == $hashed_password){
                                        session_start();
                                        $_SESSION["loggedin"] = true;
                                        $_SESSION["cod"] = $id;
                                        $_SESSION["foto_aluno"] = $foto_aluno;
                                        $_SESSION["nome"] = $nome_aluno;
                                        $_SESSION["cpf"] = $cpf;
                                        $_SESSION["email"] = $email; 
                                        $_SESSION["turno"] = $turno;
                                        $_SESSION["recado"] = $recado;
                                        $_SESSION["matricula"] = $matricula;
                                        $_SESSION["serie"] = $serie;
                                        $_SESSION["data_ingresso"] = $data_ingresso;
                                        $_SESSION["data_nascimento"] = $data_nascimento;
                                        $_SESSION["funcionario"] = false;


        
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
        }
        
        unset($stmt);
    }
    
    unset($pdo);
}   