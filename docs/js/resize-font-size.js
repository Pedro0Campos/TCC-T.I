function resizeFontSize () {
    document.getElementById('diminuir-texto').addEventListener('click', diminuir)
    document.getElementById('aumentar-texto').addEventListener('click', aumentar)
    document.getElementById('diminuir-texto-sandwich').addEventListener('click', diminuir)
    document.getElementById('aumentar-texto-sandwich').addEventListener('click', aumentar)
    let html = document.querySelector('html')
    
    function diminuir() {
        let atual = Number(window.getComputedStyle(html).getPropertyValue('font-size').split('px')[0])
        html.style.fontSize = `${atual - 2}px`  
    }
    
    function aumentar () {
        let atual = Number(window.getComputedStyle(html).getPropertyValue('font-size').split('px')[0]) + 2
        if (atual <= 26) { html.style.fontSize = `${atual}px` }
    }
}

resizeFontSize()