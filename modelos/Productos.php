<?php
class Productos extends Conectar{

   private $productos_index = array();
   private $get_producto = array();

    //Listar los productos

    public function get_productos_index($cantidad = 10){
        $conexion = Conectar::conexion();

        $sql="select * from productos limit $cantidad";
        $sql=$conexion->prepare($sql);
        $sql->execute();

        while($resultado=$sql->fetch()){
            $this->productos_index[]=$resultado;
        }
        return $this->productos_index;
    }

    //Producto individual
    public function get_producto($id){
        $conexion = Conectar::conexion();

        $sql="select * from productos where id=?";
        $sql=$conexion->prepare($sql);
        $sql->bindValue(1,$_GET["id"]);
        $sql->execute();

        while($resultado=$sql->fetch()){
            $this->get_producto[]=$resultado;
        }
        return $this->get_producto;
    }
}

?>
