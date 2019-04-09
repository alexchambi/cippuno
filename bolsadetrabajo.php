<?php
    require 'header.php'
?>

<!-- Miga de Pan -->
    <div class="breadcrumbedit">
        <div class="container">
            <nav aria-label="breadcrumb">      
                    <h2 class="">Bolsa de Trabajo</h2>
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="servicios.php">Servicios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bolsa de Trabajo</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Content -->
    <div class="container">
        <div class="container">
            <h4 class="font-weight-bold text-uppercase" >Bolsa de Trabajo:</h4>
            <img class="img-fluid" src="img/cabecerabolsadetrabajo.jpg" alt="Cabecera de Servicios">
            <hr>
            <div class="">
                <h5 class="font-weight-bold">Horario de Atención:</h5>
                <table class="table table-responsive-md">
                    <tbody>
                        <tr>
                            <th>RPM</th>
                            <th>:</th>
                            <td>#990353421</td>
                        </tr>
                        <tr>
                            <th>RPM</th>
                            <th>:</th>
                            <td>#979046443</td>
                        </tr>
                        <tr>
                            <th>Central Telefónica</th>
                            <th>:</th>
                            <td>(+51 1) 445 – 6540     Anexos: 201 / 209 / 118</td>
                        </tr>
                        <tr>
                        <th>Correo Electrónico</th>
                            <th>:</th>
                            <td>informatica.cn@cip.org.pe</td>
                        </tr>
                    </tbody>
                    <h6>Atte: Área de Informática del Colegio de Ingenieros del Perú – Consejo Nacional</h6>
                </table>  
            </div>

            <div class="alert alert-info">
                <i class="fa fa-info-circle"></i>
                <strong>SISTEMAS MODERNOS Y VIRTUALES PARA INFORMACIÓN Y GESTIÓN DE BOLSAS DE TRABAJO BRINDA EL CIP PARA EMPRESAS E INGENIEROS </strong>
            </div>
            <p>Herramientas virtuales están al servicio de empresas formalmente constituidas que deseen gestionar una oferta laboral y ésta pueda llegar a toda la Base de Datos de los Ingenieros del CIP y para nuestros agremiados que tengan la alternativa de mejoras en cuanto a su vida profesional a través de éstas ofertas laborales. Éste servicio es exclusivo para nuestros agremiados y empresas (completamente gratuito).</p>
            <p>Para ingresar se necesita una cuenta en el sistema CIPvirtual v1.0</p>

            <div class="accordion table-responsive-md" id="acordionbolsa">
                
                    <div class="card-header" id="empresas">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseempresas" aria-expanded="true" aria-controls="collapseempresas">
                            <i class="fa fa-university"></i> Información para Empresas
                        </button>
                    </div>
                
                    <div id="collapseempresas" class="collapse show" aria-labelledby="empresas" data-parent="#acordionbolsa">
                        
                        <div class="card-body">

                            <div class="accordion" id="acordionrequisito">

                                <div class="card">
                                    <div class="card-header" id="requisito">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collpaserequisito" aria-expanded="true" aria-controls="collpaserequisito">
                                            Requisitos
                                        </button>
                                    </div>
                                
                                    <div id="collpaserequisito" class="collapse" aria-labelledby="requisito" data-parent="#acordionrequisito">
                                        <div class="card-body">
                                            <ul>
                                                <li>Contar con un RUC activo (será validado a través de <a href="http://e-consultaruc.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias" target="_blank" rel="noopener">www.sunat.gob.pe</a>)</li>
                                                <li>Domiciliada en el territorio nacional del Perú</li>
                                                <li>Una persona de contacto en el Perú</li>
                                                <li>Un correo institucional (no correos públicos ejm.: yahoo, gmail, hotmail, etc.</li>
                                                <li>Un número de teléfono fijo o celular</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="procedimiento">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseprocedimiento" aria-expanded="false" aria-controls="collapseprocedimiento">
                                        Procedimiento
                                        </button>
                                    </div>
                                    <div id="collapseprocedimiento" class="collapse" aria-labelledby="procedimiento" data-parent="#acordionrequisito">
                                        <div class="card-body">
                                            <ol>
                                                <li>Ingrese a la siguiente dirección <a href="http://cipvirtual.cip.org.pe/sicebolsatrabajoweb/externo/regPersonaJuridica/">Registrar cuenta para empresa</a></li>
                                                <li>Ingrese los datos solicitados en el formulario</li>
                                                <li>Acepte los términos de uso del servicio</li>
                                                <li>Una vez registrada la información, el sistema remitirá un link para activar la cuenta al correo de contacto que ingresó, si al cabo de 10 ó 15 minutos no llega el correo de activación (verifique su bandeja de spam), Por favor; llámenos o escríbanos</li>
                                                <li>Luego de activada la cuenta, el personal del área de informática del CIP CN verificará la información y procederá a crear la cuenta de acceso al sistema, éste último remitirá el código y contraseña de acceso.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="consideracion">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseconsideracion" aria-expanded="false" aria-controls="collapseconsideracion">
                                            Consideraciones
                                        </button>
                                    </div>
                                    <div id="collapseconsideracion" class="collapse" aria-labelledby="consideracion" data-parent="#acordionrequisito">
                                        <div class="card-body">
                                            <ul>
                                                <li>La cuenta de correo electrónico de la persona de contacto debe ser válida para que el sistema remita el link de activación.</li>
                                                <li>No se creará la cuenta si algún dato proporcionado por la empresa no se puede verificar</li>
                                                <li>El número del DNI y fecha de nacimiento de la persona será validada con el servicio de RENIEC, por lo que si hay información errónea no se podrá crear la cuenta de acceso al sistema</li>
                                                <li>La creación de la cuenta de acceso al sistema dura entre 24 y 48 horas, si tiene urgencia para el registro de su oferta laboral, por favor Llámenos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header" id="ingenieros">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseingenieros" aria-expanded="false" aria-controls="collapseingenieros">
                        <i class="fa fa-graduation-cap"></i> Información para Ingenieros Colegiados
                        </button>
                    </div>
                    <div id="collapseingenieros" class="collapse" aria-labelledby="ingenieros" data-parent="#acordionbolsa">
                        <div class="card-body">
                        
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Requisitos
                                    </button>
                                </div>
                            
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>Su número de registro CIP debe de estar con el estado activo.</li>
                                            <li>El correo electrónico con el que sacará su cuenta debe de estar asociado a sus datos en la Base de Datos del CIP Consejo Nacional.Si no lo está vaya a la pestaña &#8220;Necesita Ayuda?&#8221; y contáctenos.</li>
                                            <li>El correo electrónico puede ser un correo público o con el doiminio @cip.org.pe lo importante es que esté asociado a sus datos.</li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Procedimientos
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>Ingrese a la siguiente dirección del sistema <a href="http://cipvirtual.cip.org.pe" target="_blank" rel="noopener">http://cipvirtual.cip.org.pe</a> y vaya a la opción &#8220;Crear Cuenta para Colegiado&#8221; o ingrese desde ésta dirección <a href="http://cipvirtual.cip.org.pe/sicecolegiacionweb/ayudaRegistroAlta/" target="_blank" rel="noopener">AQUÍ</a>.</li>
                                            <li>Ingrese los datos solicitados en el formulario.</li>
                                            <li>Una vez registrada la información, el sistema remitirá su código de usuario y contraseña de acceso al sistema a su correo electrónico, si al cabo de 10 ó 15 minutos no llega el correo con su código de usuario y contraseña de acceso al sistema (verifique su bandeja de spam), Por favor; llámenos o escríbanos ingresando a la pestaña &#8220;Necesita Ayuda?&#8221;.</li>
                                            <li>Con su código de usuario y contraseña obtenida ingrese al sistema. Puede ingresar desde aquí <a href="http://cipvirtual.cip.org.pe" target="_blank" rel="noopener">http://cipvirtual.cip.org.pe.</a></li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Qué trámites puedo realizar en el sistema CIPvirtual v1.0?
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>Ver las ofertas laborales de las empresas registradas en la Bolsa de Trabajo del CIP.</li>
                                            <li>Solicite su cambio de circunscripción territorial (Cambio de Sede).</li>
                                            <li>Solicite beneficios sociales del ISS.</li>
                                            <li>Ver los aportes que ha realizado al ISS.</li>
                                            <li>Registrar su carta de Beneficiarios del ISS.</li>
                                            <li>Solicitar un nuevo correo electrónico institucional (con el dominio @cip.org.pe) o reinicio de su clave de acceso al mismo.</li>
                                            <li>Registrar nueva especialidad (proceso de colegiación).</li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
            <hr>
            <div class="alert alert-danger">
                <i class="fa fa-info-circle"></i>
                <strong>OTRAS OFERTAS LABORALES NO REGISTRADAS EN LA BOLSA DE TRABAJO DEL CIP CN</strong>
            </div>

            <table class="table table-bordered table-responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th nowrap="nowrap">Fecha Publicación</th>
                            <th>Empresa</th>
                            <th>Contacto</th>
                            <th>Detalle</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>18</td>
                            <td>27/03/2019</td>
                            <td>Ministerio de Transportes y Comunicaciones - MTC</td>
                            <td>Tlf.(511) 615 7800</td>
                            <td>Se invita a los colegiados a nivel nacional a participar en las Convocatorias CAS convocadas por el Ministerio de Transporte y Comunicaciones</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/mtc-convocatoria-cas-detalle.jpg" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>21/03/2019</td>
                            <td>El Programa Nacional de Vivienda Rural (PNVR) del Ministerio de Vivienda, Construcción y Saneamiento</td>
                            <td>dzevallosg@vivienda.gob.pe, pia a los correos<br/>
                            mvcs_pnvr_rerm@vivienda.gob.pe y jquiroz@vivienda.gob.pe</td>
                            <td>REGISTRO DE PROFESIONALES PARA REALIZAR ACTIVIDADES DE MONITOREO TECNICO DE PROYECTOS PARA LAS REGIONES DE CUSCO Y PUNO - El Programa Nacional de Vivienda Rural (PNVR) del Ministerio de Vivienda, Construcción y Saneamiento, requiere realizar un registro de profesionales para el siguiente servicio: Monitoreo Técnico de Proyectos de mejoramiento de vivienda rural bajo la modalidad de núcleos ejecutores del PNVR.</td>
                            <td><a href="https://www.cap.org.pe/cap/ConvocatoriasCAP/oficio_2019_registro_y_anexos.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>21/03/2019</td>
                            <td>Unidad Ejecutoria de Inversión Publica SUNAT</td>
                            <td>caf-inversionpublica@sunat.gob.pe</td>
                            <td>Servicio especializado en elaborar los documentos equivalentes vinculados con la especialidad mecánica eléctrica, para implementar en el PI 2131953 “Construcción e Implementación del Laboratorio Central de la SUNAT - (INICIO Y FIN DE CONVOCATORIA: 19.03.19 – 22.03.19)</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/convocatoria-en-especialidad-de-mecanicas-electricas.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>20/03/2019</td>
                            <td>Coansa Del Peru</td>
                            <td>paola.gongora@grupocoansa.pe</td>
                            <td>Servicio de Conservación para la Recuperación y/o Reposición de la Infraestructura Vial: Paquete 7: EMP. PE-1N (HUAURA) – SAYAN – CHURIN – OYÓN y EMP. E-1N (RÍO SECO) – SAYÁN. LMA-HUARUA</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/convocatoria-proyecto-vial.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>20/03/2019</td>
                            <td>Contraloría General de la República del Perú</td>
                            <td>seleccioncas@contraloria.gob.pe</td>
                            <td>Nos encontramos en la búsqueda de 724 Profesionales para el Órgano de Auditoría Interna y el Órgano Control Institucional a nivel Nacional.</td>
                            <td><a href="http://www.contraloria.gob.pe/wps/wcm/connect/CGRNew/as_contraloria/as_portal/as_unete/as_conv_trab/CAS/" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>20/03/2019</td>
                            <td>UNIFÉ - Universidad Femenina del Sagrado Corazón</td>
                            <td>infraestructura@unife.edu.pe</td>
                            <td>Se invita a participar a las empresas constructoras del medio al proceso de licitacion de obra: Construccion del Coliseo Duchesne en el Campus Universitario de la UNIFÉ</td>
                            <td><a href="http://www.unife.edu.pe/convocatoria.html" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>26/02/2019</td>
                            <td>CENFOTUR - Centro de Formación en Turismo</td>
                            <td>evaluacion.convenios@cenfotur.edu.pe</td>
                            <td>Centro de Formación en Turismo-CENFOTUR- Organismo Público Ejecutor adscrito al MINCETUR y brazo capacitador del sector turismo, a través del área de Extensión Educativa, en conformidad con la R.D. Nº 201-2016-CENFOTUR/DN viene realizando el proceso de selección de docentes, facilitadores y capacitadores. Para el actual proceso, se requiere de profesionales que cumplan con el perfil</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/detalle-seleccion-MINCETUR.jpg" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>20/02/2019</td>
                            <td>Unidad Ejecutoria de Inversión Publica SUNAT</td>
                            <td>caf-inversionpublica@sunat.gob.pe</td>
                            <td>Servicio para la revisión, inspección y verificación del cumplimiento del Expediente técnico posterior a la Resolución del contrato de la Obra: “Implementación del Nuevo Centro de Servicios al Contribuyente y Centro de Control y Fiscalización de la Zona Centro 1 de Lima Metropolitana” en la especialidad de Instalaciones de Comunicaciones - (Las propuestas se recepcionarán hasta el día 22.02.19.)</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/tdr-comunicaciones-final.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>19/02/2019</td>
                            <td>Ministerio de Vivienda Construcción y Saneamiento, Programa Nacional de Vivienda Rural</td>
                            <td>maguirrec@vivienda.gob.pe, mvcs_pnvr_rerm@vivienda.gob.pe</td>
                            <td>Requerimiento de Profesionales para Monitores Técnicos de Proyectos para las Regiones de Lambayeque, la Libertad, Ancash, Cajamarca, Piura e Ica - ( Presentación de la documentación del 11 al 22 de febrero del 2019 )</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/requirimiento-profesionales-para-las-regionenes-lambayeque-pdf.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>09</td>
                            <td>18/02/2019</td>
                            <td>Unidad Ejecutoria de Inversión Publica SUNAT</td>
                            <td>caf-inversionpublica@sunat.gob.pe</td>
                            <td>Servicio de revisión, inspección y verificación del cumplimiento del Expediente Técnico posterior al proceso de resolución de contrato de la obra: “Implementación del Nuevo Centro de Servicios al Contribuyente y Centro de Control y Fiscalización de la Zona Centro 1 de Lima Metropolitana”, en la ESPECIALIDAD DE INSTALACIONES SANITARIAS - (Las propuestas se recepcionarán hasta el día 20.02.19.)</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/especialidad-sanitarios.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>18/02/2019</td>
                            <td>Unidad Ejecutoria de Inversión Publica SUNAT</td>
                            <td>caf-inversionpublica@sunat.gob.pe</td>
                            <td>Servicio para la revisión, inspección y verificación del cumplimiento del Expediente técnico posterior a la Resolución del contrato de la Obra: “Implementación del Nuevo Centro de Servicios al Contribuyente y Centro de Control y Fiscalización de la Zona Centro 1 de Lima Metropolitana en la especialidad de Instalaciones Eléctricas - (Las propuestas se recepcionarán hasta el día 21.02.19.)</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/especialidad-de-instalaciones-electricas.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>18/02/2019</td>
                            <td>Unidad Ejecutoria de Inversión Publica SUNAT</td>
                            <td>caf-inversionpublica@sunat.gob.pe</td>
                            <td>Servicio para la revisión, inspección y verificación del cumplimiento del Expediente técnico posterior a la Resolución del contrato de la Obra: “Implementación del Nuevo Centro de Servicios al Contribuyente y Centro de Control y Fiscalización de la Zona Centro 1 de Lima Metropolitana” en la especialidad de Instalaciones Mecánicas - (Las propuestas se recepcionarán hasta el día 21.02.19.)</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/especialidad-de-instalaciones-mecanicas.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>07/02/2019</td>
                            <td>Fondo General de Contravalor Perú - Japón</td>
                            <td>fgcpj@fondoperujapon.com</td>
                            <td>Solicito Consultores Calificados en dichas especialidades:</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/consultores-calificados.jpg" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>06/02/2019</td>
                            <td>Ministerio de Vivienda Construcción y Saneamiento</td>
                            <td>mvcs_pnvr_rerm@vivienda.gob.pe</td>
                            <td>Requerimiento de Profesionales para servicio de Proyectistas y Evaluadores de Proyectos para las Regiones de Cusco y Puno</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/requirimiento-de-profesionales-para-servicio-de-proyectistas-region-cusco-puno.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>05/02/2019</td>
                            <td>Poder Judicial Del Perú - Corte Superior De Justicia del Callao</td>
                            <td>nperiche@pj.gob.pe</td>
                            <td>Convocatoria para la Evaluación y Selección de Peritos Judiciales Período 2019-2020</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/conv-para-la-evaluacion-y-seleccion-de-peritos-judiciales-periodo-2019-2020.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>01/02/2019</td>
                            <td>SEDAPAL - El Servicio de Agua Potable y Alcantarillado de Lima</td>
                            <td>fcastilloc@sedapal.com.pe</td>
                            <td>Sedapal se encuentra en la búsqueda de profesionales ingenieros colegiados en la especialidad de Ingeniería Sanitaria o Ingeniería Química o Ingeniería Ambiental para desempeñar el cargo de Especialista de Plantas de Tratamiento de Aguas Residuales</td>
                            <td><a href="http://www.cip.org.pe/publicaciones/2019/bolsa-de-trabajo/sedapal-convocatoria.jpg" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>01/02/2019</td>
                            <td>MINEDU - Portal del Ministerio de Educación</td>
                            <td>Teléfonos: 0511 4621220; 4621221 y 4621222<br/>Correo electrónico: adquisiciones.edsuperior.bid@gmail.com</td>
                            <td>Programa para la Mejora de la Calidad y Pertinencia de los Servicios de Educación Superior Universitaria y Tecnológica a Nivel Nacional -Contrato Préstamo BID N° 4555/OC -PE (Las expresiones de interés deberán ser enviadas a la dirección o correo electrónico indicados líneas abajo a más tardar a las 17:00 horas del día viernes 15 de febrero de 2019)</td>
                            <td><a href="http://www.minedu.gob.pe/DeInteres/pdf/aviso-ampliacion-exp.int.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>18/01/2019</td>
                            <td>UNAAT - Universidad Nacional Autónoma Altoandina de Tarma</td>
                            <td>Telf. (064) 317091</td>
                            <td>Concurso para Nombramiento Docentes 2019 de la UNAAT (Recepción de expedientes: Del 15 al 22 de enero de 2019 en Jr. Huaraz Nº 431 Tarma)</td>
                            <td><a href="http://www.unaat.edu.pe/convocatoria/Bas_conc_doc_2019.pdf" target="_blank" rel="noopener"><img src="http://www.cip.org.pe/images/logo_pdf.png" alt="pdf-logo" width="34" height="38" /></a></td>
                        </tr>
                    </tbody>
            </table>
            
        </div>
    </div><!-- .wf-container -->

<?php
    require 'footer.php'
?>