<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>
<div class="container">
    <h2 class="mx-auto"><?php echo 'Proyecto: "'.$info[0]['titulo_proyecto'].'"' ?></h2>
</div>

<div class="row justify-content-md-center" id="mainSection">
    <div class="col-lg-5 panel-1 flex">
        <!-- Panel Central-->
        <div class="row mx-auto">
            <div class="col-lg-6 justify-content-md-center panel-1">
                <div class="col-lg-12 py-3 panel-2">
                    <h5>Dirigido a:</h5>
                    <p class="my-0"><?php echo $info[0]['dirigido_a'] ; ?>
                    </br></br>
                    <h5>Objetivos:</h5>
                    <p class="my-0"><?php echo $info[0]['objetivos'] ; ?>
                    </br></br>
                    <h5>Necesidades:</h5>
                    <p class="my-0"><?php echo $info[0]['necesidades'] ; ?>
                    </br></br>
                    <h5>Lugar de realización:</h5>
                    <p class="my-0"><?php echo $info[0]['lugar_de_realizacion'] ; ?>
                </div>
            </div>
            <div class="col-lg-6 panel-1">
                <div class="col-lg-12 py-3 panel-2">
                    <h5>Características del estudiante:</h5>
                    <p class="my-0"><?php echo $info[0]['caracteristicas_del_estudiante'] ; ?>
                    </br></br>
                    <h5>Contacto:</h5>
                    <p class="my-0"><?php echo $info[0]['contacto_nombre'] ; ?>
                    <p class="my-0"><?php echo $info[0]['contacto_email'] ; ?>
                    </br></br>
                    <h5>Estado:</h5>
                    <p class="my-0"><?php echo $info[0]['estado'] ; ?>
                    </br></br>
                    <h5>Area de interés:</h5>
                    <p class="my-0"><?php echo $area[0]['area_nombre'] ; ?>
                </div>
            </div>
        </div>
    </div>
</div>