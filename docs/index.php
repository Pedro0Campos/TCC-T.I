<?php
    include('php/verify_darkmode.php')
?>

<!DOCTYPE html>
<html lang="pt-br" <?php if ($darkmode) {echo "class='darkmode'";} ?>>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grease • 3º Info tarde 2023</title>

    <!-- Estilos do site -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/box-content.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/carrossel.css">
    <link rel="stylesheet" href="css/music-player.css">

    <!-- Scripts do site -->
    <script src="js/navbar.js"></script>

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">
    
</head>

<body class="fade">
    <!-- <div class="music-player fixed-container" id="music-player"> -->
    <div class="music-player fixed-container ocult-container" id="music-player">
        <div class="close-box">
            <img src="imgs/close.svg" alt="" id="close">
        </div>
        
        <div class="music-details">
            <div class="container">
                <img id="music-image-large" class="music-image" src="https://i.scdn.co/image/ab67616d0000b273b68df485f3304211904548a8">
                <p id="music-name" class="music-name">Summer Nights - From “Grease”</p>
                <p id="music-artist" class="music-autor">John Travolta</p>
            </div>
        </div>

        <div class="option-bar flexCenterVH">
            <div class="lbox-music">
                <img id="music-image-small" class="music-image" src="https://i.scdn.co/image/ab67616d00001e02b68df485f3304211904548a8">
            </div>
            <div class="barra-player flexCenterVH">
                <div class="icons">
                    <!-- 
                    variantes do volume:
                        >70 <i class="fa-solid fa-volume-high"></i>
                        >30 <i class="fa-sharp fa-solid fa-volume"></i>
                        >0  <i class="fa-solid fa-volume-low"></i>
                        =0  <i class="fa-solid fa-volume-xmark"></i>

                    variantes do pause:
                        > <i class="fa-solid fa-play"></i>
                        > <i class="fa-solid fa-pause"></i>
                    -->
                    <div class="left flexCenterVH">
                        <i id="backward" class="fa-solid fa-backward-fast backward" title="Anterior (j)"></i>
                        <i id="play-pause" class="fa-solid fa-pause" title="Reproduzir (k)"></i>
                        <i id="forward" class="fa-solid fa-forward-fast" title="Próximo (l)"></i>  
                    </div>

                    <div class="right">
                        <i id="shuffle" class="fa-solid fa-shuffle" title="Aleatório (a)"></i>
                        <i id="repeat" class="fa-solid fa-repeat" title="Repetir (r)"></i>
                        <!-- <i id="volume" class="fa-solid fa-volume-high"></i> -->
                    </div>
                </div>

                <div class="barra">
                    <audio id="audio" src="musics/Grease-Summer-Nights.mp3" preload="metadata"></audio>
                    <input id="controle-deslizante" type="range" max="100" value="0">
                    <span id="tempo-atual">0:00</span>
                    <span id="tempo-total">0:00</span>
                </div>
            </div>
        </div>            
    </div>

    <?php
        include('navbar.php');
    ?>

