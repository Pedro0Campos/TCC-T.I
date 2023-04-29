<?php

// Importando funções:
include('scripts.php');
include('form.php');

// Conectando o Banco:
$conn = conectar_bd('dbCoreo', '');

// Vars:
$email = input_post('email');
$senha = input_post('senha');
$res_senha_cripto = $res_email = '';

// Vars com SQL -> Verificando o email e senha:
$query_dados= $conn->prepare('SELECT EMAIL FROM USUARIOS WHERE(EMAIL=:EMAIL)'); // ->Verificando se há este EMAIL no Banco.
$query_dados->bindParam(':EMAIL', $email);
$query_dados->execute();
$res_email = $query_dados->fetchColumn(); // -> Email no Banco.

$query_dados= $conn->prepare('SELECT SENHA FROM USUARIOS WHERE(EMAIL=:EMAIL)'); // ->Verificando se há esta SENHA no Banco.
$query_dados->bindParam(':EMAIL', $email);
$query_dados->execute();
$res_senha_cripto = $query_dados->fetchColumn(); // -> Senha criptografada.

verf_cads($res_email, $senha, $res_senha_cripto); // -> Verificando se já está cadastrado.
?>