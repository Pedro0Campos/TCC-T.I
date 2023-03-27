<?php
    function conectar_bd($dbname, $password) {
        $conn = new PDO("mysql: host=localhost; dbname=$dbname", 'root',"$password");
        return $conn;
    }

    function input_post($name) {
        return filter_input(INPUT_POST, $name);
    }

    function criptografar($senha) {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    // function insert ($conn) {
    //     // return $envioDados
    //     return false;
    // }
?>