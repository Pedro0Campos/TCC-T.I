
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

        change_theme('light')
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
        change_theme('dark')
    }
}

function change_theme(theme) {
    let section1 = document.getElementsByClassName('section1')
    let sect1_border_box = document.getElementsByClassName('sect1-border-box')
    let sect1_title1 = document.getElementsByClassName('sect1-title1')
    let sect1_title_umaViagem = document.getElementsByClassName('sect1-title-umaViagem')
    let sect1_button = document.getElementsByClassName('sect1-button')

    let section2 = document.getElementsByClassName('section2')
    let sect2_title2 = document.getElementsByClassName('sect2-title2')
    

    // Circulo de fundo
    document.getElementById('sect-first').style.backgroundImage = `url('imagens/home/greaser.png'), url('imagens/home/ellipse-${theme}.png')`

    //Section 1
    for (let i=0; i<section1.length; i++)  {
        section1[i].classList = `section1 section1_${theme}`
    }
    // Section 1 border box
    for (let i=0; i<sect1_border_box.length; i++)  {
        sect1_border_box[i].classList = `box-title sect1-border-box border-box_${theme}`
    }
    // Section 1 title 
    for (let i=0; i<sect1_title1.length; i++)  {
        sect1_title1[i].classList = `sect1-title1 backg-title_${theme}`
    }
    // Section 1 title uma viagem
    for (let i=0; i<sect1_title_umaViagem.length; i++)  {
        sect1_title_umaViagem[i].classList = `sect1-title-umaViagem umaViagem_${theme}`
    }
    // Section 1 button
    for (let i=0; i<sect1_button.length; i++)  {
        sect1_button[i].classList = `sect1-button button_${theme}`
    }

    //Section 2
    for (let i=0; i<section2.length; i++)  {
        section2[i].classList = `section2 section2_${theme}`
    }
    //Section 2 title 2
    for (let i=0; i<sect2_title2.length; i++)  {
        sect2_title2[i].classList = `sect2-title2 color-title_${theme}`
    }

    // Animação :D
    animation()
}

function animation() {
    document.getElementById('body').style.animation = 'fadeInAnimation ease 1s'
    
    const interval = setInterval(() => {
        document.getElementById('body').style.animation = ''
        clearInterval(interval)
    }, 1000)
}
