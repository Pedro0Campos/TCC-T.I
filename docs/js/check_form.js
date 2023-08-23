function check_comentario() {
    let input = document.querySelector('#input-comentario') 
    let valid = true

    if (input.value) {
        return true
    } else {
        document.querySelector('#erro').style.display = 'block'
        input.style.paddingRight = '35px'
        
        return false
    }
}