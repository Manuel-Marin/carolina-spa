<?php 
$titulo="Servicios";
require_once("templates/header.php");
require_once("templates/navegacion.php");
?>




        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/servicios.jpg" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
                </div>

            </div>
        </div>


        <div class="container pt-4 mb-5">
            <div class="row">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Servicios
                    </h2>
                    <div id="servicios">
                        
                        <div class="card">
                            <div class="card-header" id="servicio1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1"
                                    aria-expanded="true" aria-controls="#descripcion1">Servicio1</button>
                                </h2>
                            </div>
                            <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dicta sed. Possimus placeat expedita 
                                        veniam quidem odio voluptatum ad quassimilique voluptatibus! Dignissimos eum,
                                         id amet repellendus deserunt consequatur? Dolore.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                                <div class="card-header" id="servicio2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2"
                                        aria-expanded="false" aria-controls="#descripcion2">Servicio2</button>
                                    </h2>
                                </div>
                                <div id="descripcion2" class="collapse " aria-labelledby="servicio2" data-parent="#servicios">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dicta sed. Possimus placeat expedita 
                                            veniam quidem odio voluptatum ad quassimilique voluptatibus! Dignissimos eum,
                                             id amet repellendus deserunt consequatur? Dolore.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                    <div class="card-header" id="servicio3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3"
                                            aria-expanded="false" aria-controls="#descripcion3">Servicio3</button>
                                        </h2>
                                    </div>
                                    <div id="descripcion3" class="collapse " aria-labelledby="servicio3" data-parent="#servicios">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dicta sed. Possimus placeat expedita 
                                                veniam quidem odio voluptatum ad quassimilique voluptatibus! Dignissimos eum,
                                                 id amet repellendus deserunt consequatur? Dolore.</p>

                                          
                                        </div>
                                    </div>
                                </div>

                    </div>
                </main>

                <aside class="col-lg-4 pt-4 pt-lg-0">
                    <div class="sidebar p-3">
                        <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
                        <p class="lead text-center mt-4">Recibe 20% de descuento con este cupon</p>
                        <div class="cupon px-2 py-5 mt-5">
                            <div class="text-uppercasse text-center mb-0">
                                <span class="display-4">20% Descuento</span><br> En todos los servicios
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>






        <?php 
require_once("templates/citas.php");
require_once("templates/footer.php");

?>