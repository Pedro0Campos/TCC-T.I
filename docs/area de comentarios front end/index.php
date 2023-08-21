<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="styleindex.css" />
</head>

<body>

  <h1>Gostou do nosso site? Deixe o seu feedback aqui!</h1>
  <div id="area">
    <br>
    <div id="com">
      <h1>Comentários</h1>
    </div>
    <div id="ifr">
      <iframe src="iframe.php" allowfullscreen></iframe>
    </div>
    <div id="but"></div>
    <br>

    <div id="divComent">

      <form action="index.php">
        <input type="text" id="textInput" placeholder="Aa" />
        &nbsp;

        <div class="emoji-button" id="emojiButton">😀</div>
        <div class="emoji-list" id="emojiList">
          <span>🙂</span>
          <span>😀</span>
          <span>🥳</span>
          <span>😄</span>
          <span>😁</span>
          <span>😅</span>
          <span>😆</span>
          <span>🤣</span>
          <span>😂</span>
          <span>🙃</span>
          <span>😉</span>
          <span>😊</span>
          <span>😇</span>
          <span>😎</span>
          <span>🤓</span>
          <span>🧐</span>
          <span>🥳</span>
          <span>🥰</span>
          <span>😍</span>
          <span>🤩</span>
          <span>😘</span>
          <span>😗</span>
          <span>😊</span>
          <span>😚</span>
          <span>😙</span>
          <span>😋</span>
          <span>😛</span>
          <span>😜</span>
          <span>🤪</span>
          <span>😝</span>
          <span>🤑</span>
          <span>🤗</span>
          <span>🤭</span>
          <span>🤫</span>
          <span>🤔</span>
          <span>😐</span>
          <span>🤐</span>
          <span>🤨</span>
          <span>😑</span>
          <span>😶</span>
          <span>😏</span>
          <span>😒</span>
          <span>🙄</span>
          <span>😬</span>
          <span>😮‍💨</span>
          <span>🤥</span>
          <span>😪</span>
          <span>😴</span>
          <span>😌</span>
          <span>😔</span>
          <span>🤤</span>
          <span>😷</span>
          <span>🤒</span>
          <span>🤕</span>
          <span>🤢</span>
          <span>🤮</span>
          <span>🤧</span>
          <span>🥵</span>
          <span>🥶</span>
          <span>🥴</span>
          <span>😵</span>
          <span>🤯</span>
          <span>😕</span>
          <span>😟</span>
          <span>🙁</span>
          <span>☹️</span>
          <span>😮</span>
          <span>😯</span>
          <span>😲</span>
          <span>😳</span>
          <span>🥺</span>
          <span>😦</span>
          <span>😧</span>
          <span>😨</span>
          <span>😰</span>
          <span>😥</span>
          <span>😢</span>
          <span>😭</span>
          <span>😱</span>
          <span>😖</span>
          <span>😣</span>
          <span>😞</span>
          <span>😓</span>
          <span>😩</span>
          <span>😫</span>
          <span>🥱</span>
          <span>😤</span>
          <span>😡</span>
          <span>😠</span>
          <span>🤬</span>
          <span>💋</span>
          <span>💌</span>
          <span>💘</span>
          <span>💝</span>
          <span>💖</span>
          <span>💗</span>
          <span>💓</span>
          <span>💞</span>
          <span>💕</span>
          <span>💟</span>
          <span>❣</span>
          <span>💔</span>
          <span>❤️‍🔥</span>
          <span>❤️‍🩹</span>
          <span>❤️</span>
          <span>🧡</span>
          <span>💛</span>
          <span>💚</span>
          <span>💙</span>
          <span>💜</span>
          <span>🤎</span>
          <span>🖤</span>
          <span>🤍</span>
          <span>💯</span>
        </div>

        <script>
          const emojiButton = document.getElementById("emojiButton");
          const emojiList = document.getElementById("emojiList");
          const textInput = document.getElementById("textInput");

          emojiButton.addEventListener("click", () => {
            emojiList.style.display = emojiList.style.display === "none" ? "block" : "none";
          });

          emojiList.addEventListener("click", event => {
            const selectedEmoji = event.target.textContent;
            textInput.value += selectedEmoji;
            emojiList.style.display = "none";
          });

          document.addEventListener("click", event => {
            if (!emojiButton.contains(event.target) && !emojiList.contains(event.target)) {
              emojiList.style.display = "none";
            }
          });
        </script>

        <button type="submit" onclick="window.alert('Comentário Enviado!')">
          <img src="imagens/enviar.png">
        </button>
      </form>

    </div>
    <br>
  </div>
</body>

</html>