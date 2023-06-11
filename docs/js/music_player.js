// Interações com a API
const APIController = function() {
    // ids para conexão com a API
    const clientId = 'fd4be54080ee4115861e784b43e2a245';
    const clientSecret = 'f837cdb68e5a449289847f077530f712';

    // Funções privadas
    const _getToken = async () => {  // pegar Token de acesso
        // Solicitação - consulta na API
        // fetch(URL da conexão, Init)
        const result = await fetch('https://accounts.spotify.com/api/token', { 
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `grant_type=client_credentials&client_id=${clientId}&client_secret=${clientSecret}`
        })

        const data = await result.json()
        return data.access_token;
    }

    const _getTracks = async (token, tracksEndPoint) => {  // Pegar uma playlist
        const result = await fetch(`${tracksEndPoint}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        })

        const data = await result.json()
        return data.items
    }

    const _getTrack = async(token, trackEndPoint) => {  // Pegar uma playlist
        const result = await fetch(`${trackEndPoint}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        })

        const data = await result.json()
        return data
    }

    return {
        getToken() {
            return _getToken()
        },
        getTracks(token, tracksEndPoint) {
            return _getTracks(token, tracksEndPoint)
        },
        getTrack(token, tracksEndPoint) {
            return _getTrack(token, tracksEndPoint)
        }
    }

}() // O () faz executar a função sempre que chamar ela


// Interação com a Interface do Usuário
const UIController = (function() {
    const DOMElements = {
        // body: 'body',
        splideList: '#splide__list',
        musicPlayer: '#music-player',
        token: '#hidden_token'
    }

    return {
        // Usar querySelector mais rapidamente fora da função
        saidaDados() {
            return {
                carrosel: document.querySelector(DOMElements.splideList),
                musicPlayer: document.querySelector(DOMElements.musicPlayer),
                // body: document.querySelector(DOMElements.body),
            }
        },

        createSplideListTrack(id, img, title, artist) {
            // id -> href da música
            const carrosel = document.querySelector(DOMElements.splideList)
            const html = `
            <div class="splide__slide track">
                <img id="${id}" src="${img}" alt=""/>
                <p class="nome_musica">${title}</p>
                <p class="autor_musica">${artist}</p>
            </div>
            `

            carrosel.insertAdjacentHTML('beforeend', html)
        },

        createContentMusicPlayer(bigImagem, smallImage, title, artist, index) {
            const listTrack = [
                {background: "121212", src: "music/Skrillex-Breakn_A_Sweat.mp3"}
            ]
            const track = listTrack[0]

            const musicPlayer = this.saidaDados().musicPlayer
            musicPlayer.style.backgroundColor = track.background;


            const html = `
            <div class="close-box" onclick="closeMusicPlayer()">
                <div class="leftright"></div>
                <div class="rightleft"></div>
                <label class="close">close</label>
            </div>
            
            <div class="music-details">
                <div class="container">
                    <img id="music-image" class="music-image" src="${bigImagem}">
                    <p class="music-name">${title}</p>
                    <p class="music-autor">${artist}</p>
                </div>
            </div>
            
            <div class="option-bar">
                <div class="lbox-music">
                    <img class="music-image" src="${smallImage}">
                </div>

                <audio controls autoplay preload="none" loop>
                    <source src="${track.src}" type="audio/mpeg">
                    Seu navegador não suporta o reprodutor de música.
                </audio>
            </div>
            `
            musicPlayer.innerHTML = html
        },

        storeToken(value) {
            document.querySelector(DOMElements.token).value = value
        },

        getStoredToken() {
            return {
                token: document.querySelector(DOMElements.token).value
            }
        }
        
    }
})()


const APPController = (function(UICtrl, APICtrl) {
    const saidaDados = UICtrl.saidaDados()
    
    // Exibir lista de músicas no carrosel
    const loadPlaylist = async () => {
        const token = await APICtrl.getToken()
        UIController.storeToken(token)
        const tracksEndPoint = 'https://api.spotify.com/v1/playlists/6mTECqYM6NmLD3RRUVbuuj/tracks'

        const tracks = await APICtrl.getTracks(token, tracksEndPoint)

        // Adicionar itens no carrosel
        UICtrl.saidaDados().carrosel.innerHTML = ''
        tracks.forEach((value, index) => {
            UICtrl.createSplideListTrack(
                // index, image, title, artist
                index,
                value.track.album.images[0].url,
                value.track.name,
                value.track.artists[0].name,
            )
        })

        // Criar o carrosel
        const carrosel_musica = new Splide('.carrosel-musica', {
            type: 'loop', // Fica em loop
            height: 'auto', // Altura do carrosel
            width: '100%', // Comprimento do carrosel
            fixedWidth: '120px', // Altura do slide
            fixedHeight: '190px',
            gap: '20px', // Espaçamento entre os slides
            easing: 'ease-out'
        })

        carrosel_musica.mount();

        // Abrir o MusicPLayer ao clicar nos elementos
        saidaDados.carrosel.addEventListener('click', closeMusicPlayer) 
        
        // Criar conteudo do MusicPlayer
        saidaDados.carrosel.addEventListener('click', async (e) => {
            const index = e.target.id
            const track = tracks[index].track

            UICtrl.createContentMusicPlayer(
                // bigImagem, smallImage, title, autor, index
                track.album.images[0].url,
                track.album.images[1].url,
                track.name,
                track.artists[0].name,
                index
            )
        })
    }
    
       
    return {
        init() {
            loadPlaylist()
        },
    }

})(UIController, APIController)

APPController.init()
