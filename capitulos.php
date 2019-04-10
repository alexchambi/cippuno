<?php
    $pageTitle = "Capítulos";
    require 'header.php'
?>
    <div id="app">
        
        <!-- Miga de Pan de Capitulos -->
        <div v-if="activarcapitulos==1">
            <div class="breadcrumbedit">
                <div class="container">
                    <nav aria-label="breadcrumb">      
                            <h2>Capitulos</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Capitulos</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!--{{$data}}-->

            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3 mb-3" v-for=" cap in capitulos">
                        <div class="card">
                            <a href="#" @click="dato=cap.numero, activarcapitulos=0"><img class="card-img-top img-fluid" v-bind:src="cap.imagen" alt="Card image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Miga de Pan -->
        <div class="breadcrumbedit"v-for="(cap, i) in capitulos" >
            <div class="container"  v-if="dato==cap.numero">
                <nav aria-label="breadcrumb">      
                    <h2>{{cap.nombre}}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="capitulos.php">Capitulos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{cap.nombre}}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Agricolas -->
        <div class="container" v-if="dato==1">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Agrícola Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/agricolas.jpg" alt="Ingenieria Agricola">
                <h5 class="my-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>FRANCISCO CURO CALSIN</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>YOLANDA CERPA QUISPE</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>NORMA OLINDA TTIMPO TICONA</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>EMERSON SALAMANCA NINA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>---</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<!-- Agroindustriales -->
<div class="container" v-else-if="dato==2">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Agroindustrial Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/agronomia.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>MATEO QUISPE CAPAJAÑA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>RAÚL IVON PAUCARA RAMOS</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>JESÚS ARIAS ESCOBAR</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>PABLO USEDO VARGAS</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>PILAR HUANATICO SUAREZ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Agronomos y Zootecnistas -->
        <div class="container" v-else-if="dato==3">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Agronomica y Zootecnia Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/quimica.jpg" alt="Ingenieria Agricola">
                <br>
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>RENATO FREDY TALAVERA SALA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>MAURICIO SUASACA BELIZARIO</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>JESÚS CONDORI BENDITA</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>ALI WILLIAM CANAZA CAYO</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>JIMY PARI QUISPE</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Civiles -->
        <div class="container" v-else-if="dato==4">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Civil Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/geologica.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>RAÚL ROLANDO FLORES MEDINA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>ROGER NEPTALI FLORES COAQUIRA</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>ANGELA JANETH SULLCA ARAPA</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>JUAN CARLOS MOLLEAPAZA CANAZA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>MARIO GUSTAVO CHOQUE QUISPE</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Minas -->
        <div class="container" v-else-if="dato==5">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería de Minas Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/zootecnia.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>NESTOR CHAYÑA CHAYÑA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>LEONIDAS RAMOS FIGUEROA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>YONY VICTOR CALLATA COLLANQUI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Sistemas -->
        <div class="container" v-else-if="dato==6">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería de Sistemas Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/agricolas.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>ORLANDO TITO LLANOS GONZALES</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>ELMER COYLA IDME</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>WIMAR FLORI CAHUATA COLQUE</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>--</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>ALODIA FLORES ARNAO</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>EDITH JACQUELINE ATENCIO CORNEJO</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Economia  -->
        <div class="container" v-else-if="dato==7">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Económica  Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/zootecnia.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>ANTONIO MAMANI ARIAS</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>VLADIMIR MONROY LUQUE</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>LISBETH CANAZA MARIN</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>ANDRÉS VILCA MAMANI</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>SILVIA NOEMI CHAMBILLA ESCOBAR</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Electricistas-->
        <div class="container" v-else-if="dato==8">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Electrica Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/agricolas.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!--  Elextronicos -->
        <div class="container" v-else-if="dato==9">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Electrónica Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/zootecnia.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>HELARF FERRER CALSINA CONDORI</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>MIDWARD PAUL GRIMALDOS ALARCÓN</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>JESÚS VIDAL LOPEZ FLOREZ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Estadisticos -->
        <div class="container" v-else-if="dato==10">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Estadística Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/geologica.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>PERCY HUATA PANCA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>ROBERTO ELVIS ROQUE CLAROS</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>RAUL OSCAR CABRERA MENDOZA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Geologos -->
        <div class="container" v-else-if="dato==11">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Geológica Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/zootecnia.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>ROSENDO SONCCO LANDIO</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>MIGUEL MAYTA CCOPA</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>JUAN CARLOS TINTA MAMNI</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>LUZ FRIDA ACEITUNO COILA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>HAYDEE CHOQUE PONCE</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>JULIO ROBERTO HUANCA MONTESINOS</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>EROCK NAPOLEON CALIZAYA PASTOR</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Mecanicos Electricistas -->
        <div class="container" v-else-if="dato==12">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Mecánica Electrica Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/quimica.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>MATEO ALEJANDRO SALINAS MENA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>JOSE MANUEL RAMOS CUTIPA</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>OMAR CHAIÑA VELASQUEZ</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>EDUARDO ROQUE CUTIPA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>JULIO FREDY CHURA ACERO</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Metalurgistas  -->
        <div class="container" v-else-if="dato==13">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Metalurgica  Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/agricolas.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>LUIS ALBERTO AGUILAR CCALLA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>ERIBERTO TINTAYA MAMANI</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>ALWIN TITO ZAPANA GUILLEN</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>PEDRO PABLO PANDIA ROJAS</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>HENRY RAMOS HUARSAYA</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>EDGARDO MONJE ORDOÑEZ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!--  Pesqueros -->
        <div class="container" v-else-if="dato==14">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Pesquera Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/quimica.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>HILDA QUISPE MAMANI</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>ZARAGO HUAYLLA ARIAS</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>JAIME RAUL BIZARRO MAMANI</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!--  Quimicos  -->
        <div class="container" v-else-if="dato==15">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Química Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/geologica.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>ROCIO GUISELA GÓMEZ PAREDES</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>SANDRA MARICEL GÓMEZ QUEZADA</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>JESÚS DALENS CAMPOS</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>WILBER HUGO FLORES RODRIGUEZ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!--  Topografos -->
        <div class="container" v-else-if="dato==16">
            <div class="jumbotron jumbotron-fluid text-center">
                <h4 class="mb-4">Directiva del Capítulo de Ingeniería Topografica y Agrimensura Gestión 2019 - 2021</h4>
                <img class="img-fluid" src="img/capitulos/quimica.jpg" alt="Ingenieria Agricola">
                <h5 class="m-4">Directiva:</h5>
                <div class="container text-center">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Presidente:</th>
                                <td>DIEGO ARMANDO MARTÍNEZ FRANCO</td>
                            </tr>
                            <tr>
                                <th scope="row">Vice Presidente:</th>
                                <td>ERIK ORLANDO ORTEGA ORTEGA</td>
                            </tr>
                            <tr>
                                <th scope="row">Secretario:</th>
                                <td>EDGARD CARI MACHACA</td>
                            </tr>
                            <tr>
                                <th scope="row">Pro Secretario:</th>
                                <td>RAÚL CORNEJO CALVO</td>
                            </tr>
                            <tr>
                                <th scope="row">Vocal:</th>
                                <td>GUIDO ROBERTO CUTIPA TICONA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        
        

    </div>

<?php
    require 'footer.php'
?>