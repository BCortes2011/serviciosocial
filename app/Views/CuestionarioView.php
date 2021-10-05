

<h1 class="text-center my-4">Registrar Proyecto de Servicio Social</h1>
<form class="panel-1 col-md-10 mx-auto" action="/Cuestionario/next" method="post" validate>

    <!-- Fila 1 -->
    <div class="form-row mx-auto justify-content-center">
        <label class="text-center"><b>Ingresar Matrícula del Alumno:<b></label>
    </div>

    <div class="form-row mx-auto justify-content-center">
        <div class="input-group col-md-4 mx-auto my-auto">
            <input type="text" class="form-control <?php if (\Config\Services::validation()->hasError('inputName')) {echo 'is-invalid';} ?>" name="inputMatricula">
        </div>
    </div>
    <?= \Config\Services::validation()->showError('inputMatricula', 'my_error_list'); ?>
    
    
    <div class="form-row mx-auto justify-content-center">
        <label class="text-center"><b>Seleccionar categoría:<b></label>
    </div>

    <div class="form-row mx-auto justify-content-center">
        <div class="input-group col-md-4 mx-auto my-auto">
            <div class="input-group-prepend">
                <span class="input-group-text" for="inputArea">Área</span>
            </div>
            <select class="form-group custom-select <?php if (\Config\Services::validation()->hasError('inputCategory')) {
                        echo 'is-invalid';
                    } ?>" name="inputArea" required>
                <option value="" disabled hidden selected>Elegir...</option>
                <option value="optativas">Solicitar Optativa</option>
                <option value="proyecto_terminal">Registrar Proyecto</option>
                <option value="seminario">Registrar Seminario</option>
                <option value="recuperacion">Solicitar Recuperación</option>
            </select>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="cotnainer-fluid mx-auto">
            <button type="submit" class="btn btn-success mx-auto text-center my-4">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button>
        </div>
    </div>
</form>