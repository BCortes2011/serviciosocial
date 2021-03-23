<?= \Config\Services::validation()->listErrors() ?>

<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<h1 class="text-center my-4">Registrar Usuario</h1>
<form class="panel-1 px-5 mx-4" action="/Registration/register" method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail"><b>Correo Electrónico</b></label>
            <input type="email" class="form-control" name="inputEmail">
        </div>
        <div class="form-group col-md-4">
            <label for="inputConfirmEmail"><b>Confirmar Correo Electrónico:</b></label>
            <input type="email" class="form-control" name="inputConfirmEmail">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword"><b>Contraseña:</b></label>
            <input type="password" class="form-control" name="inputPassword">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputName"><b>Nombre(s):</b></label>
            <input type="text" class="form-control" name="inputName">
        </div>
        <div class="form-group col-md-4">
            <label for="inputLastName"><b>Apellidos:</b></label>
            <input type="text" class="form-control" name="inputLastName">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPhone"><b>Teléfono:</b></label>
            <input type="text" class="form-control" name="inputPhone" placeholder="Número Telefónico con LADA...">
        </div>
        <label for="inputCategory""><b>Tipo de Usuario:</b></label>
        <select name="inputCategory" class="form-group mx-2">
            <?php
            foreach ($categories as $c) {
                echo "<option value='" . $c['category_id'] . "'>" . $c['name'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="row mx-auto">
        <div class="cotnainer-fluid mx-auto">
            <button type="submit" class="btn btn-success mx-auto text-center">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button>
        </div>
    </div>
</form>