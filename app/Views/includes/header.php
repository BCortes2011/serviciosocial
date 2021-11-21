<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Summernote -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- Summernote End -->

    <link rel="stylesheet" href="/assets/css/home.css">

    <title><?= $title?></title>
</head>
    <body>
    <!-- Comienza la barra de navegación -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-navbar ">
            <a class="navbar-brand" href="/Test">UAMI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Archivo de Proyectos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/ProyectoTerminal">Proyectos Terminales</a>
                        <a class="dropdown-item" href="/ServicioSocial">Proyectos de Servicio Social</a>
                        <a class="dropdown-item" href="/PracticaProfesional">Prácticas Profesionales</a>
                        <a class="dropdown-item" href="/PracticaHospitalaria">Prácticas Hospitalarias</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Información de la Carrera
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" target="_blank" href="http://www.uam.mx/licenciaturas/pdfs/22_10_Licenciatura_en_Ingenieria_Biomedica_IZT.pdf">Plan de Estudios</a>
                            </li>
                            <li>
                                <a class="dropdown-item" target="_blank" href="https://docs.google.com/viewerng/viewer?url=https://cbi.izt.uam.mx/coddaa/images/licenciaturas/mapas/Biomedica.pdf">Boligrama</a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item" href="#">Perfil de Ingreso/Egreso ewras</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guías</a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Trámites de Servicio Social</a>
                                <a class="dropdown-item" href="#">Proceso para realizar Prácticas Profesionales</a>
                                <a class="dropdown-item" href="#">Autorización de UEAs Optativas o Exámenes de Recuperación</a>
                                <a class="dropdown-item" href="#">Lineamientos de Movilidad</a>
                                <a class="dropdown-item" href="#">Solicitud de Evaluación Especial</a>
                                <a class="dropdown-item" href="#">Solicitud de Evaluación en Quinta Oportunidad</a>
                            </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contactos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Directorio</a>
                        </div>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="/Cuestionario">Cuestionario</a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="/Users">Iniciar Sesión <span class="sr-only">(current)</span></a>
                        </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="/Users/register">Crear Cuenta <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>