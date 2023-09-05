<?php

include('../database/db.php'); //echo "<h1>Veio para o Editar</h1>";
include('form.php');
include('consultas.php');

session_start();


if (isset($_SESSION['login'])) {
    $id = $_SESSION['login']['id'];
    $nome = input_post('nome');
    $senha = input_post('senha');
    
    $nomeErro = $senhaErro = '';

    $fatiado = explode(" ", $nome);
    $invalido = false;
    foreach ($fatiado as $valor) {
        if (strlen($valor) >= 20) {
            $invalido = true;
        }
    }
    if (empty($nome)) {  // Nome vazio
        $nomeErro = 'Nome é obrigatório.';
    }
    if (!preg_match("|^[\pL\s]+$|u", $nome)) {
        $nomeErro = 'Apenas letras e espaços.';
    } 
    if (strlen($nome) < 3) {
        $nomeErro = 'Nome muito pequeno';
    }
    if ($invalido) {
        $nomeErro = 'Nome muito grande';
    }

    if ($nomeErro == '') {
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
        echo "
        <script>
            alert('$nomeErro')
            window.location = '../editar_cads.php'
        </script>
        ";
        die();
    }

} else {
    header('Location: ../index.php');
    die();
}


?>