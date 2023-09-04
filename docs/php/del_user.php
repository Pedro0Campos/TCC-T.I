<?php 

include_once('../database/db.php'); //echo '<h1>Veio para o Deletar</h1>';
include_once('consultas.php');
include_once('form.php');

session_start();

if (isset($_SESSION['login'])) {
    $id = $_SESSION['login']['id'];
    
    query($conexao_db, 'SET FOREIGN_KEY_CHECKS=0');
    query($conexao_db, "DELETE FROM Usuarios WHERE idUser = '$id'");
    query($conexao_db, 'SET FOREIGN_KEY_CHECKS=1');
    
    echo "<script>
    window.location='logout.php';
    alert('Conta deletada com sucesso!');
    </script>";
    die();
} else {
    header('Location: ../index.php');
    die();
}

?>