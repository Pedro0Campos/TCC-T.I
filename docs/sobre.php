<?php 
    include_once('php/verify_darkmode.php');
?>
<!DOCTYPE html>
<html lang="pt-br" class='<?php if ($darkmode) {echo "darkmode";} ?>'>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Grease • 3º Info tarde 2023</title>
    
    <!-- Estilos do site -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/box-content.css">
    <link rel="stylesheet" href="css/carrossel.css">
    <link rel="stylesheet" href="css/utils.css">
    
    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">
    <script src="splide/js/splide.min.js"></script>

    <style>
        .vd {
            width: 95%;
        }
        @media only screen and (min-width: 550px) {
            .vd {
                width: 70%;
                max-width: 600px;
            }
        }
        @media only screen and (min-width: 725px) {
            .retro-line-2 {
                background-image: url('imgs/sobre/retro-line-2.svg');
                background-image: url('imgs/sobre/retro-line-2.svg');
                background-repeat: repeat-y;
                background-position: 95%;
            }
        }
        @media only screen and (max-width: 425px) {
            .ondas {
                background-image: url('imgs/sobre/ondas-light.svg');
                background-repeat: no-repeat;
                background-position: 0 100%;
                background-size: 100%;
            }

            .padding-bottom {
                padding-bottom: 180px;
            }
        }
        </style>
    
</head>
<body class="fade">

    <?php 
        // include_once('database/db.php');
        include_once('navbar.php');
        // include_once('php/form.php');
        // include_once('php/consultas.php');  // Consultar usuários no banco
    ?>
    
    <!-- CONTEÚDO -->
    <main>
        <section class="padding ondas retro-line-2">
            
            <div class="padding-bottom">
                
                <div class="wrapper-content-main side-bar side-bar-style-3" data-aos="fade-right">
                    <div class="box-title1">
                        <h1 class="h3">Conheça nosso time de designers e programadores que fizeram esse projeto ser possível de existir</h1>
                        <h3 class="subtitle">Criar um site do zero não é fácil, mas com o esforço de uma equipe extraordinária, fizemos esse projeto sair apenas dos pensamentos. Nessa aba você vai ser capaz de conhecer cada um de nós</h3>
                    </div> <!-- .box-title1 .border-box .padding-->
                </div> <!-- .wrapper-content-main -->
                

                <div class="wrapper-content-main">
                    <div class="carrossel-sobre splide" id="carrossel-sobre" role="group" aria-label="Carrossel - Programadores e designers">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/henrique.png" alt="Henrique Silva">
                                    <p class="nome_pessoa"> Henrique Silva</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/julia.png" alt="Julia Quessada">
                                    <p class="nome_pessoa"> Julia Quessada</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/kerthelin.png" alt="Kethelin Vitoria">
                                    <p class="nome_pessoa"> Kethelin Vitoria</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/MatheusM.png" alt="Matheus Martins">
                                    <p class="nome_pessoa"> Matheus Martins</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/milena.png" alt="Milena Lima">
                                    <p class="nome_pessoa"> Milena Lima</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/nayla.png" alt="Nayla Assis">
                                    <p class="nome_pessoa"> Nayla Assis</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/pedroG.png" alt="Pedro Gonçalves">
                                    <p class="nome_pessoa"> Pedro Gonçalves</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/pedroH.png" alt="Pedro Henrique">
                                    <p class="nome_pessoa"> Pedro Henrique</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/raquel.png" alt="Raquel Lima">
                                    <p class="nome_pessoa"> Raquel Lima</p>
                                </div>
                                <div class="splide__slide">
                                    <img src="imgs/carrossel/sobre/vinicius.png" alt="Vinicius Passos">
                                    <p class="nome_pessoa"> Vinicius Passos</p>
                                </div>
                            </ul>
                        </div>

                        <!-- Progress bar element -->
                        <div class="slider-progress">
                            <div class="slider-progress-bar" id="slider-progress-bar"></div>
                        </div>
                    </div>  <!-- .carrosel-sobre.splide -->
                </div> <!-- .wrapper-content-main -->

                <div class="wrapper-content-main">
                    <div style="display: flex; align-items: center; justify-content: center;">
                        <video src="grease.mp4" preload="auto" controls autoplay loop class="vd"></video>
                    </div>
                </div> <!-- .wrapper-content-main -->

            </div> <!-- .retro-line-2 -->

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
        // ================================
        // Carrossel Sobre
        // ================================

        // Criar carrossel
        // ================================
        let carrossel_sobre = new Splide('#carrossel-sobre', {
            type: 'loop', // Fica em loop
            gap: '10px', // Espaçamento entre os slides
            easing: 'ease-out',
            perPage: 4,
            rewind : true,

        });

        
        carrossel_sobre.mount();
       
        var bar = document.querySelector('#slider-progress-bar')

        // Atualizar a barra conforme passa os slides
        carrossel_sobre.on('mounted move', function() {
            var end = carrossel_sobre.Components.Controller.getEnd() + 1;
            var rate = Math.min( (carrossel_sobre.index + 1) / end, 1)
            bar.style.width = String( 100 * rate) + '%'
        } )
    </script>
</body>
</html>