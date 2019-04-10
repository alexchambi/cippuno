<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle ?></title>
    <!--link rel="stylesheet" href="css/bootstrap.min.css"-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Lato|Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.css">

</head>
<body>


    <!-- Menu Top-->
    <div class="nav-top">
        <div class="container">
            <div class="navbar">
                <ul class="list-inline font-weight-bold">
                    <li class="list-inline-item"><a class="d-none d-md-block" href="index.php">Home</a></li>
                    <li class="list-inline-item"><a href="contacto.php">Contacto</a></li>
                    <li class="list-inline-item"><a href="mapa.php">Mapa del Sitio</a></li>
                    <li class="list-inline-item"><a href="servicios.php">Servicios CIP</a></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com/CipPuno" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a class="d-none d-md-block" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logocip.png" alt="logoweb" class="d-none d-md-none d-lg-block">
                <strong class="d-lg-none">CIP PUNO</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                       <a class="nav-link" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="institucionales.php" id="institucionales" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Institucionales</a>
                        <ul class="dropdown-menu" aria-labelledby="institucionales">
                            <li><a class="dropdown-item" href="historia.php">Reseña Histórica</a></li>
                            <li><a class="dropdown-item" href="vision.php">Misión y Visión</a></li>   
                            <li><a class="dropdown-item" href="directiva.php">Representantes</a></li>
                            <li><a class="dropdown-item" href="oficinas.php">Oficinas</a></li>
                            <li><a class="dropdown-item" href="documentosnormativos.php">Documentos Normativos</a></li>   
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="capitulos.php" id="capitulos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Capítulos</a>
                        <ul class="dropdown-menu multi-column columns-2" aria-labelledby="capitulos">
                            <div class="row" id="">
                                <div class="col-sm-6">
                                    <ul class=" multi-column-dropdown">
                                        <li><a class="dropdown-item" @click="dato=1, activarcapitulos=0" href="capitulos.php">Agrícolas</a></li>
                                        <li><a class="dropdown-item" @click="dato=2, activarcapitulos=0" href="capitulos.php">Agroindustriales</a></li>
                                        <li><a class="dropdown-item" @click="dato=3, activarcapitulos=0" href="capitulos.php">Agrónomos y Zootecnistas</a></li>
                                        <li><a class="dropdown-item" @click="dato=4, activarcapitulos=0" href="capitulos.php">Civiles</a></li>
                                        <li><a class="dropdown-item" @click="dato=5, activarcapitulos=0" href="capitulos.php">De Minas</a></li>
                                        <li><a class="dropdown-item" @click="dato=6, activarcapitulos=0" href="capitulos.php">De Sistemas</a></li>
                                        <li><a class="dropdown-item" @click="dato=7, activarcapitulos=0" href="capitulos.php">Economistas</a></li>
                                        <li><a class="dropdown-item" @click="dato=8, activarcapitulos=0" href="capitulos.php">Electricistas</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a class="dropdown-item" @click="dato=9, activarcapitulos=0" href="capitulos.php">Electrónicos</a></li>
                                        <li><a class="dropdown-item" @click="dato=10, activarcapitulos=0" href="capitulos.php">Estadísticos</a></li>
                                        <li><a class="dropdown-item" @click="dato=11, activarcapitulos=0" href="capitulos.php">Geólogos</a></li>
                                        <li><a class="dropdown-item" @click="dato=12, activarcapitulos=0" href="capitulos.php">Mecánicos Eléctricos</a></li>
                                        <li><a class="dropdown-item" @click="dato=13, activarcapitulos=0" href="capitulos.php">Metalurgistas</a></li>
                                        <li><a class="dropdown-item" @click="dato=14, activarcapitulos=0" href="capitulos.php">Pesqueros</a></li>
                                        <li><a class="dropdown-item" @click="dato=15, activarcapitulos=0" href="capitulos.php">Químicos</a></li>
                                        <li><a class="dropdown-item" @click="dato=16, activarcapitulos=0" href="capitulos.php">Topógrafos y Agrimensura</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="tramite.php" id="tramites" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trámites</a>
                        <ul class="dropdown-menu" aria-labelledby="tramites">
                            <li><a class="dropdown-item" href="tramite.php">Trámite Documentario</a></li>
                            <li><a class="dropdown-item" href="buscarcolegiado.php">Búsqueda de Colegiado</a></li>
                            <li><a class="dropdown-item" href="colegiatura.php">Colegiatura</a></li>    
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="prensa.php" id="prensa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prensa</a>
                        <ul class="dropdown-menu" aria-labelledby="prensa">
                            <li><a class="dropdown-item" href="comunicados.php">Comunicados</a></li>
                            <li><a class="dropdown-item" href="resoluciones.php">Resoluciones</a></li>
                            <li><a class="dropdown-item" href="pronunciamientos.php">Pronunciamientos</a></li>    
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

