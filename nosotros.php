
<?php 
$titulo="Nosotros";
require_once("templates/header.php");
require_once("templates/navegacion.php");
?>


<!-- Contenido-->

        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/nosotros.jpg" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
                </div>

            </div>
        </div>


        <div class="container pt-4">
            <div class="row">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Nosotros
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita maiores recusandae accusamus 
                        aliquid, deleniti a illo animi. Labore, facilis quae pariatur nesciunt magni illum reprehenderit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita maiores recusandae accusamus 
                        aliquid, deleniti a illo animi. Labore, facilis quae pariatur nesciunt magni illum reprehenderit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita maiores recusandae accusamus 
                         aliquid, deleniti a illo animi. Labore, facilis quae pariatur nesciunt magni illum reprehenderit.
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita maiores recusandae accusamus 
                        aliquid, deleniti a illo animi. Labore, facilis quae pariatur nesciunt magni illum reprehenderit.</p>
                  
                    <h3 class="text-center text-uppercase mt-5 encabezado">
                         <span class="text-lowercase d-block">Conoce Nuestras</span>Instalaciones
                    </h3>
                    <div class="imagenes pt-4">
                        <a href="#" data-toggle="modal" data-target="#imagen_1">
                            <img src="img/galeria_mini_01.jpg" class="img-fluid">
                        </a>
                        <a href="#" data-toggle="modal" data-target="#imagen_2">
                            <img src="img/galeria_mini_02.jpg" class="img-fluid">
                        </a>
                        <a href="#" data-toggle="modal" data-target="#imagen_3">
                            <img src="img/galeria_mini_03.jpg" class="img-fluid">
                        </a>
                        <!-- Modal-->

                        <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="imagen 1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_01.jpg" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="imagen 2" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="img/galeria_grande_02.jpg" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="imagen 3" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="img/galeria_grande_03.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <!-- Contenido-->

                    </div>
                </main>




                <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
                    <div class="sidebar horario">
                        

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
                </aside>
            </div>
        </div>
        <!-- Contenido-->




<?php 
require_once("templates/footer.php");

?>