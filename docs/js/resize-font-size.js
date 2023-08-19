function resizeFontSize () {
    document.getElementById('diminuir-texto').addEventListener('click', diminuir)
    document.getElementById('aumentar-texto').addEventListener('click', aumentar)
    let html = document.querySelector('html')
    
    function diminuir() {
        let atual = Number(window.getComputedStyle(html).getPropertyValue('font-size').split('px')[0])
        console.log(`${atual - 2}px`);
        html.style.fontSize = `${atual - 2}px`  
    }
    
    function aumentar () {
        let atual = Number(window.getComputedStyle(html).getPropertyValue('font-size').split('px')[0])
        console.log(`${atual}px`);
        html.style.fontSize = `${atual + 2}px`
    }
}

resizeFontSize()