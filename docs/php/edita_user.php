<?php

include('../database/db.php'); //echo "<h1>Veio para o Editar</h1>";
include('form.php');
include('consultas.php');

session_start();


if (isset($_SESSION['login'])) {
    $id = $_SESSION['login']['id'];
    $nome = input_post('nome');
    $senha = input_post('senha');
    
    // Se a senha não estiver vazia, ou seja, o usuário quiser mudar vai criptografar e trocar no bd.
    if (!empty($senha)) {
    
        $senha = cryptSenha($senha);
        $query = "UPDATE usuarios SET nome = '$nome', senha = '$senha' WHERE idUser = $id";
    
    }else { // Senão só será alterado os outros campos de texto.
        
        $query = "UPDATE usuarios SET nome = '$nome' WHERE idUser = $id";
    
    }
    
    query($conexao_db, $query);
    
    $_SESSION['login']['nome'] = $nome;
    // $SESSION['login']['imgUser'] = '';
    
    header('Location: ../perfil.php');
    die();
} else {
    header('Location: ../index.php');
    die();
}


?>