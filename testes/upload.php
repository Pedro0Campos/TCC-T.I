<?php
    include_once('../docs/database/db.php');
    $data = new DateTime($timezone = 'Etc/UTC');
    $dataF = $data->format('Y-m-d-H-i-s');
    $img = $_FILES['img-user'];
    
    $upload_dir = "upload/imgs-users/$dataF." . explode('image/', $img['type'])[1];
    
    if (!isset($img)) {
        die('No file uploaded.');
    }
    // Verificar tipo de imagem!!
    
    move_uploaded_file($img["tmp_name"], "../". $upload_dir);

    $query = "UPDATE Usuarios SET imgUser = '$upload_dir' WHERE idUser = " . $_POST['id'];
    mysqli_query($conexao_db, $query);
    echo $query;

    // https://www.w3schools.com/php/php_file_upload.asp
?>