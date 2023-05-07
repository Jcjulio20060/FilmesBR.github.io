<style>
    .tnt {
        color: black;
        font-size: 20px;
    }
</style>
<?php 
    session_start();
    
    include('conexao.php');

    if($_POST['email'] != $_POST['confirmaemail'])
    {
        echo "Os E-mails não são iguais";
        exit("não foi possível continuar, Desculpa!");
    }
    if($_POST['senha'] != $_POST['confirmasenha'])
    {
        echo "As senhas não são iguais";
        exit("não foi possível continuar, Desculpa!");
    }
    if(strlen($_POST['email']) == 0) 
    {
        $resultado =  "Preencha seu e-mail";
        exit("não foi possível continuar, Desculpa!");
    } 
    if(strlen($_POST['confirmaemail']) == 0) 
    {
        $resultado =  "confirme seu email";
        exit("não foi possível continuar, Desculpa!");
    } 
    if(strlen($_POST['senha']) == 0) 
    {
        $resultado =  "Preencha sua senha";
        exit("não foi possível continuar, Desculpa!");
    } 
    if(strlen($_POST['confirmasenha']) == 0) 
    {
        $resultado =  "confirme sua senha";
        exit("não foi possível continuar, Desculpa!");
    } 
    if(strlen($_POST['nome']) == 0) 
    {
        $resultado =  "coloque seu nome";
        exit("não foi possível continuar, Desculpa!");
    } 
    if(strlen($_POST['sobrenome']) == 0) 
    {
        $resultado =  "coloque seu sobrenome";
        exit("não foi possível continuar, Desculpa!");
    } 
    else 
    {
        if($_POST['email'] == $_POST['confirmaemail'])
        {
            $email = $conexao->real_escape_string($_POST['email']);
        }
        if($_POST['senha'] == $_POST['confirmasenha'])
        {
            $senha = $conexao->real_escape_string($_POST['senha']);
        }
        $nome = $conexao->real_escape_string($_POST['nome']);
        $sobrenome = $conexao->real_escape_string($_POST['sobrenome']);
    
        $sql_code = "SELECT * FROM usuarios WHERE EMAIL = '$email'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
    
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1)
        {
            echo "outro usuário já tem essa conta cadastrada! Por favor, mude suas credenciais";
        }
        else
        {
            $sql_code = "INSERT INTO `usuarios`(`NOME`, `SOBRENOME`, `EMAIL`, `SENHA`) VALUES ('$nome','$sobrenome','$email','$senha')";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

            $sql_code = "SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

            if($quantidade == 1) {
                echo "Cadastro feito com sucesso";
    
                $usuario = $sql_query->fetch_assoc();
        
                $_SESSION['id'] = $usuario['ID'];
        
                header("Location: Página Principal/index.php");
            } 
            else {
                $resultado = "Infezlimente o cadastro não deu certo! Tente novamente.";
            }
        }
    }
?>
<p>
    <?php 
    echo $resultado;
    ?>
    <a href="Register.html" class="tnt">
        Tente novamente
    </a>
</p>
