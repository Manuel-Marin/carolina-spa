<?php 
    //Definir el nombre para chachear 
    $archivo=basename($_SERVER['PHP_SELF']);
    $pagina=str_replace('.php', '', $archivo);

    //Definir archivo para cachear (puede ser .php tambien)
    if(isset($_GET["id"])){
        $archivoCache = 'cache/'.$pagina.'-'.$_GET["id"].'.html';
    }else{
        $archivoCache = 'cache/'.$pagina.'.html';
    }
   
    //Cuanto tiempo debera estar el archivo almacenado
    $tiempo=36000;
    //Checar que el archivo exista, el tiempo sea el adecuado y muestralo
    if(file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)){
        include ($archivoCache);
        exit;
    }
    //si el arhivo no existe o el tiempo de cacha ya se vencio, genera otro nuevo
    ob_start();
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo ?> | Carolina spa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/stilos.css">
</head>
<body>

<!-- Encabezado-->
    <header class="encabezado-sitio container ">
        <div class="row justify-content-md-between align-items-center">
            <div class="col-lg-4">
                <a href="index.html">
                <img src="img/logo.svg" class="img-fluid mx-auto d-block pt-4 pb-4 "></a>
            </div>
            <div class="col-lg-4"  >
                <nav class="sociales text-center text-lg-right">
                    <ul>
                         <li>  
                             <div class="h3" >
                                 <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
                             </div></li>
                         <li>  
                            <div class="h3" >
                            <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
                            </div></li>
                        <li>  
                             <div class="h3" >
                            <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
                             </div></li>
                        <li>  
                             <div class="h3" >
                             <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
                            </div></li>
                        <li>  
                             <div class="h3" >
                                <a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a>
                            </div></li>
                    </ul>
                </nav>
            </div>
    </div>
    </header><!-- Encabezado-->