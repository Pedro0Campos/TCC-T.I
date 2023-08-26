function openNavLateral() {
    document.querySelector('.container-navbar-lateral').classList.toggle('open')
    document.querySelector('body').classList.toggle('overflow-hidden')            
    let button = document.querySelector("#navbar > div.container-icon-menu > button")
    
    button.classList.toggle('opened');
}

document.querySelector('.container-navbar-lateral').addEventListener('click', (e) => {
    if (e.target.classList != 'wrapper-button') {
        openNavLateral()
    }
})