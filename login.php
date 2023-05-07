
<?php 
    session_start();
    
    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0) {
            $resultado =  "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            $resultado =  "Preencha sua senha";
        } 
        else 
        {
            $email = $conexao->real_escape_string($_POST['email']);
            $senha = $conexao->real_escape_string($_POST['senha']);
        
            $sql_code = "SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
        
            $quantidade = $sql_query->num_rows;
        
            if($quantidade == 1) {
                    
                $usuario = $sql_query->fetch_assoc();
        
                $_SESSION['id'] = $usuario['ID'];
        
                header("Location: Página Principal/pp.php");
        
            } else {
                $resultado =  "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }
?>
