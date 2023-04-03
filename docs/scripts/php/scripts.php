<?php
    function conectar_bd($dbname, $password) {
        $conn = new PDO("mysql: host=localhost; dbname=$dbname", 'root',"$password");
        return $conn;
    }

    // function insert ($conn) {
    //     // return $envioDados
    //     return false;
    // }
?>