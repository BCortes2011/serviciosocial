<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>Archivo de PracticasProfesionales</h1>
</div>
<div class="row px-5 mx-0" id="mainSection">
    <div class="col-md-12 panel-1 table-responsive ">
        <!-- Panel Central-->
        <table class="table table-striped table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título del Proyecto</th>
                    <th scope="col">Profesor(es) Encargado(s)</th>
                    <th scope="col">Lugar de Realización</th>
                    <th scope="col">Fecha de Publicación</th>
                    <th scope="col">Estado del proyecto</th>
                    <th scope="col">Área de Interés</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            
            foreach ($info as $item): ?>
                    <tr class="entrada-tabla-proyecto">
                    
                        <td><a href="/ProyectoTerminal/info_proyecto/<?= $item['practica_profesional_id'] ?>/<?= $item['area_de_interes'] ?>" > <b><?= esc($item['nombre']); ?></a></b></td>

                        <?php foreach ($profesores as $prof): ?>
                            <td><b><?= esc($prof['nombres'].' '.$prof['apellidos']); ?></b></td>
                        <?php endforeach; ?>                      
                        <td><b><?= esc($item['lugar_de_realización']); ?></b></td>
                        <td><b><?= esc($item['fecha_de_publicacion']); ?></b></td>
                        <td><b><?= esc($item['estado']); ?></b></td>
                        <td><b><?= esc($item['area_id']); ?></b></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>