<?php
    function input_post($name) {
        return tratar_input(filter_input(INPUT_POST, $name));
    }

    function tratar_input ($valor) {
        $valor = trim($valor);          // Deletar espaços no começo e no fim
        $valor = stripslashes($valor);  // Desfaz o efeito do addslashes()
        htmlspecialchars($valor);       // Converter caracteres especiais para ser exibidos no html
        return $valor;
    }

    function criptografarSenha($senha) {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    function verificarSenha($senha, $hash) {
        return password_verify($senha, $hash);
    }

    function cadastrar($nome, $email, $senha, $table, $conexao_db) {
        $senha = criptografarSenha($senha);
        
        $typeUser = 0;        
        $stmt = $conexao_db->prepare("INSERT INTO $table (nome, email, senha, tipoUser) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('sssi', $nome, $email, $senha, $typeUser);

        $stmt->execute();
    }
?>