<?php
    include('form.php');
    include('../database/db.php');
    
    $comentario = input_post('comentario');
    
    if ($comentario == '') {
        echo "<script> 
            alert('Tentanto fraudar o site?') 
            document.location = '../index.php'
        </script>";
    } else {
        session_start();

        if (isset($_SESSION['login'])) {
            $stmt = $conexao_db->prepare("INSERT INTO comentarios (idUser, txtComent) VALUES (?, ?)");
            $stmt->bind_param('is', $_SESSION['login']['id'], $comentario);
            $stmt->execute();
            header('Location: ../index.php#comentarios');


        } else {
            header('Location: ../login.php');
        }
    }
        die();

        // $stmt = $conexao_db->prepare("INSERT INTO comentarios (idUser, txtComent) VALUES (?, ?)");
        // $stmt->bind_param('is', $comentario);
        // $stmt->execute();


        // $token = input_post('token');
        // $podeComentar = false;
        
        // if (isset($_SESSION['token-comentario'])) {
        //     if ($_SESSION['token-comentario'] == $token) {
        //         // Tem a variável de sessão mas é diferente
        //         $_SESSION['token-comentario'] = $token;
        //         $podeComentar = false;
        //     } else {
        //         $podeComentar = true;
        //     }
        // } else {
        //     // Não tem a variável de sessão
        //     $_SESSION['token-comentario'] = $token;
        //     $podeComentar = true;
        // }
        
        // if ($podeComentar == false) {
        //     header('Location: ../index.php?Repetiu');
        // } else {
        //     header('Location: ../index.php');
        // }
    
    
?>