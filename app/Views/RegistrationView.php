

<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<h1 class="text-center my-4">Registrar Usuario</h1>
<form class="panel-1 px-5 mx-4" action="/Registration/register" method="post" novalidate>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail"><b>Correo Electrónico</b></label>
            <input type="email" class="form-control <?php if(\Config\Services::validation()->hasError('inputEmail')){echo 'is-invalid';} ?>" name="inputEmail">
            <?= \Config\Services::validation()->showError('inputEmail','my_error_list');?>
        </div>
        
        <div class="form-group col-md-4">
            <label for="inputConfirmEmail"><b>Confirmar Correo Electrónico:</b></label>
            <input type="email" class="form-control <?php if(\Config\Services::validation()->hasError('inputConfirmEmail')){echo 'is-invalid';} ?>" name="inputConfirmEmail">
            <?= \Config\Services::validation()->showError('inputConfirmEmail','my_error_list');?>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword"><b>Contraseña:</b></label>
            <input type="password" class="form-control <?php if(\Config\Services::validation()->hasError('inputPassword')){echo 'is-invalid';} ?>" name="inputPassword">
            <?= \Config\Services::validation()->showError('inputPassword','my_error_list');?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputName"><b>Nombre(s):</b></label>
            <input type="text" class="form-control <?php if(\Config\Services::validation()->hasError('inputName')){echo 'is-invalid';} ?>" name="inputName">
            <?= \Config\Services::validation()->showError('inputName','my_error_list');?>
        </div>
        <div class="form-group col-md-4">
            <label for="inputLastName"><b>Apellidos:</b></label>
            <input type="text" class="form-control <?php if(\Config\Services::validation()->hasError('inputLastName')){echo 'is-invalid';} ?>" name="inputLastName">
            <?= \Config\Services::validation()->showError('inputLastName','my_error_list');?>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPhone"><b>Teléfono:</b></label>
            <input type="text" class="form-control <?php if(\Config\Services::validation()->hasError('inputPhone')){echo 'is-invalid';} ?>" name="inputPhone" placeholder="Número Telefónico con LADA...">
            <?= \Config\Services::validation()->showError('inputPhone','my_error_list');?>
        </div>
        <label for="inputCategory""><b>Tipo de Usuario:</b></label>
        <select name="inputCategory" class="form-group mx-2 <?php if(\Config\Services::validation()->hasError('inputCategory')){echo 'is-invalid';} ?>">
            <?php
            foreach ($categories as $c) {
                echo "<option value='" . $c['category_id'] . "'>" . $c['name'] . "</option>";
            }
            ?>
        </select>

        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
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