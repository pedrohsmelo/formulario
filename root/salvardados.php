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

        function validarEntrada($entrada)
        {
         //função para aplicar a validação e sanitização dos dados
            $entrada = trim($entrada); 
            $entrada = stripslashes($entrada); 
            $entrada = htmlspecialchars($entrada);

         return $entrada;
        }

        // Verificação de duplicação
        $statement = $conexao->prepare("SELECT COUNT(*) FROM tabela_cadastro WHERE nome = ? AND sobrenome = ? AND email = ?");
        $statement->bind_param("sss", $nome, $sobrenome, $email);
        $statement->execute();
        $statement->bind_result($count);
        $statement->fetch();
        $statement->close();
        
        //validação e sanitização dos dados 
        $nome = validarEntrada($nome);
        $sobrenome = validarEntrada($sobrenome);
        $idade = validarEntrada($idade);
        $email = validarEntrada($email);
        $celular = validarEntrada($celular);
        $estado = validarEntrada($estado);
        $pais = validarEntrada($pais);  


        //
        if ($count > 0) {
                $_SESSION['mensagem'] = 'Dados já existem no banco de dados!';
            } else {
                $statement = $conexao->prepare("INSERT INTO tabela_cadastro (nome, sobrenome, idade, email, celular, pais, estado, whats) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $statement->bind_param("ssissssi", $nome, $sobrenome, $idade, $email, $celular, $pais, $estado, $whats);
            
                if ($statement->execute()) {
                    $_SESSION['mensagem'] = 'Dados salvos com sucesso!';
                } else {
                    $_SESSION['mensagem'] = 'Erro ao salvar os dados!' . $statement->error;
                }
            
                $statement->close();
            }
            $conexao->close();
            header("Location: index.html?mensagem=" . urlencode($_SESSION['mensagem']));
            exit();
?>
