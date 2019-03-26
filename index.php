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
            <!--d-none d-md-block-->
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
    <div class="menu-carousel text-center" id="menucarousel">
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item" v-for="lis in menus"><a :href="lis.link"><i :class="lis.icon"></i> {{lis.nombre}}</a></li>
            </ul>
        </div>
    </div>


    <!----------------------Contenido--------------------->

    <!--Actualidad-->

    <div class="actualidad">
        <div class="container">
            <h1 class="text-center my-3">Actualidad</h1>
            <div id="actualidad" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto">
                    
                    <div class="carousel-item col-md-6 col-lg-4 active">
                        <div class="card text-white bg-danger">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="http://lorempixel.com/350/230/" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Noticia 1</h4>
                                <p class="card-text"><small>Ultima actualizacion hace 3 min</small></p>
                            </div>
                        </div>
                    </div>
                    

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="http://lorempixel.com/350/230/" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Noticia 2</h4>
                                <p class="card-text"><small class="text-muted">Ultima actualizacion hace 3 min</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card text-white bg-danger">
                                <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="http://lorempixel.com/350/230/" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Noticia 3</h4>
                                <p class="card-text"><small>Ultima actualizacion hace 3 min</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="http://lorempixel.com/350/230/" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Noticia 4</h4>
                                <p class="card-text"><small class="text-muted">Ultima actualizacion hace 3 min</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card text-white bg-danger">
                                <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="http://lorempixel.com/350/230/" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Noticia 5</h4>
                                <p class="card-text"><small>Ultima actualizacion hace 3 min</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item col-md-6 col-lg-4">
                        <div class="card">
                            <a href="#" class="ventanamodal">
                                <img class="card-img-top" src="http://lorempixel.com/350/230/" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">Noticia 6</h4>
                                <p class="card-text"><small class="text-muted">Ultima actualizacion hace 3 min</small></p>
                            </div>
                        </div>
                    </div>
                </div>

          <div class="container">
            <div class="row">
              <div class="col-12 text-center mt-4">
                <a class="btn btn-outline-secondary mx-1 anterior" href="javascript:void(0)" title="Previous">
                  <i class="fa fa-lg fa-chevron-left"></i>
                </a>
                <a class="btn btn-outline-secondary mx-1 siguiente" href="javascript:void(0)" title="Next">
                  <i class="fa fa-lg fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--Fin Actualidad-->
  <!-- .modal-profile -->
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
<!-- //.modal-profile -->


    <div class="container contenido">


        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">

                <!--Comunicados-->
                <div class="comunicados">
                    <section>
                        <ul class="list-inline info-block-title">
                            <li class="list-inline-item"><h3>COMUNICADOS</h3></li>
                        </ul>
                    </section>
                    <ul type="square">
                        <li>
                            <strong><a href="#">Cronograma de Actividades 2019-I</a></strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <strong><a href="#">Recepcion de Colegiados 2019-I</a></strong>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </li>
                    </ul>    
                </div>

                <!--Agenda-->
                <div class="agenda">
                    <section>
                        <ul class="list-inline info-block-title">
                            <li class="list-inline-item"><h3>AGENDA</h3></li>
                        </ul>
                    </section>

                    <ul class="list-unstyled">
                        <li class="media">
                            <div class="fecha-agenda">
                                <strong>ENE</strong><br>20
                            </div>
                            <div class="media-body">
                                <h5>Titulo</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate in destinas 13 asd.
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="fecha-agenda">
                                <strong>DIC</strong><br>10
                            </div>
                            <div class="media-body">
                                <h5>Titulo</h5>
                                <p>
                                    Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-8">

                <!--Noticias Recientes-->
                <div class="noticias-recientes">
                    <section>
                            <ul class="list-inline info-block-title">
                                <li class="list-inline-item"><h3>NOTICIAS RECIENTES</h3></li>
                            </ul>
                    </section>
                    
                    <div class="row">

                        <!--Noticias-->
                        <div class="col-sm-12 col-md-12 col-lg-8">

                            <div class="noticia-principal">
                                <figure class="position-relative">
                                    <a href="#"><img src="img/beca.png" class="w-100" alt=""></a>
                                    <figcaption class="position-absolute">
                                        <h4><a href="#" class="text-white">BECA PERMANENCIA </a></h4>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="noticias-pasadas media mb-2">
                                <a href="#"><img class="align-self-center mr-3 mb-2" src="img/bootstrap.jpeg" alt="Generic placeholder image"></a>
                                <div class="media-body align-self-center">
                                    <h5 class="mt-0"><a href="#" class="text-dark">Curso de Bootstrap</a></h5>
                                </div>
                            </div>
                            <div class="noticias-pasadas media mb-2">
                                <a href="#"><img class="align-self-center mr-3 mb-2" src="img/bootstrap.jpeg" alt="Generic placeholder image"></a>
                                <div class="media-body align-self-center">
                                    <h5 class="mt-0"><a href="#" class="text-dark">Curso de Bootstrap</a></h5>
                                </div>
                            </div>
                            <div class="noticias-pasadas media mb-2">
                                <a href="#"><img class="align-self-center mr-3 mb-2" src="img/bootstrap.jpeg" alt="Generic placeholder image"></a>
                                <div class="media-body align-self-center">
                                    <h5 class="mt-0"><a href="#" class="text-dark">Curso de Bootstrap</a></h5>
                                </div>
                            </div> 
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="row">
                                <div class="col-md-4 col-lg-12">
                                    <div class=" tarjetas card text-white bg-dark mb-3">
                                        <a href=""><img src="img/auditorio.jpg" class="w-100" alt=""></a>
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="" class="text-white">Satelite Perú Sat 1 al servicio de la UNA Puno</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-12">
                                    <div class="tarjetas card text-white bg-dark mb-3">
                                        <a href=""><img src="img/docentes.png" class="w-100" alt=""></a>
                                        <div class="card-body">
                                            <h6 class="card-title"><a class="text-white" href="">Se capacitan el uso y acceso a las aulas virtuales</a></h6>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-lg-12">
                                    <div class="tarjetas card text-white bg-dark mb-3">
                                        <a href=""><img src="img/auditorio.jpg" class="w-100" alt=""></a>
                                        <div class="card-body">
                                            <h6 class="card-title"><a class="text-white" href="">Se capacitan el uso y acceso a las aulas virtuales</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>	   
                        </div>
                    </div>        
                </div>
            </div>
        </div>

        <div class="services">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                
                <!--Blog-->   
                <section class="text-center">
                    <h3>BLOG</h3>
                </section> 
                <div class="card-deck">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <figure class="tarjeta red">
                            <img src="img/auditorio.jpg"/>
                            <figcaption>
                                <a href="historia.php">Ir</a>
                            </figcaption>
                            <div class="card-body">
                                <h5 class="card-title">Auditorio</h5>
                            </div>
                        <div class="card-footer">
                                <small>3 mins ago</small>
                        </div>
                        </figure>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <figure class="tarjeta red">
                            <img src="img/docentes.png"/>
                            <figcaption>
                                <a href="historia.php">Ir</a>
                            </figcaption>
                            <div class="card-body">
                                <h5 class="card-title">Docentes</h5>
                            </div>
                        <div class="card-footer">
                                <small>3 mins ago</small>
                        </div>
                        </figure>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <figure class="tarjeta red">
                            <img src="img/auditorio.jpg"/>
                            <figcaption>
                                <a href="historia.php">Ir</a>
                            </figcaption>
                            <div class="card-body">
                                <h5 class="card-title">Auditorio</h5>
                            </div>
                        <div class="card-footer">
                                <small>3 mins ago</small>
                        </div>
                        </figure>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <figure class="tarjeta red">
                            <img src="img/docentes.png"/>
                            <figcaption>
                                <a href="historia.php">Ir</a>
                            </figcaption>
                            <div class="card-body">
                                <h5 class="card-title text-white">DOcentes</h5>
                            </div>
                        <div class="card-footer">
                                <small>3 mins ago</small>
                        </div>
                        </figure>
                    </div>
                    
                    <!--div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="img/auditorio.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Auditorio</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="img/auditorio.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Colegio</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">4 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="img/docentes.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Titulo</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">13 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="img/auditorio.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Estudiantes</h5>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">33 mins ago</small>
                            </div>
                        </div>
                    </div>
                    !-->
                </div>
            </div>        
        </div>
        </div>

    </div>

    <?php
        require 'footer.php'
    ?>