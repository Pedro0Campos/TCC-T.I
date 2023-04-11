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
            } else if (strlen($nome) < 3) {
                $nomeErro = 'Nome inválido';
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

        // Verificar se pode fazer o cadastro
        if ($nomeErro == '' and $emailErro == '' and $senhaErro == '') {
            echo "<script>alert('Fazer login')</script>";
        }
    }

?>

<div class="left backg-image-logcad"></div>

<div class="right">
    <!-- Retorna para o próprio link para criar a validação -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']). "?pagina=cadastro"?>" method="post" autocomplete="off">
        <p class="title1 animation-title">Criar Conta</p>

        <input id="nome" class="input_form" type="text" name="nome" placeholder="Nome" value="">
        <span id="erro_nome" class="msg_erro"></span>
        
        <input id="email" class="input_form" type="text" name="email" placeholder="Email">
        <span id="erro_email" class="msg_erro"></span>
        
        <input id="senha" class="input_form" type="password" name="senha" placeholder="Senha">
        <!-- <i id="icon_eye" class="fa-solid fa-eye eye"></i> -->
        <span id="erro_senha" class="msg_erro"></span>

        <input class="button_form" type="submit" value="Cadastrar">
        
        <p class="text">Já tem uma conta? <a href="?pagina=login" class="underline">Login</a></p>
    </form>
</div>

<script src="scripts/javascript/change_background.js"></script>

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

            // Colocar os valores no input
            document.querySelector('#nome').value = '$nome';
            document.querySelector('#email').value = '$email';
            document.querySelector('#senha').value = '';
        </script>
    ";
?>