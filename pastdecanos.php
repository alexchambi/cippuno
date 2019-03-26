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
<div class="container">
    <div class="linea_borde text-center">
        <h2 class="h1-responsive font-weight-bold my-4">Ex Decanos del CIP CD Puno</h2>
        <hr>
    </div>

    <div class="container text-center my-4" id="decanospas">
        <div class="row">
            <div class="card-deck mx-auto col-xs-12 col-sm-6 col-md-4 mb-5" v-for="decan in decano">
                <div class="card ">
                    <img class="card-img-top" v-bind:src="decan.img" alt="Card image cap">
                    <div class="card-body bg-danger text-white text-center">
                        <h4 class="card-text">{{decan.tipo}}</h4>
                        <h5 class="card-text">Ing. {{decan.nombre}}</h5>
                        <h6><i class="fa fa-circle" aria-hidden="true"></i>
                            Reg. CIP {{decan.regcip}}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php   
    require "footer.php";
?>
