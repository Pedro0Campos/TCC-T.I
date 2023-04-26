<?php

    function cadastrar($nome, $email, $senha, $conexao_db) {
        $senha = criptografar($senha);
        
        $typeUser = 0;        
        $stmt = $conexao_db->prepare("INSERT INTO usuarios (nome, email, senha, tipoUser) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('sssi', $nome, $email, $senha, $typeUser);

        $stmt->execute();
    }
?>

