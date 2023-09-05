function croppie() {

    let redimensionar = $('#preview').croppie({
        // Leitura da imagem para escolher como corta-la
        enableExif: true,

        // Orientação personalizada
        enableOrientation: true,

        // Recipiente exteno
        boundary: {
            width:  250, 
            height: 250,
        },

        // Recipiente interno
        viewport: {
            width: 250, 
            height: 250, 
            type: 'square',
        },
    })

    // Quando inserir uma foto no input
    $('#input-img').on('change', function() {

        // Ler os arquivos de forma assincrona
        let reader = new FileReader();

        // Depois de ler o conteúdo
        reader.onload = function(e) {
            redimensionar.croppie('bind', {
                url: e.target.result
            })
        }

        // Ler o conteúdo do tipo blob ou file
        reader.readAsDataURL(this.files[0])

        // Exibir a div
        $('#container-croppie')[0].classList.toggle('opened')
        $('body')[0].classList.toggle('disable-scroll')
    })

    // Pressionar botão de enviar
    $('#btn-submit').on('click', function() {
        redimensionar.croppie('result', {
            type: 'canvas', // base64, html, blob
            size: 'viewport', // tamanho da imagem
        }).then(function(img) {
            document.querySelector('#data-img')
            $('#data-img')[0].value = img
            $('#form-img')[0].submit()
        })
    })

    // Fechar o container - apaga os dados do input file
    $('#exit').on('click', function() {
        $('#container-croppie')[0].classList.toggle('opened')
        $('body')[0].classList.toggle('disable-scroll')
        $('#input-img')[0].value = ''
    })

    console.log();
}

croppie()