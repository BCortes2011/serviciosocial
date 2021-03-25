

<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<h1 class="text-center my-4">Registrar Usuario</h1>
<form class="panel-1 px-5 mx-4" action="/Users/register" method="post" validate>
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
            <input type="password" minlength="8" oninvalid="this.setCustomValidity('La Contraseña debe de contener al menos 8 caracteres.')" oninput="this.setCustomValidity('')" class="form-control <?php if(\Config\Services::validation()->hasError('inputPassword')){echo 'is-invalid';} ?>" name="inputPassword">
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
            <input type="tel" minlength="10" oninvalid="this.setCustomValidity('El teléfono debe de contener mínimo 10 caracteres')" class="form-control <?php if(\Config\Services::validation()->hasError('inputPhone')){echo 'is-invalid';} ?>" name="inputPhone" placeholder="Número Telefónico con LADA...">
            <?= \Config\Services::validation()->showError('inputPhone','my_error_list');?>
        </div>
        

        <div class="input-group col-sm-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputCategory">Tipo De Usuario</label>
            </div>
            <select class="form-groud custom-select <?php if(\Config\Services::validation()->hasError('inputCategory')){echo 'is-invalid';} ?>" name="inputCategory">
                <option selected>Choose...</option>
                <?php
                    foreach ($categories as $c) {
                        echo "<option value='" . $c['category_id'] . "'>" . $c['name'] . "</option>";
                    }
                ?>
            </select>
            <?= \Config\Services::validation()->showError('inputCategory','my_error_list');?>
        </div>
        
    </div>
    <div class="row mx-auto">
        <div class="cotnainer-fluid mx-auto">
            <button type="submit" class="btn btn-success mx-auto text-center my-4">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button>
        </div>
    </div>
</form>