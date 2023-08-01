
// LISTA DE MÚSICAS
// ================================
function getMusics() {
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
            "largeImage": "musics/imgs/banho-de-lua.jpg",
            "smallImage": "musics/imgs/banho-de-lua.jpg",
            "background": "##e6cd5a",
            "src": "musics/Banho De Lua (Tintarella Di Luna).mp3"
        },
        {
            "nome": "Garota de Ipanema",
            "artista": "Tom Jobim",
            "largeImage": "musics/imgs/garota-de-ipanema.jpg",
            "smallImage": "musics/imgs/garota-de-ipanema.jpg",
            "background": "##e6cd5a",
            "src": "musics/Garota De Ipanema.mp3"
        }
    ]

    return listaMusicas
}

// ================================
// Music Player
// ================================

// VARs 
// ================================

// Container
let music_player = document.querySelector("#music-player")

// Icons
let backward = document.querySelector("#backward")
let play_pause = document.querySelector("#play-pause")
let forward_icon = document.querySelector("#forward")
let shuffle = document.querySelector("#shuffle")
let repeat = document.querySelector("#repeat")
let volume = document.querySelector("#volume")

// Inputs - output
let controle_deslizante = document.querySelector("#controle-deslizante")
let tempo_atual = document.querySelector("#tempo-atual")
let tempo_total = document.querySelector("#tempo-total")

// Carrossel e mais tocadas
let splideList = document.querySelector('#splide__list_MUSICAS')
let mais_tocadas = document.querySelector('#itens-mais-tocadas')
// Musica
let audio = document.querySelector("#audio")
let musicas = getMusics();

// Estágios
let playState = 'play'
let loopState = 'false'
let raf = null
let musica = musicas[0]
// ================================



// EVENTS - FUNCTIONS
// ================================

// Open / Close Music Player
// --------------------------------
function openCloseMusicPlayer() {
    document.querySelector('.music-player').classList.toggle('ocult-container')
    document.querySelector('body').classList.toggle('disable-scroll')
    play_pause.className = 'fa-solid fa-pause'
    playState = 'pause'
}

// Clicar em uma música
splideList.addEventListener('click', (e) => {
    var id = e.target.id

    if (id.split('slide') == '') {
        var id = e.target.offsetParent.id
    }
    var index = Number(id.split('slide')[1]) - 1
    
    musica = musicas[index]
    updateContent(musica)
    openCloseMusicPlayer()

})
mais_tocadas.addEventListener('click', (e) => {
    openCloseMusicPlayer()
    musica = musicas[e.target.id]
    updateContent(musica)
})


// --------------------------------

// Atualizar conteúdo
function updateContent(musica) {
    document.querySelector('#music-name').innerHTML = musica.nome 
    document.querySelector('#music-artist').innerHTML = musica.artista
    document.querySelector('#music-image-large').src = musica.largeImage
    document.querySelector('#music-image-small').src = musica.smallImage
    music_player.style.background = musica.background 
    audio.src = musica.src
    play()
}


// Icons
// --------------------------------

// Ativar icon
function ativar(icon) {
    if (icon.className.includes('active')) {
        icon.classList.remove('active')
        
        // Está desativado
        return false
    } else {
        icon.classList.add('active')

        // Está desativado
        return true 
    }
}

// play / pause
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
function play() {
    audio.play()
}
function pause() {
    audio.pause()
}


// Backward
backward.addEventListener('click', () => {
    let index = musicas.indexOf(musica) - 1
    if (index < 0) {
        index = 11
    }

    // Atualizar conteúdo
    musica = musicas[index]
    updateContent(musica)
    play_pause.className = 'fa-solid fa-pause'
})


// Forward
function forward() {
    let index = musicas.indexOf(musica) + 1
    if (index >= musicas.length) {
        index = 0
    }

    // Atualizar conteúdo
    musica = musicas[index]
    updateContent(musica)
    play_pause.className = 'fa-solid fa-pause'
}
forward_icon.addEventListener('click', forward)


