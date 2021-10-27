<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="container-fluid text-center my-3">
    <h1>Información del Proyecto a Registrar</h1>
</div>
<form method="post" action="/Cuestionario/confirmarProyecto">
<div class="row justify-content-md-center" id="mainSection">
    <div class="col-lg-5 panel-1 flex">
        <!-- Panel Central-->
        <div class="row mx-auto">
            <div class="col-lg-6 justify-content-md-center panel-1">
                <div class="col-lg-12 py-3 panel-2">
                    <h5>Dirigido a:</h5>
                    <p class="my-0"><?php echo $dirigidoA; ?>
                    <input type="hidden" id="dirigidoA" name="dirigidoA" value="<?= $dirigidoA?>">
                    </br></br>
                    <h5>Objetivos:</h5>
                    <p class="my-0"><?php echo $objetivos ; ?>
                    <input type="hidden" id="objetivos" name="objetivos" value="<?= $objetivos?>">
                    </br></br>
                    <h5>Necesidades:</h5>
                    <p class="my-0"><?php echo $necesidades ; ?>
                    <input type="hidden" id="necesidades" name="necesidades" value="<?= $necesidades?>">
                    </br></br>
                    <h5>Lugar de realización:</h5>
                    <p class="my-0"><?php echo $lugar; ?>
                    <input type="hidden" id="lugar" name="lugar" value="<?= $lugar?>">
                </div>
            </div>
            <div class="col-lg-6 panel-1">
                <div class="col-lg-12 py-3 panel-2">
                    <h5>Características del estudiante:</h5>
                    <p class="my-0"><?php echo $caracteristicas; ?>
                    <input type="hidden" id="caract" name="caract" value="<?= $caracteristicas?>">
                    </br></br>
                    <h5>Contacto:</h5>
                    <p class="my-0"><?php echo $contacto; ?>
                    <p class="my-0"><?php echo $emailContacto; ?>
                    <input type="hidden" id="contacto" name="contacto" value="<?= $contacto?>">
                    <input type="hidden" id="emailContacto" name="emailContacto" value="<?= $emailContacto?>">
                    </br></br>
                    <h5>Estado:</h5>
                    <p class="my-0">En proceso</P>
                    </br></br>
                    <h5>Area de interés:</h5>
                    <p class="my-0"><?php echo $area; ?>
                    <input type="hidden" id="area" name="area" value="<?= $area?>">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-auto">
    <div class="cotnainer-fluid mx-auto">
            <button type="submit" href="login.php" class="btn btn-success mx-auto text-center my-4">Enviar</button>
            <button type="cancel" class="btn btn-success mx-auto text-center">Cancelar</button> 
    </div>
</div>
</form>
