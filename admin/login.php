<?php
    include_once('../docs/database/db.php');
    include_once('../docs/php/form.php');
    include_once('../docs/php/consultas.php');
    
    $email = input_post('email');
    $senha = cryptSenha(input_post('senha'));

    consulta($conexao_db, "SELECT * FROM Usuarios WHERE email = '$email'");
?>