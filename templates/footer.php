    <!-- Footer-->
    <footer class="footer-sitio pt-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dolor ipsa vitae iste ipsum
                         explicabo sunt magnam impedit aspernatur quidem? Aliquid, obcaecati voluptas?</p>
                </div>
                <div class="col-md-4 text-center">
                        <h3 class="text-uppercase text-center pb-4">Horario</h3>
                        <p>Lun-Vie: 9AM - 7PM</p>
                        <P>Sabado: 10AM - 2PM</P>
                        <P>Domingo: Cerrado</P>
                 </div>
                 <div class="col-md-4 text-center">
                        <h3 class="text-uppercase text-center pb-4">Contacto</h3>
                        <p>Lorem ipsum dolor sit.</p>
                        <P>Lorem, ipsum dolor.</P>
                        <nav class="sociales text-center ">
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
                 <hr class="w-100">
                 <p class="text-center copyright w-100"> Carolina Spa & Salon 2019. Todos los derechos reservados</p>
            </div>
        </div>
    </footer><!-- Footer-->
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>


<?php
//Guardar todo el contenido a un archivo
$fp = fopen($archivoCache, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
//Enviar al navegador
ob_end_flush();
?>