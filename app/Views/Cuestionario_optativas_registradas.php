<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>OPTATIVAS REGISTRADAS!</h1>
</div>
<?php 
    $ueas_seleccionadas = explode('-',$_POST['lista_optativas']);
?>
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
                        endforeach; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
