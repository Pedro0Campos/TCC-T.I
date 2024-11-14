<?php 
    include('php/verify_darkmode.php');
    include('database/db.php');
    include('php/consultar_user.php');
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

            if (olho.className == 'fa-regular fa-eye') {

                senha.type = 'text';
                olho.className = 'fa-regular fa-eye-slash';

            } else{
                
                senha.type = 'password';
                olho.className = 'fa-regular fa-eye';

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
        $condicao = "WHERE idUser = '$id'";
        $consulta = consultar_user($condicao, $conexao_db);
        $per_user = mysqli_fetch_row($consulta);

    ?>
    
    <div id="top_linha">
        <h2>Configuração</h2>
        <hr>
        <img src="../docs/imgs/icon-user.png" alt="Imagem do usuário">
    </div>

    <div id="edicao">

        <form method="post">

            <table>
                <tr hidden><td><input type="number" name="id" value="<?php echo $per_user[0];?>"></td></tr>

                <tr>
                    <th>Nome</th>
                    <td><input type="text" name="nome" id="nome" class="caixas_form" value="<?php echo $per_user[1];?>"></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" id="email" class="caixas_form" value="<?php echo $per_user[2];?>"></td>
                </tr>

                <tr>
                    <th>Senha</th>
                    <td>
                        <input type="password" name="senha" id="senha" class="caixas_form" value="">
                        <i id="verSenha" class="fa-regular fa-eye" style="cursor: pointer;" onclick="hidePass()"></i>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" style="text-align: center; border: none;">
                        <input type="submit" value="Deletar" id="del_btn" onclick="deletar()">
                        <input type="submit" value="Editar" id="edit_btn" onclick="editar()">
                    </td>
                </tr>
            </table> 

        </form>

    </div>

</body>
</html>