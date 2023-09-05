<?php
    include_once('verif_permission.php');
    include_once('../docs/php/consultas.php');
?>

<script>
    function del($id) {
        if (confirm("Deseja mesmo deletar a conta de ID "+ $id + "?")) {
            if (confirm("Verifique se está deletando a conta desejada. Essa ação é irreversível.\n\nID da conta: " + $id + "\n\nConfirmar deleção?")) {
                document.location = 'del-usuarios.php?id=' + $id
            }
        }
    }
</script>

<h2>Usuários</h2>
<div class="overflow">
    <table class="usuarios">
        <thead>
            <tr>
                <th class="collumn-1">Id</th>
                <th class="collumn-2">Nome</th>
                <th class="collumn-3">Email</th>
                <th class="collumn-4">Senha</th>
                <th class="collumn-5">Tipo de Usuário</th>
                <th class="collumn-6">Imagem do usuário</th>
                <th class="collumn-7">Editar</th>
                <th class="collumn-8">Deletar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Consulta dos usuários
        $consulta = query($conexao_db, "SELECT * FROM Usuarios");

        $count = 1;
        while($row = mysqli_fetch_array($consulta)) { ?>
            <?php if ($count % 10 == 0) {?>
            <tr class="header">
                <th class="collumn-1">Id</th>
                <th class="collumn-2">Nome</th>
                <th class="collumn-3">Email</th>
                <th class="collumn-4">Senha</th>
                <th class="collumn-5">Tipo de Usuário</th>
                <th class="collumn-6">Imagem do usuário</th>
                <th class="collumn-7">Editar</th>
                <th class="collumn-8">Deletar</th>
            </tr>
            <?php }?>
            <tr>
                <td class="collumn-1"><?php echo $row[0]?></td>
                <td class="collumn-2"><?php echo $row[1]?></td>
                <td class="collumn-3"><?php echo $row[2]?></td>
                <td class="collumn-4"><?php echo $row[3]?></td>
                <td class="collumn-5"><?php echo $row[4]?></td>
                <td class="collumn-6"><?php echo $row[5]?></td>
                <td class="collumn-7">
                    <a href="?pagina=form-usuarios&id=<?php echo $row[0] ?>">
                        <i class="fa-solid fa-pen-to-square fa-bounce" aria-label="Editar usuário"></i>
                    </a>
                </td>
                <td class="collumn-8">
                    <button type="button" id="del-users"aria-label="Deletar usuário" onclick="del(<?php echo $row[0] ?>)">
                        <i class="fa-solid fa-trash fa-bounce"></i>
                    </button>
                </td>
            </tr>
            <?php $count += 1 ?>
        <?php }?>
        </tbody>
    </table>
</div> <!-- .overflow -->