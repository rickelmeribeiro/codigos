<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-3">
            <div class="card text-center">
                <div class="card-header bg-dark text-white">
                    Area ADM
                </div>
                <div class="card-body">
                    <form action="cadastrar.php" name="frmLogin" id="frmLogin" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome"
                                   aria-describedby="emailHelp">
                        </div> <div class="mb-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" name="cpf" id="cpf"
                                   aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary"><span class="mdi mdi-door-open"></span>Entrar
                        </button>
                    </form>
                </div>
                <div class="card-footer text-body-secondary">
                    <?php echo date('d-m-Y H:i:s'); ?>
                </div>
            </div>
        </div>
    </div>
</div>