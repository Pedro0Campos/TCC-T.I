<?php
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');
    
?>


<h2>Comentários</h2>
<div class="overflow" style="overflow-y: auto;">
    <table class="comentarios">
        <thead>
            <tr>
                <th class="collumn-1">Id</th>
                <th class="collumn-2">Id Usuário</th>
                <th class="collumn-3">Nome</th>
                <th class="collumn-4">Comentário</th>
                <th class="collumn-5">Data</th>
                <th class="collumn-6">Editar</th>
                <th class="collumn-7">Deletar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Consulta dos usuários
        $consulta = query($conexao_db, "SELECT comentarios.idComent, usuarios.idUser, usuarios.nome, comentarios.txtComent, comentarios.dataComent FROM usuarios, comentarios where (usuarios.idUser = comentarios.idUser)");

        $count = 1;
        while($row = mysqli_fetch_array($consulta)) { ?>
            <?php if ($count % 10 == 0) {?>
            <tr class="header">
                <th class="collumn-1">Id Comentário</th>
                <th class="collumn-2">Id Usuário</th>
                <th class="collumn-3">Nome</th>
                <th class="collumn-4">Comentário</th>
                <th class="collumn-5">Data</th>
                <th class="collumn-6">Editar</th>
                <th class="collumn-7">Deletar</th>
            </tr>
            <?php }?>
            <tr>
                <td class="collumn-1"><?php echo $row['idComent']?></td>
                <td class="collumn-2"><?php echo $row['idUser']?></td>
                <td class="collumn-3"><?php echo $row['nome']?></td>
                <td class="collumn-4"><?php echo $row['txtComent']?></td>
                <td class="collumn-5"><?php echo $row['dataComent']?></td>
                <td class="collumn-6"><a href="edt-comentarios.php?id=<?php echo $row[0] ?>"><i class="fa-solid fa-pen-to-square fa-bounce"></i></a></td>
                <td class="collumn-7"><a href="del-comentarios.php?id=<?php echo $row[0] ?>"><i class="fa-solid fa-trash fa-bounce"></i></a></td>
            </tr>
            <?php $count += 1;?>
        <?php }?>
        </tbody>
    </table>
</div> <!-- .overflow -->