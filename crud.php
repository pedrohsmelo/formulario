<?php
$sql_create_table = "CREATE TABLE IF NOT EXISTS tabela_cadastro (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50),
            sobrenome VARCHAR(50),
            idade INT,
            email VARCHAR(50),
            estado VARCHAR(50)
        )";
        
        if ($conexao->query($sql_create_table) === FALSE) {
            echo "Erro ao criar a tabela: " . $conexao->error;
        }
    
        $sql = "INSERT INTO tabela_cadastro (nome, sobrenome, idade, email, estado) VALUES ('$nome', '$sobrenome', '$idade', '$email', '$estado')";
?>