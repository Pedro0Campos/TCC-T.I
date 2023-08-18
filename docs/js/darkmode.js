function darkmode() {
    let form = document.querySelector('#form-darkmode')
    let checkbox = document.querySelector('#checkbox')
    if (form && checkbox) {
        checkbox.addEventListener('change', () => { form.submit() })
    }
    const html = document.querySelector('html')

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