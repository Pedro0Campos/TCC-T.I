
function ocult_elements() {
    let checkbox = document.querySelector('#checkbox')
    let stars = document.getElementsByClassName('star')
    let moon = document.getElementsByClassName('moon')
    let sun = document.getElementsByClassName('sun')
    stars = Array.prototype.slice.call(stars)

    if (checkbox.checked) {
        stars[0].style.transform = 'translate(-220%, 50%) scale(0) rotate(180deg)'
        stars[1].style.transform = 'translate(-100%, 280%) scale(0) rotate(180deg)'
        stars[2].style.transform = 'translate(-220%, 280%) scale(0) rotate(180deg)'
        moon[0].style.transform =     'rotate(210deg) translate(-5%, -10%) scale(0)'

    } else {
        stars[0].style.transform = 'translate(-220%, 50%) scale(1) rotate(0deg)'
        stars[1].style.transform = 'translate(-100%, 280%) scale(1) rotate(0deg)'
        stars[2].style.transform = 'translate(-220%, 280%) scale(1) rotate(0deg)'
        moon[0].style.transform =     'rotate(210deg) translate(-5%, -10%)'
    }
}