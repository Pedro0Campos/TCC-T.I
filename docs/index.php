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

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">
    
</head>

<body class="fade">
    <div class="music-player" id="music-player">
    <!-- <div class="music-player ocult-player" id="music-player"> -->
        <div class="close-box" onclick="{openCloseMusicPlayer(), pause()}">
            <div class="leftright"></div>
            <div class="rightleft"></div>
            <label class="close">close</label>
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
    <section class="section-impar">
        <img src="imgs/home/sandy-danny-light.png" alt="Sanddy e Danny - Grease" class="sandy-danny" data-aos="fade-up">
        
        <div class="wh100 flex-collumn">
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
        </div> <!-- .wh100 flex-collumn -->
    </section> <!-- .section-impar -->
    


    <!-- Sessão 2 -->
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
                        <ul class="splide__list" id="splide__list_MUSICAS">
                            
                            <div class="splide__slide track" onclick="closeMusicPlayer()">
                                <div id="0" class="wait_api"></div>
                            </div>
                        </ul> <!-- .splide__list#splide__list-->
                    </div> <!-- .splide__track -->
                </div> <!-- .carrosel-musica splide -->
            </div> <!-- .padding-box-title -->
            
            <div class="padding-box-title" data-aos="fade-right">
                <div class="mais-tocadas">
                    <h3>MAIS TOCADAS</h3>
                    <div class="right-bar">
                        <div class="container-itens" id="itens-mais-tocadas">
                            <p class="item" id="0">1. Summer Nights - Grease</p>
                            <p class="item" id="3">2. Don’t be Cruel - Elvis Presley</p>
                            <p class="item" id="4">3. I Walk The Line - Johnny Cash</p>
                        </div> <!-- .container-itens -->
                    </div> <!-- .right-bar -->
                </div> <!-- .mais-tocadas -->
            </div> <!-- .padding-box-title -->
        </div> <!-- .retro-line flex-collumn -->
    </section> <!-- .section-par section2 -->
    


    <!-- Sessão 3 -->
    <section class="section-impar">       
        <div class="flex-collumn">
            <div class="splide carrosel-personagens" role="group" aria-labelledby="carousel-title">
                <h2 id="carousel-title">Explorar </h2>
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <img src="imgs/home/1.png" alt="">
                            <p class="nome_musica">Sandy Olsson</p>
                        
                        </div>

                        <div class="splide__slide">
                            <img src="imgs/home/2.png" alt="">
                            <p class="nome_musica">Danny Zuko</p>
                        
                        </div>
    
                        <div class="splide__slide">
                            <img src="imgs/home/3.png" alt="">
                            <p class="nome_musica">Betty Rizzo</p>
                    
                        </div>
    
                        <div class="splide__slide">
                            <img src="imgs/home/4.png" alt="">
                            <p class="nome_musica">Marty Marachino</p>
                    
                        </div>
    
                        <div class="splide__slide">
                            <img src="imgs/home/5.png" alt="">
                            <p class="nome_musica">Kenickie Willians</p>
                        
                        </div>
                        
                        <div class="splide__slide">
                            <img src="imgs/home/6.png" alt="">
                            <p class="nome_musica">Frenchy Palardino</p>
                    
                        </div>
    
        
                        <div class="splide__slide">
                            <img src="imgs/home/7.png" alt="">
                            <p class="nome_musica">Putzie</p>
                        
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/home/8.png" alt="">
                            <p class="nome_musica">Sonny Lattiery</p>
                        
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/home/9.png" alt="">
                            <p class="nome_musica">Doody</p>
                        
                        </div>
                        <div class="splide__slide">
                            <img src="imgs/home/10.png" alt="">
                            <p class="nome_musica">Jan Martin</p>
                        </div>
                    </ul>
                </div>
            </div>
        </div> 
        
    </section> <!--.section-impar -->

 

    <script type="module">
        var carroselPersonagens = new Splide('.carrosel-personagens', {
            type:   'loop',       // Fica em loop
            height: 'auto',       // Altura do carrosel
            width: '100%',        // Comprimento do carrosel
            fixedWidth: '120px',  // Altura do slide
            focus:   0,           // Habilita uma classe para personalizar o elemento focado
            gap: '20px',          // Espaçamento entre os slides
            easing: 'ease-out'
        });

        carroselPersonagens.mount();
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
    <script src="js/music.js"></script>
    <script src="js/carrosel.js" type="module"></script>

    <!-- Carrossel -->
    <script src="splide/js/splide.min.js"></script>
</body>

</html>