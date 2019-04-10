    <?php
        $pageTitle = "Servicio de Trámite Documentario";
        require 'header.php'
    ?>

    <!-- Miga de Pan -->
    <div class="breadcrumbedit">
        <div class="container">
            <nav aria-label="breadcrumb">      
                    <h2 class="">Servicio de Trámite Documentario</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tramites</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Servicio de Trámite Documentario</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contenido-->
    <div class="container" id="tramite">
        
        <div class="row">
            <div class="col-lg-12 ">
                <h4 class="text-center m-4">Bienvenido al Sistema de Trámite Documentario en Línea</h4>
            </div>
            <div class="col-lg-4 ">
                <button v-on:click="mostrar=true" type="button" class="btn btn-outline-dark btn-block">INICIO</button>
                <button v-on:click="mostrar=false" type="button" class="btn btn-outline-dark btn-block">SOLICITUD DE TRÁMITE</button>
            
            </div>
                
            <div class="col-lg-6">
                <div v-if="mostrar==true">
                    
                    <h5>Uste puede obtener su solicitud para:</h5>
                    <ul>
                        <li>Certificado de Estudios</li>
                        <li>Certificado de Estudios</li>
                        <li>Certificado de Estudios</li>
                        <li>Certificado de Estudios</li>
                    </ul>

                    <p class="alert alert-info">Nota: Las solicitudes anteriores ya incluyen la CONSTANCIA DE NO ADEUDAR, imprima su solicitud, luego adjunte sus requisitos y presentelo en la oficina correspondiente.</p>
                </div>
                <div v-else-if="mostrar==false">
                    <p>Ingrese su CÓDIGO DE MATRICULA(Ejm:061331) y su APELLIDO PATERNO (Ejm: Flores):</p>
                    <div class="jumbotron">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Código</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Código">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Apellido Paterno</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Apellido Paterno">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-danger btn-block">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        
        </div> 

    </div>
     
    <?php
        require 'footer.php'
    ?>