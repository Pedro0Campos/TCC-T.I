<?php include('php/verify_darkmode.php');?>

<!DOCTYPE html>
<html lang="pt-br" <?php if ($darkmode) {echo "class='darkmode'";} ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel do Usuário</title>

        <link rel="stylesheet" href="css/painel.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/utils.css">
        <link rel="stylesheet" href="css/navbar.css">

        <script src="https://kit.fontawesome.com/c9ce4f5a4f.js" crossorigin="anonymous"></script>
        <script> function edit() { window.location = "editar_cads.php"; } </script>
    </head>
    <body>

        <?php include('navbar.php');?>
        
        <div id="fundo_verm">

            <div id="linha_top">
                <i id="engrenagem" class="fa-solid fa-gear" style="cursor: pointer;" alt="Editar_Perfil" onclick="edit()"></i>
                <h2>Editar informações de perfil</h2>
            </div>

            <div id="painel">
                <div id="bolinha_do_canto"></div>
                <img id="img_perfil" src="../docs/imgs/icon-user.png" alt="img_perfil"><br><br><br>
                <h3><?php echo $_SESSION['login']['nome'];?></h3><br><br>
            </div>

        </div><br><br><br>

    <!-- 
        Acho que a Biografia não é uma coisa necessaria, mas se quiser manter é só descomentar e adicionar no bd.
        <div id="bio_amiga">
            <h3>Biografia</h3>
            <textarea name="bio_perfil" id="bio_perfil" cols="30" rows="10"></textarea>
        </div>
    -->

    </body>
</html>