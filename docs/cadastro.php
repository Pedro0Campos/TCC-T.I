<?php

$nome = $email = $senha = '';

// Mensagens de erro
$nomeErro = $emailErro = $senhaErro = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('scripts/php/form.php');
    
    // Pegar e tratar os valores
    $nome = input_post('nome');
    $email = input_post('email');
    $senha = input_post('senha');

    // Mensagens de erro
    if (empty($nome)) {
        $nomeErro = 'Nome é obrigatório.';
    } else {
        if (!preg_match("|^[\pL\s]+$|u", $nome)) {
            $nomeErro = 'Apenas letras e espaços.';
        }
    }
    if (empty($email)) {
        $emailErro = 'Email é obrigatório.';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErro = 'Email inválido.';
        }
    }
    if (empty($senha)) {
        $senhaErro = 'Senha é obrigatório.';
    }

    echo "
    <script>
        
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Cadastro • Grease</title>
    
    <link rel="stylesheet" href="estilos/base.css">
    <link rel="stylesheet" href="estilos/form.css">

    <script src="scripts/javascript/change_background.js"></script>
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>
</head>
<body onload="change_background()">

    <div class="navbar">
        <ul class="navlista navlista-esquerda flexCenterVH">
            <li><a href="index.html" class="navitens">Home</a></li>
            <li><a href="sobre.html" class="navitens">Sobre</a></li>
            <li class="grease">Grease</li>
            <li><a href="personagens.html" class="navitens">Personagens</a></li>
        </ul>

        <ul class="navlista navlista-direita flexCenterVH">
            <li><a href="login.html" class="navitens">Login</a></li>
            <li><a href="" class="navitens">Cadastra-se</a></li>
        </ul>
    </div>
    
    <main>
        <div class="left"></div>

        <div class="right">
            <!-- Retorna para o próprio link para criar a validação -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" autocomplete="off">
                <p class="title1">Criar Conta</p>

                <input id="nome" class="input_form" type="text" name="nome" placeholder="Nome" value="">
                <span id="erro_nome" class="msg_erro"></span>
                
                <input id="email" class="input_form" type="text" name="email" placeholder="Email">
                <span id="erro_email" class="msg_erro"></span>
                
                <input id="senha" class="input_form" type="password" name="senha" placeholder="Senha">
                <span id="erro_senha" class="msg_erro"></span>

                <input class="button_form" type="submit" value="Cadastrar">
                
                <p class="text">Já tem uma conta? <a href="login.html" class="underline">Login</a></p>
            </form>
        </div>
    
    </main>

    <?php
    echo "
        <script>
            // Mostrar os erros no formulário
            if ('$nomeErro' != '') {
                let erro_nome = document.querySelector('#erro_nome')
                erro_nome.innerHTML = `<i class='fa-solid fa-circle-exclamation'></i>$nomeErro`    
            }

            if ('$emailErro' != '') {
                let erro_email = document.querySelector('#erro_email')
                erro_email.innerHTML = `<i class='fa-solid fa-circle-exclamation'></i>$emailErro`
            }

            if ('$senhaErro' != '') {
                let erro_senha = document.querySelector('#erro_senha')
                erro_senha.innerHTML = `<i class='fa-solid fa-circle-exclamation'></i>$senhaErro`
            }

        </script>
    ";
    ?>
</body>
</html>
