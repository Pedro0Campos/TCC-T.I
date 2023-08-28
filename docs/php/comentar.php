<?php
    include('form.php');
    include('../database/db.php');
    
    $comentario = input_get('comentario');
    
    if ($comentario == '') {
        echo "<script>
            document.location = '../index.php'
        </script>";
    } else {
        session_start();

        if (isset($_SESSION['login'])) {
            $data = new DateTime($timezone = 'Etc/UTC');
            $dataF = $data->format('Y-m-d H:i:s');

            $stmt = $conexao_db->prepare("INSERT INTO comentarios (idUser, txtComent, dataComent) VALUES (?, ?, ?)");
            $stmt->bind_param('iss', $_SESSION['login']['id'], $comentario, $dataF);
            $stmt->execute();
            header('Location: ../index.php#comentarios');


        } else {
            header("Location: ../login.php?redirec=comentar&coment=$comentario");
        }
    }

    die();    
?>