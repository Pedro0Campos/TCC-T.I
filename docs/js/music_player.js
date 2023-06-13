// ================================
// Music Player
// ================================

const MP_DOMElements = {
    backward: document.querySelector('#backward'),
    play_pause: document.querySelector('#play_pause'),
    forward: document.querySelector('#forward'),
    repeat: document.querySelector('#repeat'),
    reload: document.querySelector('#reload'),
    volume: document.querySelector('#volume'),
}

const play_pause = function(icon) {
    if (icon.classList == 'fa-solid fa-pause') {
        icon.classList = 'fa-solid fa-play'
    } else {
        icon.classList = 'fa-solid fa-pause'
    }
    
}
