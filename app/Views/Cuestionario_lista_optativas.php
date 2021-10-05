<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>Lista de Optativas Seleccionadas</h1>
</div>

<form method="post" action="/Cuestionario/confirmarOptativas">
    <div class="row px-5 mx-0 my-0 justify-content-center" id="mainSection">
        <div class="col-md-6 panel-1 table-responsive">
            <!-- Panel Central-->
            <table class="table table-striped table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Clave UEA</th>
                        <th scope="col">Nombre de UEA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $array_optativas = $ueas_seleccionadas;
                    foreach ($ueas_seleccionadas as $id_uea_seleccionada): 
                        foreach($lista_optativas as $uea):
                            if($id_uea_seleccionada == $uea["optativa_id"]){
                    ?>

                                <tr class="entrada-tabla-proyecto">
                                    <td><b><?= esc($uea['clave_uea']); ?></b></td>
                                    <td><b><?= esc($uea['nombre']); ?></b></td>
                                </tr>
                        <?php
                            }
                        endforeach;
                    endforeach; ?>
                </tbody>
            </table>
            <?php echo "<input type='hidden' name='lista_optativas' id='hiddenField' value=".implode('-', $array_optativas)." />";?>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="cotnainer-fluid mx-auto">
            <button type="submit" class="btn btn-success mx-auto text-center my-4">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button>
        </div>
    </div>
</form>
