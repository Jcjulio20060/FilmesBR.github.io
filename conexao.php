<?php

$hostname = "localhost";
$bancodedados = "usuarios";
$usuario = "root";
$senha = "";

$conexao = new MySQLi ($hostname, $usuario, $senha, $bancodedados);

if($conexao->connect_errno) {
    die("Falha na conexão com o banco de dados");
}
?>