<?php
session_start();

$servername = "localhost";
$username = "admin";
$password = "sua senha";
$dbname = "nomedoseubanco";

$conexao = new mysqli($servername, $username, $password, $dbname);

// verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão " . $conexao->connect_error);
}

require_once 'crud.php';

function validarEntrada($entrada)
{
    //função para aplicar a validação e sanitização dos dados
    $entrada = trim($entrada); 
    $entrada = stripslashes($entrada); 
    $entrada = htmlspecialchars($entrada);

    return $entrada;
}
?>
