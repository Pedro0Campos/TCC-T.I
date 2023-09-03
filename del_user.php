<?php 

include('../database/db.php'); //echo '<h1>Veio para o Deletar</h1>';
include('consultar_user.php');
include('form.php');

$id = input_post('id');
$del = 0;
$queryC = "SELECT * FROM comentarios"; // Verificando se em alguma das tabelas há o id do usuário.
$queryE = "SELECT * FROM ensaios";

while ($linha = mysqli_fetch_array(consultar_db($queryC, $conexao_db))) {

    if ($linha['idUser'] == $id) { 
        $del = 1;
        break;
    }

};

while ($linha = mysqli_fetch_array(consultar_db($queryE, $conexao_db))) {
            
    if ($linha['idUser'] == $id) {
        $del = 1;
        break;
    }
    
};

if ($del == 1) { // Se sim, não será possível apagar.

    echo "<script>
    window.location='../painel.php';
    alert('Não é possível deletar esta conta!');
    </script>";

} else{ // Senão, será apagado e redirecionado para logout.php para apagar as variaveis de sessão.

    $query = "DELETE FROM usuarios WHERE idUser = '$id'";
    mysqli_query($conexao_db, $query);
    echo "<script>
    window.location='logout.php';
    alert('Conta deletada com sucesso!');
    </script>";

}

?>