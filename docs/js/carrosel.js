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
        <img id="${i}" src="${e.smallImage}" alt="Foto do Album do(a) ${e.artista}"/>
        <p class="nome_musica">${e.nome}</p>
        <p class="autor_musica">${e.artista}</p>
    </div>
    `
})


// Criar o carrosel
// ================================
var carrosel_musica = new Splide('.carrosel-musica', {
    type: 'loop', // Fica em loop
    height: 'auto', // Altura do carrosel
    width: '100%', // Comprimento do carrosel
    fixedWidth: '120px', // Altura do slide
    gap: '20px', // Espaçamento entre os slides
    easing: 'ease-out'

});

carrosel_musica.mount();
