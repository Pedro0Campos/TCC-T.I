<?php
    function consultar_user($condicao='', $conexao_db) {
        $query = "SELECT * FROM Usuarios $condicao";
        $consulta_users = mysqli_query($conexao_db, $query);

        return $consulta_users;
    }

    function consultar_db($query='', $conexao_db) {

        $consulta = mysqli_query($conexao_db, $query);
        return $consulta;
        
    }
?>