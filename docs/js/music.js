
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
// Music Player
// ================================

// VARs 
// ================================
const music_player = document.querySelector("#music-player")
let audio = document.querySelector("#audio")
const play_pause = document.querySelector("#play-pause")
const backward = document.querySelector("#backward")
const forward = document.querySelector("#forward")
const repeat = document.querySelector("#repeat")
const reload = document.querySelector("#reload")
const volume = document.querySelector("#volume")
const controle_deslizante = document.querySelector("#controle-deslizante")
const tempo_atual = document.querySelector("#tempo-atual")
const tempo_total = document.querySelector("#tempo-total")
const splideList = document.querySelector('#splide__list_MUSICAS')
let playState = 'play'
let raf = null


// EVENTS
// ================================
splideList.addEventListener('click', (e) => {
    openCloseMusicPlayer()
})


// Progresso do input
const showRangeProgress = (rangeInput) => {
    if(rangeInput === controle_deslizante) {
        music_player.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    }
}


// Funcionalidade do player
const calculateTime = (secs) => {
    const minutes = Math.floor(secs / 60);
    const seconds = Math.floor(secs % 60);
    const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
    return `${minutes}:${returnedSeconds}`;
}

const displayDuration = () => {
    tempo_total.textContent = calculateTime(audio.duration);
}

const setSliderMax = () => {
    controle_deslizante.max = Math.floor(audio.duration);
}

function whilePlaying () {
    controle_deslizante.value = Math.floor(audio.currentTime);
    tempo_atual.textContent = calculateTime(controle_deslizante.value);
    music_player.style.setProperty('--seek-before-width', `${controle_deslizante.value / controle_deslizante.max * 100}%`);
    raf = requestAnimationFrame(whilePlaying)
}

// function Play_pause() {
//     const icon = play_pause
//     console.log(icon);
//     if (icon.className == 'fa-solid fa-play') {
//         icon.className = 'fa-solid fa-pause'
//         play()
//     } else {
//         icon.className = 'fa-solid fa-play'
//         pause()
//     }
// }

function play() {
    const audio = audio
    audio.play()
}
function pause() {
    const audio = audio
    audio.pause()
}

// muteIconContainer.addEventListener('click', () => {
//     if(muteState === 'unmute') {
//         muteState = 'mute';
//     } else {
//         muteState = 'unmute';
//     }
// });


function openCloseMusicPlayer() {
    document.querySelector('.music-player').classList.toggle('ocult-player')
    document.querySelector('body').classList.toggle('disable-scroll')
}