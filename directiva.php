<?php
    $pageTitle = "Representantes";
    require 'header.php'
?>

    <!-- Miga de Pan -->
    <div class="breadcrumbedit">
        <div class="container">
            <nav aria-label="breadcrumb">      
                    <h2 class="">Representantes</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="institucionales.php">Institucionales</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Representantes</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">    
        <div class="services">
            <div class="row">
                <div class="card-deck mx-auto">    
                    <div class="col-md-4">
                        <figure class="tarjeta red">
                        <img src="img/representantes.png"/>
                        <figcaption>
                            <h2>Consejo Departamental</h2>
                            <p>Consejo Departamental</p>
                            <a href="consejo.php">Ir</a>
                        </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="tarjeta navy">
                        <img src="img/representantes.png"/>
                        <figcaption>
                            <h2>Asamblea Departamental</h2>
                            <p>Asamblea Departamental</p>
                            <a href="asamblea.php">Ir</a>
                        </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4">
                        <figure class="tarjeta red">
                        <img src="img/representantes.png"/>
                        <figcaption>
                            <h2>Capitulos</h2>
                            <p>Representantes de Capitulos</p>
                            <a href="capitulos.php">Ir</a>
                        </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4">
                        <figure class="tarjeta navy">
                        <img src="img/representantes.png"/>
                        <figcaption>
                            <h2>Decanos Pasados</h2>
                            <p>Decanos Pasados</p>
                            <a href="pastdecanos.php">Ir</a>
                        </figcaption>
                        </figure>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

<?php
    require 'footer.php'
?>