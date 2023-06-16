
// ================================
// Music Player
// ================================

const DOMElements = {
    audio: '#audio',
    backward: '#backward',
    play_pause: '#play-pause',
    forward: '#forward',
    repeat: '#repeat',
    reload: '#reload',
    volume: '#volume',
    controle_deslizante: '#controle-deslizante',
    music_player: '#music-player',
    tempo_atual: '#tempo-atual',
    tempo_total: '#tempo-total',
}

const saidaDados = function () {
    return {
        audio: document.querySelector(DOMElements.audio),
        backward: document.querySelector(DOMElements.backward),
        play_pause: document.querySelector(DOMElements.play_pause),
        forward: document.querySelector(DOMElements.forward),
        repeat: document.querySelector(DOMElements.repeat),
        reload: document.querySelector(DOMElements.reload),
        volume: document.querySelector(DOMElements.volume),
        controle_deslizante: document.querySelector(DOMElements.controle_deslizante),
        music_player: document.querySelector(DOMElements.music_player),
        tempo_atual: document.querySelector(DOMElements.tempo_atual),
        tempo_total: document.querySelector(DOMElements.tempo_total),
    }
}
let raf = null

function play() {
    saidaDados().audio.play()
}
function pause() {
    saidaDados().audio.pause()
}

// Progresso do input
const showRangeProgress = (rangeInput) => {
    if(rangeInput === saidaDados().controle_deslizante) {
        saidaDados().music_player.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');
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
    let dados = saidaDados()
    dados.tempo_total.textContent = calculateTime(dados.audio.duration);
}

const setSliderMax = () => {
    let dados = saidaDados()
    dados.controle_deslizante.max = Math.floor(dados.audio.duration);
}

function whilePlaying () {
    let dados = saidaDados()
    dados.controle_deslizante.value = Math.floor(dados.audio.currentTime);
    dados.tempo_atual.textContent = calculateTime(dados.controle_deslizante.value);
    dados.music_player.style.setProperty('--seek-before-width', `${dados.controle_deslizante.value / dados.controle_deslizante.max * 100}%`);
    raf = requestAnimationFrame(whilePlaying)
}

// function Play_pause() {
//     const icon = saidaDados().play_pause
//     console.log(icon);
//     if (icon.className == 'fa-solid fa-play') {
//         icon.className = 'fa-solid fa-pause'
//         play()
//     } else {
//         icon.className = 'fa-solid fa-play'
//         pause()
//     }
// }

// function play() {
//     const audio = saidaDados().audio
//     audio.play()
// }
// function pause() {
//     const audio = saidaDados().audio
//     audio.pause()
// }

// muteIconContainer.addEventListener('click', () => {
//     if(muteState === 'unmute') {
//         muteState = 'mute';
//     } else {
//         muteState = 'unmute';
//     }
// });





// // Funcionalidade do Player
