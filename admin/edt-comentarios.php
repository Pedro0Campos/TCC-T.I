<?php 
    include_once('verif_permission.php');
    include_once('php/form.php');
    include_once('php/consultas.php');

    
    $id = input_post('idComent');
    $txtComent = input_post('txtComent');

    $query = "UPDATE Comentarios SET txtComent = '$txtComent' WHERE idComent = '$id'";
    echo $query;
    query($conexao_db, $query);
    

    header('Location: index.php?pagina=table-comentarios');
    die();
    
?> 