<?php
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $whats = isset($_POST['whats']) ? 1 : 0;
        
        require_once 'conexaodb.php';
?>

        