// Shuffle
function embaralhar(array) {
    for (let j, x, i = array.length; i; j = Math.floor(Math.random() * i), x = array[--i], array[i] = array[j], array[j] = x);
    return array;
}
shuffle.addEventListener('click', () => {
    let resposta = ativar(shuffle)
    
    if (resposta) {
        embaralhar(musicas)
    } else {
        musicas = getMusics()
    } 
})


// Repeat
repeat.addEventListener('click', () => {
    let resposta = ativar(repeat)
    
    if (resposta) {
        audio.setAttribute('loop', 'true')
        loopState = true
    } else {
        audio.removeAttribute('loop')
        loopState = false
    }
})


// Volume
// estadios_volume = []
// volume.addEventListener('click', () => {
//     console.log(volume);

// })
// --------------------------------


// Audio
audio.addEventListener('progress', whilePlaying)
audio.addEventListener('play', () => {
    play_pause.className = 'fa-solid fa-pause'
    requestAnimationFrame(whilePlaying)
    playState = 'play'
})
audio.addEventListener('pause', () => {
    play_pause.className = 'fa-solid fa-play'
    cancelAnimationFrame(raf)
    playState = 'pause'
})

// Progresso do input
const showRangeProgress = (rangeInput) => {
    let value = rangeInput.value / rangeInput.max * 100 + '%'
    music_player.style.setProperty('--seek-before-width', value);
}

// Controle deslizante - tempo da musica
controle_deslizante.addEventListener('input', (e) => {
    // -> mostrar o tempo da música ao mover o input
    showRangeProgress(e.target)
    tempo_atual.textContent = calculateTime(controle_deslizante.value);
    if(!audio.paused) {
        cancelAnimationFrame(raf);
    }
})
controle_deslizante.addEventListener('change', () => {
    // -> definir o tempo da música ao soltar o input
    audio.currentTime = controle_deslizante.value;
    requestAnimationFrame(whilePlaying);
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

    if (audio.currentTime == audio.duration && loopState == false) {
        forward()
    }
}

// Media Session
// --------------------------------
// if('mediaSession' in navigator) {
//         navigator.mediaSession.metadata = new MediaMetadata({
//                 title: title,
//                 artist: artist,
//                 artwork: [
//                         { src: smallImage, sizes: '300x300', type: 'image/png' },
//             { src: bigImagem, sizes: '640x640', type: 'image/png' },
//         ]
//     });
//     navigator.mediaSession.setActionHandler('play', () => {
//             if(playState === 'play') {
//                     audio.play();
//                     requestAnimationFrame(whilePlaying);
//                     playState = 'pause';
//                 } else {
//                         audio.pause();
//                         cancelAnimationFrame(raf);
//                         playState = 'play';
//                     }
//                 });
//                 navigator.mediaSession.setActionHandler('pause', () => {
//                         if(playState === 'play') {
//                                 audio.play();
//                                 requestAnimationFrame(whilePlaying);
//                                 playState = 'pause';
//                             } else {
//                                     audio.pause();
//                                     cancelAnimationFrame(raf);
//                                     playState = 'play';
//                                 }
//                             });
//                             navigator.mediaSession.setActionHandler('seekbackward', (details) => {
//         audio.currentTime = audio.currentTime - (details.seekOffset || 10);
//     });
//     navigator.mediaSession.setActionHandler('seekforward', (details) => {
//             audio.currentTime = audio.currentTime + (details.seekOffset || 10);
//         });
//         navigator.mediaSession.setActionHandler('seekto', (details) => {
//                 if (details.fastSeek && 'fastSeek' in audio) {
//                       audio.fastSeek(details.seekTime);
//                       return;
//                     }
//                     audio.currentTime = details.seekTime;
//                 });
//                 navigator.mediaSession.setActionHandler('stop', () => {
//                         audio.currentTime = 0;
//                         controle_deslizante.value = 0;
//                         musicPlayer.style.setProperty('--seek-before-width', '0%');
//                         tempo_atual.textContent = '0:00';
//                         if(playState === 'pause') {
//                                 cancelAnimationFrame(raf);
//                                 playState = 'play';
//                             }
//                         });
//                     }
// --------------------------------
// ================================




// TECLAS DE ATALHO
// ================================
document.addEventListener('keydown', e => {
    // console.log(e);
})
// ================================
