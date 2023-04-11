function getNumRandom(min, max) {
    min = Math.ceil(min)
    max = Math.floor(max)
    
    return Math.floor(Math.random() * (max - min) + min)
}


function change_background() {
    // Definir a variável
    let div = document.querySelector('div.left')

    // Gerar um número de 1 a 4
    num = getNumRandom(1, 5)

    // Setar os atributos
    div.style.background = `no-repeat url(imagens/cadastro/background${num}.png)`
    div.style.backgroundPosition = 'center'
    div.style.backgroundSize = 'cover'
}

addEventListener('onload', change_background())