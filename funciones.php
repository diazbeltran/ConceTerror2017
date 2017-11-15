<?php





function lista_categoria($categoria){

include('connect.php');



switch ($categoria) {
  

    case "junior":
  $consulta = "SELECT * FROM FORMULARIO F where F.categoria ='junior'";
        break;
  

    case "novato":
  $consulta = "SELECT * FROM FORMULARIO F where F.categoria ='novato'";
        break;
  

    case "intermedio":
  $consulta = "SELECT * FROM FORMULARIO F where F.categoria ='intermedio'";

  

    case "pro":
  $consulta = "SELECT * FROM FORMULARIO F where F.categoria ='profesional'";


    case "todos":
        
  $consulta = "SELECT * FROM FORMULARIO where 1";
        
        break;
}


$result = mysql_query($consulta);  





echo "<table class='table table-hover'>";
echo "<tbody>";
  
 echo " <th>Nombre</th>";
// echo " <th>Team</th>";
// echo " <th>Ciudad</th>";
 echo "<th>Categoria</th>";
// echo " <th>Estado</th>";
  
  


while ($row = mysql_fetch_row($result)){   
    echo "<tr  >";  
    echo "<td> ".$row[1] ." ".$row[2] ."</td>";
   // echo "<td> ".$row[7]  ."</td>";
    //echo "<td> ".$row[10]  ."</td>";
    echo "<td> ".$row[11]  ."</td>";  
  
/*/if($row[12]=='1'){

    echo "<td class='active'> <img src='./images/61668.png'  width='30px' height='30px' /> </td>";    
  }
else{
    echo "<td> </td>";    
} 
  
    echo "<td> editar </td>";/*/
    echo "</tr>"; 


}


echo "</tbody>";
echo "</table>";


}

function select_categorias($estado){




echo "<select id='id_categoria' name='id_categoria' class='form-control'>";
echo "<option value='junior'>Junior</option>";
      echo "<option value='novato'>Novato</option>";
     echo "<option value='Intermedio'>Intermedio</option>";
      echo "<option value='profesional'>Pro</option>";
      
    echo "</select>";


/*/
echo "

<div class='form-group'>
  <label class='col-md-4 control-label' for='id_categoria'>Categoria</label>
  <div class='col-md-6'>
    <select id='id_categoria' name='id_categoria' class='form-control'>
      <option value='junior'>Junior</option>
      <option value='novato'>Novato</option>
      <option value='Intermedio'>Intermedio</option>
      <option value='profesional'>Pro</option>
      
    </select>
  </div>
</div>

";  /*/



}

?>


 