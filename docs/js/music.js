
// LISTA DE MÚSICAS
// ================================
function getTracks(type='musics') {
    let listaMusicas = [
        {
            "nome": "Summer Nights - From “Grease”",
            "artista": "John Travolta",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b273b68df485f3304211904548a8",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e02b68df485f3304211904548a8",
            "background": "#224938",
            "src": "musics/Grease-Summer-Nights.mp3"
        },
        {
            "nome": "Greased Lightnin' - From “Grease”",
            "artista": "John Travolta",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b273b68df485f3304211904548a8",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e02b68df485f3304211904548a8",
            "background": "#224938",
            "src": "musics/Grease-Greased-Lightnin.mp3"
        },
        {
            "nome": "The Wonder of You",
            "artista": "Elvis Presley",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b2738194c9102e2703a6620d3c95",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e028194c9102e2703a6620d3c95",
            "background": "#121212",
            "src": "musics/Elvis-Presley-Wonder-of-You.mp3"
        },
        {
            "nome": "Don't Be Cruel",
            "artista": "Elvis Presley",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b27352cbfb62c42adc19d5637843",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e0252cbfb62c42adc19d5637843",
            "background": "#121212",
            "src": "musics/Elvis-Presley-Dont-be-Cruel.mp3"
        },
        {
            "nome": "I Walk the Line",
            "artista": "Johnny Cash",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b273dae15486c855937fffee71d4",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e02dae15486c855937fffee71d4",
            "background": "#121212",
            "src": "musics/Johnny-Cash-I-walk-the-Line.mp3"
        },
        {
            "nome": "Cross Road Blues",
            "artista": "Robert Johnson",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b27312549da864353c084cf0faa6",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e0212549da864353c084cf0faa6",
            "background": "#8e251d",
            "src": "musics/Robert-Johnson-Cross-road-Blues.mp3"
        },
        {
            "nome": "Backwater Blues",
            "artista": "Big Bill Broonzy",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b2734c3ac2e9cfd3098f12902728",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e024c3ac2e9cfd3098f12902728",
            "background": "#808467",
            "src": "musics/BB-Backwater-Blues.mp3"
        },
        {
            "nome": "Tutti Frutti",
            "artista": "Little Richard",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b2738a22827b01e5d68d3736d58b",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e028a22827b01e5d68d3736d58b",
            "background": "#e8af4c",
            "src": "musics/Little-Richard-Tutti-Frutti.mp3"
        },
        {
            "nome": "My Girl",
            "artista": "The Temptations",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b2731a5b6271ae1c8497df20916e",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e021a5b6271ae1c8497df20916e",
            "background": "#121212",
            "src": "musics/The-Temptations-My Girl.mp3"
        },
        {
            "nome": "Heartbreak Hotel",
            "artista": "Elvis Presley",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b27320ee3e86e17f17239bef1f76",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e0220ee3e86e17f17239bef1f76",
            "background": "#cc4531",
            "src": "musics/Elvis-Presley-Heartbreak-Hotel.mp3"
        },
        {
            "nome": "Suspicious Minds",
            "artista": "Elvis Presley",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b273fdc0aa7765f3197ac9179ec7",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e02fdc0aa7765f3197ac9179ec7",
            "background": "#411720",
            "src": "musics/Elvis-Presley-Suspicious-Minds.mp3"
        },
        {
            "nome": "Estúpido Cupido",
            "artista": "Celly Campello",
            "largeImage": "https://i.scdn.co/image/ab67616d0000b273a8c4aa43fde3c0e97cd0dd35",
            "smallImage": "https://i.scdn.co/image/ab67616d00001e02a8c4aa43fde3c0e97cd0dd35",
            "background": "#db5697",
            "src": "musics/Celly-Campello-Estupido-Cupido.mp3"
        },
        {
            "nome": "Banho de Lua",
            "artista": "Celly Campello",
            "largeImage": "musics/imgs/banho-de-lua.png",
            "smallImage": "musics/imgs/banho-de-lua.png",
            "background": "#e6cd5a",
            "src": "musics/Banho De Lua (Tintarella Di Luna).mp3"
        },
        {
            "nome": "Garota de Ipanema",
            "artista": "Tom Jobim",
            "largeImage": "musics/imgs/garota-de-ipanema.png",
            "smallImage": "musics/imgs/garota-de-ipanema.png",
            "background": "#e6cd5a",
            "src": "musics/Garota De Ipanema.mp3"
        },
        {
            "nome": "Can't Stop Lovin' You",
            "artista": "Ray Charles",
            "largeImage": "musics/imgs/cant-stop.jpg",
            "smallImage": "musics/imgs/cant-stop.jpg",
            "background": "#ca2068",
            "src": "musics/cant-sop.mp4"
        },
        {
            "nome": "Chove Chuva",
            "artista": "Jorge Ben",
            "largeImage": "musics/imgs/chove-chuva.jpg",
            "smallImage": "musics/imgs/chove-chuva.jpg",
            "background": "#cba98c",
            "src": "musics/chove-chuva.mp3"
        }
    ]

    let playlists = [
        // Nacionais
        [
            listaMusicas[11],
             listaMusicas[12], 
             listaMusicas[13],
             listaMusicas[15]],

        // Elvis à Johnny Cash
        [
            listaMusicas[2], 
            listaMusicas[3],
            listaMusicas[9],
            listaMusicas[10],
        ],

        // Grease
        [
            listaMusicas[0],
            listaMusicas[1],
        ],
    ]

    if (type === 'musics') {
        return listaMusicas
    } else if (type === 'playlists') {
        return playlists
    }
}

