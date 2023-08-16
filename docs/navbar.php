    <div class="navbar" id="navbar">

        <!-- TOGGLER --> 
        <div class="navlista" id="toggler">
            <form action="?verify_darkmode" method="post" id="form-darkmode">
                <label for="checkbox">
                    <input type="checkbox" name="checkbox" id="checkbox" placeholder="Darkmode" <?php if ($darkmode) {echo 'checked="true"'; } ?>>
                    <span class="ball"></span>
                    
                    <?php
                        if (!$darkmode) {
                    ?>
                    <i class="fa-solid fa-sun sun" id="sun"></i>
                    <i class="fa-solid fa-cloud cloud cloud1" id="cloud1"></i>
                    <i class="fa-solid fa-cloud cloud cloud2" id="cloud2"></i>
                    <?php
                        } else {

                    ?>
                    <i class="fa-solid fa-moon moon" id="moon"></i>
                    <i class="fa-solid fa-star star star1" id="star1"></i>
                    <i class="fa-solid fa-star star star2" id="star2"></i>
                    <i class="fa-solid fa-star star star3" id="star3"></i>
                    <?php
                        }
                    ?>
                </label>
            </form>
        </div>
        
        
        <!-- ITENS NO MEIO -->
        <div class="navlista">
            <a class="animation-link" href="index.php">Home</a>
            <a id="grease" href="index.php" >Grease</a>
            <a class="animation-link" href="sobre.php">Sobre</a>
        </div>
        <!-- ITENS NO MEIO -->
        
        <!-- ITENS NA DIREITA - Login e cadastro -->
        <div class="navlista itens-direita">
            <a class="animation-link" href="cadastro.php" class="navitens">Cadastra-se</a>
            <a class="animation-link" href="login.php" class="navitens">Login</a>
            <!-- <li class="duplo-li"><span>Olá Fulano!</span><a href="" class="animation-link">Sair?</a></li> -->
            <!-- <a class="" href="perfiluser.php"><img class="img-user" src="../docs/imgs/icon-user.png" alt=""></a> -->
        </div>
        <!-- ITENS NA DIREITA - Login e cadastro -->
        
        <!-- CONTAINER - ICON MENU -->
        <div class="container-icon-menu" onclick="openNavLateral()">
            <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>
        <!-- CONTAINER - ICON MENU -->
    </div>
    
    
    <!-- NAVBAR - LATERAL -->
    <div class="container-navbar-lateral">
        <div class="navbar-lateral" id="navbar-lateral">
            <div class="navlista">
                <a class="animation-link" class="animation-link" href="index.php">Home</a>
                <a class="animation-link" href="sobre.php">Sobre</a>
            </div>
            <div class="navlista itens-direita cadastro">
                <a class="animation-link" href="login.php" class="navitens">Login</a>
                <a class="animation-link" href="cadastro.php" class="navitens">Cadastra-se</a>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/darkmode.js"></script>