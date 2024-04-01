<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PESSOA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
          &gt;>
</head>
<body>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">listarPessoa</a></li>
                <li class="breadcrumb-item active" aria-current="page">listarPessoa</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header">
        #Pessoa
        BOTAODECADASTRO
    </div>
    <div class="card-body">
        <table class="table table-hover table-striped table-dark">
            <thead>
            <tr>
                <th scope="col" width="5%"># <span class="mdi mdi-card-account-details"></span></th>
                <th scope="col" width="35%">Nome <span class="mdi mdi-rename-box"></span></th>
                <th scope="col" width="15%">Cpf <span class="mdi mdi-format-list-numbered-rtl"></span></th>
                <th scope="col" width="5%">Ações <span class="mdi mdi-database"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $NOMEVARIAVELPRINCIPAL = NOMEFUNCAOLISTAR('CAMPOS', 'TABELA');
            if ($NOMEVARIAVELPRINCIPAL) {
                foreach ($NOMEVARIAVELPRINCIPAL as $NOMESEGUNDAVARIAVELPRINCIPAL) {
                    $NOMEVARIAVEL1 = $NOMESEGUNDAVARIAVELPRINCIPAL->$NOMEVARIAVEL1;
                    $NOMEVARIAVEL2 = $NOMESEGUNDAVARIAVELPRINCIPAL->$NOMEVARIAVEL2;
                    $NOMEVARIAVEL3 = $NOMESEGUNDAVARIAVELPRINCIPAL->$NOMEVARIAVEL3;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $NOMEVARIAVEL1 ?></th>
                        <td><?php echo $NOMEVARIAVEL2 ?></td>
                        <td><?php echo $NOMEVARIAVEL3 ?></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                BOTAODEEDICAO
                                BOTAODEEXCLUSAO
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            } else {

                ?>
                <tr>
                    <th scope="row" colspan="6" class="text-center">Dados Não Econtrados!</th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
