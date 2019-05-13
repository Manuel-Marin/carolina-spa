(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName('needs-validation');
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
            
            event.stopPropagation();
          }else{
            var nombre = document.getElementById('nombre').value,
                email = document.getElementById('email').value,
                mensaje = document.getElementById('mensaje').value;
               
            //Ejecutar ajax en js no en jquery
            var ajax = new XMLHttpRequest();
            //Abrir la conexion
            ajax.open('POST', 'http://localhost/carolina_spa/ajax/enviar.php', true);

            //Siempre que se usa un formulario se utiiza un header
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            //Revisar el estado
            ajax.onload = function(){
              if(ajax.status === 200){
                var respuesta = ajax.responseText;
                console.log(respuesta);
                if(respuesta.respuesta===true){
                  console.log("se envio correctamente");
                }
              }
            }
            //Enviar el request
            ajax.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);

              
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();