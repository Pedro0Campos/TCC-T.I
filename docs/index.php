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
    <script src="javascript/darkmode.js"></script>
    <script src="javascript/navbar.js"></script>

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">

    <script src="splide/dist/js/splide.min.js"></script>
    
</head>
<body class="fade">
    <?php 
        include('database/db.php');
        include('navbar.php');
        include('php/form.php');
        include('php/consultar_user.php');  // Consultar usuários no banco
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
    
    <!-- AOS - Animation in scrool -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
            easing: "ease-in-back",
            offSet: 200
        })
    </script>
</body>
</html>