<?php
    
    function query($conexao_db, $query) {
        $consulta = mysqli_query($conexao_db, $query);
        return $consulta;
    }
    function get_img($img_banco) {
        $path_img = 'imgs/img-padrao.svg';
        if ($img_banco != 'img-padrao') {
            $path_img = "../" . $img_banco;
        }
        return $path_img;
    }
?>