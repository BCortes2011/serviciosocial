

<h1 class="text-center my-4">Registrar Proyecto de Servicio Social</h1>
<form class="panel-1 col-md-10 mx-auto" action="/ServicioSocial/RegistrarProyecto" method="post" validate>

    <!-- Fila 1 -->
    <div class="form-row mx-auto">
        <div class="form-group col-md-4 mx-auto">
            <label for="inputNombreProyectoServicio"><b>Título del Proyecto:</b></label>
            <input type="text" class="form-control" name="inputNombreProyectoServicio">
        </div>
        
        <div class="form-group col-md-3 mx-auto">
            <label for="inputLugar"><b>Lugar de Realización:</b></label>
            <input type="text" class="form-control" name="inputLugar">
        </div>
        
        <div class="input-group col-md-3 mx-auto my-auto" name="inputAreaGroup">
            <div class="input-group-prepend">
                <span class="input-group-text" for="inputArea">Área</span>
            </div>
            <select class="form-group custom-select <?php if (\Config\Services::validation()->hasError('inputCategory')) {
                                                        echo 'is-invalid';
                                                    } ?>" name="inputArea">
                <option selected>Choose...</option>
                <?php
                foreach ($area as $c) {
                    echo "<option value='" . $c['area_id'] . "'>" . $c['area_nombre'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <!-- Fila 2 -->
    <div class="form-row">
        
        <div class="form-group col-md-5 mx-auto">
            <label for="inputContacto"><b>Nombre de Contacto:</b></label>
            <input type="text" class="form-control" name="inputContact">
        </div>

        <div class="form-group col-md-5 mx-auto">
            <label for="inputEmailContacto"><b>E-mail Contacto:</b></label>
            <input type="text" class="form-control" name="inputEmailContacto">
        </div>
        
    </div>

    <!-- Fila 3 -->
    <div class="form-row">
        <div class="form-group col-md-5 mx-auto">
            <label for="inputNecesidades"><b>Necesidades:</b></label>
            <textarea class="form-control" name="inputNecesidades" rows="4" cols="50"></textarea>
        </div>
        <div class="form-group col-md-5 mx-auto">
            <label for="inputCaracteristicas"><b>Características del estudiante:</b></label>
            <textarea class="form-control" name="inputCaracteristicas" rows="4" cols="50"></textarea>
        </div>
    </div>

    <!-- Fila 4 -->
    <div class="form-row">
        
        <div class="form-group col-md-5 mx-auto">
            <label for="inputObjetivos"><b>Objetivos:</b></label>
            <textarea class="form-control" name="inputObjetivos" rows="4" cols="50"></textarea>
        </div>
        <div class="form-group col-md-5 mx-auto">
            <label for="inputDirigidoA"><b>Dirigdo A:</b></label>
            <textarea class="form-control" name="inputDirigidoA" rows="4" cols="50"></textarea>
        </div>
    </div>


    <div class="row mx-auto">
        <div class="cotnainer-fluid mx-auto">
            <button type="submit" class="btn btn-success mx-auto text-center my-4">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button>
        </div>
    </div>
</form>