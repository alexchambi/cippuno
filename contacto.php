<?php
    require 'header.php'
?>

<!-- Miga de Pan -->
<div class="breadcrumbedit">
        <div class="container">
            <nav aria-label="breadcrumb">      
                    <h2 class="">Contactenos</h2>
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contactenos</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Content -->
    <div class="container">

        <div class="container">
            <h4>Contactenos:</h4>
            <form role="form" id="Formulario" action="#" method="POST">
                <div class="form-group">
                    <label class="control-label" for="Nombre">Nombres</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese su nombre" required />
                </div>            
                <div class="form-group">
                    <label class="control-label" for="Motivo">Motivo de Contacto</label>
                    <select name="Motivo" class="form-control">
                        <option value="Consulta General">Consulta General</option>
                        <option value="Informe un problema">Informe un problema</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="Correo">Dirección de Correo Electrónico</label>
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Ingrese su correo electrónico" required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="Mensaje">Mensaje</label>
                    <textarea rows="5" cols="30" class="form-control" id="Mensaje" name="Mensaje" placeholder="Ingrese su mensaje" required ></textarea>
                </div>
                <div class="form-group">                
                    <button type="submit" class="btn btn-outline-danger">Enviar</button>
                    <button type="reset" class="btn btn-outline-dark">Borrar</button>                
                </div>
            </form>
        </div>       
    </div>





<?php
    require 'footer.php'
?>