// ================================
// Music Player
// ================================

function musicPlayer () {
    // VARs 
    // ================================

    let body = document.querySelector('body')

    // Container
    let music_player = document.querySelector("#music-player")

    // Icons
    let icons = {
        backward: document.querySelector("#backward"),
        play_pause: document.querySelector("#play-pause"),
        forward: document.querySelector("#forward"),
        shuffle: document.querySelector("#shuffle"),
        repeat: document.querySelector("#repeat"),
        close: document.querySelector("#close")
    }

    // Inputs - output
    let controle_deslizante = document.querySelector("#controle-deslizante")
    let tempo_atual = document.querySelector("#tempo-atual")
    let tempo_total = document.querySelector("#tempo-total")

    // Divs para chamar músicas na sessão 2
    let splide_musicas = document.querySelector('#splide__list_MUSICAS')
    let splide_playlist = document.querySelector('#splide__list_PLAYLIST')
    let mais_tocadas = document.querySelector('#itens-mais-tocadas')
    
    // Musica
    let audio = document.querySelector("#audio")
    let musicas = getTracks();

    // Estágios
    let playState = 'pause'
    let loopState = false
    let countLoop = 0
    let raf = null
    let musica = musicas[0]
    let tipoReproducao = 'musicas'
    let playlist = 0
    // ================================



    // EVENTS - FUNCTIONS
    // ================================

    // Open / Close Music Player
    // --------------------------------
    icons.close.addEventListener('click', openCloseMusicPlayer)
    function openCloseMusicPlayer() {
        let lista_classes = Array.prototype.slice.call(music_player.classList)

        if (lista_classes.includes('ocult-container')) {
            // Exibir o music player
            music_player.classList.remove('ocult-container')
            body.classList.add('disable-scroll')
        } else {
            // Ocultar o music player
            music_player.classList.add('ocult-container')
            body.classList.remove('disable-scroll')
            audio.pause()
        }
    }
    

    // Carrossel de músicas
    splide_musicas.addEventListener('click', (e) => {
        var id = e.target.id

        if (id.split('slide') == '') {
            var id = e.target.offsetParent.id
        }
        var index = Number(id.split('slide')[1]) - 1
        
        musicas = getTracks()
        tipoReproducao = 'musicas'

        musica = musicas[index]

        if (audio.src.split('docs/')[1] == musica.src) {
            updateContent(musica, mesmaMusica=true)
        } else {
            updateContent(musica)
        }
        openCloseMusicPlayer()

    })

    // Carrossel de playlists
    splide_playlist.addEventListener('click', (e) => {
        let id = e.target.id.split('-')[1]
        if (!isNaN(id)) {
            musicas = getTracks('playlists')[id]
            tipoReproducao = 'playlists'
            playlist = id

            musica = musicas[0]
            updateContent(musica)
            openCloseMusicPlayer()
        }
    })

    // Mais
    mais_tocadas.addEventListener('click', (e) => {
        let id = e.target.id
        if (!isNaN(id)) {
            musicas = getTracks()
            tipoReproducao = 'musicas'

            musica = musicas[id]
            updateContent(musica)
            openCloseMusicPlayer()
        }
    })


    // --------------------------------

    // Atualizar conteúdo
    function updateContent(musica, mesmaMusica=false) {
        document.querySelector('#music-name').innerHTML = musica.nome 
        document.querySelector('#music-artist').innerHTML = musica.artista
        document.querySelector('#music-image-large').src = musica.largeImage
        document.querySelector('#music-image-small').src = musica.smallImage
        
        let tempoAtual = 0
        if (mesmaMusica) {
            tempoAtual = audio.currentTime
        }
        music_player.style.background = musica.background 
        audio.src = musica.src
        audio.play()
        audio.currentTime = tempoAtual

        if ('mediaSession' in navigator) {
            navigator.mediaSession.metadata = new MediaMetadata({
                title: musica.nome,
                artist: musica.artista,
                artwork: [
                    { src: musica.smallImage, sizes: '300x300', type: 'image/png' },
                    { src: musica.largeImage, sizes: '640x640', type: 'image/png' },
                ]
            });
        }
    }


    // Icons
    // --------------------------------

    // Ativar icon
    function ativar(icon) {
        if (icon.className.includes('active')) {
            icon.classList.remove('active')
            return false
        } else {
            icon.classList.add('active')
            return true 
        }
    }

    // play / pause
    icons.play_pause.addEventListener('click', playPause)
    function playPause() {
        if (playState == 'pause') {
            audio.play()
        } else {
            audio.pause()
        }
    }


    // Backward
    icons.backward.addEventListener('click', backward)
    function backward() {
        // O objeto "musica" não é indêntico ao objeto dentro do array "musicas" após embaralhar o array.
        // Pelo forEach, encontro os objetos iguais e substituo o objeto "musica" pelo "e"
        // Após isso, o indexOf vai achar o elemento
        musicas.forEach(e => {
            if (e.src == musica.src) {
                musica = e
            }
        })

        // Index da música anterior
        let index = musicas.indexOf(musica) - 1

        if (index < 0) { 
            // O index da musica anterior é -1
            // e pela lógica, vai dar um clico no loop de músicas (indo para o final)
            index = musicas.length - 1
        }

        musica = musicas[index]
        updateContent(musica)
    }


    // Forward
    icons.forward.addEventListener('click', forward)
    function forward() {
        // O objeto "musica" não é indêntico ao objeto dentro do array "musicas" após embaralhar o array.
        // Pelo forEach, encontro os objetos iguais e substituo o objeto "musica" pelo "e"
        // Após isso, o indexOf vai achar o elemento
        musicas.forEach(e => {
            if (e.src == musica.src) {
                musica = e
            }
        })
        
        // Index da próxima música
        let index = musicas.indexOf(musica) + 1

        if (index >= musicas.length) {  
            // O index da próxima música está fora do limite do array, 
            // e pela lógica, vai dar um clico no loop de músicas (indo para o começo)
            index = 0
        }

        musica = musicas[index]
        updateContent(musica)
        countLoop = 0
    }
    
    
    // Shuffle
    icons.shuffle.addEventListener('click', shuffle)
    function shuffle() {
        let resposta = ativar(icons.shuffle)
        if (resposta) {
            var m = musicas.length, t, i;
        
            while (m) {
              i = Math.floor(Math.random() * m--);
          
              t = musicas[m];
              musicas[m] = musicas[i];
              musicas[i] = t;
            }

        } else {
            if (tipoReproducao === 'musicas') {
                musicas = getTracks()
            } else if (tipoReproducao === 'playlists'){
                musicas = getTracks('playlists')[playlist]
            }
        } 
    }
    
    
    // Repeat
    icons.repeat.addEventListener('click', repeat)
    function repeat() {
        let resposta = ativar(icons.repeat)
        
        if (resposta) {
            // audio.setAttribute('loop', 'true')
            loopState = true
        } else {
            // audio.removeAttribute('loop')
            loopState = false
        }
    } 
        
    // Audio
    audio.addEventListener('progress', whilePlaying)
    audio.addEventListener('play', () => {
        icons.play_pause.className = 'fa-solid fa-pause'
        requestAnimationFrame(whilePlaying)
        playState = 'play'
    })
    audio.addEventListener('pause', () => {
        icons.play_pause.className = 'fa-solid fa-play'
        cancelAnimationFrame(raf)
        playState = 'pause'
    })
    audio.addEventListener('ended', () => {
        if (loopState == false) {
            forward()
        } else {
            countLoop++
            if (countLoop > 1) {
                forward()
            } else {
                audio.play()
            }
        }
    })
    
    
    // Progresso do input
    function showRangeProgress(rangeInput) {
        let value = rangeInput.value / rangeInput.max * 100 + '%'
        music_player.style.setProperty('--seek-before-width', value);
    }

    // Controle deslizante - tempo da musica
    controle_deslizante.addEventListener('input', (e) => {
        // -> mostrar o tempo da música ao mover o input
        showRangeProgress(e.target)
        tempo_atual.textContent = calculateTime(controle_deslizante.value);
        cancelAnimationFrame(raf);
    })
    controle_deslizante.addEventListener('change', () => {
        // -> definir o tempo da música ao soltar o input
        audio.currentTime = controle_deslizante.value;
        cancelAnimationFrame(raf);
    })


    // --------------------------------
    if (audio.readyState > 0) {
        displayDuration();
        setSliderMax();
    } else {
        audio.addEventListener('loadedmetadata', () => {
            displayDuration();
            setSliderMax();
        })
    }

    function calculateTime (secs) {
        const minutes = Math.floor(secs / 60);
        const seconds = Math.floor(secs % 60);
        const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
        return `${minutes}:${returnedSeconds}`;
    }

    function displayDuration () {
        tempo_total.textContent = calculateTime(audio.duration);
    }

    function setSliderMax () {
        controle_deslizante.max = Math.floor(audio.duration);
    }


    function whilePlaying () {
        controle_deslizante.value = Math.floor(audio.currentTime);
        tempo_atual.textContent = calculateTime(controle_deslizante.value);
        music_player.style.setProperty('--seek-before-width', `${controle_deslizante.value / controle_deslizante.max * 100}%`);
        raf = requestAnimationFrame(whilePlaying)
    }

    // Media Session
    // --------------------------------
    if('mediaSession' in navigator) {
        navigator.mediaSession.metadata = new MediaMetadata({
            title: musica.nome,
            artist: musica.artista,
            artwork: [
                { src: musica.smallImage, sizes: '300x300', type: 'image/png' },
                { src: musica.largeImage, sizes: '640x640', type: 'image/png' },
            ]
        });
        navigator.mediaSession.setActionHandler('play', ()=> {audio.play()});

        navigator.mediaSession.setActionHandler('pause', ()=> {audio.pause()});

        navigator.mediaSession.setActionHandler('previoustrack', backward);

        navigator.mediaSession.setActionHandler('nexttrack', forward);

        navigator.mediaSession.setActionHandler('stop', () => {
            audio.currentTime = 0;
            controle_deslizante.value = 0;
            musicPlayer.style.setProperty('--seek-before-width', '0%');
            tempo_atual.textContent = '0:00';
            pause()
        });
    }
    // --------------------------------
    // ================================



    // TECLAS DE ATALHO
    // ================================
    function teclasAtalho(k) {
        k = k.toLowerCase()

        const acceptedKeys = {
            k: function () {
                playPause()
            },
            j: function () {
                backward()
            },
            l: function () {
                forward()
            },
            a: function () {
                shuffle()
            },
            r: function () {
                repeat()
            },
        }

        const funcao = acceptedKeys[k]
        if (funcao) {
            funcao()
        }
    }
    
    document.addEventListener('keydown', k => {
        teclasAtalho(k.key)
    })
    // ================================
}

musicPlayer();