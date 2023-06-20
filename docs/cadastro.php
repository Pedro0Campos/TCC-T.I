<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Grease • 3º Info tarde 2023</title>
    
    <!-- Estilos do site -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/toggle.css">
    <link rel="stylesheet" href="css/carrosel.css">
    
    <!-- Scripts do site -->
    <script src="js/darkmode.js"></script>
    <script src="js/navbar.js"></script>

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>
    
</head>
<body class="fade">

    <?php 
        include('navbar.php');
        include('database/db.php');
        include('php/form.php');
        include('php/consultar_user.php');  // Consultar usuários no banco
    ?>
    
    <!-- CONTEÚDO -->
    <main>
        <?php
            /*
                Esse script (cadastro.php) faz uma verificação do input pelo mesmo arquivo que está o formulário.

                1. Define as variáveis para não dar problema de variáveis indefinidas
                
                2. Verifica se o Request Method é Post. Se o usuário nem apertou do botão de cadastrar, não vai entrar no If
                
                3. Caso o método seja Post, começa a validação dos dados
                    - Nome: não pode estar vazio, ter mais que 3 caracteres, e apenas letras e espaços
                    - Senha: não pode estar vazia
                    - Email: precisa ser um email válido
                
                4. Se as variáveis de erros estão vazias (não deu erro), inicia o cadastro. Obs: só será feito se não foi feito um cadastro antes
            */

            // Criação das variáveis
            $nome = $email = $senha = '';
            $nomeErro = $emailErro = $senhaErro = '';  // Mensagens de erro

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Pegar e tratar os valores
                $nome = input_post('nome');
                $email = input_post('email');
                $senha = input_post('senha');

                // Tratamento do formulário e retorno de erros para o usuário
                if (empty($nome)) {  // Nome vazio
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

                    // Verificar se já existe um cadastro com esse email
                    $condicao = "WHERE email = '$email'";
                    $consulta = consultar_user($condicao, $conexao_db);

                    // Verificar se existe algum email cadastrado
                    if (mysqli_num_rows($consulta) > 0) {
                        $emailErro = 'Email já utilizado.';

                    } else {
                        // Código para inserir os valores no banco
                        cadastrar($nome, $email, $senha, $conexao_db);
                        
                        // Trocar de tela
                        header('Location: index.php');
                        die();
                    }
                }
            }
        ?>

        <div id="form-left" class="form-left backg-image-logcad" data-aos="fade" data-aos-duration="500"></div>

        <div class="form-right" data-aos="fade-down">
            
            <!-- Retorna para o próprio link para criar a validação -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']). "?pagina=cadastro"?>" method="post" autocomplete="off">
                <h2 class="animation-title">Criar Conta</h2>

                <input id="nome" class="input_form" type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>">
                <?php
                    if ($nomeErro != '') {
                        echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $nomeErro </span>";
                    }
                ?>
                
                <input id="email" class="input_form" type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
                <?php
                    if ($emailErro != '') {
                        echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $emailErro </span>";
                    }
                ?>
                
                <input id="senha" class="input_form" type="password" name="senha" placeholder="Senha" value="<?php echo "" ?>">
                <?php
                    if ($senhaErro != '') {
                        echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $senhaErro </span>";
                    }
                ?>

                <input class="button_form" type="submit" value="Cadastrar">
                
                <p class="text">Já tem uma conta? <a href="login.php" class="underline">Login</a></p>
            </form>
        </div>

        <script src="js/change_background.js"></script>
    </main>
    
    <!-- AOS - Animation in scrool -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            easing: "ease-in-back",
            // offSet: 200,
            delay: 0,
        })
    </script>
</body>
</html>