<!-- CONTEÚDO -->
<main>
    <!-- Sessão 1 -->
    <section class="section1">
        
        <div class="wh100 flex-collumn">
            <div class="wrapper-content-main" data-aos="fade-right">
                <div class="box-title1 border-box padding">
                    <h1 class="JSMedium">Conheça tudo sobre o musical de <span>Grease</span></p>
                </div> <!-- .box-title1 .border-box .padding-->
            </div> <!-- .wrapper-content-main -->
            
            <div class="wrapper-content-main" data-aos="fade-right">
                <div class="box-title3 padding">
                    <h3><span>“Uma viagem aos tempos da brilhantina”</span></h3>
                </div> <!-- .box-title3 .padding-->
            </div> <!-- .wrapper-content-main -->
            
            <div class="wrapper-content-main" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <a href="sobre.php"><button type="button" class="animation-scale btn-home">Sobre o musical</button></a>
            </div> <!-- .wrapper-content-main -->
        </div> <!-- .wh100 .flex-collumn -->

        <img src="imgs/home/sandy-danny-light.png" alt="Sanddy e Danny - Grease" class="sandy-danny" data-aos="fade-up">

    </section> <!-- .section-impar -->
    


    <!-- Sessão 2 -->
    <section class="section-theme-black section2">
        
        <div class="retro-line flex-collumn wh100" data-aos="fade">

            <div class="wrapper-content-main side-bar side-bar-style-1" data-aos="fade-down">
                <div class="box-title2 border-box padding">
                    <h2>Conheça as música que refletem os anos <span>50</span></h2>
                </div> <!-- .box-title2 .border-box .padding-->
            </div> <!-- .wrapper-content-main side-bar side-bar-style-1 -->

            <!-- Carrossel - Playlist -->
            <div class="display-425px">
                <div class="wrapper-content-main wrapper-carrossel-playlist" role="group" data-aos="fade-down">
                    <div class="carrossel-playlists splide" aria-label="Playlists">
                        <div class="splide__track">
                            <div class="splide__list" id="splide__list_PLAYLIST">

                                <div class="splide__slide">
                                    <div id="slide-1" class="slide">
                                        <div class="wrapper-text">
                                            <h2>Somente as músicas nacionais</h2>
                                        </div>
                                    </div>
                                    <img class="banner" src="imgs/carrossel/playlist/banner-1-grande.png" alt="">
                                    <div id="playlist-0" class="wh-100 click-playlist"></div>
                                </div>
                
                                <div class="splide__slide">
                                    <div id="slide-2" class="slide">
                                        <div class="wrapper-text">
                                            <h2>Somentes as maiores</h2>
                                            <p class="text">De Elvis à Johnny Cash</p>
                                        </div>
                                    </div>
                                    <img class="banner" src="imgs/carrossel/playlist/banner-2-grande.png" alt="">
                                    <div id="playlist-1" class="wh-100 click-playlist"></div>
                                </div>
                
                                <div class="splide__slide">
                                    <div id="slide-3" class="slide">
                                        <div class="wrapper-text">
                                            <h2>Músicas diretamente de Grease</h2>
                                        </div>
                                    </div>
                                    <img class="banner" src="imgs/carrossel/playlist/banner-3-grande.png" alt="">
                                    <div id="playlist-2" class="wh-100 click-playlist"></div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- .carrossel-playlists.splide -->
                </div>  <!-- .wrapper-content-main.wrapper-carrossel-playlist -->
            </div>  <!-- .display-425px -->
            
            <!-- Carrossel - Musicas -->
            <div class="wrapper-content-main" data-aos="fade-right">
                <div class="carrossel-musica splide" aria-labelledby="carousel-title">
                    <h2 id="carousel-title">Explorar</h2>

                    <!-- Caixa com opacidade (no final) para criar efeito de continuidade -->
                    <div class="opacity"></div>
                    
                    <div class="splide__track">
                        <ul class="splide__list" id="splide__list_MUSICAS">
                            <div class="splide__slide track" onclick="closeMusicPlayer()">
                                <div id="0" class="wait_api"></div>
                            </div>
                        </ul> <!-- .splide__list#splide__list-->
                    </div> <!-- .splide__track -->

                    <!-- Progress bar element -->
                    <div class="slider-progress">
                        <div class="slider-progress-bar" id="slider-progress-bar">
                        </div>
                    </div>

                </div> <!-- .carrossel-musica splide -->
            </div> <!-- .wrapper-content-main -->
            
            <div class="ocult-425px">
                <div class="wrapper-content-main" data-aos="fade-right">
                    <div class="mais-tocadas">
                        <h3>MAIS TOCADAS</h3>
                        <div class="side-bar side-bar-style-1">
                            <div class="container-itens" id="itens-mais-tocadas">
                                <p class="item" id="0">1. Summer Nights - Grease</p>
                                <p class="item" id="3">2. Don’t be Cruel - Elvis Presley</p>
                                <p class="item" id="4">3. I Walk The Line - Johnny Cash</p>
                            </div> <!-- .container-itens -->
                        </div> <!-- .side-bar side-bar-style-1 -->
                    </div> <!-- .mais-tocadas -->
                </div> <!-- .wrapper-content-main -->
            </div> <!-- .ocult-425px -->

            <div class="display-425px">
                <div class="wrapper-content-main side-bar side-bar-style-2" data-aos="fade-down">
                    <div class="box-title2 border-box padding">
                        <h2 class="JSMedium">A música exprime a mais alta filosofia numa linguagem que a razão não compreende.</h2>
                        <h3 class="subtitle JSMedium">Arthur Schopenhauer</h3>
                    </div> <!-- .box-title2 .border-box .padding-->
                </div> <!-- .wrapper-content-main side-bar side-bar-style-2 -->
            </div>

        </div> <!-- .retro-line .flex-collumn -->
    </section> <!-- .section-par .section2 -->
    


    <!-- Sessão 3 -->
    <section class="section3">

        <div class="flex-collumn wh100">

            <div class="wrapper-content-main side-bar side-bar-style-1" data-aos="fade-right">
                <div class="box-title2 border-box padding">
                    <h2>Personagens <span class="sect2-title2 color-title_light">incríveis</span> merecem todo o reconhecimento</h2>
                </div> <!-- .box-title2 .border-box .padding-->
            </div> <!-- .wrapper-content-main .side-bar side-bar-style-1 -->

            <div class="wrapper-content-main" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                <button type="button" onclick="showPopUp()" class="btn-home btn-retro animation-scale">Conheça os personagens</button>
            </div> <!-- .wrapper-content-main -->

            <div class="fixed-container ocult-container" id="showPopUp">
                <div class="carrosel-personagens splide" id="popup">
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
                </div> <!-- .carrosel-personagens .splide -->
            </div>
            
        </div> <!-- .flex_collumn -->
        
    </section> <!--.section-impar -->

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
    <script src="js/music.js"></script>
    <script src="js/carrosel.js" type="module"></script>
    
    <!-- Carrosel personagens -->
    <script src="js/carroselpopup.js"></script>

    <!-- Import Splide -->
    <script src="splide/js/splide.min.js"></script>
</body>

</html>