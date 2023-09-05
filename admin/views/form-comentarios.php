<?php
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');

    $editar = false;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $coment = mysqli_fetch_row(query($conexao_db, "SELECT * FROM Comentarios WHERE idComent = '$id'"));
        if ($coment) {
            $editar = true;
        } else {
            die('
                <h2>Id inválido</h2>
                <h3><a href="index.php">Voltar</a></h3>
            ');
        }
    } else {
        header('Location: index.php');
        die();
    }


    if ($editar) { ?>
    <h2>Editar Comentário</h2>
    <form action="edt-comentarios.php" method="post">
        <div class="conteiner-input">
            <label for="idComent">
                <fieldset>
                    <legend>Id do Comentário</legend>
                    <input id="idComent" name="idComent" type="text" class="input" value="<?php echo $coment[0] ?>" readonly>
                </fieldset>
            </label>
        </div>
        <div class="conteiner-input">
            <label for="idUser">
                <fieldset>
                    <legend>Id do Usuário</legend>
                    <input id="idUser" name="idUser" type="text" class="input" value="<?php echo $coment[1] ?>" readonly>
                </fieldset>
            </label>
        </div>
        <div class="conteiner-input">
            <label for="dataComent">
                <fieldset>
                    <legend>Data de envio</legend>
                    <input id="dataComent" name="dataComent" class="input" value="<?php echo $coment[3] ?>" readonly>
                </fieldset>
            </label>
        </div>
        <div class="conteiner-input">
            <label for="txtComent">
                <fieldset>
                    <legend>Texto do comentário</legend>
                    <input id="txtComent" name="txtComent" class="input" value="<?php echo $coment[2] ?>">
                </fieldset>
            </label>
        </div>

        
        <div class="conteiner-input">
            <input type="submit" class="button" value="Editar">
        </div>
    </form>
    <?php } ?>
?>