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

body{
 background: url('./images/ct2016.jpg'); 
  background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center -170px;
  
}
#main-content {
  background: white;
  width: 90%;
  max-width: 800px;
  margin: 120px auto;
  box-shadow: 0 0 10px rgba(0,0,0,.1);
}
 
  #main-content header,
  #main-content .content {
    padding: 40px;
  }
#main-footer {
  background: #333;
  color: white;
  text-align: center;
  padding: 20px;
  margin-top: 40px;
}
  #main-footer p {
    margin: 0;
  }
  
  #main-footer a {
    color: white;
  }

#main-header {
  background: #333;
  color: white;
  height: 80px;
} 
  #main-header a {
    color: white;
  }
 #main-header {
  background: #333;
  color: white;
  height: 120px;
  
  width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
  left: 0; /* Posicionamos la cabecera al lado izquierdo */
  top: 0; /* Posicionamos la cabecera pegada arriba */
  position: fixed; /* Hacemos que la cabecera tenga una posición fija */
}
/*
 * Logo
 */
#logo-header {
  float: left;
  padding: 15px 0 0 20px;
  text-decoration: none;
}
  #logo-header:hover {
    color: #0b76a6;
  }
  
  #logo-header .site-name {
    display: block;
    font-weight: 700;
    font-size: 1.2em;
  }
  
  #logo-header .site-desc {
    display: block;
    font-weight: 300;
    font-size: 0.8em;
    color: #999;
  }
  
 
/*
 * Navegación
 */
nav {
  float: right;
}
  nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
    padding-right: 20px;
  }
  
    nav ul li {
      display: inline-block;
      line-height: 80px;
    }
      
      nav ul li a {
        display: block;
        padding: 0 10px;
        text-decoration: none;
      }
      
        nav ul li a:hover {
          background: #0b76a6;
        }

</style>


    </head>
    <body >

  <?php     //start php tag
  //include connect.php page for database connection
  
  Include('connect.php');
//tomamos los datos del archivo conexion.php  
 

//se envia la consultas 
$result = mysql_query("SELECT * FROM FORMULARIO");  

?>


  <header id="main-header">
    
  
 <div class="page-header">
  <center><h1>Teragon Team <small> Conce Terror 2017</small></h1></center>
</div>
 
  </header><!-- / #main-header -->

   <br>



  <section id="main-content">
  
    <article>
      <header>
        <h1>Listado de Inscritos</h1>
      </header>
      
   <?php     //start php tag
  //include connect.php page for database connection
  
  Include('connect.php');
//tomamos los datos del archivo conexion.php  

//se envia la consultas 
$result = mysql_query("SELECT * FROM FORMULARIO");  


?>



      
      <div class="content">

        <table class="table table-hover">
<tbody>
  <!-- Aplicadas en las filas -->
  <th>Nombre</th>
  <th>Team</th>
  <th>Ciudad</th>
  <th>Categoria</th>
  <th>Estado</th>
  <!-- Aplicadas en las celdas (<td> o <th>) -->
  
<?php

while ($row = mysql_fetch_row($result)){   
    echo "<tr  >";  
    echo "<td> ".$row[1] ." ".$row[2] ."</td>";
    echo "<td> ".$row[7]  ."</td>";
    echo "<td> ".$row[10]  ."</td>";
    echo "<td> ".$row[11]  ."</td>";  
  
if($row[12]=='1'){

    echo "<td class='active'> <img src='./images/61668.png'  width='30px' height='30px' /> </td>";    
  }
else{
    echo "<td> </td>";    
} 

    echo "</tr>"; 
}

?>


</tbody>
</table>
 
      </div>
      
    </article> <!-- /article -->
  
  </section> <!-- / #main-content -->
   


    <footer id="main-footer">
  <p STYLE="font-family: Arial; font-size: 14px; ">Teragon team - Motivando el Rollerblading desde el 2002<br>Para dudas o consultas, env&iacute;anos un correo a conceterror@gmail.com</p>
  </footer> <!-- / #main-footer -->





      <!-- Librería jQuery requerida por los plugins de JavaScript -->
      <script src="http://code.jquery.com/jquery.js"></script>
   
      <!-- Todos los plugins JavaScript de Bootstrap (también puedes
           incluir archivos JavaScript individuales de los únicos
           plugins que utilices) -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
  </html>