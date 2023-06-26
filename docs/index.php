<?php
if (isset($_GET['tema'])) {
    $tema = $_GET['tema'];
}

// echo $tema;
// setcookie('tema', 'darkmode', time() + (86400 * 30), '/');
?>

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
    <link rel="stylesheet" href="css/music-player.css">

    <!-- Scripts do site -->
    <script src="js/darkmode.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/carroselpopup.js"></script>

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">
    
</head>

<body class="fade">
    <div class="music-player ocult-player" id="music-player">
    <!-- <div class="music-player" id="music-player"> -->
        <div class="close-box" onclick="closeMusicPlayer()">
            <div class="leftright"></div>
            <div class="rightleft"></div>
            <label class="close">close</label>
        </div>
               
        <div class="music-details">
            <div class="container">
                <div class="music-image wait-api"></div>
                <!-- <img class="music-image" src="imgs/home/musicas/The_Wonder_of_You-Elvis Presley.png"> -->
                <p class="music-name">The Wonder of You</p>
                <p class="music-autor">Elvis Presley</p>
            </div>
        </div>
        
        <div class="option-bar">
            <div class="lbox-music">
                <img class="music-image" src="imgs/home/musicas/The_Wonder_of_You-Elvis Presley.png">
            </div>
        </div>
       
    </div>
    <input id="hidden_token" type="text" value="" style="display: none; visibility: hidden;">

    <?php
    // include('database/db.php');
    include('navbar.php');
    // include('php/form.php');
    // include('php/consultar_user.php');  // Consultar usuários no banco
    ?>

