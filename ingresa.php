<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teragon Team</title>
 
    <!-- CSS de Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body  style= "background: url('../FPCT2017.jpg') center center no-repeat fixed;">

<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['submit'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
 
 


$sql= "INSERT INTO `FORMULARIO`( `nombres`, `apellidos`, `rut`, `sexo`, `fecha`, `tiempo_patinando`, `team`, `telefono`, `correo`, `ciudad`, `categoria`) VALUES ('".$_REQUEST['id_nombre']."','".$_REQUEST['id_apellido']."','".$_REQUEST['id_rut']."','".$_REQUEST['id_sexo']."','".$_REQUEST['id_edad']."',".$_REQUEST['id_tiempo'].",'".$_REQUEST['id_team']."','".$_REQUEST['id_fono']."','".$_REQUEST['id_correo']."','".$_REQUEST['id_ciudad']."','".$_REQUEST['id_categoria']."')";



 

/*/$servicio="?wsdl"; //url del servicio
$servicio="http://chile.rutificador.com/rut/17347460-1?wsdl"; //url del servicio


$parametros=array(); //parametros de la llamada/
$parametros['idioma']="es";
$parametros['usuario']="manolo";
$parametros['clave']="tuclave";

//$client = new SoapClient($servicio, $parametros);

$client = new SoapClient($servicio);


$result = $client->getNoticias($parametros);//llamamos al métdo que nos interesa con los parámetros



echo "nombre ". $sql1 .";";
//echo $result;

/*/


$validacionRut = "SELECT `id`, `nombres`, `apellidos`, `rut`, `sexo`, `fecha`, `tiempo_patinando`, `team`, `telefono`, `correo`, `ciudad`, `categoria` FROM `FORMULARIO` WHERE `rut` =  '".$_REQUEST['id_rut']."'";


//echo "Select de prueba: " . $validacionRut;

$result = mysql_query($validacionRut); 
if ($row = mysql_fetch_array($result)){ 
   //echo "<table border = '1'> \n"; 

   //echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n"; 
   

  echo " <form name='form_login' method='post' action='ConceTerror2017.php' role='form'  class='form-horizontal' style='margin-top: 10%; margin-left: 10%;''>
   <div style='margin-top: 10% margin-left: 85px;'>
    
          <h1>Hola " .$row["nombres"]." ".$row["apellidos"]." </h1> <br> 
          <h2>Al parecer ya estas registrado.<br>Intenta con otro rut o contacta a Soporte@teragon.cl solicitando ayuda.<h2>

                
      </div>
       <button id='submit' name='submit' class='btn btn-default' style='margin-left: 40%; margin-top: 10px;'>Volver</button>
      <form>

      ";
   do { 
     // echo "<tr><td>".$row["nombres"]."</td><td>".$row["correo"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   

   //echo "</table> \n"; 
} else { 


// Si el proceso llega hasta este punto, se han validado hasta el momento :   -RUT.




$resultado = mysql_query($sql);
if (!$resultado) {  
    die('Consulta no válida: ' . mysql_error());
}else{


$sql= "INSERT INTO `FORMULARIO`( `nombres`, `apellidos`, `rut`, `sexo`, `fecha`, `tiempo_patinando`, `team`, `telefono`, `correo`, `ciudad`, `categoria`) VALUES ('".$_REQUEST['id_nombre']."','".$_REQUEST['id_apellido']."','".$_REQUEST['id_rut']."','".$_REQUEST['id_sexo']."','".$_REQUEST['id_edad']."',".$_REQUEST['id_tiempo'].",'".$_REQUEST['id_team']."','".$_REQUEST['id_fono']."','".$_REQUEST['id_correo']."','".$_REQUEST['id_ciudad']."','".$_REQUEST['id_categoria']."')";


// inicio del mensaje

$mensaje = '<html>'.
  '<head><title>Conce Terror 2017</title></head>'.
  '<body><h1>Te damos la Bienvenida a ConceTerror 2017 </h1> '.
  '<br><h2>Paga tu inscripción efectuando un deposito a:</h2>'.
  ' <table> <tr><td><strong>Cuenta Vista</td> <td> n° 7020900835 </td></tr>'.
  ' <tr> <td>Nombre</td><td>Ivo Tapia Araneda</td> </tr>'.
  ' <tr><td>Rut</td><td>17538891-5</td></tr>  '.
  ' <tr><td>mail</td><td> ivotapiaa@gmail.com</td></tr> '.
  ' <tr><td>Monto</td><td> $7.000</td></tr> '.
  ' <tr><td>Banco Santander</td></tr>  </table> '.
  '<br><h2>Envianos un correo a conceterror@gmail.com con tus datos y el comprobante de pago<br> y estara todo listo para tu estadia en Conceterror 2017.<br>'.
  'Realiza el pago de tu inscripción antes y facilita el trabajo para los chicos de Teragon.</h2><br>'.
  "1.1.- categorías en competencia
.- Principiante. Se define principiante a todo deportista (hombre o mujer) que lleve a lo más 2 años practicando la disciplina de patinaje agresivo o que dentro de su repertorio tenga un nivel de trucos básicos desde el nivel del piso y giros aéreos inferiores a 360º. Se entenderá por trucos básicos a deslizamientos a una altura máxima de 60 cm. 
.- Amateur. Se define amateur a todo deportista (hombre o mujer) que su nivel de trucos sea superior a la definición de principiante, pero su nivel de repertorio de trucos es intermedio. Se define amateur a deslizamientos en pasamanos en bajadas que incluyen 'true spin básicos, cambios en barandas planas y saltos inferiores a las 720 grados. Para los amateurs será obligación participar en todos los spots del campeonato. En el caso de no hacerlo, será eliminado del campeonato.
.- Profesional. Se define profesional a todo competidor (hombre o mujer) que su repertorio de trucos de deslizamientos y saltos es equivalente al nivel de dificultad más alto que se tenga conocimiento en la actual escena deportiva. Gran parte de estos competidores son auspiciados por marcas especializadas. Sin embargo esta condición no tiene diferencias en la calificación. 


***Para los Profesionales será obligación participar en todos los spots del campeonato. En el caso de no hacerlo, será eliminado del campeonato.*** 


1.2.- días de competencia
.- La competencia se desarrollará dentro de 2 días, siendo el primero destinado al desempeño de los patinadores en localidades urbanas emplazadas en la calle y el segundo destinado en su integridad al desempeño de éstos en dependencias del Skatepark. Para el año 2017 se han elegido como los días de la competencia el Viernes 18 de Febrero y Sábado 19 de Febrero. 
Finalmente, al terminar el segundo día, se llevará a cabo una premiación en donde se destacan los primeros tres lugares de cada categoría, un premio al esfuerzo y un premio al mejor truco de la jornada. Premiación que es llevada a cabo según el puntaje establecido en la cartilla de evaluación que 3 jueces imparciales, elegidos por la directiva del club deportivo, asignarán a cada patinador según criterios objetivos predeterminados.


1.3.- modo de competición


Campeonato Street (Spots Callejeros). 
1.- Este campeonato será dividido en damas y varones. Existiendo tres subdivisiones de categoría (principiante- amateur- avanzado) por cada género. 
2.- Al momento de arribar a cada spot, se darán 10 minutos libres de patinaje a cada categoría. 
3.- En cada Spot se tendrá un tiempo aproximado de 5 minutos para que los competidores puedan mostrar toda su habilidad. 
4. Será obligación que cada competidor realice trucos en todos los spots. En el caso de no presentarse en uno de éstos, será descalificado por el jurado, salvo por el tercer spot de Street, el cual será obligatorio solo para la categoría pro, sin embargo los participantes de las demás categorías podrán participar si lo estiman conveniente y asi sumar puntos adicionales a la puntuación general
5. Cada spot tendrá un valor de 25% lo que le otorgara al dia de Street un 75% del total de puntos del campeonato 



Campeonato Skatepark (Skatepark Parque Ecuador). 
1.- El orden de la competición en el skatepark será Principiante, Amateur y Profesional, por cada género.
2.- Cada categoría estará compuesta por grupos de máximo 5 participantes. 
3.- Al comenzar cada categoría y grupo, se dará 2 minutos de calentamiento. 
4.- Cada grupo tendrá 4 minutos de competición que será evaluada por los jueces. Los competidores se organizarán por turnos de 40 segundos como máximo para hacer una línea de trucos o hasta que falle uno de éstos, de tal manera de disminuir el riesgo de choque entre competidores. El locutor del evento o un jurado irá anunciando el turno de cada competidor. 
5.- La competencia de skatepark tendra un valor del 25% del total de los puntos del campeonato, lo que sumado a los puntos del dia de Street darán un total del 100%.".
  '</body>'.
  '</html>';





echo " <form name='form_login' method='post' action='index' role='form'  class='form-horizontal' style='margin-top: 10%; margin-left: 10%;''>
   <div style='margin-top: 10% margin-left: 85px;'>
    
          <h1>Hola: " .$_REQUEST['id_nombre'] ." ".$_REQUEST['id_apellido']." </h1> <br> 
          <h2>Te enviamos un Correo a ".$_REQUEST['id_correo']." con los pasos <br> para dar termino al proceso de Inscripción para el Mejor Campeonato del Universo.<h2>

                
      </div>
       <button id='submit' name='submit' class='btn btn-default' style='margin-left: 40%; margin-top: 10px;'>Volver</button>
      <form>

      ";




  $mail = "Felicidades ".$_REQUEST['id_nombre']. " ".$_REQUEST['id_apellido']." Estas inscrito en el Conce Terror 2017.<br><br>
  1.1.- categorías en competencia
.- Principiante. Se define principiante a todo deportista (hombre o mujer) que lleve a lo más 2 años practicando la disciplina de patinaje agresivo o que dentro de su repertorio tenga un nivel de trucos básicos desde el nivel del piso y giros aéreos inferiores a 360º. Se entenderá por trucos básicos a deslizamientos a una altura máxima de 60 cm. 
.- Amateur. Se define amateur a todo deportista (hombre o mujer) que su nivel de trucos sea superior a la definición de principiante, pero su nivel de repertorio de trucos es intermedio. Se define amateur a deslizamientos en pasamanos en bajadas que incluyen 'true spin básicos, cambios en barandas planas y saltos inferiores a las 720 grados. Para los amateurs será obligación participar en todos los spots del campeonato. En el caso de no hacerlo, será eliminado del campeonato.
.- Profesional. Se define profesional a todo competidor (hombre o mujer) que su repertorio de trucos de deslizamientos y saltos es equivalente al nivel de dificultad más alto que se tenga conocimiento en la actual escena deportiva. Gran parte de estos competidores son auspiciados por marcas especializadas. Sin embargo esta condición no tiene diferencias en la calificación. 


***Para los Profesionales será obligación participar en todos los spots del campeonato. En el caso de no hacerlo, será eliminado del campeonato.*** 


1.2.- días de competencia
.- La competencia se desarrollará dentro de 2 días, siendo el primero destinado al desempeño de los patinadores en localidades urbanas emplazadas en la calle y el segundo destinado en su integridad al desempeño de éstos en dependencias del Skatepark. Para el año 2017 se han elegido como los días de la competencia el Viernes 18 de Febrero y Sábado 19 de Febrero. 
Finalmente, al terminar el segundo día, se llevará a cabo una premiación en donde se destacan los primeros tres lugares de cada categoría, un premio al esfuerzo y un premio al mejor truco de la jornada. Premiación que es llevada a cabo según el puntaje establecido en la cartilla de evaluación que 3 jueces imparciales, elegidos por la directiva del club deportivo, asignarán a cada patinador según criterios objetivos predeterminados.


1.3.- modo de competición


Campeonato Street (Spots Callejeros). 
1.- Este campeonato será dividido en damas y varones. Existiendo tres subdivisiones de categoría (principiante- amateur- avanzado) por cada género. 
2.- Al momento de arribar a cada spot, se darán 10 minutos libres de patinaje a cada categoría. 
3.- En cada Spot se tendrá un tiempo aproximado de 5 minutos para que los competidores puedan mostrar toda su habilidad. 
4. Será obligación que cada competidor realice trucos en todos los spots. En el caso de no presentarse en uno de éstos, será descalificado por el jurado, salvo por el tercer spot de Street, el cual será obligatorio solo para la categoría pro, sin embargo los participantes de las demás categorías podrán participar si lo estiman conveniente y asi sumar puntos adicionales a la puntuación general
5. Cada spot tendrá un valor de 25% lo que le otorgara al dia de Street un 75% del total de puntos del campeonato 



Campeonato Skatepark (Skatepark Parque Ecuador). 
1.- El orden de la competición en el skatepark será Principiante, Amateur y Profesional, por cada género.
2.- Cada categoría estará compuesta por grupos de máximo 5 participantes. 
3.- Al comenzar cada categoría y grupo, se dará 2 minutos de calentamiento. 
4.- Cada grupo tendrá 4 minutos de competición que será evaluada por los jueces. Los competidores se organizarán por turnos de 40 segundos como máximo para hacer una línea de trucos o hasta que falle uno de éstos, de tal manera de disminuir el riesgo de choque entre competidores. El locutor del evento o un jurado irá anunciando el turno de cada competidor. 
5.- La competencia de skatepark tendra un valor del 25% del total de los puntos del campeonato, lo que sumado a los puntos del dia de Street darán un total del 100%.";


//Fin del Mensaje


//Titulo
$titulo = "CONCE TERROR 2017";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Soporte@teragon.cl ".$_REQUEST['id_correo']."\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($_REQUEST['id_correo'],$titulo,$mensaje,$headers);
if($bool){
   sleep(5);
header('Location: index.html'); 
}else{
    echo "Error!!!!";
}


}




} 



?>

<br>

<?
 ##echo "nombre ".$_REQUEST['id_nombre']." Apellido ".$_REQUEST['id_apellido']." Rut:".$_REQUEST['id_rut']."  Sexo: ".$_REQUEST['id_sexo']."  Edad: ".$_REQUEST['id_edad']."  Años Patinando: ".$_REQUEST['id_tiempo']."  Team: ".$_REQUEST['id_team']."  Fono: ".$_REQUEST['id_fono']." Correo: ".$_REQUEST['id_correo']." Ciudad: ".$_REQUEST['id_ciudad']." Categoria: ".$_REQUEST['id_categoria']  ." Fin" ;

} 
?>

    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>