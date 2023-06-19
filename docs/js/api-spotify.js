raf = 10
// ================================
// API SPOTIFY
// ================================

// Interações com a API
const APIController = function() {
    // ids para conexão com a API
    const clientId = 'fd4be54080ee4115861e784b43e2a245';
    const clientSecret = 'f837cdb68e5a449289847f077530f712';

    // Funções privadas
    const _getToken = async () => {  // pegar Token de acesso
        // Solicitação - consulta na API
        // fetch(URL da conexão, Init)
        const result = await fetch('https://accounts.spotify.com/api/token', { 
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `grant_type=client_credentials&client_id=${clientId}&client_secret=${clientSecret}`
        })

        const data = await result.json()
        return data.access_token;
    }

    const _getTracks = async (token, tracksEndPoint) => {  // Pegar uma playlist
        const result = await fetch(`${tracksEndPoint}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        })

        const data = await result.json()
        return data.items
    }

    const _getTrack = async(token, trackEndPoint) => {  // Pegar uma playlist
        const result = await fetch(`${trackEndPoint}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        })

        const data = await result.json()
        return data
    }

    return {
        getToken() {
            return _getToken()
        },
        getTracks(token, tracksEndPoint) {
            return _getTracks(token, tracksEndPoint)
        },
        getTrack(token, tracksEndPoint) {
            return _getTrack(token, tracksEndPoint)
        }
    }

}() // O () faz executar a função sempre que chamar ela


// Interação com a Interface do Usuário
const UIController = (function() {
    const DOMElements = {
        // body: 'body',
        splideList: '#splide__list',
        musicPlayer: '#music-player',
        token: '#hidden_token'
    }

    return {
        // Usar querySelector mais rapidamente fora da função
        saidaDados() {
            return {
                carrosel: document.querySelector(DOMElements.splideList),
                musicPlayer: document.querySelector(DOMElements.musicPlayer),
                // body: document.querySelector(DOMElements.body),
            }
        },

        createSplideListTrack(id, img, title, artist) {
            // id -> href da música
            const carrosel = document.querySelector(DOMElements.splideList)
            const html = `
            <div class="splide__slide track">
                <img id="${id}" src="${img}" alt=""/>
                <p class="nome_musica">${title}</p>
                <p class="autor_musica">${artist}</p>
            </div>
            `

            carrosel.insertAdjacentHTML('beforeend', html)
        },

        createContentMusicPlayer(bigImagem, smallImage, title, artist, index) {
            const listaMusicas = [
                {
                    background: "#224938", 
                    src: "musics/Grease-Summer-Nights.mp3"
                },
                {
                    background: "#224938", 
                    src: "musics/Grease-Greased-Lightnin.mp3"
                },
                {
                    background: "#121212", 
                    src: "musics/Elvis-Presley-Wonder-of-You.mp3"
                },
                {
                    background: "#121212", 
                    src: "musics/Elvis-Presley-Dont-be-Cruel.mp3"
                },
                {
                    background: "#121212", 
                    src: "musics/Johnny-Cash-I-walk-the-Line.mp3"
                },
                {
                    background: "#8e251d", 
                    src: "musics/Robert-Johnson-Cross-road-Blues.mp3"
                },
                {
                    background: "#808467", 
                    src: "musics/BB-Backwater-Blues.mp3"
                },
                {
                    background: "#e8af4c", 
                    src: "musics/Little-Richard-Tutti-Frutti.mp3"
                },
                {
                    background: "#121212", 
                    src: "musics/The-Temptations-My Girl.mp3"
                },
                {
                    background: "#cc4531", 
                    src: "musics/Elvis-Presley-Heartbreak-Hotel.mp3"
                },
                {
                    background: "#411720", 
                    src: "musics/Elvis-Presley-Suspicious-Minds.mp3"
                },
                {
                    background: "#db5697", 
                    src: "musics/Celly-Campello-Estupido-Cupido.mp3"
                },
            ]
            const musica = listaMusicas[index]
            
            const musicPlayer = this.saidaDados().musicPlayer
            musicPlayer.style.setProperty('background', musica.background)
            // musicPlayer.style.setProperty('--buffered-width', '50%') 
            // musicPlayer.style.setProperty('--seek-before-width', '25%') 

            const html = `
            <div class="close-box" onclick="{closeMusicPlayer(), pause()}">
                <div class="leftright"></div>
                <div class="rightleft"></div>
                <label class="close">close</label>
            </div>
            
            <div class="music-details">
                <div class="container">
                    <img id="music-image" class="music-image" src="${bigImagem}">
                    <p class="music-name">${title}</p>
                    <p class="music-autor">${artist}</p>
                </div>
            </div>

            <div class="option-bar flexCenterVH">
                <div class="lbox-music">
                    <img class="music-image" src="${smallImage}">
                </div>

                <div class="barra-tempo flexCenterVH">
                    <div class="icons">
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
                        <audio id="audio" src="${musica.src}" preload="metadata" autoplay loop></audio>
                        <input id="controle-deslizante" type="range" max="100" value="0">
                        <span id="tempo-atual">0:00</span>
                        <span id="tempo-total">0:00</span>
                    </div>
                </div>
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
            </div>
            `
            musicPlayer.innerHTML = html


            // PLAYER EVENTS ==============================
            const audio = document.querySelector("#audio")
            const backward = document.querySelector("#backward")
            const play_pause = document.querySelector("#play-pause")
            const forward = document.querySelector("#forward")
            const repeat = document.querySelector("#repeat")
            const reload = document.querySelector("#reload")
            const volume = document.querySelector("#volume")
            const controle_deslizante = document.querySelector("#controle-deslizante")
            const tempo_atual = document.querySelector("#tempo-atual")
            const tempo_total = document.querySelector("#tempo-total")
            let playState = 'play'
            
            play_pause.addEventListener('click', () => {
                if (play_pause.className == 'fa-solid fa-play') {
                    play_pause.className = 'fa-solid fa-pause'
                    requestAnimationFrame(whilePlaying)
                    playState = 'pause'
                    play()
                } else {
                    play_pause.className = 'fa-solid fa-play'
                    cancelAnimationFrame(raf)
                    playState = 'play'
                    pause()
                }
            })

            controle_deslizante.addEventListener('input', (e) => {
                showRangeProgress(e.target)
            })
            

            if (audio.readyState > 0) {
                displayDuration();
                setSliderMax();
            } else {
                audio.addEventListener('loadedmetadata', () => {
                    displayDuration();
                    setSliderMax();
                })
            }

            controle_deslizante.addEventListener('input', () => {
                tempo_atual.textContent = calculateTime(controle_deslizante.value);
                if(!audio.paused) {
                    cancelAnimationFrame(raf);
                }
            });

            controle_deslizante.addEventListener('change', () => {
                audio.currentTime = controle_deslizante.value;
                requestAnimationFrame(whilePlaying);
                // if(!audio.paused) {
                // }
            });

            audio.addEventListener('progress', whilePlaying)

            // volumeSlider.addEventListener('input', (e) => {
            //     const value = e.target.value;

            //     outputContainer.textContent = value;
            //     audio.volume = value / 100;
            // });

            console.log(bigImagem, smallImage);
            if('mediaSession' in navigator) {
                navigator.mediaSession.metadata = new MediaMetadata({
                    title: title,
                    artist: artist,
                    artwork: [
                        { src: smallImage, sizes: '300x300', type: 'image/png' },
                        { src: bigImagem, sizes: '640x640', type: 'image/png' },
                    ]
                });
                navigator.mediaSession.setActionHandler('play', () => {
                    if(playState === 'play') {
                        audio.play();
                        requestAnimationFrame(whilePlaying);
                        playState = 'pause';
                    } else {
                        audio.pause();
                        cancelAnimationFrame(raf);
                        playState = 'play';
                    }
                });
                navigator.mediaSession.setActionHandler('pause', () => {
                    if(playState === 'play') {
                        audio.play();
                        requestAnimationFrame(whilePlaying);
                        playState = 'pause';
                    } else {
                        audio.pause();
                        cancelAnimationFrame(raf);
                        playState = 'play';
                    }
                });
                navigator.mediaSession.setActionHandler('seekbackward', (details) => {
                    audio.currentTime = audio.currentTime - (details.seekOffset || 10);
                });
                navigator.mediaSession.setActionHandler('seekforward', (details) => {
                    audio.currentTime = audio.currentTime + (details.seekOffset || 10);
                });
                navigator.mediaSession.setActionHandler('seekto', (details) => {
                    if (details.fastSeek && 'fastSeek' in audio) {
                      audio.fastSeek(details.seekTime);
                      return;
                    }
                    audio.currentTime = details.seekTime;
                });
                navigator.mediaSession.setActionHandler('stop', () => {
                    audio.currentTime = 0;
                    controle_deslizante.value = 0;
                    musicPlayer.style.setProperty('--seek-before-width', '0%');
                    tempo_atual.textContent = '0:00';
                    if(playState === 'pause') {
                        cancelAnimationFrame(raf);
                        playState = 'play';
                    }
                });
            }
        },

        storeToken(value) {
            document.querySelector(DOMElements.token).value = value
        },

        getStoredToken() {
            return {
                token: document.querySelector(DOMElements.token).value
            }
        }
        
    }
})()


