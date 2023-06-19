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
    <div class="music-player ocult-player" id="music-player">
    <!-- <div class="music-player" id="music-player"> -->
        <div class="close-box" onclick="{openCloseMusicPlayer(), pause()}">
            <div class="leftright"></div>
            <div class="rightleft"></div>
            <label class="close">close</label>
        </div>
        
        <div class="music-details">
            <div class="container">
                <img id="music-image" class="music-image" src="">
                <p class="music-name">${title}</p>
                <p class="music-autor">${artist}</p>
            </div>
        </div>

        <div class="option-bar flexCenterVH">
            <div class="lbox-music">
                <img class="music-image" src="">
            </div>

            <div class="barra-tempo flexCenterVH">
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
                        <i id="backward" class="fa-solid fa-backward-fast backward"></i>
                        <i id="play-pause" class="fa-solid fa-pause"></i>
                        <i id="forward" class="fa-solid fa-forward-fast"></i>  
                    </div>

                    <div class="right">
                        <i id="repeat" class="fa-solid fa-repeat"></i>
                        <i id="reload" class="fa-solid fa-rotate-left"></i>
                        <i id="volume" class="fa-solid fa-volume-high"></i>
                    </div>
                </div>

                <div class="barra">
                    <audio id="audio" src="" preload="metadata" autoplay loop></audio>
                    <input id="controle-deslizante" type="range" max="100" value="0">
                    <span id="tempo-atual">0:00</span>
                    <span id="tempo-total">0:00</span>
                </div>
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
                        <ul class="splide__list" id="splide__list_MUSICAS">
                            
                            <div class="splide__slide track" onclick="closeMusicPlayer()" data-spotify-id="spotify:track:2AVkArcfALVk2X8sfPRzya">
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
    <!-- <script src="js/api-spotify.js" type="module"></script> -->
    <script src="js/music.js"></script>
    <script type="module">
                
        // LISTA DE MÚSICAS
        // ================================
        let listaMusicas = [
            {
                "nome": "Summer Nights - From “Grease”",
                "artista": "John Travolta",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b273b68df485f3304211904548a8",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e02b68df485f3304211904548a8",
                "background": "#224938",
                "src": "musics/Grease-Summer-Nights.mp3"
            },
            {
                "nome": "Greased Lightnin' - From “Grease”",
                "artista": "John Travolta",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b273b68df485f3304211904548a8",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e02b68df485f3304211904548a8",
                "background": "#224938",
                "src": "musics/Grease-Greased-Lightnin.mp3"
            },
            {
                "nome": "The Wonder of You",
                "artista": "Elvis Presley",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b2738194c9102e2703a6620d3c95",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e028194c9102e2703a6620d3c95",
                "background": "#121212",
                "src": "musics/Elvis-Presley-Wonder-of-You.mp3"
            },
            {
                "nome": "Don't Be Cruel",
                "artista": "Elvis Presley",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b27352cbfb62c42adc19d5637843",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e0252cbfb62c42adc19d5637843",
                "background": "#121212",
                "src": "musics/Elvis-Presley-Dont-be-Cruel.mp3"
            },
            {
                "nome": "I Walk the Line",
                "artista": "Johnny Cash",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b273dae15486c855937fffee71d4",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e02dae15486c855937fffee71d4",
                "background": "#121212",
                "src": "musics/Johnny-Cash-I-walk-the-Line.mp3"
            },
            {
                "nome": "Cross Road Blues",
                "artista": "Robert Johnson",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b27312549da864353c084cf0faa6",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e0212549da864353c084cf0faa6",
                "background": "#8e251d",
                "src": "musics/Robert-Johnson-Cross-road-Blues.mp3"
            },
            {
                "nome": "Backwater Blues",
                "artista": "Big Bill Broonzy",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b2734c3ac2e9cfd3098f12902728",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e024c3ac2e9cfd3098f12902728",
                "background": "#808467",
                "src": "musics/BB-Backwater-Blues.mp3"
            },
            {
                "nome": "Tutti Frutti",
                "artista": "Little Richard",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b2738a22827b01e5d68d3736d58b",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e028a22827b01e5d68d3736d58b",
                "background": "#e8af4c",
                "src": "musics/Little-Richard-Tutti-Frutti.mp3"
            },
            {
                "nome": "My Girl",
                "artista": "The Temptations",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b2731a5b6271ae1c8497df20916e",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e021a5b6271ae1c8497df20916e",
                "background": "#121212",
                "src": "musics/The-Temptations-My Girl.mp3"
            },
            {
                "nome": "Heartbreak Hotel",
                "artista": "Elvis Presley",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b27320ee3e86e17f17239bef1f76",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e0220ee3e86e17f17239bef1f76",
                "background": "#cc4531",
                "src": "musics/Elvis-Presley-Heartbreak-Hotel.mp3"
            },
            {
                "nome": "Suspicious Minds",
                "artista": "Elvis Presley",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b273fdc0aa7765f3197ac9179ec7",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e02fdc0aa7765f3197ac9179ec7",
                "background": "#411720",
                "src": "musics/Elvis-Presley-Suspicious-Minds.mp3"
            },
            {
                "nome": "Estúpido Cupido",
                "artista": "Celly Campello",
                "imagem1": "https://i.scdn.co/image/ab67616d0000b273a8c4aa43fde3c0e97cd0dd35",
                "imagem2": "https://i.scdn.co/image/ab67616d00001e02a8c4aa43fde3c0e97cd0dd35",
                "background": "#db5697",
                "src": "musics/Celly-Campello-Estupido-Cupido.mp3"
            }
        ]



        // ================================
        // Carrossel
        // ================================

        // Adicionando os elementos
        // ================================
        let splideList = document.querySelector('#splide__list_MUSICAS')

        // Reset
        splideList.innerHTML = ''

        // Criar itens dos elementos
        listaMusicas.forEach((e, i) => {
            splideList.innerHTML += `
            <div class="splide__slide track">
                <img id="${i}" src="${e.imagem2}" alt="Foto do Album do(a) ${e.artista}"/>
                <p class="nome_musica">${e.nome}</p>
                <p class="autor_musica">${e.artista}</p>
            </div>
            `
        })


        // Criar o carrosel
        // ================================
        var carrosel_musica = new Splide('.carrosel-musica', {
            type: 'loop', // Fica em loop
            height: 'auto', // Altura do carrosel
            width: '100%', // Comprimento do carrosel
            fixedWidth: '120px', // Altura do slide
            gap: '20px', // Espaçamento entre os slides
            easing: 'ease-out'

        });

        carrosel_musica.mount();
    </script>

    <!-- Carrossel -->
    <script src="splide/js/splide.min.js"></script>
    
    <!-- Color Thief -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
</body>

</html>