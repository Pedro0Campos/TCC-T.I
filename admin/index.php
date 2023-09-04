<?php
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');
?>
<?php if ($admin) { ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Grease • 3º Info tarde 2023</title>

    <link rel="stylesheet" href="css/estilos.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/55197c00fe.js" crossorigin="anonymous"></script>

</head>
<body>

    <h1>Administração</h1>
    <h3><a href="../docs/">Grease • 3º Info tarde 2023</a></h3>

    <h3 class="links"><a href="?pagina=table-usuarios">Usuários</a></h3>
    <h3 class="links"><a href="?pagina=table-comentarios">Comentários</a></h3>
    <!-- 
        Trabalhar com rotas por get
    -->

    <?php 
    //Rotas
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'table-usuarios';
    }

    switch ($pagina) {
        case 'table-usuarios':
            include_once('views/table-usuarios.php');
            break;
        case 'table-comentarios':
            include_once('views/table-comentarios.php');
            break;
        case 'form-usuarios':
            include_once('views/form-usuarios.php');
            break;
        default:
            include_once('views/table-usuarios.php');
            break;
    }
    
    ?>
</body>
</html>
<?php }?>