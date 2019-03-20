    <?php
        require 'header.php'
    ?>

    <!-- Miga de Pan -->
    <div class="breadcrumbedit">
        <div class="container">
            <nav aria-label="breadcrumb">      
                    <h2 class="">Búsqueda de Colegiado</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="tramites.php">Tramites</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Búsqueda de Colegiado</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contenido-->
    <div class="container" id="busqueda">
        <div class="row">
            <div class="col-md-12">
                <h5>Búsqueda de Colegiados</h5>
                <div id="accordion">
                </div>
            </div>
            <div class=" col-md-4 col-lg-4 ">
                <button v-on:click="mostrar=true" type="button" class="btn btn-outline-dark btn-block">Búsqueda por Código CIP</button>
                <button v-on:click="mostrar=false" type="button" class="btn btn-outline-dark btn-block ">Búsqueda por Nombres y Apellidos</button>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-md-12 col-lg-6">
                <div v-if="mostrar==true">    
                    <form class="mb-3">
                        <label class="lead">Ingrese el número de CIP:</label>
                        <input class="form-control form-control-md" type="text" placeholder="Nro. CIP" aria-label="Search">
                        <button class="btn btn-outline-danger mt-3">Consultar por codigo</button>
                    </form>
                </div>
                <div v-else-if="mostrar==false">
                    <form class="mb-3">
                        <label class="lead">Ingrese el Nombre o Apellido:</label>
                        <input class="form-control form-control" type="text" placeholder="Ingrese un nombre" aria-label="Search">
                        <input class="form-control form-control-md mt-3" type="text" placeholder="Ingrese un apellido" aria-label="Search">
                        <button class="btn btn-outline-danger mt-3">Consultar por Nombre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
    <?php
        require 'footer.php'
    ?>