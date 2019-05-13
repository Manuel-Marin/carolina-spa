<?php

class Conectar{

/*conexión a la base de datos*/
 
 protected static function conexion(){


              try {

                  $conectar = new PDO("mysql:local=localhost;dbname=id9558784_carolina","id9558784_marin","marin1997");

                  $conectar->query("SET NAMES 'utf8'");
                
                  return $conectar;
                  
              } catch (Exception $e) {

                  print "¡Error!: " . $e->getMessage() . "<br/>";
                 die();  
                  
              }
      

      } //cierre de llave de la function conexion()



       public static function corta_palabra($palabra,$num){
       
       $largo=strlen($palabra);
       $cadena=substr($palabra,0,$num);
       return $cadena;
 }



      public static function ruta(){

          return "http://localhost:/carolina_spa/";
      }



}     

?>