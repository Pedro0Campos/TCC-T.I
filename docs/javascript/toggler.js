function ocult_elements() {
    let checkbox = document.querySelector('#checkbox')
    let stars = document.getElementsByClassName('star')
    let clouds = document.getElementsByClassName('cloud')
    let moon = document.getElementsByClassName('moon')
    let sun = document.getElementsByClassName('sun')
    stars = Array.prototype.slice.call(stars)
    clouds = Array.prototype.slice.call(clouds)

    if (checkbox.checked) { // MODO CLARO
        // Desabilitar decorações do toggler - escuro
        stars[0].style.transform = 'translate(-220%, 50%) scale(0) rotate(180deg)'
        stars[1].style.transform = 'translate(-100%, 280%) scale(0) rotate(180deg)'
        stars[2].style.transform = 'translate(-220%, 280%) scale(0) rotate(180deg)'
        moon[0].style.transform = 'rotate(210deg) translate(-5%, -10%) scale(0)'

        // habilitar decorações do toggler - claro
        sun[0].style.transform = 'translate(-190%, 16%) scale(1)'
        clouds[0].style.transform = 'translate(-170%, 70%) scale(1)'
        clouds[1].style.transform = 'translate(-240%, 90%) scale(1)'

    } else { // MODO ESCURO
        // habilitar decorações do toggler - escuro
        stars[0].style.transform = 'translate(-220%, 50%) scale(1) rotate(0deg)'
        stars[1].style.transform = 'translate(-100%, 280%) scale(1) rotate(0deg)'
        stars[2].style.transform = 'translate(-220%, 280%) scale(1) rotate(0deg)'
        moon[0].style.transform =     'rotate(210deg) translate(-5%, -10%)'

        // desabilitar decorações do toggler - claro
        sun[0].style.transform = 'translate(-190%, 16%) scale(0) '
        clouds[0].style.transform = 'translate(-170%, 70%) scale(0)'
        clouds[1].style.transform = 'translate(-240%, 90%) scale(0)'
    }

    change_theme()
}

function change_theme() {
    const html = document.querySelector('html')
    const sandy_danny = document.querySelector('.sandy-danny')
    
    html.classList.toggle('darkmode')

    if (html.classList == 'darkmode') {
        sandy_danny.src = 'imgs/home/sandy-danny-dark.png'
    } else {
        sandy_danny.src = 'imgs/home/sandy-danny-light.png'
    }

    // https://codepen.io/atulraj89/pen/vYNZEGe
}


