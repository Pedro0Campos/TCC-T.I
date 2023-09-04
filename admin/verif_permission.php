<?php 
    session_start();
    $admin = false;
    if (isset($_SESSION['login'])) {  // Fez login
        if ($_SESSION['login']['tipoUser'] == 1) {  // É admin
            $admin = true;
            
            $server = 'localhost';
            $user = 'root';
            $password = '';
            $db_name = 'dbCoreo';
            $conexao_db = mysqli_connect($server, $user, $password, $db_name);
        } else {
            header('Location: 401.php');
            die();
        }
    } else {
        header('Location: 401.php');
        die();
    }
?>