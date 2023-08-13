function darkmode() {
    let form = document.querySelector('#form-darkmode')
    let checkbox = document.querySelector('#checkbox')
    if (form && checkbox) {
        checkbox.addEventListener('change', () => {
            form.submit()
        })
        // form.submit()
    }
    // checkbox.addEventListener('change', () => {console.log('a');})

    // let itens = [document.querySelector('.sun'),
    //              document.querySelector('#cloud1'),
    //              document.querySelector('#cloud2'),
    //              document.querySelector('.moon'),
    //              document.querySelector('#star1'),
    //              document.querySelector('#star2'),
    //              document.querySelector('#star3')]

    // itens.forEach(element => {
    //     element.classList.toggle('desativado')
    // })

    const html = document.querySelector('html')
    // html.classList.toggle('darkmode')

    const sandy_danny = document.querySelector('.sandy-danny')
    if (sandy_danny != null) {
        if (html.classList == 'darkmode') {
            sandy_danny.src = 'imgs/home/sandy-danny-dark.png'
        } else {
            sandy_danny.src = 'imgs/home/sandy-danny-light.png'
        }
    }
}

darkmode()