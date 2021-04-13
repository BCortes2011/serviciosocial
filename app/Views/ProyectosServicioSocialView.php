<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>Archivo de Proyectos Terminales</h1>
</div>
<div class="row pl-5 mx-0" id="mainSection">
    <div class="col-md-9 panel-1 table-responsive ">
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
                <?php foreach ($info as $item): ?>
                    <tr class="entrada-tabla-proyecto">
                    
                        <td><a href="/ServicioSocial/info_proyecto/<?= $item['proyecto_servicio_id'] ?>/<?= $item['area_id'] ?>" > <b><?= esc($item['titulo_proyecto']); ?></a></b></td>

                        <?php foreach ($profesores as $prof): ?>
                            <td><b><?= esc($prof['nombres'].' '.$prof['apellidos']); ?></b></td>
                        <?php endforeach; ?>                      
                        <td><b><?= esc($item['lugar_de_realizacion']); ?></b></td>
                        <td><b><?= esc($item['fecha_de_publicacion']); ?></b></td>
                        <td><b><?= esc($item['estado']); ?></b></td>
                        <td><b><?= esc($item['area_id']); ?></b></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    
    </div>
    <div class="col-sm-2 panel-right text-center mx-auto">
        <!-- Panel Derecho-->
        <ul class="menu-panel-derecho">
            <li>
                <p>Menu</p>
            </li>
            <li>
                <p>Link 1</p>
            </li>
            <li>
                <p>Link 2</p>
            </li>
            <li>
                <p>Link 3</p>
            </li>
            <li>
                <p>Link 4</p>
            </li>
        </ul>
    </div>
</div>