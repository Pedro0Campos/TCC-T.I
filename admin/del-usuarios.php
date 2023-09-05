<?php
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = mysqli_fetch_row(query($conexao_db, "SELECT idUser FROM Usuarios WHERE idUser = '$id'"));
        if ($user) {
            if ($id == $_SESSION['login']['id']) {
                die('
                <h2>Não é possível deletar sua conta, você é um administrador.</h2>
                <h2>Ao deletar, você perderá acesso ao sistema!</h2>
                <h3><a href="index.php">Voltar</a></h3>
                ');
            }
            query($conexao_db, 'SET FOREIGN_KEY_CHECKS=0');
            query($conexao_db, "DELETE FROM Usuarios WHERE idUser = '$id'");
            query($conexao_db, 'SET FOREIGN_KEY_CHECKS=1');
            
            echo "<script>
            window.location='index.php?pagina=table-usuarios';
            alert('Conta deletada com sucesso!');
            </script>";
            die();
        } else {
            die('
                <h2>Id inválido</h2>
                <h3><a href="index.php">Voltar</a></h3>'
            );
        }
    } else {
        header('Location: index.php');
    }
    
?>