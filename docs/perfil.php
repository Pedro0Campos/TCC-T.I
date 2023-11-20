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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css"/>

    <!-- Font awesome -->
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

                <form action="php/change-photo.php" method="post" id="form-img">
                    <label for="input-img"><i class="fa-solid fa-pen" id="pen" alt="Alterar foto de perfil" aria-label="Alterar foto de perfil"></i></label>
                    <input type="file" name="img-user" id="input-img" accept="image/png, image/gif, image/jpeg, image/jpg">
                    <input type="hidden" name="data-img" id="data-img" >
                </form>
            </div>

            <h3 class=""><?php echo $_SESSION['login']['nome'];?></h3>


            <h3 class="text editar"><a href="editar_cads.php" class="">Editar</a></h3>
        </div>
    </div>

    <div id="container-croppie">
        <div class="wrap-exit">
            <div id="exit"><i class="fa-solid fa-xmark exit"></i></div>
        </div>

        <!-- Preview da imagem -->
        <div class="wrap-preview">
            <div id="preview"></div>
        </div>

        <div class="wrap-submit">
            <input type="button"value="Enviar" id="btn-submit">
        </div>
    </div>
    
    <!-- Croppie -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    <script src="js/croppie.js"></script>
</body>
</html>