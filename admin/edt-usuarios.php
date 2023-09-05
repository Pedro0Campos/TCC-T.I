<?php 
    include_once('verif_permission.php');
    include_once('php/form.php');
    include_once('php/consultas.php');

    
    $id = input_post('id');
    $nome = input_post('nome');
    $email = input_post('email');
    $senha = input_post('senha');
    $senhaAntiga = input_post('senhaAntiga');
    $tipo_user = input_post('tipoUser');
    $img_user = input_post('imgUser');

    if ($_SESSION['login']['id'] == $id && $tipo_user != 1) {
        echo "
        <script>
            window.location = 'index.php?pagina=form-usuarios&id=$id'
            alert('Não é possível editar a própria permissão do usuário')
        </script>
        ";
    } else {

        // Analisar de houve alteração na senha, para não ter que criptograr uma senha criptografada
        if ($senha != '') {
            $senha = cryptSenha($senha);
        } else {
            $senha = $senhaAntiga;
        }
        

        if ($img_user != '') {
            // Salvar imagem no form no servidor e no banco de dados
            // ==========================

            // Pegando valores brutos e "polindo"
            $img_base64 = explode(';', input_post('imgBase64'));
            $tipo_img = explode('image/', explode('data:', $img_base64[0])[1])[1];

            // Verificando tipo da imagem

            // Decode base64
            $imagem = base64_decode(explode(',', $img_base64[1])[1]);
            
            // Pegar nome da imagem
            $data = new DateTime($timezone = 'Etc/UTC');
            $nome_img = 'upload/imgs-users/' . $data->format('Y-m-d-H-i-s') . ".png";
            
            // Salvar a imagem no servidor
            file_put_contents('../' . $nome_img, $imagem);
            
            // Salvar no banco de dados a imagem
            $query_2 = ", imgUser = '$nome_img'";

            // Deletar imagem antiga
            if ($_SESSION['login']['imgUser'] != 'img-padrao') {
                unlink('../'.$_SESSION['login']['imgUser']);
            } 
            // // Salvar na variável de sessão
            $_SESSION['login']['imgUser'] = $nome_img;

        } else {
            $query_2 = "";
        } 

        $query_1 = "UPDATE Usuarios SET nome = '$nome', email = '$email', senha = '$senha', tipoUser = '$tipo_user'";

        $query = $query_1 . $query_2 . " WHERE idUser = '$id'";
        echo "<br><br>";
        echo $query;
    
        query($conexao_db, $query);
        header('Location: index.php');
        die();
    }
?> 