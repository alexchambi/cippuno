    <?php
        $pageTitle = "Documentos Normativos";
        require 'header.php'
    ?>
    
    <!-- Miga de Pan -->
    <div class="breadcrumbedit">
        <div class="container">
            <nav aria-label="breadcrumb">      
                    <h2 class="">Documentos Normativos</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="institucionales.php">Institucionales</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Documentos Normativos</li>
                </ol>
            </nav>
        </div>
    </div>
    

    <div class="container">
        <div class="row" id="docs">
            <div class="col-md-12 my-12">
                <h5>Documentos Normativos</h5>
                <div id="accordion">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button v-on:click="clickleyes++" class="btn btn-outline-dark btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div v-if="clickleyes%2==0"><i class="fa fa-plus-square"></i> Leyes</div>
                                <div v-else><i class="fa fa-minus-square"></i> Leyes</div>
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="media m-4">
                                        <a href="docs/ley-28858.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logodata.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/ley-28858.pdf" target="_blank" ><h5>Ley del Profesional de Ingeniería (Ley Nº 28858)</h5></a>
                                            Ley del Profesional de Ingeniería importante para conocer nuestros derechos y obligaciones.
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/ley_16053.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logodata.png" width="90px;" alt="Generic placeholder image"></a>
                                    <div class="media-body">
                                            <a href="docs/ley_16053.pdf" target="_blank" ><h5>Ley 16053</h5></a>
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/Ley_28858.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logodata.png" width="90px;" alt="Generic placeholder image"></a>
                                    <div class="media-body">
                                        <a href="docs/Ley_28858.pdf" target="_blank" ><h5>Reglamento de la ley Nro. 28858, ley que complementa la ley Nro. 16053</h5></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        
                        <div class="card-header" id="headingSimbolos">
                            <button v-on:click="clicksimbolos++" class="btn btn-outline-dark btn-block collapsed" data-toggle="collapse" data-target="#collapseSimbolos" aria-expanded="false" aria-controls="collapseSimbolos">
                                <div v-if="clicksimbolos%2==0"><i class="fa fa-plus-square"></i> Simbolo</div>
                                <div v-else><i class="fa fa-minus-square"></i> Simbolo</div>
                            </button>
                        </div>
                        <div id="collapseSimbolos" class="collapse" aria-labelledby="headingSimbolos" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="media m-4">
                                    <a href="docs/himno-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logodata.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/himno-cip.pdf" target="_blank" ><h5>Letras del Himno del CIP</h5></a>
                                            Letras del Himno del CIP
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-header" id="headingTwo">
                            <button v-on:click="clickestatutos++" class="btn btn-outline-dark btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div v-if="clickestatutos%2==0"><i class="fa fa-plus-square"></i> Estatutos</div>
                                <div v-else><i class="fa fa-minus-square"></i> Estatutos</div>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="media m-4">
                                        <a href="docs/estatuto-2018.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/estatuto-2018.pdf" target="_blank" ><h5>Estatuto CIP</h5></a>
                                            Estatuto CIP
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header" id="headingReglamentos">
                        <button v-on:click="clickreglamentos++" class="btn btn-outline-dark btn-block collapsed" data-toggle="collapse" data-target="#collapseReglamentos" aria-expanded="false" aria-controls="collapseReglamentos">
                            <div v-if="clickreglamentos%2==0"><i class="fa fa-plus-square"></i> Reglamentos</div>
                            <div v-else><i class="fa fa-minus-square"></i> Reglamentos</div>
                        </button>
                        </div>
                        <div id="collapseReglamentos" class="collapse" aria-labelledby="headingReglamentos" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="media m-4">
                                        <a href="docs/1-código-deontológico.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                        <a href="docs/1-código-deontológico.pdf" target="_blank" ><h5>Código Deontológico</h5></a>
                                        Código Deontológico
                                    </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/1-reglamento_de_sesiones_del_congreso_nacional_de_consejos_departamentales_cncd.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/1-reglamento_de_sesiones_del_congreso_nacional_de_consejos_departamentales_cncd.pdf" target="_blank" ><h5>Sesiones de Congreso Nacional de Consejos Departamentales</h5></a>
                                            Sesiones de Congreso Nacional de Consejos Departamentales
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/3-reglamento-de-consejo-nacional.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/3-reglamento-de-consejo-nacional.pdf" target="_blank" ><h5>Reglamento de Consejo Nacional</h5></a>
                                            Reglamento de Consejo Nacional
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/4-asamblea-departamental-y-consejos-departamentales.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/4-asamblea-departamental-y-consejos-departamentales.pdf" target="_blank" ><h5>Asamblea Departamental y Consejos Departamentales</h5></a>
                                            Asamblea Departamental y Consejos Departamentales
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/5-consejo-regional-del-exterior-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/5-consejo-regional-del-exterior-del-cip.pdf" target="_blank" ><h5>Consejo Regional del Exterior del CIP</h5></a>
                                            Consejo Regional del Exterior del CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/6-capítulos-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/6-capítulos-del-cip.pdf" target="_blank" ><h5>Capítulos del CIP</h5></a>
                                            Capítulos del CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/7-comités-locales.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/7-comités-locales.pdf" target="_blank" ><h5>Comités Locales</h5></a>
                                            Comités Locales
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/8-comités-de-centro-de-trabajo-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/8-comités-de-centro-de-trabajo-cip.pdf" target="_blank" ><h5>Comités de Centro de Trabajo CIP</h5></a>
                                            Comités de Centro de Trabajo CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/9-comisiones-de-defensa-profesional.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/9-comisiones-de-defensa-profesional.pdf" target="_blank" ><h5>Comités de Defensa Profesional</h5></a>
                                            Comités de Defensa Profesional
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/10-otros-centros-especializados-de-ingeniería.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/10-otros-centros-especializados-de-ingeniería.pdf" target="_blank" ><h5>Otros Centros Especializados de Ingenieria</h5></a>
                                            Otros Centros Especializados de Ingenieria
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/11-acreditación-de-supervisores-munic-de-obras.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/11-acreditación-de-supervisores-munic-de-obras.pdf" target="_blank" ><h5>Acreditación de Supervisores Municipales de Obras</h5></a>
                                            Acreditación de Supervisores Municipales de Obras
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/12-reglamento-de-colegiación.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/12-reglamento-de-colegiación.pdf" target="_blank" ><h5>Reglamento de Colegiación</h5></a>
                                            Reglamento de Colegiación
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/13-reglamento-de-elecciones-generales.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/13-reglamento-de-elecciones-generales.pdf" target="_blank" ><h5>Reglamento de Elecciones Generales</h5></a>
                                            Reglamento de Elecciones Generales
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/14-órganos-de-control-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/14-órganos-de-control-del-cip.pdf" target="_blank" ><h5>Órganos de Control del CIP</h5></a>
                                            Órganos de Control del CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/15-comisiones-de-colegiación.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/15-comisiones-de-colegiación.pdf" target="_blank" ><h5>Comisiones de Colegiación</h5></a>
                                            Comisiones de Colegiación
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/16-reglamamento-del-iepi.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/16-reglamamento-del-iepi.pdf" target="_blank" ><h5>Reglamento del IEP</h5></a>
                                            Reglamento del Instituto de Estudios Profesionales de Ingenieria del CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/17-instituto-de-servicios-sociales-iss.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/17-instituto-de-servicios-sociales-iss.pdf" target="_blank" ><h5>Instituto de Servicios Sociales - ISS</h5></a>
                                            Instituto de Servicios Sociales - ISS
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/18-ong-ingeniería-en-el-perú-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/18-ong-ingeniería-en-el-perú-del-cip.pdf" target="_blank" ><h5>ONG Ingeniería en el Perú del CI</h5></a>
                                            ONG Ingeniería en el Perú del CI
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                            <a href="docs/19-instituto-de-prospectiva-y-desarrollo-estratégico.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                            <div class="media-body">
                                                <a href="docs/19-instituto-de-prospectiva-y-desarrollo-estratégico.pdf" target="_blank" ><h5>Instituto de Prospectiva y Desarrollo Estrategico del CIP</h5></a>
                                                Instituto de Prospectiva y Desarrollo Estrategico del CIP
                                            </div>
                                        </li>
                                    <li class="media m-4">
                                        <a href="docs/20-instituto-plan-perú-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/20-instituto-plan-perú-del-cip.pdf" target="_blank" ><h5>Instituto Plan Perú del CIP</h5></a>
                                            Instituto Plan Perú del CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/21-instituto-de-relaciones-internacionales-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/21-instituto-de-relaciones-internacionales-del-cip.pdf" target="_blank" ><h5>Instituto de Relaciones Internacionales del CIP</h5></a>
                                            Instituto de Relaciones Internacionales del CIP
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/22-reglamento-de-premiación-y-condecoraciones.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/22-reglamento-de-premiación-y-condecoraciones.pdf" target="_blank" ><h5>Reglamento de Premiación y Condecoraciones</h5></a>
                                            Reglamento de Premiación y Condecoraciones
                                        </div>
                                    </li>
                                    <li class="media m-4">
                                        <a href="docs/23-reglamento-de-transferencias-del-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                        <div class="media-body">
                                            <a href="docs/23-reglamento-de-transferencias-del-cip.pdf" target="_blank" ><h5>Reglamento de Transferencias del CIP</h5></a>
                                            Reglamento de Transferencias del CIP
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                            <div class="card-header" id="headingCodigo">
                            <button v-on:click="clickcodigos++" class="btn btn-outline-dark btn-block collapsed" data-toggle="collapse" data-target="#collapseCodigo" aria-expanded="false" aria-controls="collapseCodigo">
                            <div v-if="clickcodigos%2==0"><i class="fa fa-plus-square"></i> Código Deontológico</div>
                            <div v-else><i class="fa fa-minus-square"></i> Código Deontológico</div>
                            </button>
                        
                            </div>
                            <div id="collapseCodigo" class="collapse" aria-labelledby="headingCodigo" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="media m-4">
                                            <a href="docs/1-código-deontológico-cip.pdf" target="_blank" ><img class="mr-3 img-fluid" src="img/logopdf.png" width="90px;" alt="Generic placeholder image"></a>
                                            <div class="media-body">
                                                <a href="docs/1-código-deontológico-cip.pdf" target="_blank" ><h5>Código Deontológico</h5></a>
                                                Código Deontológico
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <?php
        require 'footer.php'
    ?>