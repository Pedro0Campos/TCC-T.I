
function ocult_elements() {
    let checkbox = document.querySelector('#checkbox')
    let stars = document.getElementsByClassName('star')
    stars = Array.prototype.slice.call(stars)

    if (checkbox.checked) {
        for (let i=0; i < stars.length; i++) {
            stars[i].style.display = 'none'
        }
    } else {
        for (let i=0; i < stars.length; i++) {
            stars[i].style.display = 'unset'
        }
    }
}