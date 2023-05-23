<?php
    /*
        Esse script (login.php) faz uma verificação do input pelo mesmo arquivo que está o formulário.

        1. Define as variáveis para não dar problema de variáveis indefinidas
        
        2. Verifica se o Request Method é Post. Se o usuário nem apertou do botão Entrar, não vai entrar no If
        
        3. Caso o método seja Post, começa a validação dos dados
            - Email: precisa ser um email válido e estar cadastrado
            - Senha: não pode estar vazia, e ser a mesma senha do cadastro
        
        4. Se as variáveis de erros estão vazias (não deu erro), inicia o login.
    */

    // Criação das variáveis
    $email = $senha = '';
    $emailErro = $senhaErro = '';  // Mensagens de erro

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Pegar e tratar os valores
        $email = input_post('email');
        $senha = input_post('senha');

        // Tratamento do formulário e retorno de erros para o usuário
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


        // Verificar se deu erro (de digitação)
        if ($emailErro == '' and $senhaErro == '') {

            // Verificar se existe um cadastro com esse email
            $condicao = "WHERE email = '$email'";
            $consulta = consultar_user($condicao, $conexao_db);
            $cadastro = mysqli_fetch_row($consulta);

            // Não existe um email cadastrado igual o que o usuário digitou
            if (mysqli_num_rows($consulta) == 0) {
                $emailErro = 'Email não cadastrado.';

            } else {
                if (verificarSenha($senha, $cadastro[3])) {
                    // Login
                    
                    
                    // Trocar de tela
                    header("Location: ../index.php");
                    die();

                } else {
                    $senhaErro = 'Senha inválida';
                }
            }
        }
    }

?>

<div class="left backg-image-logcad" data-aos="fade" data-aos-duration="500"></div>

<div class="right" data-aos="fade-down">

    <!-- Retorna para o próprio link para criar a validação -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']). "?pagina=login"?>" method="post" autocomplete="off">

        <h2 class="animation-title">Login</h2>

        <input class="input_form" type="text" name="email" placeholder="Email" value="<?php echo $email ?>">
        <?php
            if ($emailErro != '') {
                echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $emailErro </span>";
            }
         ?>

        <input class="input_form" type="password" name="senha" placeholder="Senha" value="<?php echo "" ?>">
        <?php
            if ($senhaErro != '') {
                echo "<span id='erro_email' class='msg_erro'><i class='fa-solid fa-circle-exclamation'></i> $senhaErro </span>";
            }
         ?>

        <input class="button_form" type="submit" value="Entrar">
        
        <p class="text">Não tem uma conta? <a href="?pagina=cadastro" class="underline">Cadastra-se</a></p>
    </form>    
</div>

<script src="javascript/change_background.js"></script>
