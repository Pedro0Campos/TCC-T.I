// ================================
// Carrossel de Músicas
// ================================

// Adicionando os elementos
// ================================
let splideList = document.querySelector('#splide__list_MUSICAS')

splideList.innerHTML = ''

let musicas = getMusics()
musicas.forEach((e, i) => {
    splideList.innerHTML += `
    <div class="splide__slide track">
        <img src="${e.smallImage}" alt="Foto do Album do(a) ${e.artista}"/>
        <p class="nome_musica">${e.nome}</p>
        <p class="autor_musica">${e.artista}</p>
    </div>
    `
})


// Criar o carrosel
// ================================
var carrossel_musica = new Splide('.carrossel-musica', {
    type: 'loop', // Fica em loop
    height: 'auto', // Altura do carrosel
    width: '100%', // Comprimento do carrosel
    fixedWidth: '120px', // Altura do slide
    gap: '20px', // Espaçamento entre os slides
    easing: 'ease-out',
    pagination: false,

});

carrossel_musica.mount();

// Criar barra de rolagem
// ================================
var bar = document.querySelector('#slider-progress-bar')

// Atualizar a barra conforme passa os slides
carrossel_musica.on('mounted move', function() {
    var end = carrossel_musica.Components.Controller.getEnd() + 1;
    var rate = Math.min( (carrossel_musica.index + 1) / end, 1)
    bar.style.width = String( 100 * rate) + '%'
} )



// ================================
// Carrossel de Playlists
// ================================

// Criar carrossel
// ================================
var carrossel_playlists = new Splide('.carrossel-playlists', {
    type: 'loop', // Fica em loop
    height: 'auto', // Altura do carrosel
    width: '100%', // Comprimento do carrosel
    fixedWidth: '90%', // Comprimento do slide
    // fixedHeight: '200px', // Altura do slide
    pagination: false,
    arrows: false,
    gap: '20px', // Espaçamento entre os slides
    easing: 'ease-out'
    
});

carrossel_playlists.mount();



// ================================
// Carrossel de Personagens
// ================================

// Criar carrossel
// ================================
let carroselPopup = new Splide('#popup', {
    type:   'loop',       // Fica em loop
    height: 'auto',       // Altura do carrosel
    width: '100%',        // Comprimento do carrosel
    fixedWidth: '400px',  // Altura do slide
    focus:   0,           // Habilita uma classe para personalizar o elemento focado
    gap: '20px',          // Espaçamento entre os slides
    easing: 'ease-out',
    padding: '5rem',
});

carroselPopup.mount()