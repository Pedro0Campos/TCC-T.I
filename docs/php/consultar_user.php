<?php
    function consultar_user($condicao='', $conexao_db) {
        $query = "SELECT * FROM Usuarios $condicao";
        $consulta_users = mysqli_query($conexao_db, $query);

        return $consulta_users;
    }

    function get_img() {
        $path_img = 'imgs/img-padrao.svg';
        if ($_SESSION['login']['imgUser'] != 'img-padrao') {
            $path_img = "../" . $_SESSION['login']['imgUser'];
        }
        return $path_img;
    }
?>