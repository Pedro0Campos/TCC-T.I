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

            if (window.confirm('Deseja mesmo editar estas informações?')) {    
                edit_btn.formAction = 'php/edita_user.php';
            }
        }

        function deletar() {
            del_btn = document.getElementById('del_btn');

            if (window.confirm('Deseja mesmo deletar esta conta?')) {
                del_btn.formAction = 'php/del_user.php';
            }
        }

    </script>

    <title>Editar</title>
</head>
<body>
    
    <?php

        include('navbar.php');
        $id = $_SESSION['login']['id'];
        $condicao = "SELECT * FROM Usuarios WHERE idUser = '$id'";
        $consulta = query($conexao_db, $condicao);
        $per_user = mysqli_fetch_row($consulta);

    ?>
    
    <div id="top_linha">
        <h1 class="h2">Configuração</h1>
        <hr>
        <div class="img-user">
            <img src="<?php echo get_img($_SESSION['login']['imgUser']) ?>" alt="Imagem do usuário">
        </div>
    </div>

    <div id="edicao">

        <form method="post">

            <table>

                <tr>
                    <th>Nome</th>
                    <td><input type="text" name="nome" id="nome" class="caixas_form border" value="<?php echo $per_user[1];?>"></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" id="email" class="caixas_form border" disabled value="<?php echo $per_user[2];?>"></td>
                </tr>

                <tr>
                    <th>Senha</th>
                    <td>
                        <div class="wrap-senha">
                            <input type="password" name="senha" id="senha" class="caixas_form border" placeholder="Sem alteração">
                            <i id="verSenha" class="fa-regular fa-eye-slash" style="cursor: pointer;" onclick="hidePass()"></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Foto</th>
                    <td><input type="file" name="foto" id="foto" class="caixas_form"></td>
                    
                </tr>
                
                <tr>
                    <td colspan="2" style="text-align: center; border: none;">
                        <input type="submit" value="Deletar" id="del_btn" onclick="deletar()">
                        <input type="submit" value="Editar" id="edit_btn" onclick="editar()">
                    </td>
                </tr>
            </table> 
            <a href="https://www.youtube.com/watch?v=WzRiyWugP-E&t=1270s&ab_channel=Celke"><h1>Tutorial crop</h1></a>
        </form>

    </div>

</body>
</html>