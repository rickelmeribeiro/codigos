<div class="modal fade" id="IDDOTARGET" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Pizza</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        #Cadastro de Pizza
                    </div>
                    <div class="card-body">
                        <form name="NOMEDOFROMULARIODECADASTRO" id="NOMEDOFROMULARIODECADASTRO" method="post" action="#">
                            <div class="mb-3">
                                <label for="NOMEDOINPUT1" class="form-label">NOMEDOINPUT1:</label>
                                <input type="text" name="NOMEDOINPUT1" class="form-control" id="NOMEDOINPUT1"
                                       aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <select class="form-select" id="NOMEDOSELECT1" name="NOMEDOSELECT1"
                                        aria-label="NOMEDOSELECT1">
                                    <option value="Pequena" selected>Pequena</option>
                                    <option value="Média">Média</option>
                                    <option value="Grande">Grande</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="NOMEDOINPUT2" class="form-label">Valor:</label>
                                <input type="text" name="NOMEDOINPUT2" class="form-control" id="NOMEDOINPUT2">
                            </div>
                            <button type="submit" id="NOMEDOBOTAOADD" class="btn btn-primary">Cadastrar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
