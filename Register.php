<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html {
            background-color: black;
            color: white;
            align-items: center;
        }
        .button-1 {
            height: 50px;
            padding: 10px;
            margin-top: 10px;
            border-radius: 20px;
            border-color: red;
            width: 100px;
            font-size: 15px;
            margin-left: 47%;
        }
        .txtemail, .txtsenha, .txtnome, .txtsobrenome {
            background-color: transparent;
            color: white;
            border-radius: 20px;
            font-size: 20px;
            border-color: red;
        }
        .email, .senha {
            margin-left: 38%;
            font-size: 20px;
            font-style: italic;
        }
        form {
            color: white;
            margin-top: 5%;
        }
        h1 {
            font-size: 50px;
            margin-left: 38%;
        }
        .Movie,  .Stream {
            font-size: 50px;
            font-style: italic;
        }
        .Movie {
            color: red;
        }
        .Stream {
            color: yellow;
        }
        .rg {
            font-size: 20px;
            margin-left: 47%;
        }
        .error {
            font-size: 20px;
            color: red;
            margin-left: 45%;
        }
    </style>
</head>
<body>
    <main>
        <a class="Movie">Movie</a><a class="Stream">Stream</a>
        <form action="confirmation.php" method="post">
            <p>
                <h1>Cadastro</h1>
            </p>
            <p>    
                <label class="email">nome:</label>
                <input type="text" name="nome" class="txtnome">
            </p>
            <p>    
                <label class="senha">sobrenome:</label>
                <input type="text" name="sobrenome" class="txtsobrenome">
            </p>
            <p>    
                <label class="email">Email:</label>
                <input type="text" name="email" class="txtemail">
            </p>
            <p>    
                <label class="email">Confirmação de email:</label>
                <input type="text" name="confirmaemail" class="txtemail">
            </p>
            <p>
                <label class="senha">Senha:</label>
                <input type="text" name="senha" class="txtsenha">
            </p>
            <p>
                <label class="senha">Confirmação de senha:</label>
                <input type="text" name="confirmasenha" class="txtsenha">
            </p>
            <p>
                <button type="submit" class="button-1">Cadastrar</button>
            </p>
        </form>
        <a href="../Register/index.php" class="rg">Registre-se</a>
    </main>
</body>
</html>