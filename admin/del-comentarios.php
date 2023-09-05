<?php
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $coment = mysqli_fetch_row(query($conexao_db, "SELECT idComent FROM Comentarios WHERE idComent = '$id'"));
        if ($coment) {
            query($conexao_db, "DELETE FROM Comentarios WHERE idComent = '$id'");
            
            echo "<script>
            window.location='index.php?pagina=table-comentarios';
            alert('Comentário deletado com sucesso!');
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