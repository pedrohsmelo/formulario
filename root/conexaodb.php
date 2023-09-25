<?php
session_start();

$servername = "localhost";
$username = "admin";
$password = "suasenha";
$dbname = "nomedoseubanco";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Falha na conexão " . $conexao->connect_error);
}
?>
