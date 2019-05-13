
<?php 
$titulo="Inicio";
require_once("templates/header.php");
require_once("templates/navegacion.php");

require_once("config/conexion.php");
require_once("modelos/Productos.php");
$Productos = new Productos();
?>
    


<!-- Slider-->
    <div class="container">
        <div id="slider-principal" class="carousel slider mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
                <li data-target="#slider-principal" data-slide-to="0"></li>
                <li data-target="#slider-principal" data-slide-to="0"></li>
            </ol>
            
            
            
            
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/slide_01.jpg" alt="Nuestas Instalaciones">
                    <div class="carousel-caption">
                        <h3 class="text-uppercase">Nuestars instalaciones</h3>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/slide_02.jpg" alt="Conoce Nuestros Servicios">
                    <div class="carousel-caption">
                         <h3 class="text-uppercase">Conoce Nuestros Servicios</h3>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/slide_03.jpg" alt="Promocion">
                     <div class="carousel-caption">
                       <h3 class="text-uppercase">Nuevo Sitio Web, 2x1 en todos nuestros servicios</h3>
                     </div>
                 </div>

            </div>

            <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a href="#slider-principal" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>

        </div>
    </div><!-- Slider-->

<!-- Nuevo Sitio-->
    <section class="nuevo-sitio py-5">
        <h3 class="text-center text-uppercase mt-4 encabezado">
            <span class="text-lowercase d-block">Bienvenido a Nuestras</span>Sitio Web
        </h3>
        <p class="text-center mt-4">Te sentiras como nuevo(a) con nuestros <br>
        masajistas profesionales </p>
    </section><!-- Nuevo Sitio-->

    <!-- Servicios-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 text-centermb-4 ">
                <div class="imagen-servicio">
                    <img src="img/servicio_01.jpg" class="img-fluid">
                    <div class="row no-gutters justify-content-center">
                       <div class="col-md-10 pt-4 servicio-info">
                           <h3 class="text-center text-uppercase encabezado">
                               <span class="text-lowercase d-block">Conoce sobre</span>Nosotros
                           </h3>
                           <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer Mas</a>
                       </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                    <div class="imagen-servicio">
                        <img src="img/servicio_02.jpg" class="img-fluid">
                        <div class="row no-gutters justify-content-center">
                           <div class="col-md-10 pt-4 servicio-info">
                               <h3 class="text-center text-uppercase encabezado">
                                   <span class="text-lowercase d-block">Nuestros</span>Servicios
                               </h3>
                               <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer Mas</a>
                           </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4 ">
                        <div class="imagen-servicio">
                            <img src="img/servicio_03.jpg" class="img-fluid">
                            <div class="row no-gutters justify-content-center">
                               <div class="col-md-10 pt-4 servicio-info">
                                   <h3 class="text-center text-uppercase encabezado">
                                       <span class="text-lowercase d-block">Visita Nuestra</span>Tienda
                                   </h3>
                                   <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer Mas</a>
                               </div> 
                            </div>
                        </div>
                    </div>
        </div>
    </div><!-- Servicios-->


    <!-- Horario-->

    <div class="horario">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-4">
                    <h2 class="text-center text-uppercase mt-5">Horarios</h2>
                    <p class="text-center lead mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Dolores, quasi expedita nam illum sint itaque debitis ullam quam voluptatibus assumenda.</p>
                        <table class="table table-hover text-center mt-3 text-white">
                                <thead>
                                    <tr>
                                        <th class="text-center">Día</th>
                                        <th class="text-center">De</th>
                                        <th class="text-center">Hasta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                       <td>Lunes</td>
                                        <td>09:00</td>
                                        <td>19:00</td>
                                    </tr>
                                    <tr>
                                        <td>Martes</td>
                                        <td>09:00</td>
                                        <td>19:00</td>
                                    </tr>
                                    <tr>
                                        <td>Miércoles</td>
                                        <td>09:00</td>
                                        <td>19:00</td>
                                    </tr>
                                    <tr>
                                        <td>Jueves</td>
                                        <td>09:00</td>
                                        <td>19:00</td>
                                    </tr>
                                    <tr>
                                        <td>Viernes</td>
                                        <td>09:00</td>
                                        <td>19:00</td>
                                    </tr>
                                    <tr>
                                        <td>Sábado</td>
                                        <td>10:00</td>
                                        <td>14:00</td>
                                    </tr>
                                    <tr>
                                        <td>Domingo</td>
                                        <td>Cerrado</td>
                                        <td>Cerrado</td>
                                    </tr>
                                </tbody>
                           </table>
                </div>
                <div class="col-md-6 bg-horario"></div>
            </div>
        </div>
    </div><!-- Horario-->


    
    <!-- Productos-->
    <section class="productos container py-5">
        <h2 class="encabezado text-center text-uppercase mt-4">
            <span class="text-lowercase d-block">Nuestros</span>Productos
        </h2>
        <div class="row py-5">

            <?php
                $resultado = $Productos->get_productos_index(4);
                for ($i=0; $i < count($resultado); $i++) {   
            ?>

            <div class="col-md-3 mb-4">
                <div class="card">
                    <a href="producto.php?id=<?php echo $resultado[$i]["id"];?>"><img src="img/<?php echo $resultado[$i]["imagen_mini"];?>" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title text-center text-uppercase"><?php echo $resultado[$i]["nombre"];  ?></h3>
                        <p class="card-text text-uppercase"><?php echo $resultado[$i]["descripcion_corta"];  ?></p>
                            <p class="precio mb-0 lead text-center"><?php echo $resultado[$i]["precio"];  ?></p>
                    </div>
                    </a>
                </div>
            </div>

            <?php      
                }
            ?>


        </div>
    </section><!-- Productos-->






    <?php 
require_once("templates/citas.php");
require_once("templates/footer.php");

?>


