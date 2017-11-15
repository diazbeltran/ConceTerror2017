  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Teragon Team</title>
      <link rel="icon" type="image/jpg" href="images/calavera.jpg" />
      <!-- CSS de Bootstrap -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
   
      <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>
div.relative {
    position: relative;
    left: 30px;
    font-color
    border: 0px solid #73AD21;
}
</style>

<style>

body{
  background: url('./images/inscripcionct20172.jpg'); 
  background-repeat: no-repeat; 
  background-attachment: fixed; 
  background-position: right 90px;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 700px;
}

#customers td, #customers th {
    border: 1px solid rgba(255,255,255,0.5);;
    padding: 8px;
    text-transform: capitalize;
}

#customers tr:nth-child(even){background-color:rgba(255,255,255,0.2);}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #055c56;
    color: white;
}

</style>


    </head>
    <body  >

<div  class="relative" STYLE="font-family: Arial; font-size: 14px; color: #055c56">

  <?php     //start php tag
  //include connect.php page for database connection
  
  Include('connect.php');
//tomamos los datos del archivo conexion.php  

setlocale(LC_TIME,"es_ES");
    
echo ("  <h1>Listado de Inscritos</h1>");
echo strftime("%e/%m/%Y a las %R");
echo "</br></br>";  

//se envia la consultas 
$result = mysql_query("SELECT * FROM FORMULARIO");  
//se despliega el resultado 
 
echo "<table width='700px' margin='10px' padding='10px' id='customers'>";  
echo "<tr height='40px' margin='10px' padding='10px' STYLE='font-size:22px;'>";  
echo "<th><center>Nombre</center></th>";  
echo "<th ><center>Team</center></th>";  
echo "<th  width='100px' ><center>Ciudad</center></th>";
echo "<th  width='100px'><center>Nivel</center></th>";
echo "<th width='100px'><center>Pagado</center></th>";
echo "</tr>";


while ($row = mysql_fetch_row($result)){   
    echo "<tr width='400px' >";  
    echo "<td height='30px' margin='10px' padding='10px'> ".$row[1] ." ".$row[2] ."</td>";
    echo "<td margin='10px' padding='10px'> ".$row[7]  ."</td>";
    echo "<td height='30px' margin='10px' padding='10px'> ".$row[10]  ."</td>";
    echo "<td height='30px' margin='10px' padding='10px'> ".$row[11]  ."</td>";  
	
if($row[12]=='1'){

    echo "<td height='30px' margin='10px' padding='10px'><center> <img src='./images/61668.png'  width='30px' height='30px' /> </center></td>";    
	}
else{
    echo "<td height='30px' margin='10px' padding='10px'> </td>";    
}	

    echo "</tr>";  
}  
echo "</table>";  

 
  ?>

   </div>
<br><br><br>
<center><p STYLE="font-family: Arial; font-size: 14px; color: #055c56">Teragon team - Motivando el Rollerblading desde el 2002<br>Para dudas o consultas, env&iacute;anos un correo a conceterror@gmail.com</p></center><br><br>



      <!-- Librería jQuery requerida por los plugins de JavaScript -->
      <script src="http://code.jquery.com/jquery.js"></script>
   
      <!-- Todos los plugins JavaScript de Bootstrap (también puedes
           incluir archivos JavaScript individuales de los únicos
           plugins que utilices) -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
  </html>