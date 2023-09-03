<?php

include('../database/db.php'); //echo "<h1>Veio para o Editar</h1>";
include('form.php');

$id = input_post('id');
$nome = input_post('nome');
$email = input_post('email');
$senha = input_post('senha');

//echo "$id / $nome / $email / $senha";

if (!empty($senha)) { // Se a senha não estiver vazia, ou seja, o usuário quiser mudar vai criptografar e trocar no bd.

    $senha = criptografarSenha($senha);
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE idUser = $id";

}else { // Senão só será alterado os outros campos de texto.
    
    $query = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE idUser = $id";

}

if (mysqli_query($conexao_db, $query)) {

    header('Location: ../painel.php');
    session_start();
    $_SESSION['login'] = ['nome' => $nome, 'id' => $id];

}

?>