<?php   
    require "header.php";
?>
<div class="breadcrumbedit">
    <div class="container">
        <nav aria-label="breadcrumb">      
                <h2 class="">Asamblea Departamental</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="directiva.php">Directiva</a></li>
                <li class="breadcrumb-item active" aria-current="page">Asamblea Departamental</li>
            </ol>
        </nav>
    </div>
</div>
<section class="container">
    <div class="linea_borde text-center">
            <h2 class="h1-responsive font-weight-bold my-4">Asamblea Departamental</h2>
            <h3 class="h2-responsive font-weight-bold my-3">Gestión 2019-2021</h3>
    </div>
    <div class="jumbotron text-center linea_borde">
        <img class="img-fluid rounded" src="img/ConsAsamDecPas/consejodepartamental.png"  alt="Responsive image">
        
    </div>

    <div class="row" id="asambleistas">
        <div class="col-12 col-sm-6 col-lg-4" v-for="datos in asambleista">
            <article class="material-card Red">
                <h2>
                    <span class="text-center">ASAMBLEÍSTA</span>
                    <strong>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Ing. {{datos.nombre}}
                    </strong>
                    <strong>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        Reg. CIP {{datos.regcip}}
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-fluid" src="img/incognito.jpg">
                    </div>
                </div>
                
            </article>
        </div>

    </div>
</section>



<?php   
    require "footer.php";
?>
