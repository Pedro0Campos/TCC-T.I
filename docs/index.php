<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Grease • 3º Info tarde 2023</title>
    
    <link rel="stylesheet" href="css/_base.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/toggler.css">

    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>
    <script src="javascript/toggler.js"></script>
    
</head>
<body id="body" class="">
    <?php 
        include('database/db.php');
        include('navbar.php');
        include('php/form.php');
        include('php/cadastrar_user.php');  // Cadastrar um usuário no banco
        include('php/consultar_user.php');  // Consultar um usuário no banco (verificar se já existe cadastro)
    ?>

    <!-- CONTEÚDO -->
    <main>
        
        <?php
            if (isset($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
            } else {
                $pagina = 'home';
            }

            switch ($pagina) {
                case 'sobre':
                    include_once('views/sobre.php');
                    break;

                case 'personagens':
                    include_once('views/personagens.php');
                    break;
                
                case 'login':
                    include_once('views/login.php');
                    break;
                
                case 'cadastro':
                    include_once('views/cadastro.php');
                    break;

                default: 
                    include_once('views/home.php');
                    break;
            }

        ?>
    </main>

</body>
</html>