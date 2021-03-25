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
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-navbar ">
            <a class="navbar-brand" href="#">Lic. IngBio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Archivo de Proyectos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Proyectos Terminales</a>
                        <a class="dropdown-item" href="#">Proyectos de Servicio Social</a>
                        <a class="dropdown-item" href="#">Prácticas Profesionales</a>
                        <a class="dropdown-item" href="#">Prácticas Hospitalarias</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Información de la Carrera
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Plan de Estudios</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Boligrama</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Guías para Alumnos</a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Trámites de Servicio Social</a>
                                    <a class="dropdown-item" href="#">Proceso para realizar Prácticas Profesionales</a>
                                    <a class="dropdown-item" href="#">Autorización de UEAs Optativas o Exámenes de Recuperación</a>
                                    <a class="dropdown-item" href="#">Lineamientos de Movilidad</a>
                                    <a class="dropdown-item" href="#">Solicitud de Evaluación Especial</a>
                                    <a class="dropdown-item" href="#">Solicitud de Evaluación en Quinta Oportunidad</a>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Perfil de Ingreso/Egreso</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contactos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Directorio</a>
                            <a class="dropdown-item" href="#">Lista de Egresados</a>                
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Colaboraciones y Convenios</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bolsa de Trabajo
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Hospitales</a>
                            <a class="dropdown-item" href="#">Empresas</a>                
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Bolsa de Trabajo de la OCC</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeria</a>
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