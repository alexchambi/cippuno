    <?php
        require 'header.php'
    ?>

    <!--Carousel-->
    <div class="carousel slide" data-ride="carousel" id="carouselcip" >
        <ol class="carousel-indicators">
            <li data-target="#carouselcip" data-slide-to="0" class="active"></li>
            <li data-target="#carouselcip" data-slide-to="1"></li>
            <li data-target="#carouselcip" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/banner1.png" class="img-fluid"> 
                <div class="animated zoomIn carousel-nota-izq d-none d-md-block " style="animation-delay: 1s">
                    <h3 class="animated swing c-heading" style="animation-delay: 2s">COLEGIO DE INGENIEROS DEL PERU<h3>
                    <h5 class="animated shake c-heading" style="animation-delay: 3s" >Consejo Departamental Puno</h5>
                </div>
                <div class="carousel-link-izq d-none d-md-block animated bounceInDown" style="animation-delay: 4s">
                    <a href="#">Informacion</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/banner2.png" class="d-block img-fluid">
                <div class="animated bounceInUp carousel-nota-cen d-none d-md-block" style="animation-delay: 1s">
                    <h3 class="animated rubberBand c-heading " style="animation-delay: 2s">Lago Titicaca<h3>
                    <h5 class="animated tada c-heading " style="animation-delay: 3s">Puno</h5>
                </div>
                <div class="carousel-link-cen d-none d-md-block animated bounceInDown" style="animation-delay: 4s">
                    <a href="#">Informacion</a>
                </div>
            </div>
            
            <div class="carousel-item animated ">
                <img src="img/banner3.png" class="d-block img-fluid">
                <div class="animated bounceInDown carousel-nota-der d-none d-md-block" style="animation-delay: 1s">
                    <h3 class="animated rubberBand c-heading " style="animation-delay: 2s">AUDITORIO DEL COLEGIO DE INGENIEROS<h3>
                    <h5 class="animated tada c-heading " style="animation-delay: 3s">Lima</h5>
                </div>
                <div class="carousel-link-der d-none d-md-block animated bounceInDown" style="animation-delay: 4s">
                    <a href="#">Informacion</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselcip" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselcip" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Menu de Carousel-->
    <div class="menu-carousel text-center " id="menucarousel">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item" v-for="lis in menus"><a :href="lis.link"><i :class="lis.icon"></i> {{lis.nombre}}</a></li>
            </ul>
        </div>
    </div>


    <!--        Contenido               -->

    <!-- EVENTOS CIP-->
    <div class="eventos">
        <div class="container">
            <h1 class="text-center font-weight-bold">Eventos CIP</h1>
            
            <div id="eventos" class="carousel slide" data-ride="carousel">
                <div class="card-deck carousel-inner row w-100 mx-auto">    
                    <div class="carousel-item col-md-6 col-lg-4 active">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="img/eventos/cursodevidautil.jpg" alt="Card image cap">
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="img/eventos/maccaferri.jpg" alt="Card image cap">
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="img/eventos/pavimentos.png" alt="Card image cap">
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="img/eventos/sistemabombeo.jpg" alt="Card image cap">
                            </a>
                        </div>
                    </div>
                </div>

          <div class="container">
            <div class="row">
              <div class="col-12 text-center mt-4">
                <a class="btn btn-outline-secondary mx-1 anterior" href="javascript:void(0)" title="Previous"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-outline-secondary mx-1 siguiente" href="javascript:void(0)" title="Next"><i class="fa fa-lg fa-chevron-right"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>

        <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">×</button>
                        <h3 class="modal-title"></h3>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Eventos -->

    <div class="actualidad">
        <div class="container mx-auto center">
            <h1 class="text-center font-weight-bold">Actualidad</h1>

            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="#citacion" data-toggle="modal">
                            <img class="img-thumbnail" src="img/actualidad/comunicado01.png" alt="Citacion">
                        </a>
                    </div>
                    <div class="modal fade bd-example-modal-lg" id="citacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center font-italic" id="exampleModalLabel">CITACIÓN N° 01-2019-CIP-CD-PUNO</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="img-fluid mx-auto d-block" src="img/actualidad/citacion001.jpg" alt="CitacionCIP">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>

        </div>
    </div>

    <?php
        require 'footer.php'
    ?>