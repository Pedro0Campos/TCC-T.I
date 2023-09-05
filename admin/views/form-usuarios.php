<?php 
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');


    $editar = false;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = mysqli_fetch_row(query($conexao_db, "SELECT * FROM Usuarios WHERE idUser = '$id'"));
        if ($user) {
            $editar = true;
        } else {
            echo '
                <h2>Id inválido</h2>
                <h3><a href="index.php">Voltar</a></h3>
            ';
        }
    } else {
        header('Location: index.php');
    }

    
    if ($editar) {?>
        <h2>Editar usuário</h2>
        <form action="edt-usuarios.php" method="post" id="edtUser">
            <div class="conteiner-input">
                <label for="id">
                    <fieldset>
                        <legend>Id</legend>
                        <input id="id" name="id" class="input" value="<?php echo $user[0] ?>" readonly>
                    </fieldset>
                </label>
            </div>

            <div class="conteiner-input">
                <label for="nome">
                    <fieldset>
                        <legend>Nome</legend>
                        <input id="nome" name="nome" class="input" value="<?php echo $user[1] ?>">
                    </fieldset>
                </label>
            </div>

            <div class="conteiner-input">
                <label for="email">
                    <fieldset>
                        <legend>Email</legend>
                        <input id="email" name="email" class="input" value="<?php echo $user[2] ?>">
                    </fieldset>
                </label>
            </div>

            <div class="conteiner-input">
                <label for="senha">
                    <fieldset>
                        <legend>Senha</legend>
                        <input id="senha" name="senha" class="input" value="" placeholder="Sem alteração">
                        <input type="hidden" name="senhaAntiga" value="<?php echo $user[3]?>">
                    </fieldset>
                </label>
            </div>

            <div class="conteiner-input">
                <label for="tipoUser">
                    <fieldset>
                        <legend>Tipo do usuário</legend>
                        <select name="tipoUser" id="tipoUser" class="input">
                            <option value="0">Normal</option>
                            <option value="1">Admin</option>
                        </select>
                    </fieldset>
                </label>
            </div>

            <div class="conteiner-input">
                <label for="imgUser">
                    <fieldset>
                        <legend>Foto de perfil</legend>
                        <input name="imgUser" id="imgUser" class="input" type="file" accept="image/png, image/gif, image/jpeg, image/jpg">

                        <!-- Vai ter o atributo VALUE definido pelo JS, carregando a imagem no tipo Base64 -->
                        <input type="hidden" name="imgBase64" id="imgBase64">
                    </fieldset>
                </label>
            </div>
            
            <div class="conteiner-input">
                <input type="submit" class="button" value="Editar">
            </div>
        </form>
        

        <!-- Container do Croppie -->
        <div id="container-croppie">
            <div class="wrap-exit">
                <div id="exit"><i class="fa-solid fa-xmark exit"></i></div>
            </div>

            <!-- Preview da imagem -->
            <div class="wrap-preview">
                <div id="preview"></div>
            </div>

            <div class="wrap-submit">
                <input type="button"value="Enviar" id="btn-submit">
            </div>
        </div>
            
    <?php }
?>
