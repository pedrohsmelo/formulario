<?php
session_start();

$servername = "localhost";
$username = "nomedeusuario";
$password = "senhadoseubanco";
$dbname = "nomedobanco";

$conexao = new mysqli($servername, $username, $password, $dbname);

// verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão " . $conexao->connect_error);
}

require_once 'crud.php';

if ($conexao->query($sql) === TRUE) {
    $_SESSION['mensagem'] = 'Dados salvos com sucesso!';
} else {
    $_SESSION['mensagem'] = 'Erro ao salvar os dados!' . $conexao->error;
}

$conexao->close();

header("Location: formulario.html?mensagem=" . urlencode($_SESSION['mensagem']));
exit();
?>
