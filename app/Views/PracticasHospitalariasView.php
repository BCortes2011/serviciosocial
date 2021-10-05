<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>Archivo de Prácticas Hospitalarias</h1>
</div>
<div class="row px-5 mx-0" id="mainSection">
    <div class="col-md-12 panel-1 table-responsive ">
        <!-- Panel Central-->
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre del Hospital</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Fecha de Publicación</th>
                    <th scope="col">Tipo de Hospital</th>
                    <th scope="col">Alcaldía</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($info as $item):
            
            ?>
                    <tr class="entrada-tabla-proyecto">
                    
                        <td><a href="/PracticaHospitalaria/info_proyecto/<?= $item['practica_hospitalaria_id'] ?>/<?= $item['alcaldia_id'] ?>" > <b><?= esc($item['nombre_hospital']); ?></a></b></td>            
                        <td><b><?= esc($item['lugar_de_realización']); ?></b></td>
                        <td><b><?= esc($item['contacto_nombre']); ?></b></td>
                        <td><b><?= esc($item['fecha_de_publicacion']); ?></b></td>
                        <td><b><?= esc($item['estado']); ?></b></td>
                        <td><b><?= esc($item['alcaldia_id']); ?></b></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>