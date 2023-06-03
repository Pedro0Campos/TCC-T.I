function ocult_elements(checkbox) {
    let itens = [document.querySelector('.sun'),
                 document.querySelector('#cloud1'),
                 document.querySelector('#cloud2'),
                 document.querySelector('.moon'),
                 document.querySelector('#star1'),
                 document.querySelector('#star2'),
                 document.querySelector('#star3')]

    itens.forEach(element => {
        element.classList.toggle('desativado')
    })

    change_theme()
}

function change_theme() {
    const html = document.querySelector('html')
    const sandy_danny = document.querySelector('.sandy-danny')
    
    html.classList.toggle('darkmode')
    if (sandy_danny != null) {
        if (html.classList == 'darkmode') {
            sandy_danny.src = 'imgs/home/sandy-danny-dark.png'
        } else {
            sandy_danny.src = 'imgs/home/sandy-danny-light.png'
        }
    }
}