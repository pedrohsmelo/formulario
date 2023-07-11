<?php
session_start();

$servername = "localhost";
$username = "admin";
$password = "123qwe!@#QWE";
$dbname = "banco_formulario";

$conexao = new mysqli($servername, $username, $password, $dbname);

// verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão " . $conn->connect_error);
}

require_once 'crud.php';



if ($conexao->query($sql) === TRUE) {
    $_SESSION['mensagem'] = 'Dados salvos com sucesso!';
} else {
    $_SESSION['mensagem'] = 'Erro ao salvar os dados!' . $conexao->error;
}

$conexao->close();

header("Location: index.html?mensagem=" . urlencode($_SESSION['mensagem']));
exit();
?>