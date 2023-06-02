function musicPlayer() {
    let player = document.querySelector('.container-music-player')
    player.classList.toggle('ocult-player')
}

window.onSpotifyIframeApiReady = (IFrameAPI) => {
    // Player
    const music_player = document.querySelector('.music-player')

    // Opções
    const options = {
        height: '100%',
        width: '100%',
    };

    // itens que vão chamar o Music player
    const callback = (EmbedController) => {
        document.querySelectorAll('.track').forEach(
            episode => {
            episode.addEventListener('click', () => {
                EmbedController.loadUri(episode.dataset.spotifyId)
            });
        })
    };
    
    IFrameAPI.createController(music_player, options, callback);

}
