function comentario () {
    let input = document.querySelector('#input-comentario')
    let carac_faltando = document.querySelector('#carac-faltando')
    
    input.addEventListener('input', caracteresFaltando)
    function caracteresFaltando() {
        let value = input.value 
        let len = value.length
        let maximo = 150

        if (len != 0) { // Mostrar quantos caracteres estão faltando
            document.querySelector('#erro').style.display = 'none'
            carac_faltando.style.display = 'block'
        } else {  // Mostrar icon de erro
            document.querySelector('#erro').style.display = 'block'
            carac_faltando.style.display = 'none'
        }
        if (len >= maximo) {
            console.log('Máximo');
            input.value = value.substr(0, maximo)
            len = maximo
        }

        carac_faltando.innerHTML = maximo - len
    }
    
    
}
comentario();

function checkComentario() {
    let input = document.querySelector('#input-comentario') 
    if (input.value) {
        return true
    } else {
        document.querySelector('#erro').style.display = 'block'
        input.focus()
        return false
    }
}
