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
    <link rel="stylesheet" href="css/box-title.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/toggle.css">
    <link rel="stylesheet" href="css/carrosel.css">
    
    <!-- Scripts do site -->
    <script src="js/darkmode.js"></script>
    <script src="js/navbar.js"></script>

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">
    <script src="splide/js/splide.min.js"></script>
    
</head>
<body class="fade">
    <?php 
        // include('database/db.php');
        include('navbar.php');
        // include('php/form.php');
        // include('php/consultar_user.php');  // Consultar usuários no banco
    ?>
    
    <!-- CONTEÚDO -->
    <main>
        <section class="section-impar">
            <div class="padding-box-title " data-aos="fade-down">
                <div class="box-title2">
                    <h2>Conheça nosso time de designers e programadores que fizeram esse projeto ser possível de existir <span></span></h2>
                    <span>Criar um site do zero não é fácil, mas com o esforço de uma equipe extraordinária, fizemos esse projeto sair apenas dos pensamentos. Nessa aba você vai ser capaz de conhecer cada um de nós</span>
                </div>
            </div>
            <div class="carrosel-sobre splide" role="group" aria-labelledby="carousel-title">
            
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <img src="imgs/sobre/julia.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/sobre/kerthelin.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/sobre/matheus.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/sobre/milena.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/sobre/nayla.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
            
                        <div class="splide__slide">
                            <img src="imgs/sobre/pedroG.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/sobre/pedroH.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
            
                        <div class="splide__slide">
                            <img src="imgs/sobre/raquel.png" alt="">
                            <p class="nome_pessoa"> Raquel Lima</p>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
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

    <script type="module">
        var carrosel_sobre = new Splide('.carrosel-sobre', {
            type:   'loop',       // Fica em loop
            height: '150%',       // Altura do carrosel
            width: '150%',        // Comprimento do carrosel
            fixedWidth: '300px',   // Altura do slide
            gap: '80px',          // Espaçamento entre os slides
            easing: 'ease-out'

        });

        carrosel_sobre.mount();
    </script>
</body>
</html>