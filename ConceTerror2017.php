<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teragon Team</title>
 
    <!-- CSS de Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="icon" type="image/jpg" href="images/calavera.jpg" />
    <script src="http://code.jquery.com/jquery.js"></script>
   
    <script src="js/jquery.Rut.js" type="text/javascript"></script> 

<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
    
    <!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>

    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="js/countdown.js"></script>
<script type="text/javascript" >
  
    $(document).ready(function(){
      $("#countdown").countdown({
        date: "17 February 2017 12:00:00",
        format: "on"
      },
      
      function() {
        // callback function
      });
    });
  
  </script>



 <script type="text/javascript">
       $(document).ready(function(){

$('#id_rut').Rut({
  on_error: function(){ alert('Rut incorrecto'); $('#id_rut').val("") },
  format_on: 'keyup'
});



});

</script>

<style type="text/css">
  

</style>

<script type="text/javascript">
function validar_texto(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    
    tecla_final = String.fromCharCode(tecla);
    
    return patron.test(tecla_final);
}
</script>





<style type="text/css">
.prueba2 {
   margin: 10px;
   width: 200px;
   height: 200px;
   background-color: #E0E0E0;
   border: 1px solid #666;
   transition-property: width, height, background-color;
   transition-duration: 0.5s, 1s, 1s;
   transition-timing-function: ease, ease-out;
   transition-delay: 0s ,0.5s, 1.5s;
  }
   



   .cssGR{

    content:url("./Golpe Roller.jpg");

   }
      .cssHobbybag{

    content:url("./Hobbybag.jpg");

   }
      .cssOld{

    content:url("./Old.jpg");

   }
      .cssEmeneka{

    content:url("./Emeneka.jpg");

   }
      .cssRazors{

    content:url("./razors2.jpg");

   }
      .cssOvis{

    content:url("./ovis.jpg");

   }


</style>


  </head>
  <body style="background: url('./images/inscripcionct2017.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center 0px;">
    
 

<div class= "fondo" >

  

  <div class="col-xs-6">
    <form name="form_login" method="post" action="ingresa.php" role="form"  class="form-horizontal">
    
        <fieldset>

<!-- Form Name -->


<!-- Text input-->
<br><br>

<div class="form-group" align="left">
  <label class="col-md-4 control-label" for="id_nombre">Nombres</label>  
  <div class="col-md-6">
  <input id="id_nombre" name="id_nombre" placeholder="Nombres" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="id_apellido">Apellidos</label>  
  <div class="col-md-6">
  <input id="id_apellido" name="id_apellido" placeholder="Apellidos" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_rut">Rut</label>  
  <div class="col-md-6">


  <input id="id_rut" name="id_rut" placeholder="17.123.123-1" class="form-control input-md" required="" type="text">
    
  </div>
</div>

  <fieldset class="form-group">
   <label class="col-md-4 control-label" for="id_sexo">Sexo</label>  
    <div class="col-md-3 form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="id_sexo" id="id_sexo_1" value="Hombre" checked>
       Hombre
      </label>
    </div>
    <div class="col-md-3 form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="id_sexo" id="id_sexo_2" value="Mujer">
        Mujer
      </label>
    </div>
  </fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_edad">Fecha Nacimiento</label>  
  <div class="col-md-6">

    <input id="id_edad"  type="date" name="id_edad" class="form-control input-md" >

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_tiempo">Años al Patin</label>  
  <div class="col-md-6">

  
  <input id="id_tiempo" name="id_tiempo" placeholder="Años al patin" class="form-control input-md" required="" type="number" onkeypress="return validar_texto(event)">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_team">Team</label>  
  <div class="col-md-6">
  <input id="id_team" name="id_team" placeholder="Indique su Team" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_fono">Telefono</label>  
  <div class="col-md-6">
  <input id="id_fono" name="id_fono" placeholder="Telefono" class="form-control input-md" required="" type="tel">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_correo">Correo</label>  
  <div class="col-md-6">
  <input id="id_correo" name="id_correo" placeholder="Correo" class="form-control input-md" required="" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_ciudad">Ciudad</label>  
  <div class="col-md-6">
  <input id="id_ciudad" name="id_ciudad" placeholder="Ciudad" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_categoria">Categoria</label>
  <div class="col-md-6">
    <select id="id_categoria" name="id_categoria" class="form-control">
      <option value="junior">Junior</option>
      <option value="novato">Novato</option>
      <option value="Intermedio">Intermedio</option>
      <option value="profesional">Pro</option>
      <option value="invitado">Invitado</option>
      
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default">Continuar</button>
  </div>
</div>

</fieldset>
</form>

  </div>








  </div>



</div>



    <!-- Librería jQuery requerida por los plugins de JavaScript -->

 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>