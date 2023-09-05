<?php 
    include_once('verif_permission.php');
    include_once('php/form.php');
    include_once('php/consultas.php');

    
    $id = input_post('id');
    $nome = input_post('nome');
    $email = input_post('email');
    $senha = input_post('senha');
    $tipoUser = input_post('tipoUser');
    $imgUser = input_post('imgUser');

    if ($_SESSION['login']['id'] == $id && $_SESSION['login']['tipoUser'] != input_post('tipoUser')) {
        echo "
        <h2>Não é possível editar a própria permissão do usuário</h2>
        <h3><a href='index.php?pagina=form-usuarios&id= ". $id . "'>Voltar</a></h3>
        ";
    } else {

        // Analisar de houve alteração na senha, para não ter que criptograr uma senha criptografada
        if ($senha != $senha_consulta = mysqli_fetch_row(query($conexao_db, "SELECT senha FROM Usuarios WHERE idUser = '$id'"))[0] ) {
            $senha = cryptSenha($senha);
        }
        

        if ($imgUser == '') {
            $query = "UPDATE Usuarios SET nome = '$nome', email = '$email', senha = '$senha', tipoUser = '$tipoUser'  WHERE idUser = '$id'";
        } else {
            $query = "UPDATE Usuarios SET nome = '$nome', email = '$email', senha = '$senha', tipoUser = '$tipoUser', imgUser = '$imgUser' WHERE idUser = '$id'";
        } 

        var_dump($_POST);
        echo "<br><br>";
        var_dump($senha);
        echo "<br><br>";
        echo $query;
    
        query($conexao_db, $query);
        header('Location: index.php');
        die();
    }
?>