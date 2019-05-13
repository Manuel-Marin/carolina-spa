<?php 
$titulo="Productos";
require_once("templates/header.php");
require_once("templates/navegacion.php");

require_once("config/conexion.php");
require_once("modelos/Productos.php");
$Productos = new Productos();
?>




        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/productos.jpg" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
                </div>

            </div>
        </div>


        <div class="container pt-4 productos" >
            <div class="row">
                
                <main class="col-lg-12 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Productos
                    </h2>

                    <div class="row">
                     <div class="card-columns">

                     <?php
                         $resultado = $Productos->get_productos_index();
                        for ($i=0; $i < count($resultado); $i++) {   
                        ?>

                        <div class="card">
                            <a href="producto.php?id=<?php echo $resultado[$i]["id"];?>"><img src="img/<?php echo $resultado[$i]["imagen_mini"];?>" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h3 class="card-title text-center text-uppercase"><?php echo $resultado[$i]["nombre"];  ?></h3>
                                <p class="card-text text-uppercase"><?php echo $resultado[$i]["descripcion_corta"];  ?></p>
                                    <p class="lead text-center mb-0 precio"><?php echo $resultado[$i]["precio"];  ?></p>
                            </div></a>
                        </div>

                        <?php      
                            }
                            ?>


                        </div>
                    </div>
                </main>
               
            </div>
        </div>




<?php 
require_once("templates/footer.php");
?>