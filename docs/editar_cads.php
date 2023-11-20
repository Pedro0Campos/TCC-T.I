<?php 
    error_reporting(0);
    ini_set("display_errors", 0);
    include_once('php/verify_darkmode.php');
    include_once('database/db.php');
    include_once('php/consultas.php');
    include_once('php/verify_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br" <?php if ($darkmode) {echo "class='darkmode'";} ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../docs/css/edita_cads.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <script src="https://kit.fontawesome.com/c9ce4f5a4f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
        function hidePass() {
            senha = document.getElementById('senha');
            olho = document.getElementById('verSenha');

            if (olho.className == 'fa-regular fa-eye-slash') {

                senha.type = 'text';
                olho.className = 'fa-regular fa-eye';
                
            } else{
                
                senha.type = 'password';
                olho.className = 'fa-regular fa-eye-slash';

            }
        }

        function editar() {
            edit_btn = document.getElementById('edit_btn');
            form_edit = document.getElementById('form-edit');
            form_edit.action = 'php/edita_user.php'

            if (window.confirm('Deseja mesmo editar estas informações?')) {    
                form_edit.submit();
            }
        }
            
        function deletar() {
            del_btn = document.getElementById('del_btn');
            form_edit = document.getElementById('form-edit');
            form_edit.action = 'php/del_user.php'

            if (window.confirm('Deseja mesmo deletar o seu cadastro?')) {    
                form_edit.submit();
            }
        }

    </script>

    <title>Editar</title>
</head>
<body>

    <div class="disable-navbar">
        <?php include_once('navbar.php'); ?>
    </div>
    <?php

        $id = $_SESSION['login']['id'];
        $condicao = "SELECT * FROM Usuarios WHERE idUser = '$id'";
        $consulta = query($conexao_db, $condicao);
        $per_user = mysqli_fetch_row($consulta);

    ?>
    
    <div id="top_linha">
        <h1 class="h2">Configuração</h1>
        <hr>
        <div class="img-user">
            <a href="perfil.php"><img src="<?php echo get_img($_SESSION['login']['imgUser']) ?>" class="foto-user" alt="Imagem do usuário E link para o perfil do usuário"></a>
        </div>
        
        <div class="display-425px voltar"><a href="perfil.php"><img src="imgs/editar_cads/voltar.svg" alt=""></a></div>
    </div>

    <div id="edicao">
        <div class="display-425px">
            <div class="img-user">
                <a href="perfil.php"><img src="<?php echo get_img($_SESSION['login']['imgUser']) ?>" class="foto-user" alt="Imagem do usuário E link para o perfil do usuário"></a>
            </div>
        </div>
        <form method="post" id="form-edit">

            <table>

                <tr>
                    <th>Nome</th>
                    <td>
                        <fieldset>
                            <legend>Nome</legend>
                            <input type="text" name="nome" id="nome" class="caixas_form border" value="<?php echo $per_user[1];?>">
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>
                        <fieldset>
                            <legend>Email</legend>
                            <input type="email" name="email" id="email" class="caixas_form border" disabled value="<?php echo $per_user[2];?>">
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th>Senha</th>
                    <td>
                        <div class="wrap-senha">
                            <fieldset>
                                <legend>Senha</legend>
                                <input type="password" name="senha" id="senha" class="caixas_form border" placeholder="Sem alteração">
                                <i id="verSenha" class="fa-regular fa-eye-slash" style="cursor: pointer;" onclick="hidePass()"></i>
                            </fieldset>
                        </div>
                    </td>
                </tr>

                <tr>
                    <table>
                        <tr>
                            <td class="wrap-buttons">
                                <button type="button" style="margin: 10px;" id="del_btn" class="btn" onclick="deletar()">
                                    <span>Deletar</span>
                                </button>
                                <button type="button" style="margin: 10px;" id="edit_btn" class="btn" onclick="editar()">
                                    Editar
                                </button>
                            </td>
                        </tr>
                    </table>
                </tr>

            </table>
        </form>

    </div>


</body>
</html>