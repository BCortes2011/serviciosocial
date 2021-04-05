

<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="row" id="mainSection">
    <div class="col-sm-9 panel-1"> <!-- Panel Central-->
        <?php
        // echo $profesores[0]['nombres'];
        echo "Profesor(a) responsable: ".$profesor[0]['nombres'].' ';
        echo $profesor[0]['apellidos'].' ';
        echo nl2br("\nEmail: ").$profesor[0]['email'].' ';
        echo nl2br("\nTeléfono: ").$profesor[0]['telefono'].' ';
        echo nl2br("\nCubículo: ").$profesor[0]['cubiculo'].' ';
        ?>
    </div>
    <div class="col-sm-3 panel-right  text-center"> <!-- Panel Derecho-->
        
    </div>
</div>