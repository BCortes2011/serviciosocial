<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>Lista de Optativas para el trimestre actual</h1>
</div>

<form method="post" action="/Cuestionario/optativas">
    <div class="row px-5 mx-0 my-0 justify-content-center" id="mainSection">
        <div class="col-md-6 panel-1 table-responsive">
            <!-- Panel Central-->
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Seleccionar</th>
                        <th scope="col">Clave UEA</th>
                        <th scope="col">Nombre de UEA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_optativas as $item): ?>
                        <tr class="entrada-tabla-proyecto">
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" value="<?php echo $item['optativa_id'] ?>"
                                        class="form-check-input position-static" name="clave_uea[]">
                                </div>
                            </td>
                            <td><b><?= esc($item['clave_uea']); ?></b></td>
                            <td><b><?= esc($item['nombre']); ?></b></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="cotnainer-fluid mx-auto">
            <button type="submit" class="btn btn-success mx-auto text-center my-4">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button>
        </div>
    </div>
</form>
