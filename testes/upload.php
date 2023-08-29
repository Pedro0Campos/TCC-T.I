<?php
    $data = new DateTime($timezone = 'Etc/UTC');
    $dataF = $data->format('Y-m-d-H-i-s');

    $img = $_FILES['img-user'];
    $upload_dir = 'upload/imgs-users/';
    $upload_file = $upload_dir . $dataF;

    var_dump($img);
    
    // if (move_uploaded_file($img['tmp_name'], $upload_file)) {
        
    // }

    $check = getimagesize($img["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($upload_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($img["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($img['type'] != "image/jpg" && $img['type'] != "image/png" && $img['type'] != "image/jpeg" && $img['type'] != "image/gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // https://www.w3schools.com/php/php_file_upload.asp
?>