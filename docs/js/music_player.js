function closeMusicPlayer() {
    document.querySelector('.music-player').classList.toggle('ocult-player')
    document.querySelector('body').classList.toggle('disable-scroll')
}

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
        console.log(data);
    }

    return {
        getToken() {
            return _getToken()
        },
        getTracks(token, tracksEndPoint) {
            return _getTracks(token, tracksEndPoint)
        }
    }

}() // O () faz executar a função sempre que chamar ela


// Interação com a Interface do Usuário
function UIController() {

}


const APPController = (function(UICtrl, APICtrl) {

    // Exibir lista de músicas
    const loadPlaylist = async () => {
        const token = await APICtrl.getToken()

        const tracksEndPoint = 'https://api.spotify.com/v1/playlists/37i9dQZF1EIVoNHpSNy2H5/tracks'
        let tracks = await APICtrl.getTracks(token, tracksEndPoint)
    }

    return {
        init() {
            loadPlaylist()
        },
    }

})(UIController, APIController)

APPController.init()