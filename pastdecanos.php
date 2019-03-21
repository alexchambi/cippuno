<?php   
    require "header.php";
?>
<div class="breadcrumbedit">
    <div class="container">
        <nav aria-label="breadcrumb">      
                <h2 class="">Decanos Pasados</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="directiva.php">Directiva</a></li>
                <li class="breadcrumb-item active" aria-current="page">Decanos Pasados</li>
            </ol>
        </nav>
    </div>
</div>
<section class="container">
    <div class="linea_borde text-center">
            <h2 class="h1-responsive font-weight-bold my-4">Decanos Pasados</h2>
            <h3 class="h2-responsive font-weight-bold my-3">Gestión 2019-2021</h3>
    </div>

    <div class="row container my-4" id="decanospas">
        <div class="col-12 col-sm-6 col-lg-4" v-for="decan in decano">
            <article class="material-card Red">
                <h2>
                    <span class="text-center">{{decan.tipo}}</span>
                    <strong>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Ing. {{decan.nombre}}
                    </strong>
                    <strong>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        Reg. CIP {{decan.regcip}}
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-fluid pl-2" v-bind:src="decan.img" style="height:100%; width:90%;">
                    </div>
                </div>
                
            </article>
        </div>

    </div>
</section>



<?php   
    require "footer.php";
?>
