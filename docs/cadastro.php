<?php 
    include_once('database/db.php');
    include_once('php/form.php');
    include_once('php/consultar_user.php');  // Consultar usuários no banco
    include_once('php/verify_darkmode.php');
?>

<?php
    if (isset($_SESSION['login'])) {
        header('Location: index.php');
    }

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
$nome = $sobrenome = $email = $senha = '';
$nomeErro = $sobrenomeErro = $emailErro = $senhaErro = '';  // Mensagens de erro

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['verify_darkmode'])) {
        header('Location: ?');
    }
    // Pegar e tratar os valores
    $nome = input_post('nome');
    $sobrenome = input_post('sobrenome');
    $email = input_post('email');
    $senha = input_post('senha');


    // Tratamento do formulário e retorno de erros para o usuário
    
    $fatiado = explode(" ", $nome);
    $invalido = false;
    foreach ($fatiado as $valor) {
        if (strlen($valor) >= 20) {
            $invalido = true;
        }
    }

    if (empty($nome)) {  // Nome vazio
        $nomeErro = 'Nome é obrigatório.';
    } else {
        if (!preg_match("|^[\pL\s]+$|u", $nome)) {
            $nomeErro = 'Apenas letras e espaços.';
        } else if (strlen($nome) < 3 or $invalido) {
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
        $senhaErro = 'Senha é obrigatória.';
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
            cadastrar($nome, $email, $senha, 'usuarios', $conexao_db);

            // Coletar o id
            $consulta = consultar_user($condicao, $conexao_db);
            $cadastro = mysqli_fetch_row($consulta);

            // Trocar de tela
            $_SESSION['login'] = ['id' => $cadastro[0], 'nome' => $cadastro[1], 'tipoUser' => $cadastro[4], 'imgUser' => $cadastro[5]];

            $redirec = 'index.php';
            if (isset($_POST['redirec']) && isset($_POST['coment'])) {
                if ($_POST['redirec'] && $_POST['coment'] != '') {
                    $redirec = "php/comentar.php?comentario=$_POST[coment]";
                }
            }
            echo $redirec;
            header("Location: $redirec");
            die();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br" <?php if ($darkmode) {echo "class='darkmode'";} ?>>
    <head>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Grease • 3º Info tarde 2023</title>
    
    <!-- Estilos do site -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>
    
</head>
<body class="fade">
    <div class="disable-navbar">
        <?php include_once('navbar.php'); ?>
    </div>
    
    <!-- CONTEÚDO -->
    <main>        
        <div class="content">
            <div id="form-left" class="form-left" data-aos="fade" data-aos-duration="500"></div>

            <div class="form-right" data-aos="fade-down" alt="Imagem de decoração que retrata os anos 50/60">
                <!-- Cabeçalho -->
                <div class="cabecalho">
                    <!-- Icon - back -->
                    <a href="index.php"><img id="back" src="imgs/cadastro/back.svg" alt="Back"></a>

                    <!-- Detalhes -->
                    <img id="component1" class="components" src="imgs/cadastro/Component1.svg" alt="Detalhe 1 - esquerda">
                    <img id="component2" class="components" src="imgs/cadastro/Component2.svg" alt="Detalhe 2 - direita / topo">
                    <img id="component3" class="components" src="imgs/cadastro/Component3.svg" alt="Detalhe 3 - direita">
                    <img id="component4" class="components" src="imgs/cadastro/Component4.svg" alt="Detalhe 4 - Centro">
                </div>
                
                <!-- Retorna para o próprio link para criar a validação -->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" autocomplete="off">
                    <div class="conteiner-h2">
                        <h2 class="animation-title h2">Criar uma Conta Nova</h2>
                    </div>
                    
                    <div class="form-camada-2">
                        <div class="conteiner-input">
                            <fieldset>
                                <legend>Nome</legend>
                                <input id="nome" class="input_form animation-scale" type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>">
                            </fieldset>
                            <?php
                                if ($nomeErro != '') {
                                    echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $nomeErro </span>";
                                }
                            ?>
                        </div>

                        <!-- <div class="conteiner-input">
                            <fieldset>
                                <legend>Sobrenome</legend>
                                <input id="sobrenome" class="input_form animation-scale" type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $sobrenome ?>">
                            </fieldset>
                            <?php
                                if ($sobrenomeErro != '') {
                                    echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $sobrenomeErro </span>";
                                }
                            ?>
                        </div> -->
                        
                        <div class="conteiner-input">
                            <fieldset>
                                <legend>Email</legend>
                                <input id="email" class="input_form animation-scale" type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
                            </fieldset>
                            <?php
                                if ($emailErro != '') {
                                    echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $emailErro </span>";
                                }
                            ?>
                        </div>
                        
                        <div class="conteiner-input">
                            <fieldset>
                                <legend>Senha</legend>
                                <input id="senha" name="senha" class="input_form animation-scale" type="password" placeholder="Senha" value="<?php echo "" ?>">
                            </fieldset>
                            <?php
                                if ($senhaErro != '') {
                                    echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $senhaErro </span>";
                                }
                            ?>
                        </div>

                        <?php 
                            $r = '';
                            if (isset($_GET['redirec'])) {$r = $_GET['redirec']; } 
                            if (isset($_POST['redirec'])) {$r = $_POST['redirec']; }

                            $c = '';
                            if (isset($_GET['coment'])) {$c = $_GET['coment']; }
                            if (isset($_POST['coment'])) {$c = $_POST['coment']; }
                        ?>
                        <input type="hidden" name="redirec" value="<?php echo $r ?>">
                        <input type="hidden" name="coment" value="<?php echo $c ?>">


                        <div class="conteiner-input">
                            <input class="button_form animation-scale" type="submit" value="Cadastrar">
                        </div>
                        
                        <p class="text">Já tem uma conta? <a href="login.php<?php if ($r != '' & $c != '') { echo "?redirec=$r&coment=$c"; } ?>" class="underline">Login</a></p>
                        
                    </div>
                </form>
            </div>
        </div>
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