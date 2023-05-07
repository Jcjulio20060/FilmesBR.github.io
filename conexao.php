<?php

$hostname = "containers-us-west-98.railway.app";
$bancodedados = "railway";
$usuario = "root";
$senha = "eM7IIYibACErvAAXQcYW";

$conexao = new MySQLi ($hostname, $usuario, $senha, $bancodedados);

if($conexao->connect_errno) {
    die("Falha na conexão com o banco de dados");
}
?>
