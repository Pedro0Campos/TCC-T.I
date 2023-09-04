<?php
    function input_post($name) {
        return tratar_input(filter_input(INPUT_POST, $name));
    }
    function input_get($name) {
        return tratar_input(filter_input(INPUT_GET, $name));
    }

    function tratar_input ($valor) {
        $valor = trim($valor);          // Deletar espaços no começo e no fim
        $valor = stripslashes($valor);  // Desfaz o efeito do addslashes()
        htmlspecialchars($valor);       // Converter caracteres especiais para ser exibidos no html
        return $valor;
    }

    function cryptSenha($senha) {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    function verifSenha($senha, $hash) {
        return password_verify($senha, $hash);
    }

    function cadastrar($nome, $email, $senha, $table, $conexao_db) {
        $senha = cryptSenha($senha);
        
        $stmt = $conexao_db->prepare("INSERT INTO $table (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $nome, $email, $senha);

        $stmt->execute();
    }
?>