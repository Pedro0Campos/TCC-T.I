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
    }
}

function Play_pause() {
    const icon = saidaDados().play_pause

    if (icon.className == 'fa-solid fa-play') {
        icon.className = 'fa-solid fa-pause'
        play()
    } else {
        icon.className = 'fa-solid fa-play'
        pause()
    }
}

function play() {
    const audio = saidaDados().audio
    console.log(audio);
    audio.play()
}
function pause() {
    audio.pause()
    // DOMElements.audio
}