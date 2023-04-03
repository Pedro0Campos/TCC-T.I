<?php

    // Importar funções importantes
    include('scripts.php');

    // Criar conexão com banco
    $conn = conectar_bd('dbCoreo', '');
    
    // Definir as VARs
    $nome = input_post('nome');
    $email = input_post('email');
    $senha = criptografar(input_post('senha'));
    $tipo = 0;

    // Preparar para enviar os dados
    $enviarDados = $conn->prepare('INSERT INTO usuarios (nome, email, senha, tipoUser) VALUES (:NOME, :EMAIL, :SENHA, :TIPOUSER)');
    $enviarDados->bindParam(':NOME', $nome);
    $enviarDados->bindParam(':EMAIL', $email);
    $enviarDados->bindParam(':SENHA', $senha);
    $enviarDados->bindParam(':TIPOUSER', $tipo);
    
    // Enviar os dados
    // $enviarDados->execute();

    // Redirecionar para outra url
    $url = '../../cadastro.php';
    header("Location: " . $url);
    die();
    

?>
