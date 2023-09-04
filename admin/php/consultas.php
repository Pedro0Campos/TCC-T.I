<?php
    
    function query($conexao_db, $query) {
        $consulta = mysqli_query($conexao_db, $query);
        return $consulta;
    }
?>