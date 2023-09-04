<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    include('php/verify_darkmode.php');
    include_once('php/consultas.php');
    include_once('php/verify_login.php');
?>

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


        <!-- Croppie -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" rossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://kit.fontawesome.com/c9ce4f5a4f.js" crossorigin="anonymous"></script>
        <script> function edit() { window.location = "editar_cads.php"; } </script>
    </head>
    <body>

        <?php include('navbar.php');?>
        
        <div id="fundo_verm" class="fundo-vermelho">

            <div id="linha_top">
                <i id="engrenagem" class="fa-solid fa-gear" style="cursor: pointer;" alt="Editar_Perfil" onclick="edit()"></i>
                <h1 class="h4">Editar informações de perfil</h1>
            </div>

            <div id="painel">
                <div id="bolinha_do_canto"></div>
                <div class="img-user">
                    <img id="img_perfil" src="<?php echo get_img($_SESSION['login']['imgUser']) ?>" alt="Imagem de perfil">
                    <i class="fa-solid fa-pen"></i>
                </div>
                
                <h3 class=""><?php echo $_SESSION['login']['nome'];?></h3>

                <h3 class="text editar"><a href="editar_cads.php" class="">Editar</a></h3>
            </div>


    
        <!-- Acho que a Biografia não é uma coisa necessaria, mas se quiser manter é só descomentar e adicionar no bd. -->
        <!-- <div id="bio_amiga">
            <h3>Biografia</h3>
            <textarea name="bio_perfil" id="bio_perfil" cols="30" rows="10"></textarea>
        </div> -->
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    </body>
</html>