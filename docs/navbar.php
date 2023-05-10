<div class="navbar" id="navbar">
    <div class="navlista" id="toggler">
        <label for="checkbox">
            <input type="checkbox" name="" id="checkbox" onchange="ocult_elements(this)" placeholder="modo escuro" checked>
            <span class="ball"></span>
            <i class="fa-solid fa-moon moon desativado" id="moon"></i>
            <i class="fa-solid fa-sun sun" id="sun"></i>
            <i class="fa-solid fa-star star star1 desativado" id="star1"></i>
            <i class="fa-solid fa-star star star2 desativado" id="star2"></i>
            <i class="fa-solid fa-star star star3 desativado" id="star3"></i>
            <i class="fa-solid fa-cloud cloud cloud1" id="cloud1"></i>
            <i class="fa-solid fa-cloud cloud cloud2" id="cloud2"></i>
        </label> 
    </div>
    
    <div class="navlista">
        <a class="animation-link" href="?pagina=home">Home</a>
        <a class="animation-link" href="?pagina=sobre">Sobre</a>
        <a id="grease">Grease</a>
        <a class="animation-link" href="?pagina=personagens">Personagens</a>
    </div>
    
    <div class="navlista ">
        <a class="animation-link" href="?pagina=login" class="navitens">Login</a>
        <a class="animation-link" href="?pagina=cadastro" class="navitens">Cadastra-se</a>
        <!-- <li class="duplo-li">Olá Fulano!<br><a class="animation-link" href="#" class="navitens">Sair?</a> -->
        <!-- <a class="animation-link" href=""><img class="img-user" src="../docs/imgs/icon-user.png" alt=""></a> -->
    </div>

    <div class="container-icon-menu" onclick="openNavLateral()">
        <i class="fa-solid fa-bars"></i>
    </div>
</div>

<!-- NAVBAR - LATERAL -->
<div class="container-navbar-lateral">
    <div class="navbar-lateral" id="navbar-lateral">
        <div class="navlista">
            <a class="animation-link" class="animation-link" href="?pagina=home">Home</a>
            <a class="animation-link" href="?pagina=sobre">Sobre</a>
            <a class="animation-link" href="?pagina=personagens">Personagens</a>
        </div>
    
        <div class="navlista ">
            <a class="animation-link" href="?pagina=login" class="navitens">Login</a>
            <a class="animation-link" href="?pagina=cadastro" class="navitens">Cadastra-se</a>
            <!-- <a class="duplo-li">Olá Fulano!<br><a class="animation-link" href="#" class="navitens">Sair?</a> -->
            <!-- <a class="animation-link" href=""><img class="img-user" src="../docs/imgs/icon-user.png" alt=""></a> -->
        </div>
    </div>
</div>