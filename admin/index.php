<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Grease • 3º Info tarde 2023</title>

</head>
<body>
    <h1>Administração</h1>
    <h3>Grease • 3º Info tarde 2023</h3>
    

    <?php
        session_start();
        $admin = false;
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login']['tipoUser'] == 1) {
                $admin = true;
            } else {
                header('Location: ../docs/');
            }
        } else {
            header('Location: ../docs/login.php');
        }

        echo 'Exibir tabela para editar os usuários e os comentários';
        
        ?>
</body>
</html>