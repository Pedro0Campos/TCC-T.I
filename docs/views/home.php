<section class="section-impar">
    <img src="imgs/home/sandy-danny-light.png" alt="Sanddy e Danny - Grease" class="sandy-danny" data-aos="fade-up">
    
    <!-- Sombra - usando linear gradient -->
    <div class="backgr-gradient wh100">
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
            <a href="?pagina=sobre"><button class="btn_home" type="button">Sobre o musical</button></a>
        </div>
        
    </div>
</section>

<section class="section-par section2">
    
    <div class="retro-line" data-aos="fade">
        <div class="padding-box-title right-bar" data-aos="fade-down">
            <div class="box-title2 border-box">
                <h2>Conheça as música que refletem os anos <span class="sect2-title2 color-title_light">50</span></h2>
            </div>
        </div>

        <div class="padding-box-title">
            <div class="carrosel-musica splide" role="group" aria-labelledby="carousel-title">
                <h2 id="carousel-title">Explorar </h2>
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/Summer_Nights-Grease.png" alt="">
                            <p class="nome_musica">Summer Nights</p>
                            <p class="autor_musica">Grease</p>
                        </div>

                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/Greased_Lightnin-Grease.png" alt="">
                            <p class="nome_musica">Greased Lightnin'</p>
                            <p class="autor_musica">Grease</p>
                        </div>

                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/The_Wonder_of_You-Elvis Presley.png" alt="">
                            <p class="nome_musica">The Wonder of You</p>
                            <p class="autor_musica">Elvis Presley</p>
                        </div>

                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/Dont_be_Cruel-Elvis_Presley.png" alt="">
                            <p class="nome_musica">Don't be Cruel</p>
                            <p class="autor_musica">Elvis Presley</p>
                        </div>

                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/I_Walk_the_Line-Johnny Cash.png" alt="">
                            <p class="nome_musica">I Walk The Line</p>
                            <p class="autor_musica">Johnny Cash</p>
                        </div>
                        
                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/Cross_Road_Blues-Robert_Johnson.png" alt="">
                            <p class="nome_musica">Cross Road Blues</p>
                            <p class="autor_musica">Robert Johnson</p>
                        </div>

                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/Backwater_Blues-Bill_Broonzy.png" alt="">
                            <p class="nome_musica">Backwater Blues</p>
                            <p class="autor_musica">Bill Broonzy</p>
                        </div>
                        <div class="splide__slide">
                            <img src="../docs/imgs/home/musicas/Sem_nome.png" alt="">
                            <p class="nome_musica">Here's Little Richard</p>
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
                        <p class="item">3. I Walk The pne - Johnny Cash</p>
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