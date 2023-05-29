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
    <link rel="stylesheet" href="css/spotify.css">
    
    <!-- Scripts do site -->
    <script src="javascript/darkmode.js"></script>
    <script src="javascript/navbar.js"></script>
    <script src="javascript/spotify.js"></script>

    <!-- AOS - Animation in scrool -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

    <!-- SplideJs -->
    <link rel="stylesheet" href="splide/css/splide.min.css">
    <script src="splide/js/splide.min.js"></script>

    <!-- Spotify -->
    <script src="https://open.spotify.com/embed-podcast/iframe-api/v1" async></script>
    
</head>
<body class="fade">
    <div class="container-music-player ocult-player">
        <button onclick="musicPlayer()">Sair</button>
        
        <div class="music-player">
            
        </div>
    </div>

    <?php 
        include('database/db.php');
        include('navbar.php');
        include('php/form.php');
        include('php/consultar_user.php');  // Consultar usuários no banco
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
                    </div>
                </div>
                
                <div class="padding-box-title" data-aos="fade-right">
                    <div class="box-title3">
                        <h3><span>“Uma viagem aos tempos da brilhantina”</span></h3>
                    </div>
                </div>
                
                <div class="padding-box-title" data-aos="fade-right">
                    <a href="sobre.php" class="btn-home"><button type="button">Sobre o musical</button></a>
                </div>    
            </div>
        </section>

        <section class="section-par section2">

            
            <div class="retro-line flex-collumn" data-aos="fade">
                <div class="padding-box-title right-bar" data-aos="fade-down">
                    <div class="box-title2 border-box">
                        <h2>Conheça as música que refletem os anos <span class="sect2-title2 color-title_light">50</span></h2>
                    </div>
                </div>
                

                <div class="padding-box-title" data-aos="fade-right">
                    <div class="carrosel-musica splide" role="group" aria-labelledby="carousel-title">
                        <h2 id="carousel-title">Explorar </h2>
                        <div class="opacity"></div>

                        <div class="splide__track">
                            <ul class="splide__list">
                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:2AVkArcfALVk2X8sfPRzya">
                                    <img src="../docs/imgs/home/musicas/Summer_Nights-Grease.png" alt="">
                                    <p class="nome_musica">Summer Nights</p>
                                    <p class="autor_musica">Grease</p>
                                </div>

                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:1XNE0QfNjdroSdosMIk8F6">
                                    <img src="../docs/imgs/home/musicas/Greased_Lightnin-Grease.png" alt="">
                                    <p class="nome_musica">Greased Lightnin'</p>
                                    <p class="autor_musica">Grease</p>
                                </div>

                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:0LfJkvPNCNEMLpZJgDQiV1">
                                    <img src="../docs/imgs/home/musicas/The_Wonder_of_You-Elvis Presley.png" alt="">
                                    <p class="nome_musica">The Wonder of You</p>
                                    <p class="autor_musica">Elvis Presley</p>
                                </div>

                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:1MUsWVRPLaC7ANKcEiMRCl">
                                    <img src="../docs/imgs/home/musicas/Dont_be_Cruel-Elvis_Presley.png" alt="">
                                    <p class="nome_musica">Don't be Cruel</p>
                                    <p class="autor_musica">Elvis Presley</p>
                                </div>

                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:1TKPfF2fvn6gVLVfp3iG4j">
                                    <img src="../docs/imgs/home/musicas/I_Walk_the_Line-Johnny Cash.png" alt="">
                                    <p class="nome_musica">I Walk The Line</p>
                                    <p class="autor_musica">Johnny Cash</p>
                                </div>
                                
                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:1TrGdXSgiBm8W68D2K1COG">
                                    <img src="../docs/imgs/home/musicas/Cross_Road_Blues-Robert_Johnson.png" alt="">
                                    <p class="nome_musica">Cross Road Blues</p>
                                    <p class="autor_musica">Robert Johnson</p>
                                </div>

                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="spotify:track:0xpQWNukc7m4arb007HOH3">
                                    <img src="../docs/imgs/home/musicas/Backwater_Blues-Bill_Broonzy.png" alt="">
                                    <p class="nome_musica">Backwater Blues</p>
                                    <p class="autor_musica">Bill Broonzy</p>
                                </div>
                                <div class="splide__slide track" onclick="musicPlayer()" data-spotify-id="">
                                    <img src="../docs/imgs/home/musicas/Tutti_Frutti-Little-Richard.png" alt="">
                                    <p class="nome_musica">Tutti Frutti</p>
                                    <p class="autor_musica">Little Richard</p>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="padding-box-title" data-aos="fade-down">
                    <div class="mais-tocadas">
                        <h3>MAIS TOCADAS</h3>
                        <div class="right-bar">
                            <div class="container-itens">
                                <p class="item">1. Summer Nights - Grease</p>
                                <p class="item">2. Don’t be Cruel - Elvis Presley</p>
                                <p class="item">3. I Walk The Line - Johnny Cash</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </section>


        <script type="module">
            var carrosel_musica = new Splide('.carrosel-musica', {
                type:   'loop',       // Fica em loop
                height: 'auto',       // Altura do carrosel
                width: '100%',        // Comprimento do carrosel
                fixedWidth: '120px',   // Altura do slide
                gap: '20px',          // Espaçamento entre os slides
                easing: 'ease-out'

            });

            carrosel_musica.mount();
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
</body>
</html>