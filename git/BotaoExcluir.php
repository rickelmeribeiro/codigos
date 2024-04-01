<form action="PAGINADEEXCLUSAO.php" method="post">
    <input type="hidden" name="IDRESGATADO" value="<?php echo $NOMEVARIAVELID ?>">
    <button type="submit"
            onclick="abrirModalJsCliente('ID','IDDOINPUT','NOMEMODAL','ADD OU EDIT OU EXC', 'FORMULARIO')"
            class="btn btn-danger rounded-0">Excluir <span
            class="mdi mdi-database-remove"></span></button>