<!-- CONTEÚDO -->
<main>
    <section class="section-impar">
        <img src="imgs/home/sandy-danny-light.png" alt="Sanddy e Danny - Grease" class="sandy-danny" data-aos="fade-up">
        
        <!-- Sombra - usando linear gradient -->
        <div class="backgr-gradient wh100 flex-collumn">
            <div class="padding-box-title" data-aos="fade-right">
                <div class="box-title1 border-box">
                    <h1>Conheça tudo sobre o musical de <span>Grease</span></p>
                </div> <!-- .box-title1 -->
            </div> <!-- .padding-box-title -->
            
            <div class="padding-box-title" data-aos="fade-right">
                <div class="box-title3">
                    <h3><span>“Uma viagem aos tempos da brilhantina”</span></h3>
                </div> <!-- .box-title3 -->
            </div> <!-- .padding-box-title -->
            
            <div class="padding-box-title" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <a href="sobre.php" class="btn-home"><button type="button">Sobre o musical</button></a>
            </div> <!-- .padding-box-title -->
        </div> <!-- .backgr-gradient wh100 flex-collumn -->
        
    </section> <!-- .section-impar -->
    
    <section class="section-par section2">
        
        <div class="retro-line flex-collumn" data-aos="fade">
            <div class="padding-box-title right-bar" data-aos="fade-down">
                <div class="box-title2 border-box">
                    <h2>Conheça as música que refletem os anos <span class="sect2-title2 color-title_light">50</span></h2>
                </div> <!-- .box-title2 border-box -->
            </div> <!-- .padding-box-title right-bar -->
            
            <div class="padding-box-title" data-aos="fade-right">
                <div class="carrosel-musica splide" role="group" aria-labelledby="carousel-title">
                    <h2 id="carousel-title">Explorar </h2>
                    <!-- Caixa com opacidade (no final) para criar efeito de continuidade -->
                    <div class="opacity"></div>
                    
                    <div class="splide__track">
                        <ul class="splide__list" id="splide__list">
                            
                            <div class="splide__slide track" onclick="closeMusicPlayer()" data-spotify-id="spotify:track:2AVkArcfALVk2X8sfPRzya">
                                <div class="wait_api"></div>
                            </div>
                        </ul> <!-- .splide__list#splide__list-->
                    </div> <!-- .splide__track -->
                </div> <!-- .carrosel-musica splide -->
            </div> <!-- .padding-box-title -->
            
            
            <div class="padding-box-title" data-aos="fade-right">
                <div class="mais-tocadas">
                    <h3>MAIS TOCADAS</h3>
                    <div class="right-bar">
                        <div class="container-itens">
                            <p class="item">1. Summer Nights - Grease</p>
                            <p class="item">2. Don’t be Cruel - Elvis Presley</p>
                            <p class="item">3. I Walk The Line - Johnny Cash</p>
                        </div> <!-- .container-itens -->
                    </div> <!-- .right-bar -->
                </div> <!-- .mais-tocadas -->
            </div> <!-- .padding-box-title -->
        </div> <!-- .retro-line flex-collumn -->
    </section> <!-- .section-par section2 -->
    
    <section class="section-impar">       
        <div class="flex-collumn">
            <div class="padding-box-title right-bar" data-aos="fade-right">
                <div class="box-title2 border-box">
                    <h2>Personagens <span class="sect2-title2 color-title_light">incríveis</span> merecem todo o reconhecimento</h2>
                </div> <!-- .box-title2 border-box -->
            </div>

            <div class="padding-box-title" data-aos="fade-right">
                <button onclick="openPopup()" class="btnretro btn-home">Conheça os personagens</button>
            </div> <!-- .padding-box-title -->

            <div class="splide carrosel-personagens" role="group" aria-labelledby="carousel-title" id="popup">
                <h2 id="carousel-title"></h2>
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpSandy.png" alt="">
                            <!--<p class="nome_musica">Sandy Olsson</p>-->
                        </div>

                        <div class="splide__slide">
                            <img src="imgs/home/PopUpDanny.png" alt="">
                            <!--<p class="nome_musica">Danny Zuko</p>-->
                        </div>
    
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpJan.png" alt="">
                            <!--<p class="nome_musica">Betty Rizzo</p>-->
                        </div>
    
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpPutzie.png" alt="">
                          <!--  <p class="nome_musica">Marty Marachino</p>-->
                        </div>
    
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpFrenchy.png" alt="">
                          <!--  <p class="nome_musica">Kenickie Willians</p>-->
                        </div>
                        
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpDoody.png" alt="">
                          <!--  <p class="nome_musica">Frenchy Palardino</p>-->
                        </div>
    
        
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpRizzo.png" alt="">
                          <!--  <p class="nome_musica">Putzie</p>-->
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpKenickie.png" alt="">
                            <!-- <p class="nome_musica">Sonny Lattiery</p>-->
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpMarty.png" alt="">
                           <!--  <p class="nome_musica">Doody</p>-->
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/home/PopUpSonny.png" alt="">
                           <!--  <p class="nome_musica">Jan Martin</p>-->
                        </div>

                    </ul>
                </div>
            </div>
        </div> <!-- .flex_collumn -->
        
    </section> <!--.section-impar -->

 

    <script type="module">
        var carroselPopup = new Splide('.carrosel-personagens', {
            type:   'loop',       // Fica em loop
            height: 'auto',       // Altura do carrosel
            width: '100%',        // Comprimento do carrosel
            fixedWidth: '400px',  // Altura do slide
            focus:   0,           // Habilita uma classe para personalizar o elemento focado
            gap: '20px',          // Espaçamento entre os slides
            easing: 'ease-out',
            padding: '5rem',

 

        });

 

        carroselPopup.mount();
    </script>
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
    <!-- AOS - Animation in scrool -->
    
    <!-- Music Player -->
    <script src="js/music_player.js" type="module"></script>
    <script>
        function closeMusicPlayer() {
            document.querySelector('.music-player').classList.toggle('ocult-player')
            document.querySelector('body').classList.toggle('disable-scroll')
        }
    </script>

    <!-- Carrossel -->
    <script src="splide/js/splide.min.js"></script>
    
    <!-- Color Thief -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
</body>

</html>