const APPController = (function(UICtrl, APICtrl) {
    const saidaDados = UICtrl.saidaDados()
    
    // Exibir lista de músicas no carrosel
    const loadPlaylist = async () => {
        const token = await APICtrl.getToken()
        UIController.storeToken(token)
        const tracksEndPoint = 'https://api.spotify.com/v1/playlists/6mTECqYM6NmLD3RRUVbuuj/tracks'

        const tracks = await APICtrl.getTracks(token, tracksEndPoint)

        // Adicionar itens no carrosel
        UICtrl.saidaDados().carrosel.innerHTML = ''
        tracks.forEach((value, index) => {
            UICtrl.createSplideListTrack(
                // index, image, title, artist
                index,
                value.track.album.images[0].url,
                value.track.name,
                value.track.artists[0].name,
            )
        })

        // Criar o carrosel
        const carrosel_musica = new Splide('.carrosel-musica', {
            type: 'loop', // Fica em loop
            height: 'auto', // Altura do carrosel
            width: '100%', // Comprimento do carrosel
            fixedWidth: '120px', // Altura do slide
            fixedHeight: '190px',
            gap: '20px', // Espaçamento entre os slides
            easing: 'ease-out'
        })

        carrosel_musica.mount();

        // Abrir o MusicPLayer ao clicar nos elementos
        saidaDados.carrosel.addEventListener('click', closeMusicPlayer) 
        
        // Criar conteudo do MusicPlayer
        saidaDados.carrosel.addEventListener('click', async (e) => {
            const index = e.target.id
            const track = tracks[index].track

            UICtrl.createContentMusicPlayer(
                // bigImagem, smallImage, title, autor, index
                track.album.images[0].url,
                track.album.images[1].url,
                track.name,
                track.artists[0].name,
                index
            )
        })
    }
    
       
    return {
        init() {
            loadPlaylist()
        },
    }

})(UIController, APIController)

APPController.init()
