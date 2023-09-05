<?php 
    include_once('verify_login.php');
    include_once('../database/db.php');
    include_once('form.php');
    
    // Pegando valores brutos e "polindo"
    $data_img = explode(';', input_post('data-img'));
    $tipo_img = explode('image/', explode('data:', $data_img[0])[1])[1];

    // Verificando tipo da imagem
    if ($tipo_img == 'png' || $tipo_img == "jpeg" || $tipo_img == 'jpg' || $tipo_img == 'gif') {
        // Decode base64
        $imagem = base64_decode(explode(',', $data_img[1])[1]);
        
        // Pegar nome da imagem
        $data = new DateTime($timezone = 'Etc/UTC');
        $nome_img = 'upload/imgs-users/' . $data->format('Y-m-d-H-i-s') . ".png";
        
        // Salvar a imagem no servidor
        file_put_contents('../../'. $nome_img, $imagem);
        
        // Salvar no banco de dados a imagem
        $query = "UPDATE Usuarios SET imgUser = '$nome_img' WHERE idUser = " . $_SESSION['login']['id'];
        mysqli_query($conexao_db, $query);

        // Deletar imagem antiga
        if ($_SESSION['login']['imgUser'] != 'img-padrao') {
            unlink('../../'.$_SESSION['login']['imgUser']);
        }        
        // Salvar na variável de sessão
        $_SESSION['login']['imgUser'] = $nome_img;
        header('Location: ../perfil.php');    
        die();
    } else {

        echo "<script>
        window.location='../perfil.php';
        alert('Tipo de arquivo inválido! Apenas PNG, JPG e GIF');
        </script>";
    }
?>