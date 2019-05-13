
<?php 

if(isset($_GET["id"])){
    if(filter_var($_GET["id"], FILTER_VALIDATE_INT)){
        echo("si");
    }else{
        header('Location: 404.html');
        exit;
    }
}


require_once("templates/header.php");
require_once("templates/navegacion.php");

require_once("config/conexion.php");
require_once("modelos/Productos.php");
$Producto = new Productos();
?>

                <?php
                  $resultado = $Producto->get_producto($_GET["id"]);

                  if(count($resultado)>0){

                
                     
                ?>


        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/<?php echo $resultado[0]["imagen_completa"];  ?>" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php echo $resultado[0]["nombre"];  ?></h2>
                </div>

            </div>
        </div>


        <div class="container pt-4">
            <div class="row no-gutters">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                    <?php echo $resultado[0]["nombre"];  ?>
                    </h2>
                    <p><?php echo $resultado[0]["descripcion"];  ?></p>
                </main>

                <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start ">
                    <div class="sidebar pt-5 descripcion-producto">
                        <h2 class="text-center text-uppercase mt-4">Descripcion</h2>
                        <p class="text-center"><?php echo $resultado[0]["descripcion_corta"];  ?></p>
                        <h3 class="text-uppercase text-center mt-5">Precio</h3>
                        <p class="h3 text-center mb-5 "><?php echo $resultado[0]["precio"];  ?></p>
                    </div>
                </aside>
            </div>
        </div>

       




 <?php 
   }else{
       echo '<h2 class="text-center text-uppercase mt-4">Producto no encontrado</h2>';
   }
require_once("templates/footer.php");
?>